@extends('admin.bawah')
@section('konten')
<form action="/updatepetugas/{{$main->id_petugas}}" method="POST" enctype="multipart/form-data">
    @csrf
<div class="card shadow mb-4">
    <div class="card-header py-3" style="background: #f39">
        <h4 class="m-0 text-white">Edit Data Petugas</h4>
    </div>
    <div class="card-body">
        <div class="form row">
                
            {{-- NAMA --}}
            <div class="form-group col-sm-6">
                <label for="formGroupExampleInput2">Nama Petugas</label>
                <input name="nama_petugas" type="text" class="form-control" id="formGroupExampleInput2" value="{{$main->nama_petugas}}">
                @error('nama_petugas')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
              </div>

            {{-- TEMPAT LAHIR --}}
            <div class="form-group col-sm-6">
                <label for="formGroupExampleInput">Username</label>
                <input name="username" type="text" class="form-control" id="formGroupExampleInput" value="{{$main->username}}">
                @error('username')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
              </div>

              {{-- Tanggal Lahir --}}
              <div class="form-group col-sm-6">
                <label for="formGroupExampleInput2">Pasword</label>
                <input name="password" type="text" class="form-control" id="formGroupExampleInput2" value="{{$main->password}}">
                @error('password')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
              </div>

              {{-- Alamat Rumah --}}
              <div class="form-group col-sm-6">
                <label for="formGroupExampleInput">Status Petugas (1 = aktif, 2 = tidak aktif)</label>
                <div class="input-group">
                  <select class="custom-select" id="inputGroupSelect02" name="status" >
                    {{-- <option selected>{{$main->status}}</option> --}}
                    <option value="1">1</option>
                    <option value="2">2</option>
                  </select>
                </div>
                @error('status')
                <small class="form-text text-danger">{{$message}}</small>
                @enderror
              </div>

            </div>
            <br>
            <button type="submit" class="btn btn-success " class="text-left" >Edit</button>
          </form>


    </div>
</div>
  <br>
    <a href="/petugas" type="button" class="btn btn-primary " style="float: right;">Kembali</a>
    <br>
    <br>
    
@endsection