<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>VaksinTech</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('Resi')}}/assets/img/icon3.png" rel="icon">
  <link href="{{asset('Resi')}}/assets/img/icon3.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('Resi')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{asset('Resi')}}/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="{{asset('Resi')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{asset('Resi')}}/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="{{asset('Resi')}}/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="{{asset('Resi')}}/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="{{asset('Resi')}}/assets/vendor/flaticon-covid/font/flaticon.css" rel="stylesheet">
  <link href="{{asset('Resi')}}/assets//vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  

  <!-- Template Main CSS File -->
  <link href="{{asset('Resi')}}/assets/css/style.css" rel="stylesheet">


</head>

<body>
    <section id="counts" class="counts section-bg">
        <div class="container">
          <h1 class="text-center" style="color: #f39;">Tambah Data Kamu Yuk!</h1>
     

<form action="/fnsavewarga" method="POST" enctype="multipart/form-data">
    @csrf

<div class="card shadow mb-4">
    <div class="card-header py-3 "style="background-color: #f39;">
        <h4 class="m-0  text-white">Tambah Data Warga</h4>
    </div>
    <div class="card-body" ">

        <div class="form row">

                     {{-- NAMA --}}
                     <div class="form-group col-sm-6">
                        <br>
                      <label for="formGroupExampleInput2">Nama</label>
                      <input name="nama_warga" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan Nama">
                      @error('nama_warga')
                      <small class="form-text text-danger">{{$message}}</small>
                  @enderror
                    </div>


                      {{-- NIK --}}
                      <div class="form-group col-sm-6">
                        <br>
                        <label for="formGroupExampleInput">Nik</label>
                        <input name="nik" type="text" class="form-control" id="formGroupExampleInput" placeholder="Masukkan Nik">
                        @error('nik')
                          <small class="form-text text-danger">{{$message}}</small>
                      @enderror
                      </div>

          {{-- COUNTRIES/NEGARA        --}}
        <div class="form-group col-sm-6">
            <br>
            <label for="formGroupExampleInput">Countries/Negara</label>
            <input class="form-control" list="datalistOptions" name="negara" id="exampleDataList" placeholder="search your Countries">
            <datalist id="datalistOptions">
              @foreach ($t_countries as $c)
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
            <br>
               <label for="formGroupExampleInput2">Tanggal Lahir</label>
               <input name="tanggal_lahir" type="date" class="form-control" id="formGroupExampleInput2" placeholder="Masukan Tanggal Lahir">
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
                <br>
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else!</small>
            </div>

             {{-- No HP --}}
             <br>
             <div class="form-group col-sm-6">
                <br>
               <label for="formGroupExampleInput2">No HP</label>
               <input name="no_hp" type="text" class="form-control" id="formGroupExampleInput2" placeholder="Masukkan No HP">
               @error('no_hp')
               <small class="form-text text-danger">{{$message}}</small>
           @enderror
             </div>

           </div>
           <br>
           <button type="submit" class="btn btn-success " class="text-left" >Tambah</button>
         </form>

        </div>
    </div>
    <a href="/" type="button" class="btn text-white" style="background: #f39; float: right">Kembali</a>
        <br>


  <!-- Vendor JS Files -->
  <script src="{{asset('Resi')}}/assets/vendor/purecounter/purecounter_vanilla.js"></script>
  <script src="{{asset('Resi')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{asset('Resi')}}/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="{{asset('Resi')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{asset('Resi')}}/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="{{asset('Resi')}}/assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="{{asset('Resi')}}/assets/js/main.js"></script>

</div>
<br>
<br>
<br>

    </section>
    
  
</body>

</html>