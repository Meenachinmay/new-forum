@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white">Threads on forum</div>
                    <div class="card-body">
                        @foreach($threads as $thread)
                            <div class="card mb-3">
                                <div class="card-header">
                                    <a href="{{ $thread->path() }}">{{ $thread->title }}</a>
                                </div>
                                <div class="card-body">
                                    {{ $thread->body }}
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
