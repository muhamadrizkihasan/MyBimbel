@extends('main')

@section('title')
    Edulevel
@endsection

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Edulevel</h1>
                </div>
            </div>
        </div>
        <div class="col-sm-8">
            <div class="page-header float-right">
                <div class="page-title">
                    <ol class="breadcrumb text-right">
                        <li class="active">Data Edulevel</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Jenjang</strong>
                </div>
                <div class="pull-right">
                    <a href="" class="btn btn-primary btn-sm">
                        <i class="fa fa-plus"></i> Add
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Name</th>
                            <th>Deskription</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($edulevels as $edulevel)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $edulevel->name }}</td>
                                <td>{{ $edulevel->desc }}</td>
                                <td>
                                    <div class="text-center">
                                        <a href="" class="btn btn-success btn-sm">
                                            <i class="fa fa-pencil"></i> Edit
                                        </a>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection