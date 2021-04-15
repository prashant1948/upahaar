<?php

use Illuminate\Support\Facades\Auth;
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

Route::get('/ecommerce', 'IndexController@indexMart')->name('ecommerce');
Route::get('/', 'IndexController@multi');
//Route::get('/index', 'IndexController@index');
//Route::get('/home', 'IndexController@home')->name('home');
//Route::get('/about', 'IndexController@about')->name('about');
//Route::get('/blog', 'IndexController@blog');


Route::get('/carousel', 'IndexController@carousel');

Route::get('/faq', 'IndexController@faq');

Route::get('/product/{id}', 'ProductsController@showProduct');
Route::get('/department', 'ProductsController@getDepartments');
Route::get('/department/{department}', 'ProductsController@showProducts');
Route::post('/products/search', 'ProductsController@searchProducts');
Route::get('/products/tag_search', 'ProductsController@searchProductsByTag');
Route::get('/cart', 'CartController@getCart');
Route::post('/cart/add', 'CartController@addToCart');
Route::get('/cart/list', 'CartController@getCartList');
Route::post('/cart/remove', 'CartController@removeFromCart');
Route::get('/checkout', 'CartController@checkoutForm');
Route::post('/checkout', 'CartController@checkout');

//admin Dashboard
// Route::get('/admin/dashboard','Admin\DashboardController@index')->middleware('role:3');
Route::get('/admin/dashboard','Admin\DashboardController@index');

Route::get('/admin/itemlist','Admin\ProductController@itemslist');
Route::get('/admin/itemlist/add','Admin\ProductController@addItemPage');
Route::post('/admin/itemlist/add','Admin\ProductController@additem');
Route::get('/admin/itemlist/{id}/edit','Admin\ProductController@edit')->name('item.edit');
Route::patch('/admin/itemlist/{id}','Admin\ProductController@update')->name('item.update');
Route::get('/admin/itemlist/destroy/{id}', 'Admin\ProductController@destroy')->name('i.destroy');

Route::get('/admin/departmentList','Admin\DepartmentController@index');
Route::get('/admin/department/add','Admin\DepartmentController@create');
Route::post('/admin/department/add','Admin\DepartmentController@store');
Route::get('/admin/department/{id}/edit','Admin\DepartmentController@edit')->name('department.edit');
Route::post('/admin/department/{id}','Admin\DepartmentController@update')->name('department.update');
Route::get('/admin/department/destroy/{id}', 'Admin\DepartmentController@destroy')->name('d.destroy');

Route::get('/contact', 'IndexController@contact');
Route::get('/contact/list','ContactUsController@index');
Route::post('/contact/add','ContactUsController@store')->name('contact.store');
Route::get('/contact/destroy/{id}', 'ContactUsController@destroy')->name('c.destroy');

Route::resource('/frontend', 'Admin\FrontendController');
Route::get('/frontend/destroy/{id}', 'Admin\FrontendController@destroy')->name('f.destroy');

Route::resource('/popup', 'Admin\PopUpController');
Route::get('/popup/destroy/{id}', 'Admin\PopUpController@destroy')->name('p.destroy');

Route::resource('/aboutUs', 'Admin\AboutUsController');
Route::get('/aboutUs/destroy/{id}', 'Admin\AboutUsController@destroy')->name('a.destroy');

Route::resource('/banner', 'BannerController');
Route::get('/banner/destroy/{id}', 'BannerController@destroy')->name('b.destroy');

Route::resource('/barcode', 'BarCodeController');
Route::get('/barcode/destroy/{id}', 'BarCodeController@destroy')->name('bc.destroy');

Route::get('/admin/vendor', 'Admin\VendorController@vendorList');
Route::post('/admin/vendor', 'Admin\VendorController@addVendor');
Route::delete('/admin/vendor/remove/{vendorId}','Admin\VendorController@deleteVendor');

Route::get('/admin/userlist','Admin\UserController@userlist');
Route::get('/admin/user/add','Admin\UserController@addUserPage');
Route::post('/admin/user/add','Admin\UserController@addUser');
Route::delete('/admin/user/remove/{userid}','Admin\UserController@removeUser');

Route::get('/admin/checkouts','Admin\CheckoutController@getCheckouts');

//status
Route::get('/checkout/{id}/status', 'Admin\CheckoutController@status')->name('checkout.status');

Route::get('livesearch','ProductsController@livesearch')->name('livesearch');

Route::get('/itemSort','Admin\ProductController@sort')->name('sort');
Route::get('/itemSearch','Admin\ProductController@search')->name('search');



Route::get('file-import-export', 'Admin\ProductController@fileImportExport');
Route::post('file-import', 'Admin\ProductController@fileImport')->name('file-import');
Route::get('file-export', 'Admin\ProductController@fileExport')->name('file-export');


Auth::routes();

Route::get('/profile', 'ProfileController@showProfile');


//Eazy Mart
Route::get('/indexMart', 'IndexController@indexMart');
Route::get('/about', 'IndexController@aboutMart');
Route::get('/contact', 'IndexController@contactMart');
Route::get('/singleMart/{id}', 'ProductsController@showProductsMart');


Route::post('/products/search/all', 'ProductsController@searchProductsMart');
Route::get('/departmentMart/{department}', 'ProductsController@showProductsMartDepartment');

Route::get('/checkoutMart', 'CartController@checkoutFormMart');

Route::get('/profileMart', 'ProfileController@showProfileMart');

//ImageGallery
Route::resource('/featured_image', 'ProductImageController');
Route::get('/featured_image/destroy/{id}', 'ProductImageController@destroy')->name('fi.destroy');

//Job
Route::get('/indexJob', 'Job\IndexController@index')->name('job.index');
Route::get('/joblogin', 'Job\IndexController@login')->name('job.login');
Route::get('/jobregister', 'Job\IndexController@register')->name('job.register');
Route::get('/browse', 'Job\IndexController@browse')->name('job.browse-job');
Route::get('/company', 'Job\IndexController@company')->name('job.companies');
Route::get('/detail', 'Job\IndexController@detail')->name('job.detail');
Route::get('/resume', 'Job\IndexController@resume')->name('job.resume');
Route::get('/jobCompany', 'Job\JobCompanyController@company')->name('job_company.create');

Route::resource('/jobcompany', 'Job\JobCompanyController');
Route::get('/jobcompany/destroy/{id}', 'Job\JobCompanyController@destroy')->name('job.destroy');

Route::resource('/jobcategory', 'Job\JobCategoriesController');
Route::get('/jobcategory/destroy/{id}', 'Job\JobCategoriesController@destroy')->name('job_category.destroy');


Route::resource('/jobs', 'Job\JobController');
Route::get('/jobs/destroy/{id}', 'Job\JobController@destroy')->name('jobb.destroy');

Route::get('/postjob', 'Job\JobController@postJob')->name('postJob.create');

Route::post('/job/add/{id}', 'Job\JobController@application');

Route::get('/jobapplicants', 'Job\JobController@applicationDetails')->name('jobapplicants');

Route::get('/profileCompany', 'ProfileController@showProfileJob')->name('company.profile');

Route::post('/job/search/all', 'IndexController@searchJob');

Route::get('liveJobSearch','IndexController@liveJobSearch')->name('liveJobSearch');


Route::get('/jobSort','Job\JobController@sort')->name('sort');
Route::get('/jobSearch','Job\JobController@search')->name('search');



Route::get('/jobCat', 'Job\JobCategoriesController@getJobCategories');

Route::get('/jobCat/{jobCat}', 'Job\JobCategoriesController@showJobCat');

Route::get('/singleJob/{id}', 'IndexController@showJob');

Route::get('/singleJobCompany/{id}', 'IndexController@showJobCompany');

Route::get('/jobApplicants/destroy/{id}', 'Job\JobController@destroyApplicants')->name('jobApplicants.destroy');

Route::get('/buyNow/{id}', 'CartController@buyNow')->name('buyNow');

Route::get('/checkoutBuy/{id}', 'CartController@checkoutFormMartBuy')->name('checkoutBuy');
Route::post('/checkoutBuy', 'CartController@checkoutBuy');
//Car
Route::get('/indexCar', 'IndexController@car')->name('car.index');


Route::resource('/carcategory', 'Car\CarCategoriesController');
Route::get('/carcategory/destroy/{id}', 'Car\CarCategoriesController@destroy')->name('car_category.destroy');

Route::resource('/cars', 'Car\CarDetailsController');
Route::get('/cars/destroy/{id}', 'Car\CarDetailsController@destroy')->name('car.destroy');

Route::post('/car/add/{id}', 'Car\CarDetailsController@rent');

Route::get('/carapplicants', 'Car\CarDetailsController@rentDetails')->name('carapplicants');

Route::post('/car/search/all', 'IndexController@searchCar');


Route::post('/search/all', 'IndexController@searchAll');

Route::get('liveCarSearch','IndexController@liveCarSearch')->name('liveCarSearch');

Route::get('/carCat', 'Car\CarCategoriesController@getCarCategories');

Route::get('/carCat/{carCat}', 'Car\CarCategoriesController@showCarCat');

Route::get('/carSort','Car\CarDetailsController@sort')->name('sort');
Route::get('/carSearch','Car\CarDetailsController@search')->name('search');


Route::get('auth/google', 'Auth\LoginController@redirectToGoogle');

Route::get('auth/google/callback', 'Auth\LoginController@handleGoogleCallback');

Route::get('auth/facebook', 'Auth\LoginController@redirectToFacebook');

Route::get('auth/facebook/callback', 'Auth\LoginController@handleFacebookCallback');
 Route::get('/magnify','IndexController@magnify');
