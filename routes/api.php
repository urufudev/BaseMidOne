<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Laboral;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:api')->get('/laboral', function (Request $request) {
    
    

}); */

Route::get('laborals',function(){
    return datatables()
    ->eloquent(Laboral::query())
    ->addColumn('status', function($data) {
        if($data->status == 'ACTIVO'){
            return ' <div class="flex items-center justify-center text-theme-9"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
             Activo
        </div>';
        }else{
            return '<div class="flex items-center justify-center text-theme-6"> 
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="feather feather-check-square w-4 h-4 mr-2"><polyline points="9 11 12 14 22 4"></polyline><path d="M21 12v7a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h11"></path></svg>
             Inactivo 
        </div>';
        }
    })
    /* ->addColumn('status','laborals.partials.status') */
    ->addColumn('btn','laborals.partials.actions')
    ->rawColumns(['btn','status'])
    ->escapeColumns([])
    ->toJson();
    
});