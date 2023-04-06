<x-app-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <th>SN</th>
                            <th>Product</th>
                            <th>Qty</th>
                            <th>Rate</th>
                            <th>Amount</th>
                            <th>Action</th>
                        </tr>

                        @foreach ($carts as $index=>$item)
                            <tr>
                                <td>{{ ++$index }}</td>
                                <td>{{ $item->post->title }}</td>
                                <td>{{ $item->qty }}</td>
                                <td>{{ $item->post->price }}</td>
                                <td>{{ $item->amount }}</td>
                                <td>
                                    <form action="{{ route('cart.destroy',$item->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                    <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                        
                    </table>

                    
                </div>
            </div>
        </div>
    </section>
</x-app-layout>
