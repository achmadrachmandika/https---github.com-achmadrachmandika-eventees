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
            <h2 class="font-weight-bold">Daftar Event</h2>
            <div class="col-md-6 d-flex flex-row justify-content-end mb-3">
                <input class="form-control me-2" type="text" id="myInput" onkeyup="myFunction()" placeholder="Cari.."
                    title="Type in a name">
                <a class="btn btn-success" href="{{ route('events.create') }}">Masukkan Event</a>
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
            <table id="myTable" class="table table-striped mt-4" style="text-align: center;">
                <thead class="bg-secondary text-white text-center sticky-header">
                    <tr>
                        <th>Kode Event</th>
                        <th>Kode Dosen</th>
                        <th>Photo</th>
                        <th>Nama Event</th>
                        <th>Tanggal</th>
                        <th>Jam</th>
                        <th>Harga</th>
                        <th>Benefits</th>
                        <th>Kategori</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($events as $event)
                    <tr>
                        <td>{{ $event->kode_event }}</td>
                        <td>{{ $event->kode_dosen }}</td>
                        <td>
                            @if($event->photo)
                            @php
                            $imagePath = asset('storage/' . $event->photo);
                            @endphp
                            <img src="{{ $imagePath }}" alt="{{ $event->kode_event }}"
                                style="max-width: 100px; height: 100px;">
                            @else
                            Tidak Ada Foto
                            @endif
                        </td>
                        <td>{{ $event->nama_event }}</td>
                        <td>{{ \Carbon\Carbon::parse($event->tanggal)->format('d-m-Y') }}</td>
                        <td>{{ \Carbon\Carbon::parse($event->jam)->format('H:i:s') }}</td>
                        <td>{{ $event->harga }}</td>
                        <td>
                            @foreach($event->benefits as $benefit)
                            <div>{{ $benefit }}</div>
                            @endforeach
                        </td>
                        <td>{{ $event->kategori }}</td>
                        <td>{{ $event->status }}</td>
                        <td>
                            <a class="btn btn-info" href="{{ route('events.show', $event->kode_event) }}">Show</a>
                            <a class="btn btn-primary" href="{{ route('events.edit', $event->kode_event) }}">Edit</a>
                            <form action="{{ route('events.destroy', $event->kode_event) }}" method="POST"
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