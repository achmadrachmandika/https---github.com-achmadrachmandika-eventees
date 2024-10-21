@extends('admin.home')

@section('content')
<div class="container mt-4">
    <div class="card" style="padding: 20px;">
        <div class="card-header">
            <h2>Edit Event</h2>
        </div>

        <div class="card-body">
            {{-- Form untuk mengedit event --}}
            <form action="{{ route('events.update', $event->kode_event) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="kode_dosen" class="form-label"><strong>Kode Dosen:</strong></label>
                        <select id="kode_dosen" name="kode_dosen"
                            class="form-control @error('kode_dosen') is-invalid @enderror" required>
                            @foreach($eventdosens as $dosen)
                            <option value="{{ $dosen->kode_dosen }}" {{ $event->kode_dosen == $dosen->kode_dosen ?
                                'selected' : '' }}>
                                {{ $dosen->kode_dosen }}
                            </option>
                            @endforeach
                        </select>
                        @error('kode_dosen')
                        <span class="invalid-feedback">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="kode_event" class="form-label"><strong>Kode Event:</strong></label>
                        <input type="text" id="kode_event" name="kode_event" class="form-control"
                            value="{{ old('kode_event', $event->kode_event) }}" readonly>
                        @error('kode_event')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="photo" class="form-label"><strong>Photo:</strong></label>
                        <input type="file" id="photo" name="photo" class="form-control">
                        @if($event->photo)
                        <img src="{{ asset('storage/' . $event->photo) }}" alt="Current Photo"
                            style="max-width: 150px; height: auto; margin-top: 10px;">
                        @endif
                        @error('photo')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="nama_event" class="form-label"><strong>Nama Event:</strong></label>
                        <input type="text" id="nama_event" name="nama_event" class="form-control"
                            value="{{ old('nama_event', $event->nama_event) }}">
                        @error('nama_event')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="tanggal" class="form-label"><strong>Tanggal:</strong></label>
                        <input type="date" id="tanggal" name="tanggal" class="form-control"
                            value="{{ old('tanggal', $event->tanggal) }}">
                        @error('tanggal')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="jam" class="form-label"><strong>Jam:</strong></label>
                        <input type="time" id="jam" name="jam" class="form-control"
                            value="{{ old('jam', $event->jam) }}">
                        @error('jam')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="description" class="form-label"><strong>Deskripsi:</strong></label>
                        <textarea id="description" class="form-control" name="description"
                            rows="4">{{ old('description', $event->description) }}</textarea>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="benefits" class="form-label"><strong>Benefits:</strong></label>
                        <div id="benefits">
                            @foreach($event->benefits as $index => $benefit)
                            <div class="input-group mb-2">
                                <input type="text" name="benefits[]" class="form-control"
                                    value="{{ old('benefits.' . $index, $benefit) }}">
                                <button type="button" class="btn btn-danger"
                                    onclick="this.parentElement.remove()">X</button>
                            </div>
                            @endforeach
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="addBenefit()">Add Benefit</button>
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="kategori" class="form-label"><strong>Kategori:</strong></label>
                        <select class="form-control" name="kategori" id="kategori">
                            <option value="Online" {{ $event->kategori == 'Online' ? 'selected' : '' }}>Online</option>
                            <option value="Offline" {{ $event->kategori == 'Offline' ? 'selected' : '' }}>Offline
                            </option>
                        </select>
                        @error('kategori')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="status" class="form-label"><strong>Status:</strong></label>
                        <select class="form-control" name="status" id="status">
                            <option value="Paid" {{ $event->status == 'Paid' ? 'selected' : '' }}>Paid</option>
                            <option value="Unpaid" {{ $event->status == 'Unpaid' ? 'selected' : '' }}>Unpaid</option>
                        </select>
                        @error('status')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="harga" class="form-label"><strong>Harga:</strong></label>
                        <input type="number" id="harga" name="harga" class="form-control"
                            value="{{ old('harga', $event->harga) }}">
                        @error('harga')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-6 mb-3">
                        <label for="kuota" class="form-label"><strong>Kuota:</strong></label>
                        <input type="number" id="kuota" name="kuota" class="form-control" value="{{ old('kuota', $event->kuota) }}">
                        @error('kuota')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 text-end">
                        <div class="btn-group">
                            <button type="submit" class="btn btn-success">Update</button>
                            <a class="btn btn-primary ms-2" href="{{ route('events.index') }}">Kembali</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function addBenefit() {
        const benefitsDiv = document.getElementById('benefits');
        const newBenefitDiv = document.createElement('div');
        newBenefitDiv.className = 'input-group mb-2';
        newBenefitDiv.innerHTML = `
            <input type="text" name="benefits[]" class="form-control" placeholder="Benefit">
            <button type="button" class="btn btn-danger" onclick="this.parentElement.remove()">X</button>
        `;
        benefitsDiv.appendChild(newBenefitDiv);
    }
</script>

@endsection