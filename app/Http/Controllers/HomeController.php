<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index() { return view('Home'); }
    public function news() { return view('News'); }
    public function products() { return view('Products'); }
    public function programs() { return view('Programs'); }
    public function about() { return view('About'); }
    public function panigale() { return view('All Products/Panigale'); }
    public function streetfighter() { return view('All Products/Streetfighter'); }
    public function monster() { return view('All Products/Monster'); }
    public function multistrada() { return view('All Products/Multistrada'); }
    public function diavel() { return view('All Products/Diavel'); }
    public function desmo450mx() { return view('All Products/Desmo450MX'); }
    public function dre() { return view('All Programs/DRE'); }
    public function motogp() { return view('All Programs/MotoGP'); }

  public function showNewsBySlug($slug) 
{
    $newsMapping = [
        '2026-apparel-collection-style-safety-and-passion-by-ducati' => 'Apparel',
        'production-begins-for-ducatis-fifth-generation-monster'     => 'Production',
        'v4-granturismo-tested-for-long-distances'                  => 'Granturismo',
    ];

    if (array_key_exists($slug, $newsMapping)) {
        $fileName = $newsMapping[$slug];
        return view("All News." . $fileName);
    }

    abort(404);
}
}