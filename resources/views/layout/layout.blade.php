<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!--Favicon link-->
    <link rel="icon" href="{{asset('favicon.svg')}}" />

    <!--CSS Link-->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" />

    <!--Plus Jakarta Sans Google Font Link-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&family=Plus+Jakarta+Sans:ital,wght@0,200..800;1,200..800&display=swap" rel="stylesheet">

    <!--Bootstrap Link-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <!--Bootstrap Icons Link-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.13.1/font/bootstrap-icons.min.css">

    <!--AOS Animation-->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
</head>

<body>
    <!--Navbar-->
    <nav class="navbar navbar-expand-lg bg-body-primary fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{route('index')}}"><span>ABC</span> Academy</a>
            <button class="navbar-toggler collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon"><i class="bi bi-list"></i></span>
                <span class="close-icon"><i class="bi bi-x"></i></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav ms-auto">
                    <a href="{{route('index') }}" class="nav-link  {{ Route::is('index') ? 'active' : ''   }}" aria-current="page" href="#">Home</a>
                    <a class="nav-link {{Route::is('about') ? 'active' : ''}}" href="/about">About</a>
                    <a class="nav-link {{Route::is('departments') ? 'active' : ''}}" href="/departments">Departments</a>
                    <a class="nav-link {{Route::is('contacts')? 'active' : ''}}" href="/contacts">Contacts</a>
                    <a class="nav-link {{Route::is('news') ? 'active' : ''}}" href="/news-updates">News & Events</a>
                </div>

                <div class="navbar-nav ms-auto">
                    <a href="/enroll" class="nav-btn">
                        Enroll Now
                    </a>
                </div>
            </div>
        </div>
    </nav>

    @yield('content')


    <div class="news-letter">
        <div class="container">
            <div class="news-letter-content">
                <h5>Subscribe to Our Newsletter</h5>
                <form action="#">
                    <input type="email" name="email" placeholder="Your email address" />
                    <button class="news-letter-btn" type="submit">Subscribe</button>
                </form>
            </div>
        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="row row-cols-1 row-cols-md-3 footer-row">
                <div class="col-md-4 abc-col">
                    <a class="navbar-brand" href="#"><span>ABC</span> Academy</a>
                    <p>We empower students with skills, curiosity and character needed to navigate and thrive in an evercharning World.</p>
                </div>
                <div class="col-md-4 explore-col">
                    <h4>Explore</h4>
                    <div class="row row-cols-2 rows-cols-md-2 g-3">
                        <div class="col">
                            <a href="{{route('index')}}"><i class="bi bi-dot"></i>Home</a>
                        </div>
                        <div class="col">
                            <a href="{{route('about')}}"><i class="bi bi-dot"></i>About</a>
                        </div>
                        <div class="col">
                            <a href="{{route('departments')}}"><i class="bi bi-dot"></i>Departments</a>
                        </div>
                        <div class="col">
                            <a href="{{route('contacts')}}"><i class="bi bi-dot"></i>Contacts</a>
                        </div>
                        <div class="col">
                            <a href="{{route('news')}}"><i class="bi bi-dot"></i>News & Events</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="footer-links-div">
                        <h4>Our Socials</h4>
                        <p>Follow us on our social networks for more news and updates about ABC Academy.</p>
                    </div>
                    <div class="footer-links">

                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-threads"></i></a>
                    </div>
                </div>

            </div>
            <div class="footer-end">
                <div class="row row-cols-1 row-cols-md-2">
                    <div class="col">
                        <p>&copy {{now()->year}}.All Rights Reserved</p>
                    </div>
                    <div class="col">
                        <p>Designed & Developed by <a href="https://instagram.com/edger_e_m">Eddie IT</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--JS Link-->
    <script src="{{asset('js/js.js')}}"></script>

    <!--Bootstrap JS-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>

    <!--AOS-Animation JS-->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
        AOS.init();
    </script>
</body>

</html>