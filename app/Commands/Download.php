<?php namespace App\Commands;

use App\Commands\Command;

use App\Events\DownloadDidStart;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\Queue;
use Illuminate\Foundation\Bus\DispatchesCommands;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;

use Axel\AxelDownload;

class Download extends Command implements SelfHandling, ShouldBeQueued {

	use InteractsWithQueue, SerializesModels, DispatchesCommands;

    protected $axel;

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct(AxelDownload $axel)
	{
		$this->axel = $axel;
	}

	/**
	 * Execute the command.
	 *
	 * @return void
	 */
	public function handle(Queue $queue)
	{
		//
        $this->axel->startAsync();

        event(new DownloadDidStart($this->axel));

        $queue->later(Carbon::now()->addSeconds(10), new DownloadUpdate($this->axel));
	}
}
