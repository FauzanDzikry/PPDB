@extends('ppdb.layout')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Edit Data</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-secondary" href="{{ route('ppdb.index') }}"> Back</a>
            </div>
        </div>
    </div>

    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('ppdb.update',$ppdb->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama Lengkap:</strong>
                <input type="text" name="NamaLengkap" class="form-control" placeholder="Nama Lengkap" value="{{ $ppdb->NamaLengkap }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jenis Kelamin :</strong>
                <input type="text" name="jk" class="form-control" placeholder="Jenis Kelamin" value="{{ $ppdb->jk }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Alamat Lengkap:</strong>
                <input type="text" name="AlamatLengkap" class="form-control" placeholder="Alamat Lengkap" value="{{ $ppdb->AlamatLengkap }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Agama:</strong>
                <input type="text" name="agama" class="form-control" placeholder="Agama" value="{{ $ppdb->agama }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Asal SMP:</strong>
                <input type="text" name="asalSMP" class="form-control" placeholder="Asal SMP" value="{{ $ppdb->asalSMP }}">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Jurusan:</strong>
                <input type="text" name="jurusan" class="form-control" placeholder="Jurusan" value="{{ $ppdb->jurusan }}">
            </div>
        </div>

        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </div>

    </form>
@endsection