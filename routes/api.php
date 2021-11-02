<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});




/**
 * @Author: oys
 */
Route::prefix('experiment6')->group(function (){


 Route::post('test','Completion6Controller@Test');
    Route::post('completion6','Completion6Controller@completion6');//实验6答题
    Route::get('pdf6','Completion6Controller@pdf6');//实验6pdf


    Route::post('completion6photo','Completion6Controller@completion6photo');//实验6图片分存入

    Route::post('completion6out','Completion6Controller@completion6out');//拿答题数据对象

});

Route::prefix('experiment1')->group(function (){
    /**
     * @Author: pxy,zqz
     */

    Route::post('completion1','Completion1Controller@completion1');//实验1答题

    Route::get('pdf1','Completion1Controller@pdf1');//实验1pdf

});





/**
 * @Author: Alexcutest
 */
Route::group(['prefix'=>'experiment','middleware'=>'throttle:3'],function(){
    Route::post('student','ExperimentController@student');//学生信息
    Route::post('completion','ExperimentController@completion');//实验答题
    Route::post('completion8','runController@completion8');//实验8答题
    Route::get('pdf','ExperimentController@pdf');//实验pdf
    Route::get('pdf8','runController@pdf8');//实验8pdf
});
Route::prefix('bridge') -> group(function(){
    Route::post('student','BridgeController@student');//学生信息
    Route::post('completion','BridgeController@completion');//实验答题
    Route::get('pdf','BridgeController@pdf');//实验pdf

});
/**
 * @Author: pxy
 */
Route::prefix('experiment11')->group(function (){
    Route::post('completion11','Completion11Controller@completion11');//实验11答题
    Route::get('pdf11','Completion11Controller@pdf11');//实验11pdf
});
/**
 * @Author: yjx
 */
Route::prefix('experiment4')->group(function (){
    Route::post('completion4','Completion4Controller@completion4');//实验4答题
    Route::get('pdf4','Completion4Controller@pdf4');//实验4pdf
});//yjx
/**
 * @Author: yjx
 */
Route::prefix('experiment14')->group(function (){

    Route::post('completion14','Completion14Controller@completion14');//实验14答题
    Route::get('pdf14','Completion14Controller@pdf14');//实验14pdf
});//yjx
/**
 * @Author: wzh
 */
Route::prefix('pendulum')->group(function (){
    Route::post('completion3','PendulumController@completion3');//实验答题
    Route::get('pdf3','PendulumController@pdf3');//实验pdf
});
/**
 * @Author: pxy,zqz
 */
Route::prefix('experiment1')->group(function (){

    Route::post('completion1','Completion1Controller@completion1');//实验1答题
    Route::get('pdf1','Completion1Controller@pdf1');//实验1pdf

});
Route::prefix('bridge1')->group(function (){
    /**
     * @Author: wzh
     */

    Route::post('completion5','Completion5Controller@completion5');//实验答题

    Route::get('pdf5','Completion5Controller@pdf5');//实验pdf

});
/**
 * @Author: pxy
 */
Route::prefix('admin')->group(function (){

    Route::get('home','AdminController@home');//审批中心主页
    Route::get('numsearch','AdminController@numsearch');//学号查询

});
Route::prefix('experiment9')->group(function (){
    Route::post('completion9','Completion9Controller@completion9');//实验9答题
    Route::get('pdf9','Completion9Controller@pdf9');//实验9pdf
    Route::post('scorephoto','Completion9Controller@scorephoto');//实验9图片评分
    Route::get('returnphoto','Completion9Controller@returnphoto');//返回图片链接和图分数
});//pxy
Route::prefix('menu')->group(function (){
    Route::get('getclass','InformationController@getclass');//下拉框所需信息
});//pxy
/**
 * @author zqz
 */
Route::prefix('experiment10')->group(function (){

    Route::post('experiment10','Completion10Controller@completion10');//实验10答题
    Route::get('pdf10','Completion10Controller@pdf10');//实验10pdf

});
