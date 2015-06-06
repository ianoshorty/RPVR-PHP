<?php namespace App\Events;

use App\Events\Event;

use Axel\AxelDownload;
use Illuminate\Queue\SerializesModels;

class DownloadDidComplete extends Event {

	use SerializesModels;

    protected $axel;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct(AxelDownload $axel)
    {
        $this->axel = $axel;
    }

}
