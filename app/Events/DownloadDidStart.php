<?php namespace App\Events;

use App\Events\Event;

use Axel\AxelDownload;
use Illuminate\Queue\SerializesModels;

class DownloadDidStart extends Event {

	use SerializesModels;

    protected $download;

    /**
     * Create a new event instance.
     *
     * @param AxelDownload $download
     */
	public function __construct(AxelDownload $download)
	{
		$this->download = $download;
	}

}
