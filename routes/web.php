<?php
/*Route::get('/', function () {
	    return view('index');
    });*/
    Route::get('/clear_cache', function () {
        $exitCode = Artisan::call('config:cache');
        });
        Route::get('/route_clear', function () {
        $exitCode = Artisan::call('route:clear');
        });
  //FRONT
Route::get('/weight-calculator', 'HomeController@weightCalculator')->name('/weight-calculator');
// Route::view('/weight-calculator', 'fronts.weight-calculator');
Route::get('/','HomeController@index')->name('/');
Route::get('l/{slug}/{slug2?}','HomeController@listCategory')->name('l');
Route::get('details/{slug1}','HomeController@details')->name('details');
Route::post('search','HomeController@searchResult')->name('search');
Route::get('my-books','IpController@trackIp')->name('my-books');
Route::get('about/{slug}','FrontCmsController@aboutUs')->name('about');
Route::get('privacy/{slug}','FrontCmsController@privacyPolicy')->name('privacy');
Route::get('terms/{slug}','FrontCmsController@termsCondition')->name('terms');
Route::get('/contactus','HomeController@contactus')->name('/contactus');
Route::get('/free-quote','HomeController@freequote')->name('/freequote');
Route::get('/solutions','HomeController@solutions')->name('/solutions');
Route::get('/testimonials','HomeController@testimonials')->name('/testimonials');
Route::get('/faqs','HomeController@faqs')->name('/faqs');
Route::get('/blogs','HomeController@blogs')->name('/blogs');
Route::get('/associates-partners','HomeController@associatespartners')->name('/associatespartners');
Route::get('/aboutus','HomeController@aboutus')->name('/aboutus');
Route::get('blog-detail/{slug}','HomeController@BlogDetail')->name('blog-detail');

Route::get('/sitemap','HomeController@sitemap')->name('/sitemap');
// Route::get('services','HomeController@services')->name('/services');
// Route::get('/moving-services','HomeController@moving_services')->name('/moving-services');
// Route::get('/packing-services','HomeController@packing_services')->name('/packing-services');
// Route::get('/storage-services','HomeController@storage_services')->name('/storage-services');
Route::post('contact/save','HomeController@contact_save')->name('/contact/save');
Route::post('free-quote/send','HomeController@free_quote_send')->name('/free-quote/send');




Route::prefix('cpanel')->group(function(){
	Route::get('login', 'Auth\LoginController@showLoginForm')->name('ad_login');
	Route::post('login', 'Auth\LoginController@login')->name('ad_post_login');
    Route::post('logout', 'Auth\LoginController@logout')->name('ad_logout');
    Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
    Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
    Route::post('password/reset', 'Auth\ResetPasswordController@reset')->name('password.update');


});

    Route::prefix('admin')->middleware(['auth', 'admin'])->namespace('Admin')->group(function(){
	Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
	Route::resource('home-slider', 'HomeSliderController');
	Route::resource('home-clients', 'HomeClientsController');
	Route::resource('home-faqss', 'HomeFaqssController');
	Route::resource('home-news', 'HomeNewsController');
	Route::put('pages/update/{page_id}', 'PagesController@updatePage')->name('updatePage');
	Route::get('pages/edit/{page_id}', 'PagesController@editPage')->name('editPage');
	Route::resource('category','CategoryController');
	Route::resource('program','ProgramCurrucilumController');
	Route::get('pages/edit/{page_id}', 'PagesController@editPage')->name('editPage');
	Route::resource('contact', 'ContactController');
	Route::resource('books', 'BookController');
   
    Route::resource('register', 'RegisterController');
    Route::resource('important-notice','ImportanNoticeController');
    Route::get('about-us','AboutusController@edit')->name('about-us');
    Route::put('update/{id}','AboutusController@update')->name('update');
    Route::resource('cms','CmsController');
    Route::resource('assign-institute','AssignInstituteController');
    Route::get('delete-image/{id}','HomeSliderController@deleteImage')->name('delete-image');
	Route::get('delete-image/{id}','HomeClientsController@deleteImage')->name('delete-image');
	Route::get('delete-image/{id}','HomenewsrController@deleteImage')->name('delete-image');
	Route::get('delete-image/{id}','HomeFaqssController@deleteImage')->name('delete-image');
    Route::get('delete-pdf/{id}','BookController@deletePdf')->name('delete-pdf');
    Route::get('delete-bookcover/{id}','BookController@deleteBookcover')->name('delete-bookcover');
    Route::get('delete-cmsimage/{id}','CmsController@deleteCmsimage')->name('delete-cmsimage');
	Route::get('delete-categoryimage/{id}','CategoryController@deleteCategoryimage')->name('delete-Categoryimage');
	Route::get('delete-categoryhomeimage/{id}','CategoryController@deleteCategoryhomeimage')->name('delete-Categoryhomeimage');


    Route::get('delete-cms-banner-image/{id}','CmsController@deleteCmsBanner')->name('delete-cms-banner-image');
   // Route::get('upload-category','CategoryController@uploadCategory')->name('upload-category');
    Route::get('upload-category','CategoryController@uploadCategory')->name('upload-category');
    Route::post('upload-csv-category','CategoryController@uploadFile')->name('upload-csv-category');

 
 
  
    
});
