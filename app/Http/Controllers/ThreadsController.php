<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class ThreadsController extends Controller
{

    /**
     * ThreadsController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['store']);
    }

    public function index(){
        $threads = Thread::latest()->get();
        return view('thread.index', compact('threads'));
    }

    public function show(Thread $thread){
        $thread = Thread::where('id', $thread->id)->firstOrFail();
        return view('thread.show', compact('thread'));
    }

    public function store(Request $request){
        $thread = Thread::create([
            'user_id' => auth()->id(),
            'title' => request('title'),
            'body' => request('body')
        ]);

        return redirect($thread->path());
    }

    public function create(){
        return view('thread.create');
    }
}
