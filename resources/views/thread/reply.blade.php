<div class="card">
    <div class="card-header">
        Associated replies...
    </div>
    <div class="card-body">
        @foreach($thread->replies as $reply)
            <div class="card mb-3">
                <div class="card-header">
                    <a href="#">{{ $reply->owner->name }}</a> said {{ $reply->created_at->diffForHumans() }}
                </div>
                <div class="card-body">
                    <p>
                        {{ $reply->body }}
                    </p>
                </div>
            </div>
        @endforeach
    </div>
</div>
