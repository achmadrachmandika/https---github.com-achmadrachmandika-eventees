@extends('admin.home')

@section('content')
<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <h2 class="font-weight-bold">{{ $event->nama_event }}</h2>
    </div>

    <div class="card-body">
        <div class="mb-3">
            <strong>Kode Event:</strong> {{ $event->kode_event }}
        </div>

        <div class="mb-3">
            <strong>Photo:</strong>
            @if($event->photo)
            <img src="{{ asset('storage/' . $event->photo) }}" alt="{{ $event->kode_event }}"
                style="max-width: 300px; height: auto;">
            @else
            <p>Tidak Ada Foto</p>
            @endif
        </div>

        <div class="mb-3">
            <strong>Harga:</strong> {{ $event->harga }}
        </div>

        <div class="mb-3">
            <strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($event->tanggal)->format('d-m-Y') }}
        </div>

        <div class="mb-3">
            <strong>Jam:</strong> {{ \Carbon\Carbon::parse($event->jam)->format('H:i:s') }}
        </div>

        <div class="mb-3">
            <strong>Deskripsi:</strong>
            <p>{{ $event->description }}</p>
        </div>

        <div class="mb-3">
            @if($event->benefits && count($event->benefits) > 0)
                    <p><strong>Benefits:</strong></p>
                    <ul>
                        @foreach($event->benefits as $benefit)
                        @if($benefit)
                        <li>{{ $benefit }}</li>
                        @endif
                        @endforeach
                    </ul>
                    @endif
        </div>

        <div class="mb-3">
            <strong>Kategori:</strong> {{ $event->kategori }}
        </div>
        <div class="mb-3">
            <strong>Status:</strong> {{ $event->status }}
        </div>
    </div>

    <div class="card-footer">
        <a class="btn btn-primary" href="{{ route('events.index') }}">Kembali ke Daftar Event</a>
        <a class="btn btn-warning" href="{{ route('events.edit', $event->kode_event) }}">Edit</a>
        <form action="{{ route('events.destroy', $event->kode_event) }}" method="POST" style="display:inline;">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-outline-danger" onclick="return confirmDelete()">Hapus</button>
        </form>
    </div>
</div>

<script>
    function confirmDelete() {
        return confirm('Apakah Anda yakin ingin menghapus Event ini?');
    }
</script>
@endsection