<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login </title>
    <link href="{{asset('sbadmin')}}/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="{{asset('sbadmin')}}/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-primary" >

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-5 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5 "style="background-color: #f39;" >
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-sm-6 d-none d-lg-block"></div>
                            <div class="col-lg-12">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-900 mb-4 text-white" >Login</h1>
                                    </div>
                                    
                                    <form class="user" action="{{ route('login') }}" method="POST">
                                        @csrf
                                        
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user"
                                                id="exampleInputEmail" name="email"
                                                placeholder="Masukan email">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user"
                                                id="exampleInputPassword" name="password" placeholder="Masukkan password">
                                        </div>
                                        
                                        <button class="btn btn-user text-white btn-block bg-primary text-white" type="submit">
                                            Login
                                        </button>
                                    </form>
                                    <hr>
                                    <div class="text-center " >
                                        <a class="medium" style="color: #f39;" href="#">Buat Akun</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    
<script src="{{asset('sbadmin')}}/jquery/jquery.min.js"></script>
<script src="{{asset('sbadmin')}}/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{asset('sbadmin')}}/jquery-easing/jquery/jquery.easing.min.js"></script>
<script src="{{asset('sbadmin')}}/js/sb-admin-2.min.js"></script>

</body>

</html>