@extends('ppdb.layout')

@section('content')
    <div class="row mt-5 mb-5">
        <div class="col-lg-12 margin-tb">
            <div class="float-left">
                <h2>Selamat datang di PPDB SMK Semangat 45</h2>
            </div>
            <div class="float-right">
                <a class="btn btn-success" href="{{ route('ppdb.create') }}">Daftar Baru</a>
            </div>
            <div class="float-right" style="margin-right:20px">
                <a class="btn btn-warning" href="/exportpdf">Print</a>
            </div>
        </div>
    </div>

    @if ($message = Session::get('succes'))
    <div class="alert alert-success">
        <p>{{ $message }}</p>
    </div>
    @endif

    <table class="table table-bordered">
        <tr>
            <th width="20px" class="text-center">No Daftar</th>
            <th width="280px"class="text-center">Nama Lengkap</th>
            <th width="280px"class="text-center">Jenis Kelamin</th>
            <th width="280px"class="text-center">Alamat Lengkap</th>
            <th width="280px"class="text-center">Agama</th>
            <th width="280px"class="text-center">Asal SMP</th>
            <th width="280px"class="text-center">Jurusan</th>
            <th width="500px"class="text-center">Action</th>
        </tr>
        @foreach ($ppdb as $p)
        <tr>
            <td class="text-center">{{ $p->id }}</td>
            <td>{{ $p->NamaLengkap }}</td>
            <td>{{ $p->jk }}</td>
            <td>{{ $p->AlamatLengkap }}</td>
            <td>{{ $p->agama }}</td>
            <td>{{ $p->asalSMP }}</td>
            <td>{{ $p->jurusan }}</td>
            <td class="text-center">
                <form action="{{ route('ppdb.destroy',$p->id) }}" method="POST">

                   <a class="btn btn-info btn-sm" href="{{ route('ppdb.show',$p->id) }}">Show</a>

                    <a class="btn btn-primary btn-sm" href="{{ route('ppdb.edit',$p->id) }}">Edit</a>

                    @csrf
                    @method('DELETE')

                    <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

    {!! $ppdb->links() !!}

@endsection