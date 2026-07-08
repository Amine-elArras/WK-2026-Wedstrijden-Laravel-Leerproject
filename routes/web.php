<?php



// deze code vertelt laravel als iemand de hmepage van de website bezoekt dat hij de view 'welcome' moet laten zien.

use App\Http\Controllers\Api\WorldCupController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

// route::get('/', function () {
//     return view('/', [WorldCupController::class, 'index']);
// }); 
Route::get('/', [WorldCupController::class, 'index']);