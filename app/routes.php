<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

/***********************************************************************
 * http://recolife.com/
 * ドメイン直下
 * */
Route::resource('/',        'IndexController'); # TOPページ
Route::resource('/info',    'InfoController'); # 運営者情報
Route::resource('/sitemap', 'SitemapController'); # ページ一覧

/***********************************************************************
 * http://recolife.com/denki/
 * 電気カテゴリ
 * */
Route::resource('/denki/', 'Denki\IndexController'); # 電気代を節約

// http://recolife.com/denki/free/
// 電力自由化について
Route::resource('/denki/free/',              'Denki\FreeController'); # 電気自由化について知ろう
Route::resource('/denki/free/description/',  'Denki\DescriptionController'); # 電力自由化とは
Route::resource('/denki/free/merit/',        'Denki\MeritController'); # 電力自由化のメリット・デメリット

// http://recolife.com/denki/choice
// 各電力会社について
Route::resource('/denki/choice/',            'Denki\ChoiceController'); # 電力会社を選ぶ
Route::resource('/denki/choice/list/',       'Denki\ListController'); # 電力会社一覧
Route::resource('/denki/choice/list/power',  'Denki\PowerController'); # 電力
Route::resource('/denki/choice/list/gas',    'Denki\GasController'); # ガス
Route::resource('/denki/choice/list/it',     'Denki\ItController'); # 通信
Route::resource('/denki/choice/list/kaden/', 'Denki\KadenListController'); # 家電
Route::resource('/denki/choice/list/pps/', 	 'Denki\PpsController'); # PPS

// http://recolife.com/denki/kaden
// 家電別節約術について
Route::resource('/denki/kaden/', 'Denki\KadenController'); # 家電別節約術

// http://recolife.com/denki/make
// 自家発電と売電について
Route::resource('/denki/make/',      'Denki\MakeController'); # 自家発電と売電
Route::resource('/denki/make/solar', 'Denki\SolarController'); # ソーラーパネルで自家発電

// http://recolife.com/denki/qa
// Q&A
Route::resource('/denki/qa/', 'Denki\QaController'); # Q&A