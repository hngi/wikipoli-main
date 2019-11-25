
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
Route::group(['namespace' => 'Web'], function () {

    Route::get('/', 'WebController@home');
});

Route::get('/Terms', function () {
    return view('pages.Terms-of-use');
});
Route::get('/PrivacyPolicy', function () {
    return view('pages.privacypolicy');
});
Route::get('/About', function () {
    return view('pages.about');
});
Route::get('/Careers', function () {
    return view('pages.careers');
});
Route::get('/FAQs', function () {
    return view('pages.FAQ');
});
Route::get('/Donation', function () {
    return view('pages.donate');
});
Route::get('/contact-us', function () {
    return view('pages.contact');
});
//social login and reigster routes
Route::get('/login/{social}', 'User\SocialController@socialLogin')->where('social', 'twitter|facebook|google');
Route::get('/login/{social}/callback', 'User\SocialController@handleProviderCallback')->where('social', 'twitter|facebook|google');

Route::get('/posts', 'PostsController@index');
Route::get('/posts/{slug}', 'PostsController@show');
Route::get('/details/{slug}', 'PostsController@showDetail');
Route::post('/post-comments', 'CommentsController@store');
//search
Route::get('/search', 'PostsController@search')->name('search');

//user
Route::get('/settings', 'User\UserController@settings');
Route::get('/profile', 'User\UserController@profile');
Route::post('/profile', 'User\UserController@updateAvatar');
Route::get('/myprofile', 'User\UserController@myprofile');
Route::post('/edit-profile', 'User\UserController@edit')->name('edit-profile');

//Change Password
Route::get('/changePassword', 'ChangePasswordController@index');
Route::post('changePassword', 'ChangePasswordController@store')->name('change.password');

// Auth::routes();
// Route::get('/home', 'HomeController@index')->name('home');
// Route::group(['middleware' => ['auth']], function () {
//      Route::get('/user', 'AuthControllers');
// });


Auth::routes();

Route::get('/home', 'PostsController@index')->name('home');
//user creae post
Route::get('/create-post', 'Post\PostController@index');
Route::post('/create-post', 'Post\PostController@create');
Route::post('/draf-post', 'Post\PostController@draft');
Route::post('/post-takedown', 'Post\PostController@takeDown');


Route::post('/like-post', 'PostReactionController@like')->name('like-post');


//Admin Routes
Route::group(['middleware' => ['role:SuperAdmin|Admin']], function () {
    Route::get('/admin/home', 'Admin\AdminController@index')->name('admin.home');
    //posts
    Route::get('/admin/posts', 'Admin\AdminController@postGet')->name('admin.posts');
    Route::post('approve-post/{id}', 'Admin\AdminController@approve');
    Route::post('unapprove-post/{id}', 'Admin\AdminController@Unapprove');
    Route::post('delete-temporary-post/{id}', 'Admin\AdminController@deleteTemporary');
    Route::post('delete-permanently-post/{id}', 'Admin\AdminController@deletePermanently');
    Route::post('delete-restore-post/{id}', 'Admin\AdminController@restore');
    Route::get('/admin/edit-post/{id}', 'Admin\AdminController@showEdit')->name('admin.edit-post');
    Route::get('/admin/view-post/{id}', 'Admin\AdminController@viewEdit')->name('admin.view-post');
    Route::post('edit-post', 'Admin\AdminController@edit');
    //users
    Route::get('/admin/users', 'Admin\AdminController@userGet')->name('admin.users');
    Route::post('block-user/{id}', 'Admin\AdminController@block');
    Route::post('unblock-user/{id}', 'Admin\AdminController@Unblock');
    Route::post('delete-temporary-user/{id}', 'Admin\AdminController@deleteTemporaryUser');
    Route::post('delete-permanently-user/{id}', 'Admin\AdminController@deletePermanentlyUser');
    Route::post('restore-user/{id}', 'Admin\AdminController@restoreUser');
    Route::post('remove-admin/{id}', 'Admin\AdminController@removeAdmin');
    Route::post('remove-superadmin/{id}', 'Admin\AdminController@removeSuperAdmin');
    Route::post('make-admin/{id}', 'Admin\AdminController@makeAdmin');
    Route::post('make-superadmin/{id}', 'Admin\AdminController@makeSuperAdmin');
    //all-admins

    Route::get('/admin/all-admins', 'Admin\AdminController@adminGet')->name('admin.all-admins');
    //recent Activities
    Route::get('/admin/activities', 'Admin\AdminController@activity')->name('admin.activities');

    //politicians
    Route::get('/admin/politicians', 'Admin\AdminController@politicianGet')->name('admin.politicians');
    Route::post('add-politician', 'Admin\AdminController@addPolitician');
    Route::put('edit-politician/{id}', 'Admin\AdminController@editPolitician')->name('edit.politicians');
});
