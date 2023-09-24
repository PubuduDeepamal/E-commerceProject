<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

use App\Http\Controllers\AdminController;

use Stichoza\GoogleTranslate\GoogleTranslate;


// Route::get('translate', function() {
//     $lang = new GoogleTranslate('en');
//     return $lang->setSource('en')->setTarget('sn')->translate("Jack pet");
// });


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

route::get('/redirect',[HomeController::class,'redirect']);

route::get('/',[HomeController::class,'index']);

route::get('/product',[AdminController::class,'product']);

route::post('/uploadproduct',[AdminController::class,'uploadproduct']);

route::get('/showproduct',[AdminController::class,'showproduct']);

route::get('/deleteproduct/{id}',[AdminController::class,'deleteproduct']);

route::get('/updateview/{id}',[AdminController::class,'updateview']);

route::post('/updateproduct/{id}',[AdminController::class,'updateproduct']);

route::get('/search',[HomeController::class,'search']);

route::post('/addcart/{id}',[HomeController::class,'addcart']);

route::get('/showcart',[HomeController::class,'showcart']);

route::get('/delete/{id}',[HomeController::class,'deletecart']);

route::post('/order',[HomeController::class,'confirmorder']);

route::get('/showorder',[adminController::class,'showorder']);

route::get('/updatestatus/{id}',[adminController::class,'updatestatus']);

route::get('/Homeproduct',[HomeController::class,'Homeproduct']);

route::get('/abouthome',[HomeController::class,'abouthome']);

route::get('/showemploye',[adminController::class,'showemploye']);

