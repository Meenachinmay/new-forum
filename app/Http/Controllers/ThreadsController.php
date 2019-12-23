<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{
    public function index(){
        $threads = Thread::latest()->get();
        return view('thread.index', compact('threads'));
    }

    public function show(Thread $thread){
        $thread = Thread::where('id', $thread->id)->firstOrFail();
        return view('thread.show', compact('thread'));
    }
}
