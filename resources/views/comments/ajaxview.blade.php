<div class="media" id="{{ $comment->id }}">
    <div class="media-left">
        <img class="media-object" src="{{ asset('img/avatar.png') }}" alt="">
    </div>
    <div class="media-body">
        <div class="media-heading">
            <h4>{{ $comment->user->name }}</h4>
            <span class="time">{{ $comment->created_at->format('d.m.Y H:i:s') }}</span>
            {{--<a href="javascript:void(0)" class="reply">Reply</a>--}}
        </div>
        <p>{{ $comment->text }}</p>
    </div>
</div>