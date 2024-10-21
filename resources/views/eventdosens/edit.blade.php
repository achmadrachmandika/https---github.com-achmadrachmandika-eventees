@extends('admin.home')

@section('content')
<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <h2 class="font-weight-bold">Edit Event Dosen</h2>
    </div>
    
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="card-body">
        <form action="{{ route('eventdosens.update', $eventdosen->kode_evndsn) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            
            <div class="mb-3">
                <label for="kode_evndsn" class="form-label">Kode Event Dosen</label>
                <input type="text" class="form-control" id="kode_evndsn" name="kode_evndsn" value="{{ $eventdosen->kode_evndsn }}" readonly>
            </div>

            <div class="mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
                @if($eventdosen->photo)
                    <img src="{{ asset('storage/' . $eventdosen->photo) }}" alt="Current Photo" style="max-width: 100px; height: 100px; margin-top: 10px;">
                @else
                    <p>Tidak Ada Foto</p>
                @endif
            </div>

            <div class="mb-3">
                <label for="nama_event" class="form-label">Nama Event</label>
                <input type="text" class="form-control" id="nama_event" name="nama_event" value="{{ $eventdosen->nama_event }}" required>
            </div>

            <div class="mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" value="{{ $eventdosen->tanggal }}" required>
            </div>

            <div class="mb-3">
                <label for="jam" class="form-label">Jam</label>
                <input type="time" class="form-control" id="jam" name="jam" value="{{ $eventdosen->jam }}" required>
            </div>

            <div class="mb-3">
                <label for="harga_dosen" class="form-label">Harga Dosen</label>
                <input type="number" class="form-control" id="harga_dosen" name="harga_dosen" value="{{ $eventdosen->harga_dosen }}" required>
            </div>

            <div class="mb-3">
                <label for="kuota" class="form-label">Kuota</label>
                <input type="number" class="form-control" id="kuota" name="kuota" value="{{ $eventdosen->kuota }}" required>
            </div>

            <div class="mb-3">
                <label for="benefits" class="form-label">Benefits</label>
                <textarea class="form-control" id="benefits" name="benefits[]" rows="3">{{ implode(', ', $eventdosen->benefits) }}</textarea>
                <small class="form-text text-muted">Pisahkan dengan koma untuk beberapa benefits.</small>
            </div>

            <div class="mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-control" id="kategori" name="kategori" required>
                    <option value="Online" {{ $eventdosen->kategori == 'Online' ? 'selected' : '' }}>Online</option>
                    <option value="Offline" {{ $eventdosen->kategori == 'Offline' ? 'selected' : '' }}>Offline</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="status" class="form-label">Status</label>
                <select class="form-control" id="status" name="status" required>
                    <option value="Paid" {{ $eventdosen->status == 'Paid' ? 'selected' : '' }}>Paid</option>
                    <option value="Unpaid" {{ $eventdosen->status == 'Unpaid' ? 'selected' : '' }}>Unpaid</option>
                </select>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3" required>{{ $eventdosen->description }}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Update Event</button>
            <a href="{{ route('eventdosens.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection
