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
                        <label for="kode_event" class="form-label"><strong>Kode Event:</strong></label>
                        <input type="text" id="kode_event" name="kode_event" class="form-control"
                            placeholder="Kode Event" value="{{ old('kode_event', $event->kode_event) }}" readonly>
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
                            placeholder="Nama Event" value="{{ old('nama_event', $event->nama_event) }}">
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

                    <div class="col-md-12 mb-3">
                        <label for="description" class="form-label"><strong>Deskripsi:</strong></label>
                        <textarea id="description" class="form-control" name="description" rows="4"
                            placeholder="Deskripsi">{{ old('description', $event->description) }}</textarea>
                        @error('description')
                        <div class="text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="col-md-12 mb-3">
                        <label for="benefits" class="form-label"><strong>Benefits:</strong></label>
                        <div id="benefits">
                            @foreach($event->benefits as $benefit)
                            @if($benefit)
                            <div class="input-group mb-2">
                                <input type="text" name="benefits[]" class="form-control" placeholder="Benefit"
                                    value="{{ old('benefits.' . $loop->index, $benefit) }}">
                                <button type="button" class="btn btn-danger"
                                    onclick="this.parentElement.remove()">X</button>
                            </div>
                            @endif
                            @endforeach
                        </div>
                        <button type="button" class="btn btn-secondary" onclick="addBenefit()">Add Benefit</button>
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