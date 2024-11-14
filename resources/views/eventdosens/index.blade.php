@extends('admin.home')

@section('content')
<style>
    /* Tambahkan kelas CSS untuk judul tabel agar tetap pada posisi atas saat digulir */
    .sticky-header {
        position: sticky;
        top: 0;
        background-color: #444;
        /* Warna latar belakang judul tabel */
        z-index: 1;
        /* Pastikan judul tabel tetap di atas konten tabel */
    }

    /* Atur lebar kolom agar sesuai dengan konten di dalamnya */
    #myTable th {
        width: auto !important;
    }

    /* Atur tampilan tabel */
    .table-container {
        max-height: 400px;
        overflow-y: auto;
        margin-bottom: 20px;
    }
</style>

<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-weight-bold">Daftar Event Dosen</h2>
            <div class="col-md-6 d-flex flex-row justify-content-end mb-3">
                <a class="btn btn-success" href="{{ route('eventdosens.create') }}">Masukkan Event</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="card-body">
        <div class="table-container">
            <table id="myTable5" class="table table-striped mt-4" style="text-align: center;">
                <thead class="bg-secondary text-white text-center sticky-header">
                    <tr>
                        <th>Kode Event Dosen</th>
                        <th>Photo</th>
                        <th>Nama Event</th>
                        <th>Tanggal</th>
                        <th>Jam Mulai</th>
                        <th>Jam Selesai</th>
                        <th>Kuota</th>
                        <th>Benefits</th>
                        <th>Kategori</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventdosens as $eventdosen)
                    <tr>
                        <td>{{ $eventdosen->kode_evndsn }}</td>
                        <td>
                            @if($eventdosen->photo)
                            @php
                            $imagePath = asset('storage/' . $eventdosen->photo);
                            @endphp
                            <img src="{{ $imagePath }}" alt="{{ $eventdosen->kode_evndsn }}"
                                style="max-width: 100px; height: 100px;">
                            @else
                            Tidak Ada Foto
                            @endif
                        </td>
                        <td>{{ $eventdosen->nama_event }}</td>
                        <td>{{ \Carbon\Carbon::parse($eventdosen->tanggal)->format('d-m-Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($eventdosen->jam_mulai)->format('H:i:s') }}</td>
                        <td>{{ \Carbon\Carbon::parse($eventdosen->jam_pulang)->format('H:i:s') }}</td>
                        <td>{{ $eventdosen->kuota }}</td>
                        <td>
                            @foreach($eventdosen->benefits as $benefit)
                            <div>{{ $benefit }}</div>
                            @endforeach
                        </td>
                        <td>{{ $eventdosen->kategori }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('eventdosens.show', $eventdosen->kode_evndsn) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('eventdosens.edit', $eventdosen->kode_evndsn) }}">Edit</a>
                            <form action="{{ route('eventdosens.destroy', $eventdosen->kode_evndsn) }}" method="POST"
                                style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-outline-danger"
                                    onclick="return confirmDelete()">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">

<!-- JS -->
<script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
<script>
    let table = new DataTable('#myTable5');
</script>
<script>
    function confirmDelete() {
        return confirm('Apakah Anda yakin ingin menghapus Event ini?');
    }

    // Menambahkan timestamp untuk cache busting gambar
    window.onload = function() {
        var images = document.getElementsByTagName('img');
        for (var i = 0; i < images.length; i++) {
            images[i].src = images[i].src + '?' + new Date().getTime();
        }
    }

    function myFunction() {
        var input = document.getElementById("myInput");
        var filter = input.value.toUpperCase();
        var table = document.getElementById("myTable");
        var tr = table.getElementsByTagName("tr");
        
        for (var i = 0; i < tr.length; i++) {
            // Lewati baris yang berisi <th> (header)
            if (tr[i].getElementsByTagName("th").length > 0) {
                continue;
            }
            
            var tds = tr[i].getElementsByTagName("td");
            var found = false;
            
            for (var j = 0; j < tds.length; j++) {
                if (tds[j].textContent.toUpperCase().indexOf(filter) > -1) {
                    found = true;
                    break; // Hentikan loop jika ditemukan kecocokan
                }
            }
            
            tr[i].style.display = found ? "" : "none";
        }
    }
</script>
@endsection