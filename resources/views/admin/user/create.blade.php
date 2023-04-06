<x-admin-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Create Users</h3>
                    <a href="{{ route('user.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">User Name <span class="text-danger">*</span></label>
                                    <input id="name" class="form-control" type="text" name="name">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email <span class="text-danger">*</span></label>
                                    <input id="email" class="form-control" type="text" name="email">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="date">Birthday <span class="text-danger">*</span></label>
                                    <input id="date" class="form-control" type="text" name="date">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="status">Status <span class="text-danger">*</span></label>
                                    <input id="status" class="form-control" type="status" name="status">
                                </div>
                            </div>
                            
                            <div class="col-md-12">
                              <button type="submit" class="btn btn-primary">Save Record</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
