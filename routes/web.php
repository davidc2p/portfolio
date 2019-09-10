<?php

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

Route::get('locale/{locale}', function ($locale){
    Session::put('locale', $locale);
    App::setLocale($locale);
    return redirect()->back();
});


Route::get('/', function () {
    //redirect()->action('HeaderController@setCountry');

    $app = app();
    $controller = $app->make('App\Http\Controllers\HeaderController');
    $controller->callAction('setCountry', $parameters = array());

    return view('home');
})->name('home');

Route::get('/About', function () {
    return view('about');
})->name('about');

Route::get('/Projects', function () {
    return view('projects');
})->name('projects');

Route::get('/Contact', function () {
    return view('contact');
})->name('contact');

Route::post('contact-us',[
    'as'=>'contact.send',
    'uses'=>'ContactController@send'
]);
