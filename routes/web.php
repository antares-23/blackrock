<?php

use App\Publication;
use App\User;

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
  // return view('welcome');
    return "hello!";
});


//Route::get('/about', function () {
//    // return view('welcome');
//    return "about!";
//});
//
//Route::get('/contact', function () {
//    // return view('welcome');
//    return "contact";
//});
//
//Route::get('/post/{id}/{name}', function($id,$name){
//    return "Post # ".$id." ".$name;
//
//});
//
//
//Route::get('admin/posts/example',array('as'=>'admin.home',function(){
//
//    $url= route('admin.home'); //alias para el backend
//
//    return "this utl is" .$url;
//}));
//Route::get('/post/{id}','PostController@index');

//
//Route::resource('posts', 'PostController');
//
//Route::get('/contact', 'PostController@contact');
//
//Route::get('/post/{id}/{name}/{pass}', 'PostController@show_post');
//


/*
 * Database Raw Queries!
 * */

//Route::get('/insert',function (){
//
//   DB::insert('insert into posts(title, content) values(?,?)',['PHP with Laravel','Laraverl Rulez!']);
//
//});
//
//
//Route::get('/read', function (){
//
//    $results = DB::select('select * from posts');
//
//    foreach ($results as $result){
//        return $result->title;
//    }
//});
//
//
//Route::get('/update',function (){
//    $updated = DB::update('update posts set title="Update title" where id = ?', [1]);
//
//    return $updated;
//});
//
//
//Route:: get('/delete', function(){
//    $deleted= DB::delete('delete from  posts where id = ?', [1]);
//
//    return $deleted;
//
//});

/*
 * ELOQUENT
 * */
//
//Route::get('/read',function (){
//
//    $post=Publication::all();
//    foreach ($post as $post){
//
//        return $post->title;
//    }
//});

//Route::get('/find',function (){
//
//    $post=Publication::find(2);
//
//        return $post->title;
//
//});


//Route::get('/findwhere',function(){
//    $post = Publication::where('id',2)->orderBy('id','desc')->take(1)->get();
//    return $post;
//
//});

//Route::get('/findmore',function(){
////    $post = Publication::findOrFail(1);
////    return $post;
//
////    $post =  Publication::where('users_count','<',50)->firstOrFail();
////    return $post;
//
//});

//Route::get('/basicinsert',function(){
//    $post =  new Publication;
//
//    $post->title='New Eloquent title insert';
//    $post->publication='Le derpo hast talked!';
//
//    $post->save();
//});
//
//Route::get('/basicinsert',function(){
//
//    $post =  Publication::find(2); ///funcion estatica xq no necesita instanciarse, ver https://stackoverflow.com/questions/2671496/java-when-to-use-static-methods
//
//    $post->title='New Eloquent title edit';
//    $post->publication='Le derpo hast eedited!';
//
//    $post->save();
//});
//
Route::get('/create', function (){

    Publication::create(['title' => 'The screate method', 'publication'=>'This shist rocks!', 'is_admin'=>0]);
});

//Route::get('/update',function(){
//    Publication::where('id',2)->update(['title'=>'nuevo titulo', 'publication'=>'Tiz Shit Rulz!']);
//});

//
//Route::get('/delete', function () {
//
//    $post = Publication::find(6);
//    $post->delete();
//});


//Route::get('/delete2', function () {
//
//    //Publication::destroy([4,5]);
//    Publication::where('is_admin', 0)->delete();
//});

Route::get('/softdelete',function(){

    Publication::find(9)->delete();

});



//Route::get('/readsoftdelete',function(){
//
////    $post= Publication::find(5);
////    return $post;
//
//   // $post = Publication::withTrashed()->where('deleted_at','!=',null)->get();
//    $post = Publication::onlyTrashed()->get();
//    return $post;
//
//});
//
//
//Route::get('/restore',function(){
//
//    Publication::withTrashed()->restore();
//});
//
//Route::get('/forcedelete',function(){
//
//    Publication::onlyTrashed()->forceDelete();
//});

/*
 *
 * ELOQUENT RELATIONSHIPS
 *
 * */

//one to one Relationship

//Route::get('/user/posts/{id}/post',function($id){
//
//    return User::find($id)->post; //->title;
//});
//
//
//Route::get('post/{id}/user',function($id){
//    return Publication::find($id)->user;
//});

//Route::get('/posts',function(){
//
//   $user =  User::find(1);
//
//   foreach ($user->posts as $post){
//    echo $post->title;
//    echo $post->publication."<br>";
//
//   }
//});

//Many to Many Relationships;

//Route::get('/user/{id}/role',function($id){
//
//    $user = User::find($id)->roles()->orderBy('id','desc')->get();
//
//    return $user;
//
////    foreach($user->roles as $role){
////        return $role;
////    }
//});


//access the pivot/intermediate table

Route::get('user/pivot',function(){

    $user = User::find(1);

    foreach ($user->roles as $role){
        echo $role->pivot->created_at;
    }
});