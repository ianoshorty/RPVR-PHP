<?php namespace App\Http\Controllers;

use App\Commands\Download;
use App\Commands\DownloadUpdate;
use App\Http\Requests\DownloadRequest;
use Carbon\Carbon;
use Illuminate\Contracts\Queue\Queue;
use Illuminate\Support\Facades\Request;
use Axel\AxelDownload;

class DownloadController extends Controller {

	/*
	|--------------------------------------------------------------------------
	| Download Controller
	|--------------------------------------------------------------------------
	|
	| This controller renders the "download page" for the application
	|
	*/

	/**
	 * Create a new controller instance.
	 *
	 * @return void
	 */
	public function __construct() {
	}

	/**
	 * Show the application welcome screen to the user.
	 *
	 * @return Response
	 */
	public function index() {
		return view('content');
	}

    /**
     * Starts a static download
     *
     * @param DownloadRequest $request The validated download request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function download(DownloadRequest $request, Queue $queue) {

        $download = $request->all();

        $axel = (new AxelDownload())->addDownloadParameters([
            'address'       => $download['url'],
            'filename'      => $download['filename'],
            'download_path' => '/var/www/rpvrphp/downloads/',
            'callback'      => function($axel, $status, $complete, $error) {
                if ($complete && empty($error)) $axel->clearCompleted();
            }
        ]);

        $this->dispatch(new Download($axel));

        //return redirect('/');
    }
}
