<?php namespace App\Commands;

use App\Commands\Command;

use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Bus\SelfHandling;
use Illuminate\Contracts\Queue\ShouldBeQueued;

use Axel\AxelDownload;

class AxelDownloadCommand extends Command implements SelfHandling, ShouldBeQueued {

	use InteractsWithQueue, SerializesModels;

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
	public function handle()
	{
		//
        $this->axel->startAsync();
	}

}
