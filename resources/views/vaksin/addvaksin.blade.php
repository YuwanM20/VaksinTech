@extends('admin.bawah')
@section('konten')
<form action="/savevaksin" method="POST" enctype="multipart/form-data">
    @csrf
<div class="card shadow mb-4">
    <div class="card-header py-3" style="background: #f39">
        <h4 class="m-0 text-white">Tambah Data Vaksinasi</h4>
    </div>
    <div class="card-body">

        <div class="form row">

                              {{-- nik --}}
                              <div class="form-group col-sm-6">
                                <label for="formGroupExampleInput">Nik warga</label>
                                <div class="input-group">
                                  <select class="custom-select" id="inputGroupSelect02" name="nik">
                                    <option selected>Pilih</option>
                                    @foreach ($warga as $v)
                                    <option value="{{$v->nik}}">{{$v->nik}} - {{$v->nama_warga}}</option>
                                    @endforeach
                                  </select>
                                  
                                </div>
                                @error('priode')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                              </div>

                              {{-- <div class="form-group col-sm-6">
                                <label for="formGroupExampleInput">Nik</label>
                                <input name="nik" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nik">
                                @error('nik')
                                  <small class="form-text text-danger">{{$message}}</small>
                              @enderror
                              </div> --}}

                              {{-- dokter --}}
                              <div class="form-group col-sm-6">
                                <label for="formGroupExampleInput">Dokter</label>
                                <div class="input-group">
                                  <select class="custom-select" id="inputGroupSelect02" name="id_petugas">
                                    <option selected>Pilih</option>
                                    @foreach ($petugas as $v)
                                    <option value="{{$v->id_petugas}}">{{$v->nama_petugas}}</option>
                                    @endforeach
                                   
                                  </select>
                                </div>
                                @error('priode')
                                <small class="form-text text-danger">{{$message}}</small>
                                @enderror
                              </div>


          {{-- tgl vaksin --}}
          <div class="form-group col-sm-6">
            <label for="formGroupExampleInput2">Tanggal vaksin</label>
            <input name="tanggal_vaksin" type="datetime-local" class="form-control" placeholder="Masukan Tanggal Lahir">
            @error('tanggal_vaksin')
            <small class="form-text text-danger">{{$message}}</small>
        @enderror
          </div>

          {{-- priode --}}
          {{-- <div class="form-group col-sm-6">
            <label for="formGroupExampleInput">Periode</label>
            <div class="input-group">
              <select class="custom-select" id="inputGroupSelect02" name="priode">
                <option selected>Pilih</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            @error('priode')
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
          </div> --}}

           {{-- deskripsi--}}
           <div class="form-group col-sm-6">
            <label for="formGroupExampleInput">Dosis Vaksin</label>
            <div class="input-group">
              <select class="custom-select" id="inputGroupSelect02" name="deskripsi_priode">
                <option selected>Pilih Dosis Vaksin</option>
                <option value="1 - Sinovac">1 - Sinovac</option>
                <option value="2 - AstraZeneca">2 - AstraZeneca</option>
                <option value="3 - Booster">3 - Booster</option>
                <option value="4 - Bosster Zifivax (Full dose)">4 - Bosster Zifivax (Full dose)</option>
                <option value="5 - UMBRELLA VAKSIN CORPORATION">5 - UMBRELLA VAKSIN CORPORATION</option>
              </select>
            </div>
            @error('deskripsi_priode')
            <small class="form-text text-danger">{{$message}}</small>
            @enderror
          </div>

                

            </div>
            <br>
            <button type="submit" class="btn text-white" style="background: #f39;" >Tambah</button>
          </form>
          
    </div>
</div>

<a href="/datavaksin" type="button" class="btn text-white" style="background: #f39; float: right">Kembali</a>
<br>
<br>
@endsection