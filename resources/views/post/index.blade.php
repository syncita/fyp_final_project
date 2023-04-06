<x-app-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>My Post</h5>
                    <a href="{{ route('article.create') }}" class="btn btn-primary btn-sm">Add New</a>
               </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th class="border border-1">SN</th>
                        <th class="border border-1">Image</th>
                        <th class="border border-1">Title</th>
                        <th class="border border-1">Category</th>
                        <th class="border border-1">Type</th>
                        <th class="border border-1">Price</th>
                        <th class="border border-1">Max Age</th>
                        <th class="border border-1">Status</th>
                        <th class="border border-1 w-25">Actions</th>
                    </tr>


                @foreach ($post as $item)
                        <tr>
                            <td class="border border-1">{{ $item->id }}</td>
                            <td class="border border-1"><img src="{{ asset($item->image) }}" width="40" alt=""></td>
                            <td class="border border-1">{{ $item->title }}</td>
                            <td class="border border-1">{{ $item->category->name }}</td>
                            <td class="border border-1">{{ $item->type->name }}</td>
                            <td class="border border-1">{{ $item->price ?? 'Free' }}</td>
                            <td class="border border-1">{{ $item->max_age }}</td>
                            <td class="border border-1">{{ $item->status }}</td>
                            <td class="border border-1">
                               <form action="{{ route('article.destroy',$item->id) }}" method="post">
                                @csrf
                                @method('delete')
                                <a href="{{ route('article.edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <a href="{{ route('article.show',$item->id) }}" class="btn btn-success btn-sm">Preview</a>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                            </td>
                        </tr>

                    @endforeach
                </table>
            </div>
        </div>
    </section>
</x-app-layout>
