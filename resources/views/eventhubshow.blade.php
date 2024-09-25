@extends('layouts.app')
@section('content')
<div class="container mt-4 pt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-white border-0">
                    <h2 class="text-center">{{ $event->nama_event }}</h2>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <img src="{{ asset('storage/event_photos/' . $event->photo) }}" alt="{{ $event->nama_event }}"
                            class="img-fluid">
                    </div>
                    <p><strong>{{ $event->kode_event }}</strong> </p>
                    <p><strong>Tanggal:</strong> {{ \Carbon\Carbon::parse($event->tanggal)->format('d-m-Y') }}</p>
                    <p><strong>Deskripsi:</strong> {{ $event->description }}</p>
                     <p><strong>Harga: Rp.</strong>{{ $event->harga }} </p>
                
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
             <div class="card-footer bg-white border-0 d-flex justify-content-center">
                <a href="{{ route('eventhub') }}" class="btn btn-primary mx-2">Kembali ke Daftar Event</a>
                <a href="{{ route('eventhub') }}" class="btn btn-primary mx-2">Bayar</a>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection