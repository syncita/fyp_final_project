<x-admin-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Update User</h3>
                    <a href="{{ route('user.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('user.update',$user->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">User Name <span class="text-danger">*</span></label>
                                    <input id="name" class="form-control" type="text" name="name" value="{{ $user->name }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input id="email" class="form-control" type="text" name="email" value="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Birthday <span class="text-danger">*</span></label>
                                    <input id="date" class="form-control" type="text" name="date">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="status">Status <span class="text-danger">*</span></label>
                                    <select id="status" class="form-control" name="status">
                                        <option value="pending" {{ "pending" == $user->status ? 'selected' : '' }}>Pending</option>
                                        <option value="approved" {{ "approved" == $user->status ? 'selected' : '' }}>Approved</option>
                                        <option value="rejected" {{ "rejected" == $user->status ? 'selected' : '' }}>Rejected</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                            <button type="submit" class="btn btn-primary">Update Record</button>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
