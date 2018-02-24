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

Route::get('/', function () {
    return view('homepage.index');
});
// 赛事信息
Route::get('/eventInformation', function () {
    return view('homepage.eventInformation');
});
// 参赛报名
Route::get('/match', function () {
    return view('homepage.match');
});
// 资源下载
Route::get('/doc', function () {
    return view('homepage.doc');
});
// 视频资源
Route::get('/video', function () {
    return view('homepage.video');
});
// 关于我们
Route::get('/aboutus', function () {
    return view('homepage.aboutus');
});

// upload
Route::get('/adminUpload', 'Home\upLoadController@upLoad');
Route::get('/delete/{id}', 'Home\upLoadController@delete');
Route::post('/uploadDocs', 'Home\upLoadController@uploadDocs');


// demo
Route::get('/demo', function () {
    return view('homepage.demo');
});
