@extends('layout.navbar')
@section('navbar')

<div class="m-3">
    <a href="/add" type="button" class="btn btn-primary fw-bold">Add Event</a>
</div>

{{-- table --}}
<div class="p-2 ">
    <table class="table table-striped table-hover">
        <thead>
          <tr>
            <th scope="col">No</th>
            <th scope="col">Name</th>
            <th scope="col">Theme</th>
            <th scope="col">Held on</th>
            <th scope="col">Location</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($acara as $nomor => $a)
            <tr>
                <th scope="row">{{ $nomor + 1 }}</th>
                <td class="fw-bold">{{ $a ->nama }}</td>
                <td>{{ $a ->tema }}</td>
                <td>{{ $a ->tanggal }}</td>
                <td>{{ $a ->lokasi }}</td>
                <td class="d-flex"><a href="{{ $a -> id }}/edit" class="btn btn-success fw-bold text-white">Edit</a>
                <form action="update/{{ $a -> id }}" method="post">
                    @csrf
                    @method('delete')
                    <button class="btn btn-danger fw-bold ms-2">Delete</button>
                </form>
                </td>
            </tr>
            @endforeach
        </tbody>
      </table>
</div>

@endsection