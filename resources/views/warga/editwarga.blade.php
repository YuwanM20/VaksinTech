@extends('admin.bawah')
@section('konten')

<form action="/updatewarga/{{$main->nik}}" method="POST" enctype="multipart/form-data">
    @csrf

<div class="card shadow mb-4">
    <div class="card-header py-3 bg-primary">
        <h4 class="m-0  text-white">Edit Data Warga</h4>
    </div>
    <div class="card-body">

        <div class="form row">

                     {{-- NAMA --}}
                     <div class="form-group col-sm-6">
                      <label for="formGroupExampleInput2">Nama</label>
                      <input name="nama_warga" type="text" class="form-control" id="formGroupExampleInput2" value="{{$main->nama_warga}}">
                      @error('nama_warga')
                      <small class="form-text text-danger">{{$message}}</small>
                  @enderror
                    </div>


                      {{-- NIK --}}
            <div class="form-group col-sm-6">
              <label for="formGroupExampleInput">Nik</label>
              <input name="nik" type="text" class="form-control" id="formGroupExampleInput" value="{{$main->nik}}">
              @error('nik')
                <small class="form-text text-danger">{{$message}}</small>
            @enderror
            </div>

          {{-- COUNTRIES/NEGARA        --}}
        <div class="form-group col-sm-6">
            <label for="formGroupExampleInput">Countries/Negara</label>
            <input class="form-control" list="datalistOptions" name="negara" id="exampleDataList" value="{{$main->negara}}">
            <datalist id="datalistOptions">
              @foreach ($countries as $c)
              <option value="+{{$c->country_code}} {{$c->name}}">
                @endforeach
            </datalist>
          </div>

          {{-- KABUPATEN/STATE --}}
          {{-- <div class="form-group col-sm-6">
            <label for="formGroupExampleInput">Kabupaten/States</label>
            <div class="input-group">
              <select class="custom-select" id="inputGroupSelect02" name="nik">
                <option selected>Pilih</option>
               
                <option value=""></option>

              </select>
              
            </div>
            @error('priode')
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
          </div> --}}


           {{-- TEMPAT LAHIR --}}
           {{-- <div class="form-group col-sm-6">
               <label for="formGroupExampleInput">Tempat Lahir</label>
               <input name="tempat_lahir" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukan Tempat Lahir">
               @error('tempat_lahir')
               <small class="form-text text-danger">{{$message}}</small>
           @enderror
             </div> --}}

             {{-- Tanggal Lahir --}}
           <div class="form-group col-sm-6">
               <label for="formGroupExampleInput2">Tanggal Lahir</label>
               <input name="tanggal_lahir" type="date" class="form-control" id="formGroupExampleInput2" value="{{$main->tanggal_lahir}}">
               @error('tanggal_lahir')
               <small class="form-text text-danger">{{$message}}</small>
           @enderror
             </div>

             {{-- Alamat Rumah
             <div class="form-group col-sm-6">
               <label for="formGroupExampleInput2">Alamat Rumah</label>
               <input name="alamat_rumah" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Alamat Rumah">
               @error('alamat_rumah')
               <small class="form-text text-danger">{{$message}}</small>
           @enderror
             </div> --}}

             <div class="form-group col-sm-6">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" value="{{$main->email}}" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else!</small>
            </div>

             {{-- No HP --}}
             <div class="form-group col-sm-6">
               <label for="formGroupExampleInput2">No HP</label>
               <input name="no_hp" type="text" class="form-control" id="formGroupExampleInput2" value="{{$main->no_hp}}" >
               @error('no_hp')
               <small class="form-text text-danger">{{$message}}</small>
           @enderror
             </div>

           </div>
           <br>
           <button type="submit" class="btn btn-success " class="text-left" >Edit</button>
         </form>

        </div>
    </div>
    <a href="/datawarga" type="button" class="btn text-white" style="background: #f39; float: right">Kembali</a>
        <br>


@endsection