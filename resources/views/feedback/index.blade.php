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
            <h2 class="font-weight-bold">Feedback</h2>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="card-body">
        <div class="table-container">
            <table id="myTable2" class="table table-striped mt-4" style="text-align: center;">
                <thead class="bg-secondary text-white text-center sticky-header">
                    <tr>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan</th>
                            <th>Tanggal</th>
                        </tr>
                </thead>
                <tbody>
                    @foreach ($feedbacks as $feedback)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $feedback->name }}</td>
                        <td>{{ $feedback->email }}</td>
                        <td>{{ $feedback->message }}</td>
                        <td>{{ $feedback->created_at->format('d-m-Y H:i:s') }}</td>
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
    let table = new DataTable('#myTable2');
</script>
<script>

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