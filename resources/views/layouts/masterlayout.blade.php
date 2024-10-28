<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap"
        rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Quick post</title>
</head>

<body>
    <div class="container-fluid navbar-main">
        <div class="container navbar-sub d-flex p-0">
            <div class="logo-main">
                <a href="/">
                    <img src="https://quickpostpk.com/uploads/settings/202410271347319460.webp"
                        class="img-fluid w-100 brand-logo" alt="">
                </a>
            </div>
            <div class="menus-main">
                <ul class="d-flex navbar-menu">
                    <li><a href="/" class="pages-title">Home</a></li>
                    <li><a href="/pricing" class="pages-title">Pricing</a></li>
                    <li><a href="/tracking" class="pages-title">Tracking</a></li>
                    <li><a href="/about" class="pages-title">About</a></li>
                    <li><a href="/contact" class="pages-title">Contact</a></li>

                </ul>
            </div>
            <div class="navbar-buttons">
                <div class="">
                    <p class="login-title">Login</p>
                </div>
                <div class="register-button pages-title">Register</div>

            </div>
        </div>
    </div>
    @yield('content')

    <div class="container-fluid footer-main">
        <div class="container footer-sub">
            <div class="footer-part">
                <div class="footer-logo">
                    <img src="https://quickpostpk.com/uploads/settings/202410221724378175.webp" class="img-fluid w-100"
                        alt="">
                </div>
                <div class="">
                    <p class="footer-para">Fastest platform with all courier service features. Help you start, run and
                        grow your courier service.</p>
                </div>
            </div>
            <div class="footer-part">
                <h3 class="footer-h3">Available Services </h3>
                <div class="">
                    <a href="" class="footer-linklist">E-Commerce delivery</a><br>
                    <a href="" class="footer-linklist">Pick & drop</a><br>
                    <a href="" class="footer-linklist">Packing</a><br>
                    <a href="" class="footer-linklist">Warehousing</a>
                </div>
            </div>
            <div class="footer-part">
                <h3 class="footer-h3">About</h3>
                <div class="">
                    <a href="" class="footer-linklist">FAQ</a><br>
                    <a href="" class="footer-linklist">About us</a><br>
                    <a href="" class="footer-linklist">Contact us</a><br>
                    <a href="" class="footer-linklist">Privacy And Policy</a><br>
                    <a href="" class="footer-linklist">Terms of use</a>
                </div>
            </div>
            <div class="footer-part">
                <h3 class="footer-h3">Contact Us</h3>
                <div class="">
                    <p class="footer-para">You can contact with us through following.</p>
                </div>
                <div class="icon-footer">
                    <p class="text-light"><i class="bi bi-envelope-fill"></i></p>
                    <a href="" class="footer-linklist">abc123@abc.com</a>
                </div>
                <div class="icon-footer">
                    <p class="text-light"><i class="bi bi-telephone-fill"></i></p>
                    <a href="" class="footer-linklist">123456789</a>

                </div>
                <div class="icon-footer">
                    <p class="text-light"><i class="bi bi-geo-alt-fill"></i></p>
                    <a href="" class="footer-linklist">Johar Town Phase 2 Lahore,pakistan</a>

                </div>
            </div>
        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.3/dist/umd/popper.min.js"
        integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous">
    </script>
    <script src="{{ asset('script/script.js') }}"></script>
</body>

</html>
