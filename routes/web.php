<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pageController;
use App\Http\Controllers\BookingController;

Route::post('/book-room', [BookingController::class, 'store'])->name('book-room');


Route::controller(pageController::class)->group(function (){
    Route::get('/', 'index')->name('index');

    Route::get('index-two', 'indexTwo')->name('index-two');
    Route::get('index-three', 'indexThree')->name('index-three');
    Route::get('index-four', 'indexFour')->name('index-four');
    Route::get('index-five', 'indexFive')->name('index-five');
    Route::get('index-six', 'indexSix')->name('index-six');
    Route::get('index-seven', 'indexSeven')->name('index-seven');
    Route::get('index-video', 'indexVideo')->name('index-video');
    Route::get('index-dark', 'indexDark')->name('index-dark');
    Route::get('room-one', 'roomOne')->name('room-one');
    Route::get('room-two', 'roomTwo')->name('room-two');
    Route::get('room-three', 'roomThree')->name('room-three');
    Route::get('room-four', 'roomFour')->name('room-four');
    Route::get('room-details-1', 'roomDetailSOne')->name('room-details-1');
    Route::get('room-details-2', 'roomDetailSTwo')->name('room-details-2');
    Route::get('about', 'about')->name('about');
    Route::get('restaurant', 'resturant')->name('restaurant');
    Route::get('gallery', 'gallery')->name('gallery');
    Route::get('service', 'service')->name('service');
    Route::get('event', 'event')->name('event');
    Route::get('activities', 'activities')->name('activities');
    Route::get('blog', 'blog')->name('blog');
    Route::get('blog-details', 'blogDetails')->name('blog-details');
    Route::get('contact', 'contact')->name('contact');
    Route::get('roommini', 'roommini')->name('roommini');
    Route::get('deluxeroom', 'deluxeroom')->name('deluxeroom');
    Route::get('premiumroom', 'premiumroom')->name('premiumroom');
    Route::get('executiveroom', 'executiveroom')->name('executiveroom');
    Route::get('executiveterrace', 'executiveterrace')->name('executiveterrace');
    Route::get('presidential', 'presidential')->name('presidential');
    Route::get('presidentialroom', 'presidentialroom')->name('presidentialroom');
  
   


    
});
