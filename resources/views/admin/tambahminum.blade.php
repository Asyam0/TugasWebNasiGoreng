@extends('./layout/admintemplate')
@section('judul', 'ADD FOODS')
    
@section('container')
<div class="container">
    <div class="add-menu">
    <div class="row">
        <div class="col-md-12">
            @if (session('status'))
            <h6 class="alert alret-success">{{session('status')}}</h6>
                
            @endif
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Minuman
                        <a href="{{url('admin')}}" class="btn btn-danger float-end">Back</a>
                    </h4>
                </div>
                <div class="card-body">
                    <form action="{{url('tambahminum')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group mb-3">
                            <label for="">Gambar</label>
                            <input type="file" name="gambar" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Nama</label>
                            <input type="text" name="nama" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Harga</label>
                            <input type="number" name="harga" class="form-control">
                        </div>
                        <div class="form-group mb-3">
                            <button type="submit" class="btn btn-dark">Simpan Data</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
@endsection