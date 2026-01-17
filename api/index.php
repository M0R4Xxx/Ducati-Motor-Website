<?php
// Pastikan folder temp untuk storage tersedia
$storagePath = '/tmp/storage';
foreach (['/framework/views', '/framework/cache', '/framework/sessions', '/logs'] as $path) {
    if (!is_dir($storagePath . $path)) {
        mkdir($storagePath . $path, 0755, true);
    }
}

// Set path penting secara eksplisit agar Laravel tidak mencari ke folder read-only
putenv("VIEW_COMPILED_PATH=$storagePath/framework/views");
putenv("APP_CONFIG_CACHE=$storagePath/framework/cache/config.php");
putenv("APP_SERVICES_CACHE=$storagePath/framework/cache/services.php");
putenv("APP_PACKAGES_CACHE=$storagePath/framework/cache/packages.php");

// Panggil index Laravel asli
require __DIR__ . '/../public/index.php';