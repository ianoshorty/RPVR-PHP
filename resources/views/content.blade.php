@extends('app')


@section('title')
    RPVR - Put.io PVR
@endsection

@section('content')

    <div class="container">

        <h1>Welcome to RPVR!</h1>

        <div class="row">

            <div class="col-sm-12">

                <form method="post" class="form-inline">
                    <div class="form-group">
                        <label for="url">Download url</label>
                        <input type="text" class="form-control" name="url" id="url" placeholder="http://www.example.com/test.doc">
                        <input type="text" class="form-control" name="filename" id="filename" placeholder="test.doc">
                    </div>

                    <button type="submit" class="btn btn-primary">Download</button>
                </form>

            </div>

        </div>

        <hr>

        <div class="row">

            <div class="col-sm-12">

                <h2>Downloads</h2>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th class="col-sm-1">#</th>
                        <th class="col-sm-3">Filename</th>
                        <th class="col-sm-4">Progress</th>
                        <th class="col-sm-1">Percentage complete</th>
                        <th class="col-sm-1">Speed</th>
                        <th class="col-sm-1">TTL</th>
                        <th class="col-sm-1">Pause Download</th>
                        <th class="col-sm-1">Cancel Download</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr class="active">
                        <td>1</td>
                        <td>fileName</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                    <span class="sr-only">70% Complete (success)</span>
                                </div>
                            </div>
                        </td>
                        <td>percentage%</td>
                        <td>speed</td>
                        <td>ttl</td>
                        <td><button id="pause" class="btn btn-info">Pause</button></td>
                        <td><button id="cancel" class="btn btn-danger">Cancel</button></td>
                    </tr>
                    <tr class="info">
                        <td>2</td>
                        <td>fileName</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                    <span class="sr-only">40% Complete (success)</span>
                                </div>
                            </div>
                        </td>
                        <td>percentage%</td>
                        <td>speed</td>
                        <td>ttl</td>
                        <td><button id="resume" class="btn btn-success">Resume</button></td>
                        <td><button id="cancel" class="btn btn-danger">Cancel</button></td>
                    </tr>
                    <tr class="success">
                        <td>3</td>
                        <td>fileName</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%">
                                    <span class="sr-only">100% Complete (success)</span>
                                </div>
                            </div>
                        </td>
                        <td>percentage%</td>
                        <td>speed</td>
                        <td>ttl</td>
                        <td><span class="alert-success"><strong>Complete</strong></span></td>
                        <td><button id="cancel" class="btn btn-success">Remove</button></td>
                    </tr>
                    <tr class="danger">
                        <td>4</td>
                        <td>fileName</td>
                        <td>
                            <div class="progress">
                                <div class="progress-bar progress-bar-danger progress-bar-striped" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
                                    <span class="sr-only">80% Complete (danger)</span>
                                </div>
                            </div>
                        </td>
                        <td>percentage%</td>
                        <td>speed</td>
                        <td>ttl</td>
                        <td><span class="alert-danger"><strong>Failed</strong></span></td>
                        <td><button id="cancel" class="btn btn-danger">Retry</button></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">

            <div class="col-sm-12">
                <h2>Put IO Files</h2>

                <table class="table table-striped">
                    <thead>
                    <tr>
                        <th>Icon</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Size</th>
                        <th>Download</th>
                        <th>Delete</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr>
                        <td><img src="#icon"></td>
                        <td><a href="#">name</a></td>
                        <td>content_type</td>
                        <td>size</td>
                        <td><button id="download" class="btn btn-success">Download</button></td>
                        <td><button id="delete" class="btn btn-danger">Delete</button></td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>

    </div>

@endsection