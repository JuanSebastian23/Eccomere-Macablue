<?php include_once 'config/paths.php'; ?>
<link rel="stylesheet" href="frontend/src/assets/css/newsletter.css">

<!-- Newsletter -->
<div class="newsletter-section bg-white py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 p-0">
                <img src="frontend/src/assets/img/newsletter.webp" class="img-fluid w-100" alt="Newsletter image" style="object-fit: cover; height: 100%;">
            </div>
            <div class="col-lg-6 p-5">
                <h2 class="display-5 fw-bold mb-3" style="color: #000;">Suscríbete a nuestro newsletter :)</h2>
                <p class="text-dark mb-4">Entérate de lo último en tendencia, promociones y noticias exclusivas que tenemos para ti.</p>
                
                <form class="newsletter-form">
                    <div class="mb-4">
                        <input type="email" class="form-control form-control-lg border-0 bg-light" placeholder="Correo electrónico" required>
                    </div>
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" id="privacyPolicy" required>
                        <label class="form-check-label small" for="privacyPolicy">
                            He leído, acepto y autorizo el <a href="#" class="text-dark text-decoration-underline">tratamiento de mis datos personales</a> según la <a href="#" class="text-dark text-decoration-underline">Política de Protección de Datos</a>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-success w-100 py-3" style="background-color: #98F9D3; color: #000; border: none;">¡Suscríbete ahora!</button>
                </form>
            </div>
        </div>
    </div>
</div>

<footer class="footer bg-light py-5 mt-5">
    <div class="container">
        <!-- Sección principal del footer -->
        <div class="row g-4 mb-5">
            <!-- Columna de información de la empresa -->
            <div class="col-lg-4 col-md-6">
                <div class="footer-content">
                    <img src="frontend/src/assets/img/logo.png" alt="Macablue Logo" class="mb-4" style="max-width: 150px;">
                    <p class="mb-4">Tu tienda de moda favorita con las últimas tendencias y los mejores precios. Descubre nuestra colección exclusiva de ropa y accesorios.</p>
                    <div class="contact-info">
                        <p><i class="fas fa-phone me-2"></i> +57 123 456 7890</p>
                        <p><i class="fas fa-envelope me-2"></i> contacto@macablue.com</p>
                        <p><i class="fas fa-location-dot me-2"></i> Calle 123 #45-67, Bogotá, Colombia</p>
                    </div>
                </div>
            </div>

            <!-- Columna de enlaces útiles -->
            <div class="col-lg-2 col-md-6">
                <h5 class="footer-title mb-4">Enlaces Útiles</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="#"><i class="fas fa-angle-right me-2"></i>Inicio</a></li>
                    <li><a href="#"><i class="fas fa-angle-right me-2"></i>Catálogo</a></li>
                    <li><a href="#"><i class="fas fa-angle-right me-2"></i>Ofertas</a></li>
                    <li><a href="#"><i class="fas fa-angle-right me-2"></i>Blog</a></li>
                    <li><a href="#"><i class="fas fa-angle-right me-2"></i>Sobre Nosotros</a></li>
                    <li><a href="#"><i class="fas fa-angle-right me-2"></i>Contacto</a></li>
                </ul>
            </div>

            <!-- Columna de servicio al cliente -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title mb-4">Servicio al Cliente</h5>
                <ul class="list-unstyled footer-links">
                    <li><a href="#"><i class="fas fa-angle-right me-2"></i>Mi Cuenta</a></li>
                    <li><a href="#"><i class="fas fa-angle-right me-2"></i>Seguimiento de Pedidos</a></li>
                    <li><a href="#"><i class="fas fa-angle-right me-2"></i>Política de Devoluciones</a></li>
                    <li><a href="#"><i class="fas fa-angle-right me-2"></i>Preguntas Frecuentes</a></li>
                    <li><a href="#"><i class="fas fa-angle-right me-2"></i>Términos y Condiciones</a></li>
                    <li><a href="#"><i class="fas fa-angle-right me-2"></i>Política de Privacidad</a></li>
                </ul>
            </div>

            <!-- Columna de redes sociales y newsletter -->
            <div class="col-lg-3 col-md-6">
                <h5 class="footer-title mb-4">Síguenos</h5>
                <div class="social-links mb-4">
                    <a href="#" class="social-link"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-tiktok"></i></a>
                    <a href="#" class="social-link"><i class="fab fa-pinterest"></i></a>
                </div>
                
                <h5 class="footer-title mb-4">Métodos de Pago</h5>
                <div class="payment-methods">
                    <i class="fab fa-cc-visa fa-2x me-2"></i>
                    <i class="fab fa-cc-mastercard fa-2x me-2"></i>
                    <i class="fab fa-cc-amex fa-2x me-2"></i>
                    <i class="fab fa-cc-paypal fa-2x me-2"></i>
                </div>
            </div>
        </div>

        <!-- Sección inferior del footer -->
        <div class="footer-bottom">
            <hr class="mb-4">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <p class="mb-md-0">&copy; <?php echo date('Y'); ?> Macablue. Todos los derechos reservados.</p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-0">Diseñado con <i class="fas fa-heart text-danger"></i> por JuanseDev</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<style>
.footer {
    color: #4b5563;
}

.footer-title {
    color: #1a1a1a;
    font-weight: 600;
    font-size: 1.1rem;
}

.footer-links li {
    margin-bottom: 10px;
}

.footer-links a {
    color: #4b5563;
    text-decoration: none;
    transition: all 0.3s ease;
}

.footer-links a:hover {
    color: #98F9D3;
    padding-left: 5px;
}

.social-links {
    display: flex;
    gap: 15px;
}

.social-link {
    display: inline-flex;
    align-items: center;
    justify-content: center;
    width: 35px;
    height: 35px;
    background-color: #f8f9fa;
    color: #4b5563;
    border-radius: 50%;
    transition: all 0.3s ease;
}

.social-link:hover {
    background-color: #98F9D3;
    color: #000;
    transform: translateY(-3px);
}

.contact-info p {
    margin-bottom: 10px;
}

.payment-methods {
    color: #4b5563;
}

.footer-bottom {
    margin-top: 2rem;
}

.footer-bottom hr {
    border-color: #e5e7eb;
}

@media (max-width: 768px) {
    .footer-bottom {
        text-align: center;
    }
    
    .footer-bottom .text-md-end {
        text-align: center !important;
        margin-top: 1rem;
    }
}
</style>