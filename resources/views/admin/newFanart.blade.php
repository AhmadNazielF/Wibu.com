@extends('layouts.main')

@section('container')
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <label for="image" class="col-sm-2 col-form-label">Image</label>
        <div class="col-sm-10">
            <input name="image" type="file" class="form-control-file" id="image">
            <small class="form-text text-muted">Upload an image for the place.</small>
        </div>
        <div class="col-sm-10">
            <input name="karakter" list="karakter" type="select" class="form-control" />
            <datalist id="karakter">
                @foreach ($karakter as $value)
                    <option value="{{ $value->nama }}"></option>
                @endforeach
            </datalist>
        </div>
        <button type="submit" class="btn btn-primary float-right" style="margin-right: 5px;">Daftar</button>
    @endsection
