<?php
require_once 'config/paths.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macablue - Tienda de Ropa</title>
    <!-- Favicon -->
    <link rel="icon" type="image/png" href="frontend/src/assets/img/favicon.png">
    <link rel="apple-touch-icon" href="frontend/src/assets/img/favicon.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <!-- Estilos propios -->
    <link rel="stylesheet" href="frontend/src/assets/css/styles.css">
    <link rel="stylesheet" href="frontend/src/assets/css/components/carousel.css">
    <link rel="stylesheet" href="frontend/src/assets/css/components/gallery.css">
    <link rel="stylesheet" href="frontend/src/assets/css/newsletter.css">
</head>
<body>
    <!-- Barra de navegación -->
    <?php include 'includes/header.php'; ?>

    <!-- Banner promocional -->
    <div class="container-fluid px-0">
        <img src="frontend/src/assets/img/banner_desktop.webp" class="img-fluid w-100" alt="Banner promocional">
    </div>

    <!-- Botones de categorías -->
    <div class="container my-4">
        <div class="row g-2">
            <div class="col-6 col-md-4 col-lg-2">
                <a href="#" class="btn btn-outline-dark w-100">Mujer</a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a href="#" class="btn btn-outline-dark w-100">Hombre</a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a href="#" class="btn btn-outline-dark w-100">Camisetas</a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a href="#" class="btn btn-outline-dark w-100">Buzos</a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a href="#" class="btn btn-outline-dark w-100">Tenis</a>
            </div>
            <div class="col-6 col-md-4 col-lg-2">
                <a href="#" class="btn btn-outline-dark w-100">Chaquetas</a>
            </div>
        </div>
    </div>

    <!-- Carrusel de productos destacados -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="frontend/src/assets/img/slider_1.webp" class="d-block w-100" alt="Promoción 1">
                <div class="carousel-caption">
                    <h2>Nueva Colección</h2>
                    <p>Descubre las últimas tendencias de la temporada</p>
                    <a href="#" class="btn btn-light">Ver más</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="frontend/src/assets/img/slider2_desktop.webp" class="d-block w-100" alt="Promoción 1">
                <div class="carousel-caption">
                    <h2>Ofertas Especiales</h2>
                    <p>Hasta 50% de descuento en selección de productos</p>
                    <a href="#" class="btn btn-light">Ver más</a>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon"></span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon"></span>
        </button>
    </div>

    <!-- Galería de Tenis -->
    <div class="container-fluid px-4 my-5">
        <div class="row g-4">
            <div class="col-lg-6">
                <div class="position-relative main-image">
                    <img src="frontend/src/assets/img/tenis_1.webp" class="img-fluid rounded" alt="Tenis deportivos">
                    <div class="position-absolute top-50 start-50 translate-middle">
                        <a href="#" class="btn btn-light px-4">Ver más</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row g-4 h-100">
                    <div class="col-6">
                        <div class="position-relative secondary-image h-100">
                            <img src="frontend/src/assets/img/tenismujer_2.webp" class="img-fluid rounded" alt="Tenis para mujer">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <a href="#" class="btn btn-light px-4">Ver más</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="position-relative secondary-image h-100">
                            <img src="frontend/src/assets/img/tenishombre_3.webp" class="img-fluid rounded" alt="Tenis para hombre">
                            <div class="position-absolute top-50 start-50 translate-middle">
                                <a href="#" class="btn btn-light px-4">Ver más</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Sección de productos -->
    <div class="container my-5">
        <h2 class="text-center mb-4">Productos Destacados</h2>
        <div class="row">
            <div class="col-md-3 mb-4">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/300x400" class="card-img-top" alt="Producto 1">
                    <div class="card-body">
                        <h5 class="card-title">Camisa Casual</h5>
                        <p class="card-text">$29.99</p>
                        <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/300x400" class="card-img-top" alt="Producto 2">
                    <div class="card-body">
                        <h5 class="card-title">Pantalón Jeans</h5>
                        <p class="card-text">$49.99</p>
                        <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/300x400" class="card-img-top" alt="Producto 3">
                    <div class="card-body">
                        <h5 class="card-title">Vestido Floral</h5>
                        <p class="card-text">$39.99</p>
                        <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                    </div>
                </div>
            </div>
            <div class="col-md-3 mb-4">
                <div class="card product-card">
                    <img src="https://via.placeholder.com/300x400" class="card-img-top" alt="Producto 4">
                    <div class="card-body">
                        <h5 class="card-title">Chaqueta de Cuero</h5>
                        <p class="card-text">$89.99</p>
                        <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Pie de página -->
    <?php include 'includes/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>