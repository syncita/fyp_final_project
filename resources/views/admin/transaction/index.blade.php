<x-admin-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Sales</h5>
               </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th>SN</th>
                        <th>Customer</th>
                        <th>Book/Poem</th>
                        <th>Price</th>
                        <th>Writer</th>
                    </tr>

                    @foreach ($purchases as $index=>$item)
                        <tr>
                            <td>{{ ++$index }}</td>
                            <td>{{ $item->user->name }}</td>
                            <td>{{ $item->post->title }}</td>
                            <td>{{ $item->post->price }}</td>
                            <td>{{ $item->post->user->name }}</td>
                        </tr>
                    @endforeach
                
                </table>
            </div>
        </div>
    </section>
</x-admin-layout>
