<x-frontend-layout>
    <section class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="text-center py-3">
                        <h1>{{ $post->title }}</h1>
                        <img src="{{ $post->image }}" class="w-30" alt="" />
                    </div>

                    @if ($post->price == null)
                        {!! $post->description !!}
                    @else
                        {!! Str::words($post->description, 200, '...') !!} <br>
                        <a href="/login" class="btn btn-danger my-4">BUY NOW</a>
                    @endif
                </div>
    </section>

    @auth
        <section>
            <div class="container">
                <form action="{{ route('like.store') }}" method="post">
                    @csrf
                    <input type="text" value="{{ $post->id }}" name="post_id" hidden>
                    <button type="submit" class="btn btn-primary"><i class="fa-solid fa-thumbs-up"></i>
                        ({{ $likes }})
                    </button>
                </form>
            </div>
        </section>
    @endauth

    @auth()
        <section class="pt-5">
            <div class="container">
                <form action="{{ route('comment.store') }}" method="post">
                    @csrf
                    <input type="text" value="{{ $post->id }}" name="post_id" hidden>
                    <div class="form-group">
                        <label for="comment">Comment</label>
                        <textarea id="comment" class="form-control" name="comment" rows="3"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary btn-sm mt-2">Post</button>
                </form>
            </div>
        </section>
    @endauth

    <section class="pt-5">
        <div class="container">
            <h5>Comments</h5>
            @foreach ($comments as $item)
                <div class="bg-light my-2 p-2">
                    <div>{{ $item->comment }}</div>
                    <div>Comment by: {{ $item->user->name }} | <span
                            class="muted">{{ $item->created_at->diffForHumans() }}</span></div>
                </div>
            @endforeach
        </div>
    </section>


</x-frontend-layout>
