<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <title></title>
</head>


<header>
    <a href="#" class="brand">Webcam</a>
    <div class="menu-btn"></div>

    <div class="navigation">
        <div class="navigation-items">
            <a href="{{route('register')}}">Sign in</a>
        </div>
    </div>
</header>
<body>
<div class="welcome">


<section class="home">
    <video class="video-slide active" src={{ asset('videos/2.mp4') }} autoplay muted loop></video>
    <video class="video-slide" src={{ asset('videos/3.mp4') }} autoplay muted loop></video>
    <video class="video-slide" src={{ asset('videos/2.mp4') }} autoplay muted loop></video>
    <div class="content active">
        <h1>Wonderful.<br><span>Girls</span></h1>
        <p>Best girls from middle Asia are waiting for you</p>
        <a href="#">View</a>
    </div>
    <div class="content">
        <h1>Wonderful.<br><span>Girls</span></h1>
        <p>Best girls from middle Asia are waiting for you</p>        <a href="#">View</a>
    </div>
    <div class="content">
        <h1>Wonderful.<br><span>Girls</span></h1>
        <p>Best girls from middle Asia are waiting for you</p>        <a href="#">View</a>
    </div>

    <div class="slider-navigation">
        <div class="nav-btn active"></div>
        <div class="nav-btn"></div>
        <div class="nav-btn"></div>

    </div>
</section>

<script type="text/javascript">
    // responsive nav menu
    const menuBtn = document.querySelector(".menu-btn");
    const navigation = document.querySelector(".navigation");

    menuBtn.addEventListener("click", () => {
        menuBtn.classList.toggle("active");
        navigation.classList.toggle("active");
    });

    // slider nav
    const btns = document.querySelectorAll(".nav-btn");
    const slides = document.querySelectorAll(".video-slide");
    const contents = document.querySelectorAll(".content");

    const sliderNav = function (manual) {
        btns.forEach((btn) => {
            btn.classList.remove("active");
        });

        slides.forEach((slide) => {
            slide.classList.remove("active");
        });

        contents.forEach((content) => {
            content.classList.remove("active");
        });

        btns[manual].classList.add("active");
        slides[manual].classList.add("active");
        contents[manual].classList.add("active");
    };

    btns.forEach((btn, i) => {
        btn.addEventListener("click", () => {
            sliderNav(i);
        });
    });
</script>
</div>
</body>
</html>
