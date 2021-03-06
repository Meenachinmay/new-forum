<?php

namespace App\Http\Controllers;

use App\Thread;
use Illuminate\Http\Request;

class RepliesController extends Controller
{

    /**
     * RepliesController constructor.
     */
    public function __construct()
    {
        $this->middleware('auth')->only(['store']);
    }

    public function store(Thread $thread){

        $thread->addReply([
            'body' => request('body'),
            'user_id' => auth()->user()->id,
        ]);

        return back();
    }
}
