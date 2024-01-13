@extends('layouts.main')

@section('title', 'Edulevel')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Data Edulevel</h1>
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
                    <strong>Tambah Jenjang</strong>
                </div>
                <div class="pull-right">
                    <a href="{{ url('edulevels') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('addProcess') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="name">Nama Jenjang :</label>
                        <input type="text" name="name" id="name" class="form-control" autofocus required>
                    </div>
                    <div class="form-group">
                        <label for="desc">Deskripsi :</label>
                        <input type="text" name="desc" id="desc" class="form-control" autofocus>
                    </div>
                    <button type="submit" class="btn btn-primary">Tambah Data!</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection