<?php

namespace App\Http\Controllers;

use App\Models\Job;
use App\Models\Tag;
use Illuminate\Support\Arr;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreJobRequest;
use App\Http\Requests\UpdateJobRequest;

class JobController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    // public function index()
    // {
    //     $jobs = Job::get()->groupBy('featured');

    //     return view('jobs.index',[
    //         'jobs' => $jobs[0],
    //         'featuredJobs' => $jobs[1],
    //         'tags' => Tag::all()
    //     ]);
    // }

    public function index()
    {
        $jobs = Job::latest()->get();
        return view('jobs.index',[
            'jobs' => $jobs,
            'tags' => Tag::all()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jobs.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        dd($request->all());
        $attributes = $request->validate([
            'title' => ['required'],
            'job_descriptions' => ['']
            'salary' => ['required'],
            'location' => ['required'],
            'title' => ['required'],
            'schedule' => ['required',Rule::in(['Full Time','Part Time'])],
            'tags' => ['nullable']
        ]);

        $attributes['featured'] = $request->has('feature');

        $job = Auth::user()->employer->jobs()->create(Arr::except($attributes,'tags'));

        if ($attributes['tags']??false) {
            foreach (explode(',',$attributes['tags']) as $tag) {
                $job->tag($tag);
            }
        }

        return redirect('/');
    }

    /**
     * Display the specified resource.
     */
    public function show(Job $job)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Job $job)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateJobRequest $request, Job $job)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Job $job)
    {
        //
    }
}
