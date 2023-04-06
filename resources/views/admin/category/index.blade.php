<x-admin-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Categories</h5>
               @if(empty($category))
               <a href="{{ route('category.create') }}" class="btn btn-primary btn-sm">Create Category</a>
               @endif


            </div>
            <div class="card-body">
                <table class="table">
                    <tr>
                        <th class="border border-1">SN</th>
                        <th class="border border-1 w-50">Category Name</th>
                        <th class="border border-1">Action</th>
                    </tr>

                @foreach ($categories as $index=>$item)
                <tr>
                    <td class="border border-1">{{ ++$index}}</td>
                    <td class="border border-1">{{ $item->name }}</td>
                    <td class="border border-1">
                       <form action="{{ route('category.destroy',$item->id) }}" method="post">
                        @csrf
                        @method('delete')
                        <a href="{{ route('category.edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @endforeach



                </table>
            </div>
        </div>
    </section>
</x-admin-layout>
