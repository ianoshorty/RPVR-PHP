<?php namespace App\Events;

use App\Events\Event;

use Axel\AxelDownload;
use Illuminate\Queue\SerializesModels;

class DownloadDidUpdate extends Event {

	use SerializesModels;

    protected $download;

    protected $status;

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
