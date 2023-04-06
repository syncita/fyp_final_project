<x-frontend-layout>
    <section>
        <div class="container">
            <div class="row">
                @foreach ($posts as $index => $item)
                    <div class="col-md-3 py-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('post', $item->id) }}"> <img src="{{ asset($item->image) }}"
                                        width="220" height="300" alt=""></a>
                                <h6>{{ $item->title }}</h6>
                                <p>{{ $item->price }}</p>
                                <p>Writer:{{ $item->user->name }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-frontend-layout>
