<?php

    use Illuminate\Support\Facades\Route;
    use app\Http\Controllers\TestController;

-   Route::get('/', function () {
-        return view('welcome');
-   });
+   Route::get('/', [TestController::class, 'index']);