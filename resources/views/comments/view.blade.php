
<div class="section-row">
    <div class="section-title">
        <h2 class="comments-count">{{ $comments->count }} комментариев</h2>
    </div>
    <div class="post-comments">

        @foreach($comments as $comment)
            <div class="media" id="{{ $comment->id }}">
                <div class="media-left">
                    <img class="media-object" src="{{ /*Voyager::image($comment->user->image)*/  asset('img/avatar.png')}}" alt="">
                </div>
                <div class="media-body">
                    <div class="media-heading">
                        <h4>{{ $comment->user->name }}</h4>
                        <span class="time">{{ $comment->created_at->format('d.m.Y H:i:s') }}</span>
                        <a href="javascript:void(0)" class="reply">Reply</a>
                    </div>
                    <p>{{ $comment->text }}</p>
                    @forelse($children as $child)
                        @if($child->parent_id == $comment->id)
                        <div class="media" id="{{ $child->id }}">
                            <div class="media-left">
                                <img class="media-object" src="{{ asset('img/avatar.png') }}" alt="">
                            </div>
                            <div class="media-body">
                                <div class="media-heading">
                                    <h4>{{ $child->user->name }}</h4>
                                    <span class="time">{{ $child->created_at->format('d.m.Y H:i:s') }}</span>
                                    {{--<a href="javascript:void(0)" class="reply">Reply</a>--}}
                                </div>
                                <p>{{ $child->text }}</p>

                            </div>
                        </div>
                        @endif
                    @empty
                    @endforelse
                </div>
            </div>
        @endforeach

    </div>
</div>

{{-- OR THIS --}}

{{--<div class="media">
    <div class="media-left">
        <img class="media-object" src="./img/avatar.png" alt="">
    </div>
    <div class="media-body">
        <div class="media-heading">
            <h4>John Doe</h4>
            <span class="time">March 27, 2018 at 8:00 am</span>
            <a href="#" class="reply">Reply</a>
        </div>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor
            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud
            exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>

        <div class="media">
            <div class="media-left">
                <img class="media-object" src="./img/avatar.png" alt="">
            </div>
            <div class="media-body">
                <div class="media-heading">
                    <h4>John Doe</h4>
                    <span class="time">March 27, 2018 at 8:00 am</span>
                    <a href="#" class="reply">Reply</a>
                </div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                    tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                    quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                    consequat.</p>
            </div>
        </div>

    </div>
</div>--}}
