@extends('admin.bawah')
@section('konten')
<a href="/tambahpetugas" type="button" class="btn text-white bg-primary">Tambah data</a>
<br>
<br>
<div class="card shadow mb-4">
    <div class="card-header py-3 bg-primary">
        <h4 class="m-0 text-white">Tabel Data Dokter</h4>
    </div>
    <div class="card-body">
      <h6 style="color: #000" >*info status: 1 = aktif, 2 = tidak aktif (Dokter yang ada ditabel sudah aktif)</h6>
          <table class="table table-bordered">
            <thead class="thead bg-primary">
              <tr class="text-white">
                <th scope="col">#</th>
                <th scope="col">Nama Petugas</th>
                <th scope="col">Username</th>
                <th scope="col">status</th>
                <th scope="col">aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($petugas as $p)
              <th scope="row">{{$loop->iteration}}</th>
              <td>{{$p->nama_petugas}}</td>
              <td>{{$p->username}}</td>
              <td>{{$p->status}}</td>
              <td>  
              <a href="/editpetugas/{{$p->id_petugas}}"><button type="button" class="btn btn-success">edit</button></a>
              <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#hapus{{$p->id_petugas}}">
                Delete</button>
              </td>
            </tr>
              @endforeach
            </tbody>
          </table>
    </div>
</div>

@foreach ($petugas as $p)
<!-- Modal -->
<div class="modal fade" id="hapus{{$p->id_petugas}}" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-body">
 kaka ingin menghapus id: {{$p->id_petugas}} - nama: {{$p->nama_petugas}}
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <a href="/hapuspetugas/{{$p->id_petugas}}" class="btn btn-danger">Hapus</a>
</div>
</div>
</div>
</div>
@endforeach


@endsection