@extends('./layout/admintemplate')
@section('judul', 'Admin')
    
@section('container')
<div class="container-menu">
    <div class="add-menu">
        <div class="row">
            <div class="col-sm-4">
                <h4>ADMIN</h4>
                <div class="logout">
                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">@csrf</form>
                  </div>
                <div class="vertical-menu">
                    <a href="{{url('tambahmakan')}}" class="btn btn-dark float-end">Tambah Makanan</a>
                    <a href="{{url('tambahminum')}}" class="btn btn-dark float-end">Tambah Minuman</a>
                </div>
            </div>
            <div class="col-sm-8">
                <h1 class="mt-3">MENU NASI GORENG</h1>
        <table class="table">
            <thead class="table-dark">
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Gambar</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Harga</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menu_nasgor as $nsgr)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><img src="{{asset('uploads/Makanan/'.$nsgr->gambar)}}" alt="ini nasgor" width="70"></td>
                    <td>{{$nsgr->nama}}</td>
                    <td>{{$nsgr->harga}}</td>
                    <td>
                        <a href="{{"delete/".$nsgr['id']}}" class="btn btn-danger btn-sm">Delete</a>
                    </td>
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
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($menu_minum as $mnm)
                <tr>
                    <th scope="row">{{$loop->iteration}}</th>
                    <td><img src="{{asset('uploads/Minuman/'.$mnm->gambar)}}" alt="ini minum" width="70"></td>
                    <td>{{$mnm->nama}}</td>
                    <td>{{$mnm->harga}}</td>
                    <td>
                        <a href="{{"destroy/".$mnm['id']}}" class="btn btn-dark btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
            </div>
        </div>
    </div>
</div>

@endsection
