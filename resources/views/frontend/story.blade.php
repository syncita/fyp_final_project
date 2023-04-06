<x-frontend-layout>
    <section class="py-5">
        <div class="container py-3">
            <div class="row">
                <h3>Stories</h3>
                @foreach ($stories as $index=>$item)
                <div class="col-md-3 py-3">
                    <div class="card">
                        <div class="card-body">
                          <a href="{{ route('post', $item->id) }}"> <img src="{{ asset($item->image) }}"
                            width="220" height="300" alt=""></a>
                            <h6 style="font-size: 14px;" class="my-2">{{ Str::words($item->title,3,'...') }}</h6>
                            <div style="font-size: 12px">Writer:{{ $item->user->name }}</div>
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