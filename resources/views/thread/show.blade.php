@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <a href="#">{{ $thread->creator->name }}</a> posted
                        {{ $thread->title }}
                    </div>
                    <div class="card-body">
                        <p>
                            {{ $thread->body }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

        @if($thread->replies()->count())
            <div class="row justify-content-center mt-3">
                <div class="col-md-8">
                    @include('thread.reply')
                </div>
            </div>
        @else
            <div class="row justify-content-center text-center mt-2">
                <div class="col-md-8">
                    <p>There are no replies associated with this thread, let's create one, after signing In.</p>
                </div>
            </div>
        @endif

        @if(auth()->check())
        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                <form action="{{ route('replies.store', $thread->id)}}" method="POST">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea name="body" rows="5" class="form-control" placeholder="Have something to say!"></textarea>
                        <button class="btn btn-primary mt-3" type="submit">Submit</button>
                    </div>
                </form>
            </div>
        </div>
        @else
            <p class="text-center">Please <a href="{{ route('login') }}">Sign in</a> to participate in the forum.</p>
        @endif
    </div>
@endsection
