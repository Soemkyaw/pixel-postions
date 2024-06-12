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
            $jobs = Job::query()->with(['tags','employer'])->latest()->where('salary','>=',$min)->get();
        }else{
            $jobs = Job::query()->with(['tags','employer'])->latest()->whereBetween('salary', [$min, $max])->get();
        }

        return view('result',[
            'jobs' => $jobs
        ]);
    }
}
