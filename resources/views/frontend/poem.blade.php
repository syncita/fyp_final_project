<x-frontend-layout>
    <section >
        <div class="container py-3">
            <div class="row">
                <h3>Poems</h3>
                @foreach ($poems as $index => $item)
                    <div class="col-md-3 py-3">
                        <div class="card">
                            <div class="card-body">
                                <a href="{{ route('post', $item->id) }}"> <img src="{{ asset($item->image) }}"
                                        width="220" height="300" alt=""></a>
                                <h6>{{ $item->title }}</h6>
                                <p>Writer:{{ $item->user->name }}</p>
                                @if ($item->price == null)
                          <span class="badge bg-success">Free</span>
                        @else
                          Rs.{{ $item->price }}
                        @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-frontend-layout>
