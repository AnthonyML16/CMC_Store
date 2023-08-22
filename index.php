<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CMC | Online Store</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="img/ico.svg" type="image/x-icon">
    <!-- CSS -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Icons -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <!-- Swipper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
</head>

<body>
    <!-- Header -->
    <header>
        <!-- Nav -->
        <div class="nav container">
            <!-- Logo -->
            <a href="index.php" class="logo">
                <img src="img/ico.svg" alt="logo cmc"><span>CMC</span>
            </a>
            <!-- Navbar -->
            <ul class="navbar">
                <li><a href="#inicio">Inicio</a></li>
                <li><a href="#nuevo">Nuevo</a></li>
                <li><a href="#productos">Productos</a></li>
                <li><a href="#contacto">Contacto</a></li>
                <!-- Dark mode -->
                <div class="bx bx-moon" id="darkmode"></div>
            </ul>
        </div>
    </header>

    <!-- Sección de inicio -->
    <section class="inicio" id="inicio">
        <div class="inicio-texto">
            <h1>CMC</h1>
            <h2>Estilo que deja huellas</h2>
            <a href="#productos" class="btn">Ver productos</a>
        </div>
        <div class="inicio-imagen">
            <img src="img/ico.svg" alt="logo cmc">
        </div>
    </section>

    <!-- Nuevos productos -->
    <section class="nuevo" id="nuevo">
        <div class="titulo">
            <h1>Nuevos <span>Modelos</span></h1>
        </div>
        <!-- Slider main container -->
        <div class="swiper nuevos-modelos">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide box">
                    <img src="img/YJ-809-HT-2.png" alt="">
                    <div class="content">
                        <a href="#" class="btn">Buy Now</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="img/YJ-809-HT-2-1.png" alt="">
                    <div class="content">
                        <a href="#" class="btn">Buy Now</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="img/YJ-809-HT-2-2.png" alt="">
                    <div class="content">
                        <a href="#" class="btn">Buy Now</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="img/YJ-809-HT-2-3.png" alt="">
                    <div class="content">
                        <a href="#" class="btn">Buy Now</a>
                    </div>
                </div>
                <div class="swiper-slide box">
                    <img src="img/YJ-809-HT-2-4.png" alt="">
                    <div class="content">
                        <a href="#" class="btn">Buy Now</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

    <script>
        /* Swipper */
        var swiper = new Swiper(".nuevos-modelos", {
            slidesPerView: 3,
            spaceBetween: 30,
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>
</body>

</html>