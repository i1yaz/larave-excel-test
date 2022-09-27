<?php

use App\Exports\Task1Export;
use App\Exports\Task2Export;
use App\Models\Group;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Route;

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

    $q = Group::query();
     $q->select('jos_user_usergroup_map.group_id','jos_osmembership_subscribers.*')
        ->join('jos_osmembership_subscribers' ,'jos_user_usergroup_map.user_id','jos_osmembership_subscribers.user_id')
        ->whereIn('jos_osmembership_subscribers.plan_id', [ 1, 5, 7, 8, 26, 27])
        ->where('jos_osmembership_subscribers.published', 2);
    dd($q->get());

    //return (new Task1Export())->download('task1.csv', \Maatwebsite\Excel\Excel::CSV);
    return (new Task2Export())->download('task2.csv', \Maatwebsite\Excel\Excel::CSV);

});
