@extends('admin.home')

@section('content')
<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <h2 class="font-weight-bold">Detail Event Dosen</h2>
    </div>

    <div class="card-body">
        <h4 class="font-weight-bold">Kode Event Dosen:</h4>
        <p>{{ $eventdosen->kode_evndsn }}</p>

        <h4 class="font-weight-bold">Nama Event:</h4>
        <p>{{ $eventdosen->nama_event }}</p>

        <h4 class="font-weight-bold">Tanggal:</h4>
        <p>{{ \Carbon\Carbon::parse($eventdosen->tanggal)->format('d M Y') }}</p>

        <h4 class="font-weight-bold">Jam:</h4>
        <p>{{ \Carbon\Carbon::parse($eventdosen->jam)->format('H:i') }}</p>

        <h4 class="font-weight-bold">Harga:</h4>
        <p>{{ number_format($eventdosen->harga_dosen, 2, ',', '.') }} IDR</p>

        <h4 class="font-weight-bold">Kuota:</h4>
        <p>{{ $eventdosen->kuota }}</p>

        <h4 class="font-weight-bold">Benefits:</h4>
        <p>{{ implode(', ', $eventdosen->benefits) }}</p>

        <h4 class="font-weight-bold">Kategori:</h4>
        <p>{{ $eventdosen->kategori }}</p>

        <h4 class="font-weight-bold">Status:</h4>
        <p>{{ $eventdosen->status }}</p>

        <h4 class="font-weight-bold">Deskripsi:</h4>
        <p>{{ $eventdosen->description }}</p>

        @if($eventdosen->photo)
        <h4 class="font-weight-bold">Photo:</h4>
        <img src="{{ asset('storage/' . $eventdosen->photo) }}" alt="Event Photo" class="img-fluid"
            style="border-radius: 10px; max-width: 300px;">
        @endif

        <div class="mt-4">
            <a href="{{ route('eventdosens.index') }}" class="btn btn-secondary">Kembali</a>
            <a href="{{ route('eventdosens.edit', $eventdosen->kode_evndsn) }}" class="btn btn-primary">Edit</a>
        </div>
    </div>
</div>
@endsection