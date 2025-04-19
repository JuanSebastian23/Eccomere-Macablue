<?php
// Funciones de utilidad general

function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

function isAdmin() {
    return isset($_SESSION['user_role']) && $_SESSION['user_role'] === 'admin';
}

function getCartItemCount() {
    if (isset($_SESSION['cart'])) {
        return array_sum(array_column($_SESSION['cart'], 'quantity'));
    }
    return 0;
}

function formatPrice($price) {
    return number_format($price, 2, ',', '.');
}

function uploadImage($file, $destination) {
    $allowedTypes = ['image/jpeg', 'image/png', 'image/gif'];
    $maxSize = 5 * 1024 * 1024; // 5MB

    if (!in_array($file['type'], $allowedTypes)) {
        return ['error' => 'Tipo de archivo no permitido'];
    }

    if ($file['size'] > $maxSize) {
        return ['error' => 'El archivo es demasiado grande'];
    }

    $filename = uniqid() . '_' . basename($file['name']);
    $targetPath = UPLOADS_PATH . '/' . $destination . '/' . $filename;

    if (move_uploaded_file($file['tmp_name'], $targetPath)) {
        return ['success' => true, 'filename' => $filename];
    }

    return ['error' => 'Error al subir el archivo'];
}

function generateSlug($text) {
    // Convertir a minúsculas
    $text = strtolower($text);
    
    // Reemplazar caracteres especiales
    $text = str_replace(
        ['á', 'é', 'í', 'ó', 'ú', 'ñ', ' '],
        ['a', 'e', 'i', 'o', 'u', 'n', '-'],
        $text
    );
    
    // Eliminar caracteres no alfanuméricos
    $text = preg_replace('/[^a-z0-9\-]/', '', $text);
    
    // Eliminar guiones múltiples
    $text = preg_replace('/-+/', '-', $text);
    
    return trim($text, '-');
}

function showAlert($message, $type = 'success') {
    return "<div class='alert alert-{$type} alert-dismissible fade show' role='alert'>
                {$message}
                <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
            </div>";
}

function getPagination($total, $perPage, $currentPage, $url) {
    $totalPages = ceil($total / $perPage);
    
    if ($totalPages <= 1) return '';
    
    $html = '<nav aria-label="Navegación de páginas"><ul class="pagination">';
    
    // Botón anterior
    $prevClass = $currentPage <= 1 ? ' disabled' : '';
    $html .= "<li class='page-item{$prevClass}'>";
    $html .= "<a class='page-link' href='{$url}" . ($currentPage - 1) . "' tabindex='-1'>Anterior</a></li>";
    
    // Números de página
    for ($i = 1; $i <= $totalPages; $i++) {
        $activeClass = $i === $currentPage ? ' active' : '';
        $html .= "<li class='page-item{$activeClass}'>";
        $html .= "<a class='page-link' href='{$url}{$i}'>{$i}</a></li>";
    }
    
    // Botón siguiente
    $nextClass = $currentPage >= $totalPages ? ' disabled' : '';
    $html .= "<li class='page-item{$nextClass}'>";
    $html .= "<a class='page-link' href='{$url}" . ($currentPage + 1) . "'>Siguiente</a></li>";
    
    $html .= '</ul></nav>';
    
    return $html;
} 