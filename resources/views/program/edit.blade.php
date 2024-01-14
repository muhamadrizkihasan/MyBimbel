@extends('layouts.main')

@section('title', 'Edit Program')

@section('breadcrumbs')
    <div class="breadcrumbs">
        <div class="col-sm-4">
            <div class="page-header float-left">
                <div class="page-title">
                    <h1>Edit Program</h1>
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
                    <a href="{{ url('programs') }}" class="btn btn-secondary btn-sm">
                        <i class="fa fa-undo"></i> Back
                    </a>
                </div>
            </div>
            <div class="card-body">
                <form action="{{ route('programs.update', $program->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="name">Nama Program :</label>
                        <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name', $program->name) }}">
                        @error('name')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="edulevel_id">Jenjang :</label>
                        <select name="edulevel_id" id="edulevel_id" class="form-control @error('edulevel_id') is-invalid @enderror">
                            <option value="" hidden>-- Pilih --</option>
                            @foreach ($edulevels as $edulevel)
                                <option value="{{ $edulevel->id }}" {{ old('edulevel_id', $program->edulevel_id) == $edulevel->id ? 'selected' : null }}>{{ $edulevel->name }}</option>
                            @endforeach
                        </select>
                        @error('edulevel_id')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="student_price">Harga Member :</label>
                        <input type="number" name="student_price" id="student_price" class="form-control @error('student_price') is-invalid @enderror" value="{{ old('student_price', $program->student_price) }}">
                        @error('student_price')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="student_max">Member Maksimal :</label>
                        <input type="number" name="student_max" id="student_max" class="form-control @error('student_max') is-invalid @enderror" value="{{ old('student_max', $program->student_max) }}">
                        @error('student_max')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="info">Info :</label>
                        <input type="text" name="info" id="info" class="form-control @error('info') is-invalid @enderror" value="{{ old('info', $program->info) }}">
                        @error('info')
                            <div class="invalid-feedback">{{ $message }}</div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-success">Edit Data!</button>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection