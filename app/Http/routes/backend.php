<?php 

Route::group(['prefix' => 'backend'], function(){

	require __DIR__.'/backend/myprofile.php';
	require __DIR__.'/backend/home.php';
	require __DIR__.'/backend/user.php';


});


 