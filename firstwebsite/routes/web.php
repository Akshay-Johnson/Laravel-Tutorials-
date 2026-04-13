<?php

use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('home');
});

Route::resource('posts', PostController::class);  





// Route::get('/contact', function () {
//     return view('contact');
// })->name("contact");

// // Route::get("/portfolio", function () {
// //     return ('portfolio');
// // })->name("portfolio");

// // Route::prefix("portfolio") ->group(function () {
// //     Route::get("/contact", function () {
// //         return ("Contact Page");
// //     })->name("contact");
// // }); 

// Route::post("/formsubmitted", function(Request $request){

//     $request -> validate([
//         "fullname" => "required|string|max:255|min:3",
//         "email" => "required|email|max:255|min:3"
//     ]);

//     $fullname = $request -> input("fullname");
//     $email = $request -> input("email");

//     return "Form submitted successfully. Full Name: $fullname, Email: $email";
// })->name("form");