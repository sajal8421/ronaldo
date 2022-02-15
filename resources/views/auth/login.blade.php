<!DOCTYPE html>
<html lang="zxx">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Directory</title>


    <link rel="stylesheet" href="{{ asset('backend/css/bootstrap.min.css') }}" />


    <link rel="stylesheet" href="{{ asset('backend/css/style.css') }}" />
</head>

<body class="crm_body_bg">


    <section>

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="modal-content cs_modal white_box">
                        <div class="modal-header justify-content-center theme_bg_1">
                            <h5 class="modal-title text_white">Log in</h5>
                        </div>
                        <div class="modal-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <input id="email" placeholder="Enter Your Email" type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="form-group">
                                    <input id="password" placeholder="Enter your Password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="current-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn_1 full_width text-center">Log in</button>
                                <p>Need an account? <a data-toggle="modal" data-target="#sing_up"
                                        data-dismiss="modal" href="{{ route('register') }}"> Sign Up</a></p>
                                <div class="text-center">
                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </form>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </section>


</body>

</html>

