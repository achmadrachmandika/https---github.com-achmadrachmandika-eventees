@extends('admin.home')

@section('content')
<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <h2 class="font-weight-bold">Tambah Event Dosen</h2>
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
        <form action="{{ route('eventdosens.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

              <div class="col-md-12 mb-3">
                <label for="kode_evndsn" class="form-label">Kode Event Dosen</label>
                <input type="text" class="form-control" id="kode_evndsn" name="kode_evndsn" required>
            </div>

              <div class="col-md-12 mb-3">
                <label for="photo" class="form-label">Photo</label>
                <input type="file" class="form-control" id="photo" name="photo">
            </div>

              <div class="col-md-12 mb-3">
                <label for="nama_event" class="form-label">Nama Event</label>
                <input type="text" class="form-control" id="nama_event" name="nama_event" required>
            </div>

              <div class="col-md-12 mb-3">
                <label for="tanggal" class="form-label">Tanggal</label>
                <input type="date" class="form-control" id="tanggal" name="tanggal" required>
            </div>

              <div class="col-md-12 mb-3">
                <label for="jam_mulai" class="form-label">jam_mulai</label>
                <input type="time" class="form-control" id="jam_mulai" name="jam_mulai" required>
            </div>

            <div class="col-md-12 mb-3">
              <label for="jam_pulang" class="form-label">jam_pulang</label>
              <input type="time" class="form-control" id="jam_pulang" name="jam_pulang" required>
            </div>

              <div class="col-md-12 mb-3">
                <label for="kuota" class="form-label">Kuota</label>
                <input type="number" class="form-control" id="kuota" name="kuota" required>
            </div>

              <div class="col-md-12 mb-3">
        
                    <label for="benefits" class="form-label"><strong>Benefits:</strong></label>
                    <input type="text" id="benefits" name="benefits[]" class="form-control mb-2" placeholder="Benefit 1"
                        value="{{ old('benefits.0') }}">
                    @for ($i = 1; $i <= 9; $i++) <input type="text" id="benefits" name="benefits[]" class="form-control mb-2"
                        placeholder="Benefit {{ $i+1 }}" value="{{ old('benefits.' . $i) }}">
                        @endfor
                        @error('benefits')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>
            

              <div class="col-md-12 mb-3">
                <label for="kategori" class="form-label">Kategori</label>
                <select class="form-control" id="kategori" name="kategori" required>
                    <option value="Online">Online</option>
                    <option value="Offline">Offline</option>
                </select>
            </div>


              <div class="col-md-12 mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
            </div>

            <button type="submit" class="btn btn-success">Simpan Event</button>
            <a href="{{ route('eventdosens.index') }}" class="btn btn-secondary">Batal</a>
        </form>
    </div>
</div>
@endsection