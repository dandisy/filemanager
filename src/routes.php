<?php
Route::group(['prefix' => config('filemanager.defaultRoute', 'assets') , 'middleware' => config('filemanager.middleware')], function() {
    Route::get('/', 'Webcore\FileManager\Controllers\FileManagerController@getIndex');
	Route::get('/dialog', 'Webcore\FileManager\Controllers\FileManagerController@getDialog');

	Route::post('/get_folder', 'Webcore\FileManager\Controllers\FileManagerController@ajaxGetFilesAndFolders');
	Route::post('/uploadFile', 'Webcore\FileManager\Controllers\FileManagerController@uploadFile');
	Route::post('/createFolder', 'Webcore\FileManager\Controllers\FileManagerController@createFolder');
	Route::post('/delete', 'Webcore\FileManager\Controllers\FileManagerController@delete');
	Route::get('/download', 'Webcore\FileManager\Controllers\FileManagerController@download')->where('path', '.*');
	Route::post('/preview', 'Webcore\FileManager\Controllers\FileManagerController@preview')->where('file', '.*');
	Route::post('/move', 'Webcore\FileManager\Controllers\FileManagerController@move');
	Route::post('/rename', 'Webcore\FileManager\Controllers\FileManagerController@rename')->where('file', '.*');
	Route::post('/optimize', 'Webcore\FileManager\Controllers\FileManagerController@optimize')->where('file', '.*');
});
