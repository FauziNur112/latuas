@extends('layouts.main')

    @section('konten')
    <div class="container2">
        <h2>Ini Latihan Uas</h2>
    </div>

    <div class="tabledata card border-0 shadow rounded p-3">
        <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">Id</th>
                <th scope="col">Nama</th>
                <th scope="col">Uang</th>
                <th scope="col">Tanggal</th>
                {{-- <th scope="col">Aksi</th> --}}
              </tr>
            </thead>
            <tbody>
                @foreach ($datalatuas as $item)
              <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->nama }}</td>
                <td>{{ $item->uang }}</td>
                <td>{{ $item->tanggal }}</td>
                {{-- <td></td> --}}
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>


    @endsection
