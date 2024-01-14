@extends('layouts.main')

@section('title', 'Detail Program')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Detail Program</h1>
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
                    <strong>Detail Program</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ route('programs.index') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <div class="row">
                    <div class="col-md-8 offset-md-2">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th style="width: 20%">Edulevel</th>
                                    <td>{{ $program->edulevel->name }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 20%">Program</th>
                                    <td>{{ $program->name }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 20%">Student Price</th>
                                    <td>{{ $program->student_price }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 20%">Student Max</th>
                                    <td>{{ $program->student_max }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 20%">Info</th>
                                    <td>{{ $program->info }}</td>
                                </tr>
                                <tr>
                                    <th style="width: 20%">Created at</th>
                                    <td>{{ $program->created_at }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection