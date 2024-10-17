{{-- resources/views/eventdosens/show.blade.php --}}

@extends('admin.home')

@section('content')
<style>
    .card {
        margin: 20px;
        padding: 20px;
    }
</style>

<div class="card">
    <div class="card-header">
        <h2 class="font-weight-bold">Detail Event Dosen</h2>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <div class="col-md-4">
                <strong>Kode Dosen:</strong>
            </div>
            <div class="col-md-8">
                {{ $eventdosen->kode_dosen }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <strong>Nama Dosen:</strong>
            </div>
            <div class="col-md-8">
                {{ $eventdosen->nama_dosen }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <strong>Topik Pelatihan:</strong>
            </div>
            <div class="col-md-8">
                {{ $eventdosen->training_topic }}
            </div>
        </div>
        <div class="row mb-3">
            <div class="col-md-4">
                <strong>Nomor HP:</strong>
            </div>
            <div class="col-md-8">
                {{ $eventdosen->no_hp }}
            </div>
        </div>
        <!-- Tambahkan detail lain yang ingin Anda tampilkan -->
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="{{ route('eventdosens.index') }}" class="btn btn-primary">Kembali ke Daftar Event Dosen</a>
            </div>
        </div>
    </div>
</div>
@endsection
