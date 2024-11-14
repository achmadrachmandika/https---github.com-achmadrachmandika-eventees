@extends('admin.home')

@section('content')
<style>
    .sticky-header {
        position: sticky;
        top: 0;
        background-color: #444;
        z-index: 1;
    }

    #myTable th {
        width: auto !important;
    }

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
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div class="card-body">
        <div class="table-container">
            <table id="myTable1" class="table table-striped mt-4" style="text-align: center;">
                <thead class="bg-secondary text-white text-center sticky-header">
                    <tr>
                        <th>Kode Event Dosen</th>
                        <th>Nama Dosen</th>
                        <th>Topik Pelatihan</th>
                        <th>Nomor HP</th>
                        <th>Status</th>
                        <th width="280px">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($eventreqdosens as $eventreqdosen)
                    <tr>
                        <td>{{ $eventreqdosen->kode_dosen }}</td>
                        <td>{{ $eventreqdosen->nama_dosen }}</td>
                        <td>{{ $eventreqdosen->training_topic }}</td>
                        <td>{{ $eventreqdosen->no_hp }}</td>
                        <td>
                            @if ($eventreqdosen->status == 'Proses')
                            <button class="btn btn-danger">{{ $eventreqdosen->status }}</button>
                            @elseif ($eventreqdosen->status == 'Terealisasi')
                            <button class="btn btn-success">{{ $eventreqdosen->status }}</button>
                            @else
                            <button class="btn btn-secondary">{{ $eventreqdosen->status }}</button>
                            @endif
                        </td>
                        <td>
                            <a class="btn btn-info"
                                href="{{ route('eventreqdosens.show', $eventreqdosen->kode_dosen) }}">Show</a>
                            <form action="{{ route('eventreqdosens.destroy', $eventreqdosen->kode_dosen) }}"
                                method="POST" style="display:inline-block;"
                                onsubmit="return confirm('Apakah Anda yakin ingin menghapus?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
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
    let table = new DataTable('#myTable1');
    </script>

<script>
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
            if (tr[i].getElementsByTagName("th").length > 0) {
                continue;
            }
            
            var tds = tr[i].getElementsByTagName("td");
            var found = false;
            
            for (var j = 0; j < tds.length; j++) {
                if (tds[j].textContent.toUpperCase().indexOf(filter) > -1) {
                    found = true;
                    break;
                }
            }
            
            tr[i].style.display = found ? "" : "none";
        }
    }
</script>
@endsection