<?php

namespace App\Http\Controllers;

use App\Models\Job;


class SearchController extends Controller
{
    public function __invoke()
    {
        // request('q')
        $jobs = Job::query()->with(['tags','employer'])->latest()->where('title','like','%'.request('q').'%')->get();
        return view('result',[
            'jobs' => $jobs
        ]);
    }
}
