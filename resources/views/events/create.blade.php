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
                    <label for="kode_dosen" class="form-label"><strong>Kode Dosen:</strong></label>
                    <select id="kode_dosen" name="kode_dosen" class="form-control" onchange="updateFields()">
                        <option value="">Pilih Kode Dosen</option>
                        @foreach($eventreqdosens as $dosen)
                        <option value="{{ $dosen->kode_dosen }}" data-training="{{ $dosen->training_topic }}"
                            data-nohp="{{ $dosen->no_hp }}">
                            {{ $dosen->kode_dosen }}
                        </option>
                        @endforeach
                    </select>
                    @error('kode_dosen')
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
                    <label for="harga" class="form-label"><strong>Harga:</strong></label>
                    <input type="number" id="harga" name="harga" class="form-control" placeholder="Harga"
                        value="{{ old('harga') }}" step="1" min="0" required>
                    @error('harga')
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

                <div class="col-md-6 mb-3">
                    <label for="jam" class="form-label"><strong>Jam:</strong></label>
                    <input type="time" id="jam" name="jam" class="form-control" value="{{ old('jam') }}">
                    @error('jam')
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

                <div class="col-md-12 mb-3">
                    <label for="benefits" class="form-label"><strong>Benefits:</strong></label>
                    <input type="text" id="benefits" name="benefits[]" class="form-control mb-2" placeholder="Benefit 1"
                        value="{{ old('benefits.0') }}">
                    @for ($i = 1; $i <= 9; $i++) <input type="text" id="benefits" name="benefits[]"
                        class="form-control mb-2" placeholder="Benefit {{ $i+1 }}" value="{{ old('benefits.' . $i) }}">
                        @endfor
                        @error('benefits')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                </div>

                <div class="col-2" style="height: 100%;">
                    <label for="kategori" class="required-star">Kategori</label>
                    <select class="form-control" name="kategori" id="kategori" style="height: 35px;">
                        <option value="Online">Online</option>
                        <option value="Offline">Offline</option>
                    </select>
                </div>

                <div class="col-2" style="height: 100%;">
                    <label for="status" class="required-star">Status</label>
                    <select class="form-control" name="status" id="status" style="height: 35px;">
                        <option value="Paid">Paid</option>
                        <option value="Unpaid">Unpaid</option>
                    </select>
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

@section('scripts')
<script>
    function updateFields() {
        const kodeDosenSelect = document.getElementById('kode_dosen');
        const selectedOption = kodeDosenSelect.options[kodeDosenSelect.selectedIndex];

        const trainingTopicInput = document.getElementById('training_topic');
        const noHpInput = document.getElementById('no_hp');

        if (selectedOption.value) {
            trainingTopicInput.value = selectedOption.getAttribute('data-training');
            noHpInput.value = selectedOption.getAttribute('data-nohp');
        } else {
            trainingTopicInput.value = '';
            noHpInput.value = '';
        }
    }
</script>
@endsection
@endsection