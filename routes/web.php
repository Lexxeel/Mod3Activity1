<?php

use Illuminate\Support\Facades\Route;

Route::get('/customer', function(){
    return view('Customer');
})->name('customer.page');

Route::get('/item', function(){
    return view('Item');
})->name('item.page');

Route::get('/order', function(){
    return view('Order');
})->name('order.page');

Route::get('/order-details', function(){
    return view('OrderDetails');
})->name('order.details.page');