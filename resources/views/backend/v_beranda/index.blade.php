@extends('backend.v_layouts.app')
@section('content')
    <!-- contentAwal -->

    <h3> {{ $judul }} </h3>
    @if (Auth::check())
        <p>
            Selamat Datang, <b>{{ Auth::user()->nama }}</b> pada aplikasi Toko Online dengan hak akses yang anda miliki
            sebagai <b>
                @if (Auth::user()->role == 1)
                    Super Admin
                @elseif (Auth::user()->role == 0)
                    Admin
                @else
                    User
                @endif
            </b> ini adalah halaman utama dari aplikasi ini.
        </p>
    @else
        <p>Anda belum login.</p>
    @endif
    <!-- contentAkhir -->
@endsection
