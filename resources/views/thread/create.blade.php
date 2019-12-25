@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-dark text-white">
                        Create a new Thread
                    </div>
                    <div class="card-body">
                        <form action="/threads/new" method="POST">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <lable>Title:</lable>
                                <input type="text" class="form-control mb-3" name="title">

                                <lable>Body:</lable>
                                <textarea name="body" id="" rows="5" class="form-control"></textarea>

                                <button class="btn btn-primary mt-3" type="submit">Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
