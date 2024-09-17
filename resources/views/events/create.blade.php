@extends('admin.home')

@section('content')
<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <h2>Tambah Event Baru</h2>
    </div>

    <div class="card-body">
        {{-- Form untuk menambahkan event baru --}}
        <form action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-6 mb-3">
                    <label for="kode_event" class="form-label"><strong>Kode Event:</strong></label>
                    <input type="text" id="kode_event" name="kode_event" class="form-control" placeholder="Kode Event"
                        value="{{ old('kode_event') }}">
                    @error('kode_event')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="photo" class="form-label"><strong>Photo:</strong></label>
                    <input type="file" id="photo" name="photo" class="form-control">
                    @error('photo')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="nama_event" class="form-label"><strong>Nama Event:</strong></label>
                    <input type="text" id="nama_event" name="nama_event" class="form-control" placeholder="Nama Event"
                        value="{{ old('nama_event') }}">
                    @error('nama_event')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-6 mb-3">
                    <label for="tanggal" class="form-label"><strong>Tanggal:</strong></label>
                    <input type="date" id="tanggal" name="tanggal" class="form-control" value="{{ old('tanggal') }}">
                    @error('tanggal')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-12 mb-3">
                    <label for="description" class="form-label"><strong>Deskripsi:</strong></label>
                    <textarea id="description" class="form-control" name="description" rows="4"
                        placeholder="Deskripsi">{{ old('description') }}</textarea>
                    @error('description')
                    <div class="text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="col-md-12 text-end">
                    <div class="btn-group">
                        <button type="submit" class="btn btn-success">Simpan</button>
                        <a class="btn btn-primary ms-2" href="{{ route('events.index') }}">Kembali</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
@endsection