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

// Route::get('/post/{id}', function($id) {
//     return "This is post number ". $id;
// });

// Route::get('/admin/post/example', array('as' => 'admin', function() {
//     $url = route('admin');
//     return 'This url is '. $url;
// }));

// Route::get('/post/{id}', 'PostController@index');
// Route::resource('/posts', 'PostController');

// Route::get('/contact', 'PostController@contact');

// Route::get('/post', 'PostController@show_post');

/* 
 * Database Raw SQL Queries
*/
// Route::get('/insert', function() {
//     DB::insert('insert into post(name, lastname) values(?, ?)', ['PHP with Laravel', 'Laravel is best']);
// }); 

// Route::get('/read', function() {
//     $results = DB::select('select * from post where id = ?', [1]);

//     // $results = json_decode(json_encode($results[0]), True);

//     foreach($results as $result) {
//         echo $result->name;
//     }
// });

// Route::get('/update', function() {
//     $updated = DB::update('update post set name="Yasir Sarole" where id = ?', [1]);

//     return $updated;
// });

// Route::get('/delete', function() {
//     $deleted = DB::delete('delete from post where id = ?', [1]);

//     return $deleted;
// });