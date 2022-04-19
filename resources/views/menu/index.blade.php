@extends('layout.master')

@section('judul', 'Menu')

@section('content')
<div class="container">
    <div class="row">
    <div class="col-4">
        <div class="vertical-menu">
            <a href="#">Makanan</a>
            <a href="#">Minuman</a>
          </div>
        
    </div>
    <div right class="col-6">
        <h1 class="mt-3">MENU NASI GORENG</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menu_nasgor as $nsgr)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><img src="{{asset('uploads/Makanan/'.$nsgr->gambar)}}" alt="ini nasgor" width="200"></td>
                    <td>{{$nsgr->nama}}</td>
                    <td>{{$nsgr->harga}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <h1 class="mt-3">MENU Minuman</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menu_minum as $mnm)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><img src="{{asset('uploads/Minuman/'.$mnm->gambar)}}" alt="ini minum" width="200"></td>
                    <td>{{$mnm->nama}}</td>
                    <td>{{$mnm->harga}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
</div>
@endsection






