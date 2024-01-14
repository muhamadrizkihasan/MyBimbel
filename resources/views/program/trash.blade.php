@extends('layouts.main')

@section('title', 'Program Terhapus')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Program Terhapus</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
<div class="content mt-3">
    <div class="animated fadeIn">
        @if (session('success'))
            <div class="alert alert-primary">{{ session('success') }}</div>
        @endif
        @if (session('updated'))
            <div class="alert alert-success">{{ session('updated') }}</div>
        @endif
        @if (session('deleted'))
            <div class="alert alert-danger">{{ session('deleted') }}</div>
        @endif
        <div class="card">
            <div class="card-header">
                <div class="pull-left">
                    <strong>Data Program Terhapus</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ route('delete') }}" class="btn btn-danger btn-sm">
                        <i class="fa fa-trash"></i> Delete All
                    </a>
                    <a href="{{ route('restore') }}" class="btn btn-success btn-sm">
                        <i class="fa fa-undo"></i> Restore All
                    </a>
                    <a href="{{ route('programs.index') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-chevron-left"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body table-responsive">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Program</th>
                            <th>Edulevel</th>
                            <th>Info</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if ($programs->count() > 0)
                            @foreach ($programs as $program)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $program->name }}</td>
                                    <td>{{ $program->edulevel->name }}</td>
                                    <td>{{ $program->info }}</td>
                                    <td>
                                        <div class="text-center">
                                            <a href="{{ route('restore', $program->id) }}" class="btn btn-success btn-sm">
                                                <i class="fa fa-undo"></i> Restore
                                            </a>
                                            <a href="{{ route('delete', $program->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus permanen?')">
                                                <i class="fa fa-close"></i> Delete Permanently
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="4" class="text-center text-primary">Data Kosong</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection