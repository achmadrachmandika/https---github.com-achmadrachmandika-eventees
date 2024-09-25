@extends('layouts.app')
@section('content')
<div class="container mt-5 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-white border-0 text-center">
                    <h2 class="font-weight-bold">{{ $event->nama_event }}</h2>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('storage/' . $event->photo) }}" alt="{{ $event->nama_event }}"
                            class="img-fluid rounded mb-3">
                    </div>
                    <div class="mb-3">
                        <p class="font-weight-bold">Kode Event: <span class="font-weight-normal">{{ $event->kode_event
                                }}</span></p>
                        <p class="font-weight-bold">Tanggal: <span class="font-weight-normal">{{
                                \Carbon\Carbon::parse($event->tanggal)->format('d-m-Y') }}</span></p>
                        <p class="font-weight-bold">Deskripsi: <span class="font-weight-normal">{{ $event->description
                                }}</span></p>
                        <p class="font-weight-bold">Harga: <span class="font-weight-normal">Rp. {{
                                number_format($event->harga, 0, ',', '.') }}</span></p>
                    </div>

                    @if($event->benefits && count($event->benefits) > 0)
                    <div class="mb-3">
                        <p class="font-weight-bold">Benefits:</p>
                        <ul class="list-unstyled">
                            @foreach($event->benefits as $benefit)
                            @if($benefit)
                            <li class="mb-2"><i class="fas fa-check-circle text-success"></i> {{ $benefit }}</li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="card-footer bg-white border-0 d-flex justify-content-between">
                    <a href="{{ route('eventhub') }}" class="btn btn-outline-primary">Kembali ke Daftar Event</a>
                    <a href="{{ route('eventhub') }}" class="btn btn-primary">Bayar</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection