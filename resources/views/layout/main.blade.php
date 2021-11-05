<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <title>@yield('title')</title>
</head>

<body>
    <header>
        <nav class="navbar navbar-light">
            <div class="container-fluid">
                <a class="navbar-brand" style="margin-left: 20px">
                    <img src="{{ asset('img/greenlogo.png') }}" alt="Logo" width="100px">
                </a>
                <div class="menu d-flex">
                    <li><a href="" class="mx-3">Home</li></a>
                    <li><a href="" class="mx-3">Contact</li></a>
                </div>
            </div>
        </nav>
    </header>
    <main>
        @yield('main-content')
    </main>
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h5>Address</h5>
                </div>
                <div class="col-md-4">
                    <h5>Contact</h5>
                    <p>087984353242</p>
                </div>
                <div class="col-md-4">
                    <h5>Social Media</h5>
                    <p>Intagram</p>
                    <p>Facebook</p>
                    <p>Youtube</p>
                </div>
            </div>
        </div>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        // Transition effect for navbar 
        if (window.location.pathname === '/') {
            $(window).scroll(function() {
                // checks if window is scrolled more than 500px, adds/removes solid class

                if ($(this).scrollTop() > 500) {
                    $('nav').addClass('solid');
                } else {
                    $('nav').removeClass('solid');
                }
            });
        } else {
            $('nav').addClass('solid');
        }
    });
</script>

</html>
