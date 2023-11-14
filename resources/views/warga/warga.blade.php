@extends('admin.bawah')
@section('konten')
<a href="/tambahwarga" type="button" class="btn text-white" style="background: #f39">Tambah data</a>
<a href="/addvaksin" type="button" class="btn text-white" style="background: #f39">Tambah data vaksin</a>

<form class=" d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" 
action="/datawarga" method="GET">
<div class="input-group">
    <input type="text" class="form-control border-0 small text-dark bg-white" name="cari" placeholder="Cari Namamu"
        aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
        <button class="btn  bg-primary" type="submit">
            <i class="text-white">Cari</i>
        </button>
    </div>
</div>
</form>
<br>
<br>
<div class="card shadow mb-4">
    <div class="card-header py-3 bg-primary">
        <h4 class="m-0 text-white">Tabel Data Warga</h4>
    </div>
    <div class="card-body">

        <table class="table table-bordered">
            <thead class="thead bg-primary"">
                <tr class="text-white">
                <th scope="col">#</th>
                <th scope="col">Nik</th>
                <th scope="col">Nama</th>
                <th scope="col">Negara & Tanggal Lahir</th>
                <th scope="col">email</th>
                <th scope="col">NoHP</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($t_warga as $i)
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$i->nik}}</td>
              <td>{{$i->nama_warga}}</td>
              <td>{{$i->negara}},  {{$i->tanggal_lahir}}</td>
              <td>{{$i->email}}</td>
              <td>{{$i->no_hp}}</td>
              <td>  
              <a href="/editwarga/{{$i->nik}}"><button type="button" class="btn btn-success">edit</button></a>
              <br>
              <br>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$i->nik}}">
                Delete</button>
              </td>
            </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>


      <!-- Modal -->
      @foreach ($t_warga as $i)
<div class="modal fade" id="hapus{{$i->nik}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
       kaka ingin menghapus nama: {{$i->nama_warga}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/hapuswarga/{{$i->nik}}" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
@endforeach




@endsection