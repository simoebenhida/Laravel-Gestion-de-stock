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
Route::get('home',function(){
return view('auth.login');
});
Route::get('/',[
  'uses' => 'DashboardController@home',
  'as' => 'home.dashboard'
  ]);


  Route::get('connection',[
    'uses' => 'UserController@get_login',
    'as' => 'login'
  ]);
  //---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Client--------------------------------------------
  //
Route::get('client/{id}',[
  'uses' => 'generationController@single_client',
  'as' => 'single.client'
]);
Route::get('client/edit/{id}',[
  'uses' => 'generationController@get_edit_client',
  'as' => 'get_edit_client'
]);
Route::post('client/edit/{id}',[
  'uses' => 'generationController@edit_client',
  'as' => 'edit.client'
]);
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Generation--------------------------------------------
//
Route::get('generation',[
  'uses'=> 'generationController@generation_home',
  'as'=> 'generation.home'
  ]);
Route::get('generation/modifier/{id}',[
  'uses' => 'generationController@get_edit_generation',
  'as' => 'get_edit_generation'
  ]);

Route::post('generation/modifier/{id}',[
  'uses' => 'generationController@edit_generation',
  'as' => 'edit.generation'
  ]);
Route::get('generation/delete/{id}',[
  'uses' => 'generationController@destroy_generation',
  'as' => 'destroy.generation'
  ]);
//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Entres
Route::get('/entres/add',[
  'uses' => 'generationController@get_add_entres',
  'as' => 'get_add_entres'
]);
Route::post('entres/add',[
  'uses' => 'generationController@post_add_entres',
  'as' => 'add.entres'
]);
Route::get('entres',[
  'uses' => 'generationController@show_entres',
  'as' => 'show.entres'
]);
//Edit entres
Route::get('entres/modifier/{id}',[
  'uses' => 'generationController@get_edit_entres',
  'as' => 'get_edit_entres'
  ]);
Route::post('entres/modifier/{id}',[
  'uses' => 'generationController@edit_entres',
  'as' => 'edit.entres'
]);

//delete

Route::get('entres/delete/{id}',[
  'uses' => 'generationController@destroy_entres',
  'as' => 'destroy.entres'
  ]);
//---------------------------------------------------------------------------------------------------------------------------------------------END ENTRES--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------Sorties--------------------------------------------------------------------------------------------------------
Route::get('/sorties/add',[
  'uses' => 'generationController@get_add_sorties',
  'as' => 'get_add_sorties'
]);
Route::post('sorties/add',[
  'uses' => 'generationController@post_add_sorties',
  'as' => 'add.sorties'
]);
Route::get('sorties',[
  'uses' => 'generationController@show_sorties',
  'as' => 'show.sorties'
]);
//Edit sorties
Route::get('sorties/modifier/{id}',[
  'uses' => 'generationController@get_edit_sorties',
  'as' => 'get_edit_sorties'
  ]);
Route::post('sorties/modifier/{id}',[
  'uses' => 'generationController@edit_sorties',
  'as' => 'edit.sorties'
]);

//delete

Route::get('sorties/delete/{id}',[
  'uses' => 'generationController@destroy_sorties',
  'as' => 'destroy.sorties'
  ]);
//---------------------------------------------------------------------------------------------------------------------------------------------END Sorties--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------


//---------------------------------------------------------------------------------------------------------------------------------------------Types--------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------

Route::get('types',[
  'uses' => 'generationController@index_types',
  'as' => 'home.types'
]);
Route::post('types',[
  'uses' => 'generationController@post_types',
  'as' => 'post.types'
]);

Route::get('type/{id}',[
  'uses' => 'generationController@single_type',
  'as' => 'single.type'
  ]);
Route::get('types/modifier/{id}',[
  'uses' => 'generationController@get_edit_page_types',
  'as' => 'get_edit_page_types'
  ]);
Route::post('types/modifier/{id}',[
  'uses' => 'generationController@edit_page_types',
  'as' => 'edit.page.types'
]);

//delete

Route::get('types/delete/{id}',[
  'uses' => 'generationController@destroy_page_types',
  'as' => 'destroy.page.types'
  ]);
