<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
Route::get('cache-clear', function () {
    \Illuminate\Support\Facades\Artisan::call('cache:clear');
});
Route::get('route-clear', function () {
    \Illuminate\Support\Facades\Artisan::call('route:clear');
});

Route::get('optimize-clear', function () {
    \Illuminate\Support\Facades\Artisan::call('optimize:clear');
});

Route::get('migrate', function () {
    \Illuminate\Support\Facades\Artisan::call('migrate');
});

Route::view('/404', '404', ["title" => "American Writing Solution | #1 USA Book Writing Services"])
    ->name("404");
Route::view('/about-us', 'about-us', ["title" => "Contact American Writing Solution - Your Book Publishing Partner"])
    ->name("about-us");
Route::view('/american-writing-solution', 'american-writing-solutions', ["title" => "Contact American Writing Solution - Your Book Publishing Partner"])
    ->name("american-writing-solutions");
Route::view('/article-writing-publication', 'article-writing-publication', ["title" => "Article Writing Services| Niche-specific article writers"])
    ->name("article-writing-publication");
Route::view('/autobiography-memoir-writing', 'autobiography-memoir-writing', ["title" => "Autobiography Writing services| Apt Autobiography writers"])
    ->name("autobiography-memoir-writing");
Route::view('/book-author-website', 'book-author-website', ["title" => "Author Website Design Services | Website Designs for Authors"])
    ->name("book-author-website");
Route::view('/book-cover-design', 'book-cover-design', ["title" => "Professional Book Cover Design| Apt Book Cover Artists "])
    ->name("book-cover-design");
Route::view('/book-editing-service', 'book-editing-service', ["title" => "Best Book Editors for hire |Expert Book Editing Services"])
    ->name("book-editing-service");
Route::view('/book-marketing-service', 'book-marketing-service', ["title" => "Professional Book Marketing Services| Book advertising"])
    ->name("book-marketing-service");
Route::view('/book-publishing-service', 'book-publishing-service', ["title" => "Amazon Book Publishing Services| Amazon publisher services"])
    ->name("book-publishing-service");
Route::view('/book-video-trailer', 'book-video-trailer', ["title" => "Video Book Trailer Services | Amazing rates by Experts"])
    ->name("book-video-trailer");
Route::view('/book-writing', 'book-writing', ["title" => "Contact American Writing Solution - Your Book Publishing Partner"])
    ->name("book-writing");
Route::view('/contact', 'contact', ["title" => "Contact American Writing Solution - Your Book Publishing Partner"])
    ->name("contact");
Route::view('/custom-book-illustration', 'custom-book-illustration', ["title" => "Book Cover Illustration Services| Expert book cover illustrators"])
    ->name("custom-book-illustration");
Route::view('/ebook-writing-service', 'ebook-writing-service', ["title" => "Professional Ebook Writing Services By Industry Experts"])
    ->name("ebook-writing-service");
Route::view('/faq', 'faq', ["title" => "Frequently Asked Questions | American Writing Solution"])
    ->name("faq");
Route::view('/fraud-alert', 'fraud-alert', ["title" => "Beware of Book Publishing Scams | American Writing Solution"])
    ->name("fraud-alert");
Route::view('/ghost-book-writing', 'ghost-book-writing', ["title" => "Affordable Ghostwriting Services | American Writing Solution"])
    ->name("ghost-book-writing");
Route::view('/hollywood-fraud', 'hollywood-fraud', ["title" => "Protect Your Book from Hollywood Fraud | American Writing Solution"])
    ->name("hollywood-fraud");
Route::view('/home', 'home', ["title" => "American Writing Solution | High-Quality Book Writing Services"])
    ->name("home");
Route::view('/', 'home', ["title" => "American Writing Solution | High-Quality Book Writing Services"])
    ->name("/");
Route::view('/literary-agent-fraud', 'literary-agent-fraud', ["title" => "Avoid Literary Agent Fraud | American Writing Solution"])
    ->name("literary-agent-fraud");
Route::view('/order', 'order', ["title" => "Order Your Book Publishing Package Today | American Writing Solution"])
    ->name("order");
Route::view('/pricing', 'pricing', ["title" => "American Writing Solution | #1 USA Book Writing Services"])
    ->name("pricing");
Route::view('/privacy-policy', 'privacy-policy', ["title" => "Contact American Writing Solution - Your Book Publishing Partner"])
    ->name("privacy-policy");
Route::view('/professional-audio-book', 'professional-audio-book', ["title" => "Best Audiobook Service| Best Audiobook Narrators"])
    ->name("professional-audio-book");
Route::view('/proofreading', 'proofreading', ["title" => "Contact American Writing Solution - Your Book Publishing Partner"])
    ->name("proofreading");
Route::view('/terms-and-conditions', 'terms-and-conditions', ["title" => "American Writing Solution Terms and Conditions"])
    ->name("terms-and-conditions");
Route::view('/thank-you', 'thank-you', ["title" => "Thank You"])->name("thank-you");
Route::resource('/package', \App\Http\Controllers\PackageController::class);
Route::get('/invoice/{q}', "\App\Http\Controllers\PackageController@invoice")->name("invoice");
Route::post('/transaction', "\App\Http\Controllers\PackageController@transaction")->name("transaction");
Route::resource('/thank-you', \App\Http\Controllers\ThankYouController::class);
