<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $event->nama_event }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styleshow.css') }}">
</head>

<body>
    <div class="container mt-5 pt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 col-md-6 col-lg-5">
                <div class="card shadow-sm">
                    <div class="card-header text-center">
                        <h2 class="font-weight-bold">{{ $event->nama_event }}</h2>
                    </div>
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <img src="{{ asset('storage/' . $event->photo) }}" alt="{{ $event->nama_event }}"
                                class="img-fluid rounded mb-3">
                        </div>
                        <div class="mb-3">
                            <p class="font-weight-bold">Kode Event: <span class="font-weight-normal">{{
                                    $event->kode_event }}</span></p>
                            <p class="font-weight-bold">Tanggal: <span class="font-weight-normal">{{
                                    \Carbon\Carbon::parse($event->tanggal)->format('d-m-Y') }}</span></p>
                            <p class="font-weight-bold">Deskripsi: <span class="font-weight-normal">{{
                                    $event->description }}</span></p>
                                    <p class="font-weight-bold">Kategori: <span class="font-weight-normal">{{
                                            $event->kategori }}</span></p>
                                            <p class="font-weight-bold">Status: <span class="font-weight-normal">{{
                                                    $event->status }}</span></p>
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
                    <div class="card-footer d-flex justify-content-between">
                        <a href="{{ route('eventhub') }}" class="btn btn-outline-primary">Kembali ke Daftar Event</a>
                        <button id="pay-button" class="btn btn-outline-primary">Bayar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://app.sandbox.midtrans.com/snap/snap.js"
        data-client-key="{{ env('MIDTRANS_CLIENT_KEY', 'SB-Mid-client-pe0su41EHxvjXTK9') }}"></script>
    <script type="text/javascript">
        document.getElementById('pay-button').onclick = function () {
            console.log('Pay button clicked'); // Debugging line
            
            // Make an AJAX call to create the transaction and get the snap token
            $.ajax({
                url: '{{ route('transactions.create') }}',
                method: 'POST',
                data: {
                    _token: '{{ csrf_token() }}',
                    kode_event: '{{ $event->kode_event }}',
                    nama: '{{ Auth::user()->name }}',
                    email: '{{ Auth::user()->email }}',
                    nip: '{{ Auth::user()->nip }}'
                },
                success: function (data) {
                    console.log('Transaction created successfully:', data); // Debugging line
                    snap.pay(data.snap_token);
                },
                error: function (error) {
                    console.error('Error creating transaction:', error); // Debugging line
                }
            });
        };
    </script>
</body>

</html>
