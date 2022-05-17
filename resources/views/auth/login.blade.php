<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
    <meta name="author" content="Coderthemes">

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ asset('assets/images/logo_me.png') }}">
    <!-- App title -->
    <title>SD PUPUK KUJANG CIKAMPEK - Login</title>

    <!-- App css -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/icons.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}" />


    <script src="{{ asset('assets/js/modernizr.min.js') }}"></script>
    <style>
        .account-logo-box {
            background-color: #359e78;
        }

    </style>
</head>


<body class="bg-transparent">

    <!-- HOME -->
    <section>
        <div class="container-alt">
            <div class="row">
                <div class="col-sm-12">

                    <div class="wrapper-page">

                        <div class="m-t-40 account-pages">
                            <div class="text-center account-logo-box">
                                <div class="m-t-10 m-b-10">
                                    <a href="{{ route('home') }}" class="text-success">
                                        <span><img src="{{ asset('assets/images/logo_me.png') }}" alt=""
                                                height="36"></span>
                                        <h2 style="color:#FFF">LOGIN</h2>
                                    </a>
                                </div>
                                <!--<h4 class="text-uppercase font-bold m-b-0">Sign In</h4>-->
                            </div>
                            <div class="account-content">
                                <?php $setting = App\Models\Setting::first(); ?>
                                @if ($setting && $setting->status_login == 1)
                                    <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                                        @csrf

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control @error('email') is-invalid @enderror"
                                                    name="email" type="text" required="" placeholder="E-Mail">

                                                @error('email')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <input class="form-control @error('password') is-invalid @enderror"
                                                    type="password" required="" name="password" placeholder="Password">
                                            </div>
                                        </div>

                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="checkbox checkbox-success pl-1">
                                                    <input id="checkbox-signup" type="checkbox"
                                                        {{ old('remember') ? 'checked' : '' }} name="remember">
                                                    <label for="checkbox-signup">
                                                        Remember me
                                                    </label>
                                                </div>

                                            </div>
                                        </div>

                                        {{-- @if (Route::has('password.request'))
                                        <div class="form-group text-center m-t-30">
                                            <div class="col-sm-12">
                                                <a href="{{ route('password.request') }}" class="text-muted"><i class="fa fa-lock m-r-5"></i> Lupa Password ?</a>
                                            </div>
                                        </div>
                                        @endif --}}

                                        <div class="form-group account-btn text-center m-t-10">
                                            <div class="col-12">
                                                <button
                                                    class="btn w-md btn-bordered btn-danger waves-effect waves-light"
                                                    type="submit">Log In</button>
                                            </div>
                                        </div>

                                    </form>
                                @else
                                    <div class="text-center m-b-20">
                                        <h3>Maaf !</h3>
                                        <p class="text-muted font-13 m-t-10"> Login sedang ditutup harap dibuka kembali
                                            jam 15.00 pengumuman berkas kelulusan.</p>
                                    </div>
                                @endif

                                <div class="clearfix"></div>

                            </div>
                        </div>
                        <!-- end card-box-->


                        <div class="row m-t-50">
                            <div class="col-sm-12 text-center">
                                <p class="text-muted">Belum mendaftar ? <a href="{{ route('register') }}"
                                        class="text-primary m-l-5"><b>Daftar</b></a></p>
                            </div>
                        </div>

                    </div>
                    <!-- end wrapper -->

                </div>
            </div>
        </div>
    </section>
    <!-- END HOME -->

    <script>
        var resizefunc = [];
    </script>

    <!-- jQuery  -->
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/detect.js') }}"></script>
    <script src="{{ asset('assets/js/fastclick.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.blockUI.js') }}"></script>
    <script src="{{ asset('assets/js/waves.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.slimscroll.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.scrollTo.min.js') }}"></script>

    <!-- App js -->
    <script src="{{ asset('assets/js/jquery.core.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.app.js') }}"></script>
    <script src="{{ asset('assets/js/anticopas.js') }}"></script>

</body>

</html>
