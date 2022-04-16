<?php

    use Illuminate\Support\Facades\Auth;
    use Illuminate\Support\Facades\Route;
    use Illuminate\Support\Facades\Http;

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

//    Route::group(['middleware' => 'web'], function(){
//        Route::get('/', 'HomeController@index');
//        Auth::routes();
//        Route::get('/home', 'HomeController@index')->name('home');
//    });

//    Route::get('/usuarios', 'UsuariosController@index')->middleware('auth');


    Route::get('/', function () {
        return view('welcome');
    });

    Auth::routes();

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('usuarios', 'App\Http\Controllers\UsuariosController@index');
    Route::get('/usuarios/new', 'App\Http\Controllers\UsuariosController@new');
    Route::post('usuarios/add', 'App\Http\Controllers\UsuariosController@add');
    Route::get('usuarios/{id}/edit', 'App\Http\Controllers\UsuariosController@edit');
    Route::post('/usuarios/update/{id}', 'App\Http\Controllers\UsuariosController@update');
    Route::delete('/usuarios/delete/{id}', 'App\Http\Controllers\UsuariosController@delete');



//    Route::get('http-client',function() {

//    composer require guzzlehttp/guzzle

//        $response = Http::get('http:://api.github.com/users/abiliod')['name'];
//        $response = Http::get('http://localhost/usuarios');

//        if ($response) {
//            return $response->body() : string;
//            return $response->json($key = null) : array|mixed;
//            return $response->object() : object;
//            return $response->collect($key = null) : Illuminate\Support\Collection;
//            return $response->status() : int;
//            return $response->ok() : bool;
//            return $response->successful() : bool;
//            return $response->redirect(): bool;
//            return $response->failed() : bool;
//            return $response->serverError() : bool;
//            return $response->clientError() : bool;
//            return $response->header($header) : string;
//            return $response->headers() : array;
//           return Http::get('http://localhost/usuarios/1')['name'];
//        }
//        return    dd('erro de requisição');
//    });

//    Route::get('http-client',function(){
//        $createUser = Http::post('https://reqres.in/api/users', [
//            'name' => 'name teste',
//            'job' => 'job teste'
//        ]);
//        if (!$createUser->clientError() || $createUser->serverError()) {
//            dd('erro de requisição');
//        }
//        return $createUser->body();
//
//        $response = Http::get('http://example.com/users', [
//            'name' => 'Taylor',
//            'page' => 1,
//        ]);
//        $response = Http::asForm()->post('http://example.com/users', [
//            'name' => 'Sara',
//            'role' => 'Privacy Consultant',
//        ]);
////        tipo de conteúdo que seu aplicativo espera em resposta
//        $response = Http::accept('application/json')->get('http://example.com/users');
//    });



//
//    Route::get('teste-local',function(){
//
//        $responses = Http::pool(fn (Pool $pool) => [
//            $pool->get('http://localhost/usuarios/1'),
//            $pool->get('http://localhost/usuarios/2'),
//            $pool->get('http://localhost/usuarios/3'),
//        ]);
//
//        return $responses[0]->ok() &&
//            $responses[1]->ok() &&
//            $responses[2]->ok();
//    });

//    public function boot()
//    {
//        Http::macro('github', function () {
//            return Http::withHeaders([
//                'X-Example' => 'example',
//            ])->baseUrl('https://github.com');
//        });
//    }
////    macro configurada chama de quqalquer lugar
//    $response = Http::github()->get('/');
