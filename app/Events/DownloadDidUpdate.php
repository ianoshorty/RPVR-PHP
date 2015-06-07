<?php namespace App\Events;

use App\Events\Event;

use Axel\AxelDownload;
use Illuminate\Queue\SerializesModels;

class DownloadDidUpdate extends Event {

	use SerializesModels;

    public $download;

    public $status;

	/**
	 * Create a new event instance.
	 *
	 * @return void
	 */
	public function __construct(AxelDownload $download, $status = array())
    {
        $this->download = $download;
        $this->status = $status;
    }

}
