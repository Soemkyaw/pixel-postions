<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    public function search(Tag $tag)
    {
        $tag->load('jobs.employer');
        
        return view('result',[
            "jobs" => $tag->jobs
        ]);
    }
}
