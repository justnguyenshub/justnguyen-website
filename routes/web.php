<?php

use Illuminate\Support\Facades\Route;

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

//root
Route::get('/', 'HomeController@getIndex')->name('index');

//encrypt pass
Route::get('encrpt', function () {
    $ads = App\Admin::all();

    foreach ($ads as $ad) {
        $ad = App\Admin::find($ad->ad_id);
        $ad->ad_pass = bcrypt($ad->ad_pass);
        $ad->save();
    }
});

//insert posts
Route::get('insert', function () {
    $post = new App\Post;
});

// all posts
Route::get('blog', 'AllPostsController@getPosts')->name('blog');

// post follow cate
Route::get('categories/{cate_name}','CategoriesController@getPosts')->name('post-follow-cate');

//  my project
Route::get('my-projects', 'MyProjectsController@getProjects')->name('projects');

// detail post
Route::get('post/{id}/{title}', 'PostDetailController@getDetail')->name('post-detail');

// detail project
Route::get('project/{id}', 'ProjectDetailController@getDetail')->name('project-detail');

// bio
Route::get('about-me', 'BioController@getBio');

// login
Route::get('login', 'LoginController@getLoginForm')->name('ad.login');
Route::post('login', 'LoginController@handleLogin');

//logout
Route::get('logout', 'LoginController@handleLogout')->name('ad.logout');

// CKEditor upload images
Route::get('ckeditor', 'Admin\CkeditorController@index');
Route::post('ckeditor/upload', 'Admin\CkeditorController@upload')->name('ckeditor.upload');

//group admin
Route::group(['prefix' => 'admin', 'middleware' => 'authen'], function () {
    Route::get('/','Admin\HomeController@getHome')->name('ad.index');

    // add new post
    Route::get('/add-post', 'Admin\AddPostController@showAddPostForm')->name('ad.add-post');
    Route::post('/add-post', 'Admin\AddPostController@handleAddPost')->name('ad.handle-add-post');
    Route::get('/my-{type_name}/{type_id}', 'Admin\MyPostsController@getMyPosts')->name('ad.my-posts');
    Route::get('update/{post_id}', 'Admin\UpdatePostController@showUpdateForm')->name('update-post');
    Route::post('update/{post_id}', 'Admin\UpdatePostController@handleUpdatePost')->name('handle-update-post');
    Route::get('delete/{post_id}', 'Admin\UpdatePostController@handleDelPost')->name('del-post');

});