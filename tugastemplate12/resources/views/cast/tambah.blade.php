@extends('layouts.master')
@section('title')
Halaman Tambah Cast
@endsection
@section('content')

<form method="Post" action="/cast"> 
  {{-- validation--}}
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

 {{-- form input--}}
 @csrf
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" class="form-control" name="nama" id="nama">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" class="form-control" name="umur" id="umur">
        </div>
        <div class="form-group">
            <label for="Bio">Bio</label>
            <textarea class="form-control" name="Bio" id="Bio" rows="30"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection