<?php

// 1. Definisikan folder temporary agar Laravel bisa menulis cache/logs
$storagePath = '/tmp/storage';

// 2. Buat folder-folder yang diperlukan jika belum ada
$folders = [
    $storagePath . '/framework/views',
    $storagePath . '/framework/cache',
    $storagePath . '/framework/sessions',
    $storagePath . '/logs',
];

foreach ($folders as $folder) {
    if (!is_dir($folder)) {
        mkdir($folder, 0755, true);
    }
}

// 3. Beritahu Laravel untuk menggunakan folder /tmp tersebut
putenv("VIEW_COMPILED_PATH=$storagePath/framework/views");
putenv("LOG_CHANNEL=stderr");

// 4. Jalankan aplikasi Laravel dari folder public
require __DIR__ . '/../public/index.php';