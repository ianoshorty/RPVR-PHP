<?php namespace App\Handlers\Events;

use App\Events\DownloadDidUpdate;

use Illuminate\Contracts\Redis\Database as RedisDatabase;

class UpdateUserInterface {

    /**
     * The Redis instance.
     *
     * @var \Illuminate\Contracts\Redis\Database
     */
    protected $redis;
    /**
     * The Redis connection to use for broadcasting.
     *
     * @var string
     */
    protected $connection;

	/**
	 * Create the event handler.
	 *
	 * @return void
	 */
	public function __construct(RedisDatabase $redis, $connection = null)
	{
		//
        $this->redis = $redis;
        $this->connection = $connection;
	}

	/**
	 * Handle the event.
	 *
	 * @param  DownloadDidUpdate  $event
	 * @return void
	 */
	public function handle(DownloadDidUpdate $event)
	{
		//

        $channels = ['download-events'];

        $connection = $this->redis->connection($this->connection);
        $payload = json_encode(['event' => 'DownloadDidUpdate', 'data' => ['status'=>$event->status]]);
        foreach ($channels as $channel) {
            $connection->publish($channel, $payload);
        }
	}

}
