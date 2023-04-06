<x-app-layout>

    <section>
        <div class="container">
            <h5>Available Stories</h5>  
            <div class="row">
                @foreach ($stories as $item)
                    <div class="col-md-3">
                        <div class="card">

                            <div class="px-4 py-2">
                                <form action="{{ route('description') }}" method="post">
                                    @csrf
                                    <img src="{{ asset($item->image) }}" class="" alt="" height="200" width="152">
                                    <div class="font-bold">{{ $item->title }}</div>
                                    <div style="font-size: 12px">Writer: {{ $item->user->name }}</div>
                                    <input type="text" value="{{ $item->id }}" name="product_id" hidden>
                                    <input type="text" value="{{ $item->price }}" name="price" hidden>
                                    <div > <span class="font-bold badge badge-danger my-2">Price: {{ $item->price ?? 'Free' }}</span> </div>
                                {{-- <a type="button" id="payment-button" class="btn btn-sm btn-success" href="{{ route('bookdescription',$item->id) }}" >BUY NOW</a> --}}
                                    <button type="submit">BUY NOW</button>
                            </form>
                               
                                {{-- <a type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">BUY NOW</a> --}}
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">CART</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('cart.store') }}" method="post">
                                                @csrf
                                                    <input id="post_id" class="form-control" type="text" name="post_id" value="{{ $item->id }}" hidden>

                                                <div class="form-group">
                                                    <label for="product_title">Product</label>
                                                    <input id="product_title" class="form-control" type="text" name="product_title" value="{{ $item->title }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="price">Price</label>
                                                    <input id="price" class="form-control" type="text" name="price" value="{{ $item->price }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="qty">Qty</label>
                                                    <input id="qty" class="form-control" type="number" name="qty" value="1">
                                                </div>

                                                <button type="submit" class="btn btn-primary">Add to Sayari</button>


                                            </form>
                                        </div>

                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <h5>Available Poems</h5>
            <div class="row">
                @foreach ($poems as $item)
                    <div class="col-md-3">
                        <div class="card">
                        
                            <div class="px-4 py-2">
                                <form action="{{ route('description') }}" method="post">
                                    @csrf
                                    <img src="{{ asset($item->image) }}" class="img-fluid" alt="">
                                    <div class="font-bold">{{ $item->title }}</div>
                                    <div style="font-size: 12px">Writer: {{ $item->user->name }}</div>
                                    <input type="text" value="{{ $item->id }}" name="product_id" hidden>
                                    <input type="text" value="{{ $item->price }}" name="price" hidden>
                                    <div > <span class="font-bold badge badge-danger my-2">Price: {{ $item->price ?? 'Free' }}</span> </div>
                                {{-- <a type="button" id="payment-button" class="btn btn-sm btn-success" href="{{ route('bookdescription',$item->id) }}" >BUY NOW</a> --}}
                                    <button type="submit">BUY NOW</button>
                            </form>
                               
                                {{-- <a type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal{{ $item->id }}">BUY NOW</a> --}}
                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal{{ $item->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">CART</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            <form action="{{ route('cart.store') }}" method="post">
                                                @csrf
                                                    <input id="post_id" class="form-control" type="text" name="post_id" value="{{ $item->id }}" hidden>

                                                <div class="form-group">
                                                    <label for="product_title">Product</label>
                                                    <input id="product_title" class="form-control" type="text" name="product_title" value="{{ $item->title }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="price">Price</label>
                                                    <input id="price" class="form-control" type="text" name="price" value="{{ $item->price }}">
                                                </div>

                                                <div class="form-group">
                                                    <label for="qty">Qty</label>
                                                    <input id="qty" class="form-control" type="number" name="qty" value="1">
                                                </div>

                                                <button type="submit" class="btn btn-primary">Add to Sayari</button>


                                            </form>
                                        </div>

                                    </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
</x-app-layout>
