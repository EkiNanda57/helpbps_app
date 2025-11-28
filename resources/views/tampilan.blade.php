@extends('layout.app')

@section('title', 'Butuh Bantuan')

@section('content')

@php
    $buttons = [
        ["nama" => "Survei Kebutuhan Data", "url" => "https://skd.web.bps.go.id/SKD2025/web/entri/responden/blok1?token=o2GH3mCii8atnScv7fspJ2jtsVpF0_Q80eVfnMuvSeeOzFy92PrsFX7eXRVZi3t0JRi5bN_rjBAdVjQMpex_lDx_gkhNXP0yrSVW", "warna" => "blue"],
        ["nama" => "Publikasi Digital", "url" => "https://jemberkab.bps.go.id/id", "warna" => "orange"],
        ["nama" => "HaloPST!", "url" => "https://halopst.web.bps.go.id/", "warna" => "green"],
        ["nama" => "Arsip Publikasi", "url" => "https://publikasi.bpsjember.com/pengguna", "warna" => "yellow"],
    ];
@endphp

<div class="flex flex-col items-center justify-center px-6 py-10">

    <img src="/logo_bps.png"
         class="w-20 h-20 object-contain drop-shadow-md mb-6">

    <div class="backdrop-blur-xl bg-white/90 border border-white/50
                p-8 rounded-3xl shadow-2xl w-[480px] min-h-[400px]">

        <h1 class="text-3xl font-semibold text-slate-800 mb-8 text-center">
            Butuh Bantuan?
        </h1>

        <div class="grid grid-cols-1 gap-4">
            @foreach ($buttons as $btn)
                <a href="{{ $btn['url'] }}" target="_blank"
                   class="w-full p-4 rounded-2xl border bg-white/70 shadow-md
                   hover:shadow-xl hover:scale-[1.02] transition-all backdrop-blur-md
                   flex items-center justify-center text-{{ $btn['warna'] }}-700
                   font-semibold tracking-wide">
                    {{ $btn['nama'] }}
                </a>
            @endforeach
        </div>

    </div>

</div>

@endsection
