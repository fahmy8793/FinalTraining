<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\Api\coursesController;




Route::get('/category', [CategoryController::class, 'get']);
Route::get('/getcourse', [coursesController::class, 'get']);
Route::get('/courses', function () {
    $courses = DB::table('courses')->paginate(1000);
    return response()->json([
        'name' => $courses->items(),
        'ended_at' => $courses->items(),
        'started_at' => $courses->items(),
        'price' => $courses->items(),
        'description' => $courses->items(),
        'links' => [
            'prev' => $courses->previousPageUrl(),
            'next' => $courses->nextPageUrl(),
        ]
    ]);
});
