Route::group(['middleware' => ['web']], function () {
	
    Route::get('/','studentController@index');
    Route::post('insert','studentController@insert');
    
});