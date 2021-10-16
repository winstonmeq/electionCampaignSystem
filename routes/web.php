<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\MapController;
use App\Http\Controllers\CoordinatorController;
use App\Http\Controllers\VoterController;
use App\Http\Controllers\BarangaymapController;
use App\Http\Controllers\CandidatesController;
use App\Http\Controllers\CandidatedataController;

use App\Http\Controllers\MunbarController;

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

Route::get('/', function () {
    return redirect()->route('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('admin.index');
})->name('dashboard');

Route::get('/admin/logout',[AdminController::class,'Logout'])->name('admin.logout');



Route::get('/admin/viewcoor',[CoordinatorController::class,'viewCoor'])->name('admin.viewCoor');
Route::get('/admin/addcoor',[CoordinatorController::class,'addCoor'])->name('admin.addCoor');
Route::post('/admin/savecoor',[CoordinatorController::class,'saveCoor'])->name('admin.saveCoor');
Route::get('/admin/fetch',[CoordinatorController::class,'fetch'])->name('admin.fetch');




Route::get('/admin/voter/add/{coorId}',[VoterController::class,'addVoter'])->name('admin.addVoter');
Route::post('/admin/voter/save',[VoterController::class,'saveVoter'])->name('admin.saveVoter');
Route::get('/admin/voter/view',[VoterController::class,'viewVoter'])->name('admin.viewVoter');




Route::get('/admin/addmap',[BarangaymapController::class,'addmap'])->name('admin.addmap');
Route::post('/admin/savemap',[BarangaymapController::class,'savemap'])->name('admin.savemap');
Route::get('/admin/viewmap',[BarangaymapController::class,'viewmap'])->name('admin.viewmap');


Route::get('/admin/addmunbar',[MunbarController::class,'addmunbar'])->name('admin.addmunbar');
Route::post('/admin/savemunbar',[MunbarController::class,'savemunbar'])->name('admin.savemunbar');
Route::post('admin/fetch', [MunbarController::class,'fetch'])->name('admin.fetch');




Route::get('/admin/addcandidate',[CandidatedataController::class,'addcandidate'])->name('admin.addcandidate');
Route::post('/admin/savecandidate',[CandidatedataController::class,'savecandidate'])->name('admin.savecandidate');
Route::get('/admin/viewcandidate',[CandidatedataController::class,'viewcandidate'])->name('admin.viewcandidate');






Route::get('/admin/addcanmap',[CandidatesController::class,'addcanmap'])->name('admin.addcanmap');
Route::post('/admin/savecan',[CandidatesController::class,'savecan'])->name('admin.savecan');
Route::post('admin/fetchcanmap', [CandidatesController::class,'fetchcanmap'])->name('admin.fetchcanmap');
Route::get('admin/viewcanmap', [CandidatesController::class,'viewCandidateMap'])->name('admin.viewcandidatemap');


Route::get('welcome',[MapController::class,'welcomepage'])->name('welcome');

Route::get('maps/viewposition',[MapController::class,'viewposition'])->name('viewposition');
Route::get('maps/{position}',[MapController::class,'position'])->name('position');

Route::get('maps/position/{perbarmap}',[MapController::class,'perbarmap'])->name('perbarmap');





//Route::get('/maps',[MapController::class,'google'])->name('maps');

Route::get('/test',[MapController::class,'google2'])->name('test');

Route::get('/polygon',[MapController::class,'polygon'])->name('polygon');


