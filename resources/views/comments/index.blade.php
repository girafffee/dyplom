<div class="section-row js-field-comment">
    <div class="section-title">
        <h2>Напишите комментарий</h2>
    </div>
    <form class="post-reply" action="{{ route('ajax.add.comment') }}" method="POST">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    <textarea class="input" name="message" placeholder="Message"></textarea>
                </div>
                <button class="primary-button js-submit" type="button">Submit</button>
                <button class="primary-button js-back" type="button">Back</button>
            </div>
        </div>
        <input class="js-post-id" type="hidden" value="{{$post->id}}" name="post_id">
    </form>
</div>

@push('scripts-in-js')
    <script src="{{ asset('js/single.post/common.js') }}"></script>
@endpush
