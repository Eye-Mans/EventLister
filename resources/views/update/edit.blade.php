@extends('layout.navbar')
@section('navbar')

    <div>
        <form action="/update/{{ $acara ->id }}" method="post">
            @csrf
            @method('put')
            <div class="m-3">
                <div class="input-group mb-3 ">
                    <span class="input-group-text" id="inputGroup-sizing-default">Event Name</span>
                    <input type="text" name="nama" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $acara->nama }}" required>
                </div>
            
                <div class="input-group mb-3 ">
                    <span class="input-group-text" id="inputGroup-sizing-default">Event theme</span>
                    <input type="text" name="tema" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $acara->tema }}" required>
                </div>
            
                <div class="input-group mb-3 ">
                    <span class="input-group-text" id="inputGroup-sizing-default">Held on</span>
                    <input type="date" name="tanggal" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $acara->tanggal }}" required>
                </div>
            
                <div class="input-group mb-3 ">
                    <span class="input-group-text" id="inputGroup-sizing-default">Location</span>
                    <input type="text" name="lokasi" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" value="{{ $acara->lokasi }}" required>
                </div>
            
                <button type="submit" class="btn btn-active btn-primary mt-3">Edit</button>
                <a href="/table" class="btn btn-active btn-danger mt-3">Cancel</a>            
                </div>
            </div>
        </form>
    </div>

@endsection