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
                        <th>#</th>
                        <th>Filename</th>
                        <th>Percentage complete</th>
                        <th>Speed</th>
                        <th>TTL</th>
                        <th>Pause Download</th>
                        <th>Cancel Download</th>
                    </tr>
                    </thead>
                    <tbody>

                    <tr class="active">
                        <td>1</td>
                        <td>fileName</td>
                        <td>percentage%</td>
                        <td>speed</td>
                        <td>ttl</td>
                        <td><button id="pause" class="btn btn-info">Pause</button></td>
                        <td><button id="cancel" class="btn btn-danger">Cancel</button></td>
                    </tr>
                    <tr class="info">
                        <td>1</td>
                        <td>fileName</td>
                        <td>percentage%</td>
                        <td>speed</td>
                        <td>ttl</td>
                        <td><button id="resume" class="btn btn-success">Resume</button></td>
                        <td><button id="cancel" class="btn btn-danger">Cancel</button></td>
                    </tr>
                    <tr class="success">
                        <td>2</td>
                        <td>fileName</td>
                        <td>percentage%</td>
                        <td>speed</td>
                        <td>ttl</td>
                        <td><span class="alert-success"><strong>Complete</strong></span></td>
                        <td><button id="cancel" class="btn btn-success">Remove</button></td>
                    </tr>
                    <tr class="danger">
                        <td>3</td>
                        <td>fileName</td>
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