@extends('admin.home')

@section('content')
<div class="card" style="margin: 20px; padding: 20px;">
    <div class="card-header">
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="font-weight-bold">Daftar Event</h2>
            <div class="col-md-6 d-flex flex-row justify-content-end mb-3">
                <a class="btn btn-success" href="{{ route('events.create') }}">Masukkan Event</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('success'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <div style="max-height:550px;overflow-y:auto; margin-bottom: 10px">
        <table id="myTable" class="table table-striped mt-4" style="text-align: center;">
            <thead class="bg-secondary text-white text-center sticky-header">
            <tr>
                <th>Kode Event</th>
                <th>Photo</th>
                <th>Nama Event</th>
                <th>Tanggal</th>
                <th>Harga</th>
                <th>Benefits</th> <!-- New column for benefits -->
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td>{{ $event->kode_event }}</td>
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
                <td>{{ $event->harga }}</td>
                <td>
                    @foreach($event->benefits as $benefit)
                    <div>{{ $benefit }}</div>
                    @endforeach
                </td>
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

    <!-- Modal -->

    {{-- Pagination links if applicable --}}
    {{-- {{ $events->links() }} --}}
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
</script>

<script>
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }
    </script>
@endsection