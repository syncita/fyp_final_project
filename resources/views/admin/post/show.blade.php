<x-admin-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">

                <a href="{{ route('post.index') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <h1>{{ $post->title }}</h1>
                <img src="{{ asset($post->image) }}" class="float-md-right w-50" alt="">
                {!! $post->description !!}
            </div>
        </div>
    </section>
</x-admin-layout>
