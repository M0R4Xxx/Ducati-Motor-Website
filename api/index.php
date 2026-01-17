<?php
// Buat folder storage di /tmp
$storagePath = '/tmp/storage';
if (!is_dir($storagePath . '/framework/views')) {
    mkdir($storagePath . '/framework/views', 0755, true);
}

// Set variabel environment secara runtime
putenv("VIEW_COMPILED_PATH=$storagePath/framework/views");

require __DIR__ . '/../public/index.php';