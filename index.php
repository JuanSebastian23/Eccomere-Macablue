<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Macablue - Tienda de Ropa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
        }
        .carousel-item {
            height: 500px;
        }
        .carousel-item img {
            object-fit: cover;
        }
        .product-card {
            transition: transform 0.3s;
        }
        .product-card:hover {
            transform: translateY(-5px);
        }
        .footer {
            background-color: #f8f9fa;
            padding: 2rem 0;
        }
    </style>
</head>
<body>
    <!-- Barra de navegación -->
    <?php include 'includes/header.php'; ?>

    <!-- Carrusel de productos destacados -->
    <div id="carouselExample" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="https://via.placeholder.com/1920x500" class="d-block w-100" alt="Promoción 1">
                <div class="carousel-caption d-none d-md-block">
                    <h2>Nueva Colección</h2>
                    <p>Descubre las últimas tendencias de la temporada</p>
                    <a href="#" class="btn btn-light">Ver más</a>
                </div>
            </div>
            <div class="carousel-item">
                <img src="https://via.placeholder.com/1920x500" class="d-block w-100" alt="Promoción 2">
                <div class="carousel-caption d-none d-md-block">
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