<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\Mail;

use App\Http\Controllers\MailController;

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

Route::get('/',[PageController::class, 'ViewLoginPageController']);



Route::get('/sendmail', [MailController::class, 'index']);

Route::post('/handle-login',[LoginController::class, 'HandleLoginContoller']);

Route::get('/view-home-page',[PageController::class, 'ViewHomePageController']);

Route::get('/handle-logout',[LoginController::class, 'HandleLogoutContoller']);

Route::get('/view-staff-management-index',[PageController::class, 'ViewStaffManagementIndexController']);

Route::post('/insert-staff-data',[DatabaseController::class, 'InsertStaffData']);

Route::get('/delete-staff-data/{auto_id}',[DatabaseController::class, 'DeleteStaffData']);

Route::get('/view-staff-management-edit/{auto_id}',[PageController::class, 'ViewStaffManagementEditController']);

Route::post('/update-staff-data',[DatabaseController::class, 'UpdateStaffData']);

Route::get('/view-settings-index',[PageController::class, 'ViewSettingsPageContoller']);

Route::post('/change-username',[DatabaseController::class, 'ChangeUsername']);

Route::post('/change-password',[DatabaseController::class, 'ChangePassword']);

Route::get('/view-user-accounts-index',[PageController::class, 'ViewUserAccountsIndexContoller']);

Route::get('/delete-user-account/{auto_id}',[DatabaseController::class, 'DeleteUserAccount']);

Route::get('/view-edit-user-account/{auto_id}',[PageController::class, 'ViewEditUserAccount']);

Route::post('/edit-user-account',[DatabaseController::class, 'EditUserAccount']);

Route::post('/insert-user-accounts',[DatabaseController::class, 'InsertUserAccount']);

Route::get('/accept-request/{auto_id}',[DatabaseController::class, 'AcceptRequest']);

Route::get('/decline-request/{auto_id}',[DatabaseController::class, 'DeclineRequest']);

Route::get('/view-leave-history',[PageController::class, 'ViewLeaveHistoryController']);

Route::post('/filter-search-leave-history-controller',[PageController::class, 'FilterSearchLeaveHistoryController']);



Route::get('/view-home-page-of-staff-account',[PageController::class, 'ViewHomePageOfStaffAccountController']);

Route::get('/view-settings-index-of-staff-account',[PageController::class, 'ViewSettingsPageOfStaffAccountContoller']);

Route::post('/change-username-of-staff-account',[DatabaseController::class, 'ChangeUsernameOfStaffAccount']);

Route::post('/change-password-of-staff-account',[DatabaseController::class, 'ChangePasswordOfStaffAccount']);

Route::post('/insert-leave-data-of-staff-account',[DatabaseController::class, 'InsertLeaveDataOfStaffAccount']);

Route::get('/delete-leave-pending-request-in-staff-account/{auto_id}',[DatabaseController::class, 'DeleteLeavePendingRequestInStaffAccount']);

Route::get('/view-my-leave-history-of-staff-account',[PageController::class, 'ViewMyLeaveHistoryPageOfStaffAccountController']);

Route::post('/filter-search-leave-history-of-staff-account',[PageController::class, 'FilterSearchLeaveHistoryPageOfStaffAccountController']);

?>
