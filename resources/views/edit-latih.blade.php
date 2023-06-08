@extends('layouts.main')

    @section('konten')
    <div class="container-md">
        <h2>Ini Latihan Uas, tapi yang create data</h2>
    </div>

    <div class="container-sm tabledata card border-0 shadow rounded p-3">
        <form action="{{ route('update',$datuas->id) }}" method="post">
            @csrf

        <div class="form-group mb-3">
            <label for="namad" class="form-label">Nama</label>
            <input type="nama" name="nama" class="form-control" placeholder="Nama kamu" value="{{ $datuas->nama }}">
          </div>

          <div class="form-group mb-3">
            <label for="uang" class="form-label">Uang</label>
            <input type="uang" name="uang" class="form-control" placeholder="Uang kamu" value="{{ $datuas->uang }}">
          </div>

          <div class="form-group mb-3">
            <label for="uang" class="form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" value="{{ $datuas->tanggal }}">
          </div>


          <div class="form-group mb-3">
                <button type="submit" class="btn btn-success"> Ubah Data </button>
          </div>

        </form>

    </div>


    @endsection
