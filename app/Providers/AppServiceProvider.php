<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// Tambahkan baris ini jika ingin memaksa HTTPS di Vercel
use Illuminate\Support\Facades\URL; 

class AppServiceProvider extends ServiceProvider
{
    public function register()
{
    if (env('APP_ENV') === 'production') {
        $this->app->useStoragePath('/tmp/storage');
    }
}

    public function boot()
    {
        // PENTING: Agar gambar & CSS terbaca di Vercel
        $this->app->bind('path.public', function() {
            return base_path('public');
        });

        // OPSIONAL: Jika tampilan website berantakan di Vercel, aktifkan ini:
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}