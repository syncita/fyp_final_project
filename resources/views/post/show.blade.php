<x-app-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">

                <a href="{{ route('article.index') }}" class="btn btn-primary btn-sm">Back</a>
            </div>
            <div class="card-body">
                <h1>{{ $article->title }}</h1>
                <img src="{{ asset($article->image) }}" class="float-md-right w-50" alt="">
                {!! $article->description !!}
            </div>
        </div>
    </section>
</x-app-layout>
