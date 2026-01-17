<?php

// Mengarahkan folder storage ke /tmp agar bisa ditulis di Vercel
$storagePath = '/tmp/storage';
foreach (['/framework/views', '/framework/cache', '/framework/sessions', '/logs'] as $path) {
    if (!is_dir($storagePath . $path)) {
        mkdir($storagePath . $path, 0755, true);
    }
}

// Tambahan: Pastikan Laravel tidak mencari cache konfigurasi yang rusak
putenv("APP_CONFIG_CACHE=/tmp/config.php");
putenv("APP_SERVICES_CACHE=/tmp/services.php");
putenv("APP_PACKAGES_CACHE=/tmp/packages.php");
putenv("VIEW_COMPILED_PATH=$storagePath/framework/views");

require __DIR__ . '/../public/index.php';