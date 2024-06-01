@extends('layouts.master')
@section('title')
Halaman detail Cast
@endsection

@section('content')

<hi>{{$cast->nama}}</hi>
<p>{{$cast->umur}}</p>
<p>{{$cast->Bio}}</p>

<a href="/cast" class="btn btn-secondary btn-sm">kembali</a>

@endsection