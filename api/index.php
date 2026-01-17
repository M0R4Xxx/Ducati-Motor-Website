<?php

// Pastikan folder storage dan bootstrap/cache ada di memory
// agar tidak error saat Laravel mencoba menulis cache
if (!is_dir('/tmp/storage/framework/views')) {
    mkdir('/tmp/storage/framework/views', 0755, true);
}

require __DIR__ . '/../public/index.php';