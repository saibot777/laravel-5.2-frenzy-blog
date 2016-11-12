<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(['middleware' => ['web']], function () {
    Route::get('/', [
        'uses' => 'PostController@getBlogIndex',
        'as' => 'blog.index'
    ]);

    Route::get('/blog', [
        'uses' => 'PostController@getBlogIndex',
        'as' => 'blog.index'
    ]);

    Route::get('/blog/{post_id}&{end}', [
        'uses' => 'PostController@getSinglePost',
        'as' => 'blog.single'
    ]);

    /*Other Routes*/
    Route::get('/about', function() {
       return view('frontend.other.about');
    })->name('about');

    Route::get('/contact', [
        'uses' => 'ContactMessageController@getContactIndex',
        'as'   => 'contact'
    ]);

    Route::group([
        'prefix' => '/admin'
    ], function() {
        Route::get('/', [
            'uses' => 'AdminController@getIndex',
            'as' => 'admin.index'
        ]);

        Route::get('/blog/posts', [
            'uses' => 'PostController@getPostIndex',
            'as' => 'admin.blog.index'
        ]);

        Route::get('/blog/categories', [
           'uses' => 'CategoryController@getCategoryIndex',
            'as' => 'admin.blog.categories'
        ]);

        Route::get('/blog/post/{post_id}&{end}', [
            'uses' => 'PostController@getSinglePost',
            'as' => 'admin.blog.post'
        ]);

        Route::get('/blog/posts/create', [
            'uses' => 'PostController@getCreatePost',
            'as'   => 'admin.blog.create_post'
        ]);

        Route::post('/blog/post/create', [
            'uses' => 'PostController@postCreatePost',
            'as'   => 'admin.blog.post.create'
        ]);

        Route::post('/blog/category/create', [
           'uses' => 'CategoryController@postCreateCategory',
            'as' => 'admin.blog.category.create'
        ]);

        Route::get('/blog/post/{post_id}/edit}', [
           'uses' => 'PostController@getUpdatePost',
            'as' => 'admin.blog.post.edit'
        ]);

        Route::post('/blog/post/update', [
           'uses' => 'PostController@postUpdatePost',
            'as' => 'admin.blog.post.update'
        ]);

        Route::post('/blog/categories/update', [
            'uses' => 'CategoryController@postUpdateCategory',
            'as' => 'admin.blog.category.update'
        ]);

        Route::get('/blog/post/{post_id}/delete', [
           'uses' => 'PostController@getDeletePost',
            'as' => 'admin.blog.post.delete'
        ]);

        Route::get('/blog/category/{category_id}/delete', [
            'uses' => 'CategoryController@getDeleteCategory',
            'as' => 'admin.blog.category.delete'
        ]);
    });
});
