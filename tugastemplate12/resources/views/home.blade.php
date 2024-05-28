@extends('layouts.master')
@section('title')
    Halaman Utama

@endsection
@section('content')



    <h1>SanberBook</h1>
    <h2>Social Media Developer Santai Berkualitas</h2>

    <p>Belajar dan Berbagi agar hidup ini semakin santai dan berkualitas</p>

    <h3>Benefit Join di SanberBook</h3>
            <ul>
                <li>mendapatkan motivasi dari sesama developer</li>
                <li>Sharing konowledge dari para mastah Sanber</li>
                <li>Dibuat oleh calon web developer terbaik</li>
              </ul>  

    <h3> Cara Bergabung ke SanberBook </h3>

    <ol>
        <li>Mengunjungi website ini</li>
        <li>Mendaftar <a href="{{ url('/register') }}">di Form Sign Up</a></li>
        <li>Selesai!</li>
      </ol> 
</body>
</html>
@endsection