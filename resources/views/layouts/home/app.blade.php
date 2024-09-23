<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link rel="stylesheet" href="{{ asset('assets/home/css/styles.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/home/css/all.min.css') }}">
    <title>موقع مرضى الاورام</title>
</head>

<body>
    <!-- NAVBAR -->
    <nav>

        <div class="bars-menu">
            <i class="fas fa-bars"></i>
        </div>
        <ul class="nav-items">
            <li class="nav-item">
                <a href="/" class="nav-link">الصفحة الرئيسية</a>
            </li>
            <li class="nav-item">
                <a href="/#about" class="nav-link">عن المنصة</a>
            </li>
            <li class="nav-item">
                <a href="/#serves" class="nav-link">خدماتنا </a>
            </li>
            <li class="nav-item">
                <a href="/#hasptal" class="nav-link">المستشفيات المتوفرة </a>
            </li>
            <li class="nav-item">
                <a href="{{ 'posts' }}" class="nav-link">المنشورات</a>
            </li>
        </ul>
        <div class="logo">
            <h4>اورام</h4>
        </div>
    </nav>

    @yield('content')



    <footer>
        <div class="footer-section">
            <p>جميع الحقوق محفوظة لمنصة الاورام</p>
            <div class="socials">
                <i class="fab fa-twitter"></i>
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
            </div>
        </div>
    </footer>

</body>

</html>
