<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})->name('homepage');

Route::get('/prodotti', function () {
    //VOGLIO RECUPERARE LE TIPOLOGIE DI PASTA
    $products = config('db.pasta');
   
    return view('prodotti', compact('products'));
})->name('products');

Route::get('/prodotto/{titolo}', function($titolo){
    
    $products = config('db.pasta');
    
    // $single_pasta = array_filter($products, function($item) use($titolo){
    //     return $item['titolo'] == $titolo;
    // });
    // $pasta = $single_pasta[0];
    //OPPURE
    //L'Array filter di sopra equivale al codice commentato qua sotto
    foreach($products as $product){
        if($product['titolo'] == $titolo){
            $single = $product;
        }
    }      
            
    return view('detail_pasta', compact('single'));

})->name('detail-product');

