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

        <div class="row justify-content-center mt-3">
            <div class="col-md-8">
                @include('thread.reply')
            </div>
        </div>
    </div>
@endsection
