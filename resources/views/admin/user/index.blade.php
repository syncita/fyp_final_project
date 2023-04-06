<x-admin-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>User</h5>

            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th class="border border-1">SN</th>
                        <th class="border border-1">User Name</th>
                        <th class="border border-1">Email</th>
                        <th class="border border-1">Birthday</th>
                        <th class="border border-1">Status</th>
                        <th class="border border-1">Action</th>
                    </tr>

                    @foreach ($user as $item)
                        <tr>
                            <td class="border border-1">{{ $item->id }}</td>
                            <td class="border border-1">{{ $item->name }}</td>
                            <td class="border border-1">{{ $item->email }}</td>
                            <td class="border border-1">{{ $item->dob }}</td>
                            <td class="border border-1">{{ $item->status }}</td>
                            <td class="border border-1">
                                <a href="{{ route('user.edit',$item->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </td>
                        </tr>

                        @endforeach
                </table>
            </div>
        </div>
    </section>
</x-admin-layout>
