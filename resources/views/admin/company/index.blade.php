<x-admin-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Company</h5>
               @if(empty($company))
               <a href="{{ route('company.create') }}" class="btn btn-primary btn-sm">Create Company</a>
               @endif


            </div>
            <div class="card-body">
                <table class="table table-striped">
                    <tr>
                        <th class="border border-1">SN</th>
                        <th class="border border-1">Logo</th>
                        <th class="border border-1">Company Name</th>
                        <th class="border border-1">Address</th>
                        <th class="border border-1">Phone</th>
                        <th class="border border-1">Email</th>
                        <th class="border border-1 w-25">Action</th>
                    </tr>

                    @if (!empty($company))
                        <tr>
                            <td class="border border-1">{{ $company->id }}</td>
                            <td class="border border-1"><img src="{{ asset($company->logo) }}" width="40" alt=""></td>
                            <td class="border border-1">{{ $company->name }}</td>
                            <td class="border border-1">{{ $company->address }}</td>
                            <td class="border border-1">{{ $company->phone }}</td>
                            <td class="border border-1">{{ $company->email }}</td>
                            <td class="border border-1">
                                <form action="{{ route('company.destroy',$company->id) }}" method="post">
                                    @csrf
                                    @method('delete')
                                <a href="{{ route('company.edit',$company->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                
                                </form>
                            </td>
                        </tr>

                    @endif
                </table>
            </div>
        </div>
    </section>
</x-admin-layout>
