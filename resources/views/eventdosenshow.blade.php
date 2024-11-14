<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $eventdosen->nama_event }}</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/styleshow.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
        }

        .event-header {
            position: relative;
            height: 300px;
            background-color: #007bff;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            font-weight: bold;
        }

        .img-fluid.event-image {
            height: 120px;
            width: 120px;
            border: 2px solid #160404;
            border-radius: 25px;
            margin-left: 400px;
            margin-top: 20px;
        }

        .event-details {
            padding: 20px;
            background-color: white;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.1);
            margin-top: -50px;
        }

        .footer-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .btn-primary {
            background-color: #ff5722;
            border: none;
        }

        .btn-primary:hover {
            background-color: #e64a19;
        }

        .font-weight-bold {
            font-size: 1.1rem;
        }

        @media (max-width: 768px) {
            .footer-buttons {
                flex-direction: column;
                align-items: stretch;
            }

            .footer-buttons a,
            .footer-buttons button {
                margin-bottom: 10px;
            }
        }
    </style>
    <style>
        .full-bg {
            background-image: url('/images/Login-Bg.png');
            background-size: cover;
            background-position: center;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
    </style>
</head>

<body>
    <section class="full-bg">
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-12 col-sm-10 col-md-8 col-lg-6">
                <img src="{{ asset('storage/' . $eventdosen->photo) }}" alt="{{ $eventdosen->nama_event }}"
                    class="img-fluid event-image">
                <div class="event-details">
                    <p class="font-weight-bold">Kode Event: <span class="font-weight-normal">{{ $eventdosen->kode_evndsn
                            }}</span></p>
                    <p class="font-weight-bold">Tanggal: <span class="font-weight-normal">{{
                            \Carbon\Carbon::parse($eventdosen->tanggal)->format('d-m-Y') }}</span></p>
                    <p class="font-weight-bold">Deskripsi: <span class="font-weight-normal">{{ $eventdosen->description
                            }}</span></p>
                    <p class="font-weight-bold">Kategori: <span class="font-weight-normal">{{ $eventdosen->kategori
                            }}</span></p>
                    <p class="font-weight-bold">Pemateri: <span class="font-weight-normal">{{ $eventdosen->kuota }}</span>
                    </p>

                    @if($eventdosen->benefits && count($eventdosen->benefits) > 0)
                    <div class="mb-3">
                        <p class="font-weight-bold">Benefits:</p>
                        <ul class="list-unstyled">
                            @foreach($eventdosen->benefits as $benefit)
                            @if($benefit)
                            <li><i class="fas fa-check-circle text-success"></i> {{ $benefit }}</li>
                            @endif
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>
                <div class="footer-buttons">
                  <a href="{{ auth()->check() ? (auth()->user()->hasRole('dosen') || auth()->user()->hasRole('admin') ? route('eventhub') : route('eventmhs')) : '/' }}"
                    class="btn btn-outline-primary">
                    Kembali ke Daftar Event
                </a>
                   <a id="interest-button" class="btn btn-primary" href="#">
                        Tertarik
                    </a>
                </div>
            </div>
        </div>
    </div>
    </section>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

     <script>
        document.getElementById('interest-button').addEventListener('click', function(e) {
            e.preventDefault(); // Mencegah tindakan default tombol
            const kodeEvent = "{{ $eventdosen->kode_evndsn }}";
            const namaEvent = "{{ $eventdosen->nama_event }}";
            const namaDosen = "{{ $user->name }}";
            const message = `Halo, saya "${namaDosen}" saya tertarik untuk menjadi pemateri di event "${namaEvent}" dengan kode event "${kodeEvent}".`;
            const whatsappNumber = '62895607927429';
            const whatsappUrl = `https://wa.me/${whatsappNumber}?text=${encodeURIComponent(message)}`;
            window.open(whatsappUrl, '_blank'); // Membuka tautan di tab baru
        });
    </script>


</body>

</html>