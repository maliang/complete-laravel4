<?php



/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/
Route::get('first', function()
{
    return Redirect::to('second');
});

Route::get('/', function()
{
	return View::make('simple');
});

Route::get('my/page', function()
{
    return 'my page!';
});


Route::get('second', function()
{
    return 'second page!';
});

Route::get('/books', function()
{
	if (Auth::guest()) return Redirect::to('books/denny');
});


Route::get('/books/{genre?}', function($genre = null)
{
    if ($genre == null) return 'books index.';
    return "books in the {$genre} category";
});
Route::get('/{squirrel}', function($squirrel)
{
	$data['squirrel'] = $squirrel;
	return View::make('simple', $data);
});
