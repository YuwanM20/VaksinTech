@extends('admin.bawah')
@section('konten')

<a href="/addvaksin" type="button" class="btn text-white" style="background: #f39">Tambah data</a>
<form class=" d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" 
action="/datavaksinasi" method="GET">
<div class="input-group">
    <input type="text" class="form-control border-0 small text-dark bg-white" name="cari" placeholder="Search for..."
        aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
        <button class="btn " style="background: #f39" type="submit">
            <i class="text-white">Cari</i>
        </button>
    </div>
</div>
</form>
<br>
<br>
<div class="card shadow mb-4">
    <div class="card-header py-3" style="background: #f39">
        <h4 class="m-0  text-white">Tabel Data Vaksinasi</h4>
    </div>
    <div class="card-body">

        <table class="table table-bordered">
            <thead class="thead" style="background: #f39">
                <tr class="text-white">
                <th scope="col">no</th>
                <th scope="col">nik</th>
                <th scope="col">nama warga</th>
                <th scope="col">Tanggal Vaksin</th>
                <th scope="col">Priode Vaksin</th>
                <th scope="col">Dokter</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($t_vaksin as $v)
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$v->nik}}</td>
              <td>{{$v->nama_warga}}</td>
              <td>{{$v->tanggal_vaksin}}</td>
              <td>{{$v->deskripsi_priode}}</td>
              <td>{{$v->nama_petugas}}</td>
              <td> 
                <a href="/edivaksinasi/{{$v->id_petugas}}"><button type="button" class="btn btn-success">edit</button></a>
                <br>
                <br>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$v->id_vaksinasi}}">
                Delete</button>
              </td>
            </tr>
              @endforeach
            </tbody>
          </table>

    </div>
</div>

<!-- Modal -->
@foreach ($t_vaksin as $v)
<div class="modal fade" id="hapus{{$v->id_vaksinasi}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
 kaka ingin menghapus no {{$v->id_vaksinasi}} nama  {{$v->nama_warga}} nik {{$v->nik}}
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <a href="/hapusvaksin/{{$v->id_vaksinasi}}" class="btn btn-danger">Hapus</a>
</div>
</div>
</div>
</div>
@endforeach

@endsection