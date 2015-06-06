<?php namespace App\Http\Controllers;

use App\Commands\AxelDownloadCommand;
use App\Http\Requests\DownloadRequest;
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
    public function download(DownloadRequest $request) {

        $download = $request->all();

        /*
        $axel = new AxelDownload();
        $axel->start($download['url'], $download['filename'], '/var/www/rpvrphp/downloads/', function(AxelDownload $axel, $status, $complete, $error) {

            if (empty($error)) $axel->clearCompleted();
            else dd($axel);
        });
        */

        $axel = (new AxelDownload())->addDownloadParameters([
            'address'       => $download['url'],
            'filename'      => $download['filename'],
            'download_path' => '/var/www/rpvrphp/downloads/',
            'callback'      => function(AxelDownload $axel, $status, $complete, $error) {

                if ($status && empty($error)) $axel->clearCompleted();
                else dd($axel);
            }
        ]);

        $this->dispatch(new AxelDownloadCommand($axel));

        return redirect('/');
    }

}
