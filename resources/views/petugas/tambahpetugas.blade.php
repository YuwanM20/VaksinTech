@extends('admin.bawah')
@section('konten')
<form action="/savepetugas" method="POST" enctype="multipart/form-data">
    @csrf
<div class="card shadow mb-4">
    <div class="card-header py-3 bg-primary">
        <h6 class="m-0 text-white">Tambah Data Petugas</h6>
    </div>
    <div class="card-body">

        <div class="form row">
                
            {{-- NAMA --}}
            <div class="form-group col-sm-6">
                <label for="formGroupExampleInput2">Nama Petugas</label>
                <input name="nama_petugas" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Nama">
                @error('nama_petugas')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
              </div>

            {{-- TEMPAT LAHIR --}}
            <div class="form-group col-sm-6">
                <label for="formGroupExampleInput">Username</label>
                <input name="username" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Username">
                @error('username')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
              </div>

              {{-- pasword --}}
              <div class="form-group col-sm-6">
                <label for="formGroupExampleInput2">Pasword</label>
                <input name="password" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan password">
                @error('password')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
              </div>

              {{-- stastu --}}


            </div>
            <br>
            <button type="submit" class="btn btn-success " class="text-left" >Tambah</button>
          </form>
    </div>

    
</div>


<a href="/petugas" type="button" class="btn text-white" style="background: #f39; float: right">Kembali</a>
    <br>

@endsection