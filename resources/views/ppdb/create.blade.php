@extends('ppdb.layout')

@section('content')
<div class="row mt-5 mb-5">
    <div class="col-lg-12 margin-tb">
        <div class="float-left">
            <h2>Daftar baru</h2>
        </div>
        <div class="float-right">
            <a class="btn btn-secondary" href="{{ route('ppdb.index') }}"> Kembali</a>
        </div>
    </div>
</div>

@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> Input gagal.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('ppdb.store') }}" method="POST">
    @csrf

     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Lengkap :</strong>
                <input type="text" name="NamaLengkap" class="form-control" placeholder="Nama Lengkap">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin :</strong>
                <input type="text" name="jk" class="form-control" placeholder="Jawab L / P">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Lengkap:</strong>
                <textarea class="form-control" style="height:150px" name="AlamatLengkap" placeholder="Alamat Lengkap"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <label for="agama" class="form-label"><b>Agama</b></label><br>
            <select name="agama" class="form-control" aria-label="agama">
                <option selected>Islam</option>
                <option>Kristen</option>
                <option>Hindu</option>
                <option>Budha</option>
                <option>Lainnya</option>
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mt-3">
            <div class="form-group">
                <strong>Asal SMP :</strong>
                <input type="text" name="asalSMP" class="form-control" placeholder="Asal SMP">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3">
        <label for="jurusan" class="form-label" style="font-type:bold"><b>Jurusan</b></label>
            <select name="jurusan" class="form-control" aria-label="agama">
                <option selected>Rekayasa Perangkat Lunak</option>
                <option>Tata Boga</option>
                <option>Tata Busana</option>
                <option>Multimedia</option>
            </select>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Daftar</button>
        </div>
    </div>

</form>
@endsection