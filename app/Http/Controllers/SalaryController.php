<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class SalaryController extends Controller
{
    public function index()
    {
        return view('salary.index');
    }

    public function show($min,$max)
    {
        if ($max == 0) {
            $jobs = Job::latest()->where('salary','>=',$min)->get();
        }else{
            $jobs = Job::latest()->whereBetween('salary', [$min, $max])->get();
        }

        return view('result',[
            'jobs' => $jobs
        ]);
    }
}
