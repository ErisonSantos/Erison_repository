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
    return view('welcome');
});

Route::get('/blog', function () {
    echo ('<center><h1>Bem vindo ao Blog</h1></center>');
});

Route::get('/administrativa', function () {
    echo ('<center><h1>Bem vindo a pagina admistrativa do Laravel</h1></center>');
});

Route::get('/usuarios/{a}/{b}/{c}/{d}', function ($a,$b,$c,$d) {
    echo " 	<table border='1px'>
    <tr>
		<td>{$a}</td>
	</tr>
	<tr>
		<td>{$b}</td>
	</tr>
	<tr>
		<td>{$c}</td>
	</tr>
	<tr>
		<td>{$d}</td>
	</tr></table> 	 ";
});

Route::get('/parametros/{a}/{b}/{c}/{d}/{e}', function ($a,$b,$c,$d,$e) {
	$m= ($a+$b+$c+$d+$e)/5;
    echo "	<table border='1px'>
    <tr>
		<td>{$a}</td>
	</tr>
	<tr>
		<td>{$b}</td>
	</tr>
	<tr>
		<td>{$c}</td>
	</tr>
	<tr>
		<td>{$d}</td>
	</tr>
	<tr>
		<td>{$e}</td>
	</tr>
	<tr>
		<td>a media é = {$m} </td>
	</tr>
	</table>";
});

Route::get('/teste-view/{a}/{b}/{c}/{d}', function ($a,$b,$c,$d) {
	return view('template',['a' => $a, 'b' => $b, 'c' => $c, 'd' => $d] );
});

route::get('/section', function(){
	return view('section');
});



