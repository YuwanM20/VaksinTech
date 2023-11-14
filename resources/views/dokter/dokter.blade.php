@extends('admin.bawah')
@section('konten')

{{-- <a href="/tambahwarga" type="button" class="btn text-white" style="background: #f39">Tambah data</a> --}}

<form class=" d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search" 
action="/dataadmin" method="GET">
<div class="input-group">
    <input type="text" class="form-control border-0 small text-dark bg-white" name="cari" placeholder="Cari Namamu"
        aria-label="Search" aria-describedby="basic-addon2">
    <div class="input-group-append">
        <button class="btn bg-success" type="submit">
            <i class="text-white">Cari</i>
        </button>
    </div>
</div>
</form>
<br>
<br>
<div class="card shadow mb-4">
    <div class="card-header py-3 bg-success">
        <h4 class="m-0 text-white">Tabel Data ADMIN</h4>
    </div>
    <div class="card-body">

        <table class="table table-bordered">
            <thead class="thead bg-success">
                <tr class="text-white">
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">email</th>
                <th scope="col">Register</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>

              @foreach ($dokter as $i)
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$i->name}}</td>
              <td>{{$i->email}}</td>
              <td>{{$i->created_at}}</td>
              <td>  
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$i->id}}">
                Delete</button>
              </td>
            </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>


      <!-- Modal -->
      @foreach ($dokter as $i)
<div class="modal fade" id="hapus{{$i->id}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
       kaka ingin menghapus nama: {{$i->name}}
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="/hapusadmin/{{$i->id}}" class="btn btn-danger">Hapus</a>
      </div>
    </div>
  </div>
</div>
@endforeach

@endsection