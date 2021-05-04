<?php

use App\Models\Committee;
use App\Models\Member;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get("committees",function (){
    return Committee::with('members.type','president.member')->get();
});
Route::get("member/{id}",function ($id){
    return Member::with('committee')->where('id',$id)->first();
});
