<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <link rel="stylesheet" href="css/szerkezet.css">
    <title>Cég név</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.6.0.js"
        integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
</head>

<body class="antialiased">
    <div class="bg-gray-100 sm:items-center sm:pt-0">
        <div id="header-contact" class="card-body d-flex justify-content-between bg-secondary text-white ">
            <div class="contact-box">
                <i class="fas fa-envelope"></i>
                <div>
                    <p>E-mail cím:</p>
                    <p>teszt@teszt.com</p>
                </div>
            </div>
            <div class="contact-box">
                <i class="fas fa-phone"></i>
                <div>
                    <p>Telefonszám:</p>
                    <p>+36 20 327-3336</p>
                </div>
            </div>
            <div class="contact-box">
                <i class="fas fa-home"></i>
                <div>
                    <p>Telephely:</p>
                    <p>1173. Bp. Ujlak utca 61.</p>
                </div>
            </div>
        </div>
        <header class="card mb-3">
            <div class="card-body d-flex justify-content-between">
                <a href="{{ url('/home') }}" class="nav-link-basic">Rólunk</a>
                <a href="{{ url('/home') }}" class="nav-link-basic">Áraink</a>
                <a href="{{ url('/home') }}" class="nav-link-basic">Galéria</a>
                <a href="{{ url('/home') }}" class="nav-link-basic">Időpont
                    foglalás</a>

                @if (Route::has('login'))
                <div>
                    @auth
                    <i class="fas fa-user"></i>
                    <a href="{{ url('/home') }}" class="nav-link-aut">Profilom</a>
                    @else
                    <a href="{{ route('login') }}" class="nav-link-aut">Bejelentkezés</a>

                    @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="nav-link-aut">Regisztráció</a>
                    @endif
                    @endauth
                </div>
                @endif
            </div>
            <img src="images/header.jpg" class="h-75 d-inline-block" alt="header_img">
        </header>


        <div class="card-group m-5 pb-5">
            <div class="card">
                <!-- <img src="images/car1.jpg" class="card-img-top" alt="..."> -->
                <i class="fas fa-user"></i>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This content is a little bit longer.</p>

                </div>
            </div>
            <br>
            <div class="card">
                <!-- <img src="images/car1.jpg" class="card-img-top" alt="..."> -->
                <i class="fas fa-user"></i>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This card has supporting text below as a natural lead-in to additional
                        content.</p>

                </div>
            </div>
            <br>
            <div class="card">
                <!-- <img src="images/car1.jpg" class="card-img-top" alt="..."> -->
                <i class="fas fa-user"></i>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal
                        height action.</p>

                </div>
            </div>
            <br>
            <div class="card">
                <!-- <img src="images/car1.jpg" class="card-img-top" alt="..."> -->
                <i class="fas fa-user"></i>
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                        additional content. This card has even longer content than the first to show that equal
                        height action.</p>

                </div>
            </div>
        </div>
    </div>

    <div class="our-company">
        <div class="company-card m-5 pb-5 w-auto" style="width: 18rem;">
            <div class="card-body">
                <img src="images/car1.jpg" alt="..." class="video">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                    additional content. This card has even longer content than the first to show that equal
                    height action.</p>
            </div>
        </div>
    </div>

</body>

<footer>
    <div class="footer-form" style="background-image: url(' images/Contact-form-background.jpg');">
        <form class="contact-card">
            <div class="form-group">
                <label for="nev">Név</label>
                <input type="text" class="form-control" id="nev">
            </div>
            <div class="form-group">
                <label for="email">E-mail cím</label>
                <input type="email" class="form-control" id="email">
            </div>
            <div class="form-group">
                <label for="tel">Telefonszám</label>
                <input type="text" class="form-control" id="tel">
            </div>
            <div class="form-group">
                <label for="uzenet">Üzenet</label>
                <textarea class="form-control" id="textarea" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    <div class="footer-inf">
        <img src="images/logo.jpg" alt="..." class="logo" style="width:15%">
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Error, cum praesentium debitis incidunt dolorum
            earum alias, labore dignissimos quo odio voluptas, velit ut architecto quisquam similique. Velit fugiat modi
            saepe?</p>
    </div>
</footer>

</html>