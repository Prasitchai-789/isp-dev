<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>iofrm</title>
    {{-- <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-style.css">
    <link rel="stylesheet" type="text/css" href="css/iofrm-theme16.css"> --}}

    <link rel="stylesheet" href="{{ asset('assets/css/iofrm/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/iofrm/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/iofrm/iofrm-style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/iofrm/iofrm-theme16.css') }}">
</head>
<body>
    <div class="form-body without-side">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="{{ asset('assets/images/iofrm/logo-light.svg') }}" alt="Logo">
                </div>
            </a>
        </div>
        <div class="iofrm-layout">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="{{ asset('assets/images/iofrm/graphic3.svg') }}" alt="">

                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Login to account</h3>
                        <p>Access to the most powerfull tool in the entire design and web industry.</p>
                        <form>
                            <input class="form-control" type="text" name="username" placeholder="E-mail Address" required>
                            <input class="form-control" type="password" name="password" placeholder="Password" required>
                            <div class="form-button">
                                <button id="submit" type="submit" class="ibtn">Login</button> <a href="forget16.html">Forget password?</a>
                            </div>
                        </form>
                        <div class="other-links social-with-title">
                            <div class="text">Or login with</div>
                            <a href="#"><i class="fab fa-facebook-f"></i>Facebook</a><a href="#"><i class="fab fa-google"></i>Google</a><a href="#"><i class="fab fa-linkedin-in"></i>Linkedin</a>
                        </div>
                        <div class="page-links">
                            <a href="register16.html">Register new account</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
{{-- <script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/main.js"></script> --}}

<script src="{{ asset('assets/js/iofrm/cleave.min.js') }}"></script>
<script src="{{ asset('assets/js/iofrm/jquery.min.js') }}"></script>
<script src="{{ asset('assets/js/iofrm/main.js') }}"></script>
<script src="{{ asset('assets/js/iofrm/popper.min.js') }}"></script>
</body>
</html>
