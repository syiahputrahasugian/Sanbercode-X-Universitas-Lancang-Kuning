@extends('layouts.master')
@section('title')
Halaman Edit Cast
@endsection
@section('content')

<form method="POST" action="/cast/{{ $cast->id }}"> 
  {{-- validation --}}
  @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
  @endif

 {{-- form input --}}
 @csrf
 @method("put")
        <div class="form-group">
            <label for="nama">Nama</label>
            <input type="text" value="{{ $cast->nama }}" class="form-control" name="nama" id="nama">
        </div>
        <div class="form-group">
            <label for="umur">Umur</label>
            <input type="number" value="{{ $cast->umur }}" class="form-control" name="umur" id="umur">
        </div>
        <div class="form-group">
            <label for="Bio">Bio</label>
            <textarea class="form-control" name="Bio" id="Bio" rows="10">{{ $cast->Bio }}</textarea>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection
