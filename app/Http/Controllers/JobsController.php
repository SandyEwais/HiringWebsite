<?php

namespace App\Http\Controllers;

use App\Models\Job;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    public function index(){
        return view('Pages.index',
        [
            'jobs' => Job::latest()->paginate(3)
        ]
    );
    }
    public function create(){
        return view('Pages.Admin.create_jobs');
    }
    public function store(Request $request){
        $data = $request->validate([
            'employer-name' => 'required|min:3',
            'title' => 'required',
            'employer-email' => 'required|email',
            'salary' => 'required',
            'employer-phone' => 'required',
            'category' => 'required',
            'employer-location' => 'required',
            'employer-website' => 'required|url',
            'employer-description' => 'required',
            'description' => 'required'

        ]);
        Job::create($data);
        return redirect()->route('index')->with('message','Job Created Successfully !');
    }

    public function show(){
        return view('Pages.show_jobs',
        [
            'jobs' => Job::latest()->paginate(4)
        ]);
    }
    public function filter(Request $request){
        dd($request);
    }
    
}
