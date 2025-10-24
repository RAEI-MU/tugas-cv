{{-- Halaman ini mewarisi layout utama --}}
@extends('layouts.main')

{{-- Ini adalah bagian konten utama (kolom kanan) --}}
@section('content')

    <section id="pendidikan" class="mb-5">
        <h2 class="section-title">Riwayat Pendidikan</h2>
        
        @foreach($pendidikan as $edu)
            <div class="card card-custom">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title fw-bold">{{ $edu->institusi }}</h5>
                        <span class="text-muted fw-bold">{{ $edu->tahun_mulai }} - {{ $edu->tahun_selesai }}</span>
                    </div>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $edu->jurusan }}</h6>
                </div>
            </div>
        @endforeach
    </section>

    <section id="pekerjaan" class="mb-5">
        <h2 class="section-title">Riwayat Pekerjaan</h2>

        @foreach($pekerjaan as $job)
            <div class="card card-custom">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <h5 class="card-title fw-bold">{{ $job->jabatan }}</h5>
                        <span class="badge text-bg-secondary align-self-start">{{ $job->tahun_mulai }} - {{ $job->tahun_selesai }}</span>
                    </div>
                    <h6 class="card-subtitle mb-2 text-muted">{{ $job->perusahaan }}</h6>
                    <p class="card-text">{{ $job->deskripsi }}</p>
                </div>
            </div>
        @endforeach
    </section>

    <section id="skill">
        <h2 class="section-title">Keahlian (Skills)</h2>
        
        <div class="d-flex flex-wrap">
            {{-- Kita menggunakan @component di sini --}}
            @foreach($skills as $skill)
                @component('components.skill-card')
                    {{ $skill->nama_skill }}
                @endcomponent
            @endforeach
        </div>
    </section>

@endsection