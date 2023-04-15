<?php

use Illuminate\Support\Facades\Route;

use App\Models\students;

Route::get('/', function () {
    $myarr = 
    [   
        'students' => students::all()
    ];
    return view('students',$myarr);
});

Route::get('/{name}',function ()
{
    $r = request()->query();
    $student = students::find($r['id']); 
    return view('data',$student); 
});
