<div class="row">
    <div class="centered-container">
        <div class="centered-text">
            <h2 class="center">Data PPDB SMK Semangat 45</h2>
        </div>
    </div>
    
    <table class="table table-bordered" border="1">
        <tr>
            <th>No. Daftar</th>
            <th>Nama Lengkap</th>
            <th>JK</th>
            <th>Alamat Lengkap</th>
            <th>Agama</th>
            <th>Asal SMP</th>
            <th>Jurusan</th>
        </tr>
        @foreach ($data as $d)
        <tr>
            <td>{{ $d->id }}</td>
            <td>{{ $d->NamaLengkap }}</td>
            <td>{{ $d->jk }}</td>
            <td>{{ $d->AlamatLengkap }}</td>
            <td>{{ $d->agama }}</td>
            <td>{{ $d->asalSMP }}</td>  
            <td>{{ $d->jurusan }}</td>
        </tr>
        @endforeach
    </table>
</div>
