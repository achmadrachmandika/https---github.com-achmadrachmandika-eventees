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

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Kode Event</th>
                <th>Photo</th>
                <th>Nama Event</th>
                <th>Tanggal</th>
                {{-- <th>Deskripsi</th> --}}
                <th width="280px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <td>{{ $event->kode_event }}</td>
                @if($event->photo)
                <td>
                    <img src="{{ asset('storage/event_photos/' . $event->photo) }}" alt="{{ $event->kode_event }}"
                        style="max-width: 100px; height: 100px; cursor: pointer;" data-toggle="modal" data-target="#imageModal"
                        data-image="{{ asset('storage/event_photos/' . $event->photo) }}"
                        data-title="{{ $event->kode_event }}">
                </td>
                @else
                <td>Tidak Ada Foto</td>
                @endif
                <td>{{ $event->nama_event }}</td>
                <td>{{ \Carbon\Carbon::parse($event->tanggal)->format('d-m-Y') }}</td>
                {{-- <td>{{ $event->description }}</td> --}}
                <td>
                    <form action="{{ route('events.destroy', $event->kode_event) }}" method="POST"
                        style="display: inline;">
                        <a class="btn btn-info" href="{{ route('events.show', $event->kode_event) }}">Show</a>
                        <a class="btn btn-primary" href="{{ route('events.edit', $event->kode_event) }}">Edit</a>
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <!-- Modal -->
    <div class="modal fade" id="imageModal" tabindex="-1" role="dialog" aria-labelledby="imageModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="imageModalLabel">Image View</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body text-center">
                    <img id="modalImage" src="" alt="" style="width: 100%; height: auto;">
                </div>
            </div>
        </div>
    </div>

    {{-- Pagination links if applicable --}}
    {{-- {{ $events->links() }} --}}
</div>

<script>
    $('#imageModal').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget);
    var imageUrl = button.data('image');
    var imageTitle = button.data('title');
    var modal = $(this);
    modal.find('.modal-body #modalImage').attr('src', imageUrl);
    modal.find('.modal-title').text(imageTitle);
    });
    </script>
@endsection