@extends('admin.bawah')

@section('konten')
<div class="card shadow mb-4">
    <div class=" card-body">
 <h4 class="m-0 text-dark">Selamat Datang admin, admin {{ Auth::user()->name }} sudah makan?</h4>

    
</div>
</div>
@endsection