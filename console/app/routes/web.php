<?php
namespace SFW\Routes;
use SFW\Route;

/******************************************************************************************/
Route::group("LoginMiddleWare",function () {
    Route::get('login', 'UserController@loginView');
});
Route::group("AuthMiddleWare",function () {
    Route::get('verify', 'DashBoardController@verifyList');
    Route::get('/', 'DashBoardController@verifyList');
    Route::get('verified', 'DashBoardController@verifiedList');
    Route::get('amber', 'DashBoardController@amberList');
    Route::get('red', 'DashBoardController@redList');
    // Route::get('green', 'DashBoardController@greenList');
    Route::get('archive', 'DashBoardController@archiveList');
    Route::get('autoVerified', 'DashBoardController@autoVerifiedList');
    Route::get('amberVerified', 'DashBoardController@amberVerifiedList');
    Route::get('amberUnverified', 'DashBoardController@amberUnverifiedList');
    Route::get('redVerified', 'DashBoardController@redVerifiedList');
    Route::get('redUnverified', 'DashBoardController@redUnverifiedList');
    Route::get('rejected', 'DashBoardController@deletedList');
    Route::get('settings', 'SettingsController@settings');
    Route::get('logout', 'UserController@logout');
    Route::post('validateAllUsers', 'ExcelUploadController@validateAllUsers');
    Route::post('validateUser', 'ExcelUploadController@validateUser');
    Route::get('uploadView', 'ExcelUploadController@uploadView');
    
});

Route::post('uploadExcelFile', 'ExcelUploadController@upload');


/******************************************************************************************/
