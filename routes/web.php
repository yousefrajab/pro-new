<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\numcontroller;
use App\Http\Controllers\usercontroller;
use App\Http\Controllers\admincontroller;
use App\Http\Controllers\customercontroller;
use App\Http\Controllers\formscontroller;
use App\Http\Controllers\mailcontroller;
use App\Http\Controllers\postcontroller;
use App\Http\Controllers\site10controller;
use App\Http\Controllers\site1controller;
use App\Http\Controllers\site2controller;
use App\Http\Controllers\site3controller;
use App\Http\Controllers\site4controller;
use App\Http\Controllers\site5controller;
use App\Http\Controllers\site6controller;
use App\Http\Controllers\site7controller;
use App\Http\Controllers\site8controller;
use App\Http\Controllers\site9controller;

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
    return view('welcome ');
});

//Route::get('$url', '$action');
//Route::post('$url', '$action');
//Route::patch('$url', '$action');
//Route::put('$url', '$action');
//Route::delete('$url', '$action');

route::get('/', function () {
    return 'home page';
});

route::any('testc', function () {
    return 'test';
});

route::match(['post ', 'delete', 'put', 'get'], 'test', function () {
    return 'hi';
});

route::get('user/{name}/{age}', function ($name, $age) {

    return 'hi  ' . $name . ' your age is ' . $age;
})->wherealpha('name')->wherenumber('age');


Route::get('/users/{name}', function ($name) {
    return 'hi ' . $name;
})->whereAlphaNumeric('name');

Route::get('/user/{id}', function ($id) {
    //
})->whereUuid('id');

Route::get('/category/{category}', function ($category) {
    return $category;
})->whereIn('category', ['movie', 'song', 'painting']);

Route::get('/userv/{name?}', function ($name = null) {
    return 'user' . $name;
})->wherealpha('name');


route::get('num/{post}/{com}/show', function ($postid, $comid) {

    return "num post $postid and num com is $comid";
})->name('numm');

// route::get('/', function () {

//     $post = 10;
//     $comm = 20;
//     $url = route('numm', [$post, $comm]);
//     return 'show' . $url;
// });


route::prefix('admin')->name('admin.')->group(function () {
    route::get('user', function () {
        return 'admin user';
    })->name('user');
    route::get('post', function () {
        return 'admin post';
    })->name('post');
    route::get('com', function () {
        return 'admin com';
    })->name('com');
});



// route::get('/', [numcontroller::class, 'index'])->name('index');
// route::get('about', [numcontroller::class, 'about'])->name('about');
// route::get('contact', [numcontroller::class, 'contact'])->name('contact');
// route::get('/user/{id}', [numcontroller::class, 'user'])->name('user');

route::prefix('admin')->name('admin.')->group(function () {

    route::get('/', [admincontroller::class, 'home'])->name('home');
    route::get('orders', [admincontroller::class, 'orders'])->name('orders');
    route::get('products', [admincontroller::class, 'products'])->name('products');
});
route::prefix('users')->name('users.')->group(function () {

    route::get('/', [usercontroller::class, 'indexx'])->name('indexx');
    route::get('/profile', [usercontroller::class, 'profile'])->name('profile');
});
route::prefix('customers')->name('customers.')->group(function () {

    route::get('/', [customercontroller::class, 'index'])->name('index ');
    route::get('/profile/{id}', [customercontroller::class, 'profile'])->name('profile ');
});


route::get('site1', [site1controller::class, 'index'])->name('site1');


route::prefix('site2')->name('site2.')->group(function () {

    route::get('/', [site2controller::class, 'index'])->name('index');
    route::get('/about', [site2controller::class, 'about'])->name('about');
    route::get('/contact', [site2controller::class, 'contact'])->name('contact');
    route::get('/post', [site2controller::class, 'post'])->name('post');
});

route::prefix('site3')->name('site3.')->group(function () {

    route::get('/', [site3controller::class, 'index'])->name('index');
    route::get('/experience', [site3controller::class, 'experience'])->name('experience');
    route::get('/education', [site3controller::class, 'education'])->name('education');
    route::get('/skills', [site3controller::class, 'skills'])->name('skills');
    route::get('/interests', [site3controller::class, 'interests'])->name('interests');
    route::get('/awards', [site3controller::class, 'awards'])->name('awards');
});


route::prefix('site4')->name('site4.')->group(function () {

    route::get('/', [site4controller::class, 'index'])->name('index');
    route::get('/services', [site4controller::class, 'services'])->name('services');
    route::get('/portfolio', [site4controller::class, 'portfolio'])->name('portfolio');
    route::get('/about', [site4controller::class, 'about'])->name('about');
    route::get('/team', [site4controller::class, 'team'])->name('team');
    route::get('/contact', [site4controller::class, 'contact'])->name('contact');
});

route::prefix('site5')->name('site5.')->group(function () {

    route::get('/', [site5controller::class, 'index'])->name('index');
    route::get('/about', [site5controller::class, 'about'])->name('about');
    route::get('/services', [site5controller::class, 'services'])->name('services');
    route::get('/portfolio', [site5controller::class, 'portfolio'])->name('portfolio');
    route::get('/contact', [site5controller::class, 'contact'])->name('contact');
});


route::prefix('site6')->name('site6.')->group(function () {

    route::get('/', [site6controller::class, 'index'])->name('index');
    route::get('/about', [site6controller::class, 'about'])->name('about');
    route::get('/projects', [site6controller::class, 'projects'])->name('projects');
    route::get('/contact', [site6controller::class, 'contact'])->name('contact');
});


Route::prefix('site7')->name('site7.')->group(function () {
    Route::get('/' , [site7controller::class , 'index'])->name('index');
    Route::get('/icons' , [site7controller::class , 'icons'])->name('icons');
    Route::get('/image' , [site7controller::class , 'image'])->name('image');
    Route::get('/testimonials' , [site7controller::class , 'testimonials'])->name('testimonials');
    Route::get('/call' , [site7controller::class , 'call'])->name('call');
});

route::prefix('site8')->name('site8.')->group(function () {

    route::get('/', [site8controller::class, 'index'])->name('index');
    route::get('/about', [site8controller::class, 'about'])->name('about');
    route::get('/services', [site8controller::class, 'services'])->name('services');
    route::get('/callout', [site8controller::class, 'callout'])->name('callout');
    route::get('/portfolio', [site8controller::class, 'portfolio'])->name('portfolio');
    route::get('/contact', [site8controller::class, 'contact'])->name('contact');

});


route::prefix('site9')->name('site9.')->group(function() {

route::get('/' , [site9controller::class , 'index'])->name('index');
route::get('/about' , [site9controller::class , 'about'])->name('about');
route::get('/products' , [site9controller::class , 'products'])->name('products');
route::get('/store' , [site9controller::class , 'store'])->name('store');
});


route::prefix('site10')->name('site10.')->group(function(){

route::get('/' , [site10controller::class , 'index'])->name('index');
route::get('/quote' , [site10controller::class , 'quote'])->name('quote');
route::get('/Appfeatures' , [site10controller::class , 'Appfeatures'])->name('Appfeatures');
route::get('/Basicfeatures' , [site10controller::class , 'Basicfeatures'])->name('Basicfeatures');
route::get('/contact' , [site10controller::class , 'contact'])->name('contact');
route::get('/download' , [site10controller::class , 'download'])->name('download');
});

Route::get('/form1',[formscontroller::class , 'form1'])->name('form1');
Route::post('/form1',[formscontroller::class , 'form1_data'])->name('form1_data');


Route::get('/form2',[formscontroller::class , 'form2'])->name('form2');
Route::post('/form2',[formscontroller::class , 'form2_data'])->name('form2_data');

Route::get('/form3',[formscontroller::class , 'form3'])->name('form3');
Route::post('/form3',[formscontroller::class , 'form3_data'])->name('form3_data');

Route::get('/form4',[formscontroller::class , 'form4'])->name('form4');
Route::post('/form4',[formscontroller::class , 'form4_data'])->name('form4_data');
Route::get('/form5',[formscontroller::class , 'form5'])->name('form5');
Route::post('/form5',[formscontroller::class , 'form5_data'])->name('form5_data');


route::get('send-mail',[mailcontroller::class , 'send']);
route::get('contact_us',[mailcontroller::class , 'contact_us']);
route::post('contact_us',[mailcontroller::class , 'contact_us_data'])->name('contact_us');


// make migration ->  لانشاء جدول استخدم امر مع اعطاء الاسم
// وخلي الاسم create_table_name_table
// migrate -> حتى ابعت المعلومات للجدول على داتا بيز استخدم امر اسمو ومن اعدادات الانف بغير اسم من لارفيل لاسم الداتا الي انشاتها اسمها فيوجن 8
//migrate:fresh -> وبتقطع الاتصال نهائيا migration احذفهن كلهن ثم انشاؤهم من جديد مع جدول
//migrate:rollback ->  بتراجع عن اخر عملية عملتها
//migrate:reset ->  بتحذف الجداول
//migrate:status ->  بعطيك حالة الجدول اذا شغال او لا
//migrate:refresh ->  بتحذف وبتنشا
//migrate:install -> لو مجلد انحذف يتم انشاءه تاني
//make:model -> كل ما له علاقة بجداول الداتا واالتعامل معها هو واسمو لازم يكون مفرد من اسم الجدول
//factories -> شرط اسم الملف يكون اسم المودل مع كلمة فاكتوري
//postfactory -> مثال
//make:factory postFactory لازم الاف تكون كبيرة في الفاكتوري
// db:seed خذ الملف الي انشاءتو وخذو على الداتا بيز
// 1- انشا مودل
// 2- انشا فاكتوري
// 3- انشا سيد
// migrate:fresh --seed -> بحذف وبنشا وبرفع مرة واحده
//make:model post -m -> بنشا المودل والمايغريتشن مرة واحده
//make:model post -mfs -> بنشا المودل والمايغريتشن مع فاكتوري مع سيدر مرة واحده
//make:model post -a -> مودل -فاكتوري -مايغريتشن - سيدر - كنترولر

//CRUD
// C => create  *يتطلب رابطين  رابط بعرض صفحة الاضافة والتاني بياخذ البايانات *
// get  - post
// R = > read  يتطلب رابط واحد فقط بقرا البيانات  *    get
// U => update     * get - put
// D => delete     * delete

Route::get('posts' , [postcontroller::class , 'index'])->name('posts.index');

Route::get('posts/{id}' , [postcontroller::class , 'show'])->name('posts.show');

