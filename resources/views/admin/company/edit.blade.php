<x-admin-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Update Company</h3>
                    <a href="{{ route('company.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('company.update',$company->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Company Name <span class="text-danger">*</span></label>
                                    <input id="name" class="form-control" type="text" name="name" value="{{ $company->name }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="address">Company Address <span class="text-danger">*</span></label>
                                    <input id="address" class="form-control" type="text" name="address" value="{{ $company->address }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="phone">Telephone <span class="text-danger">*</span></label>
                                    <input id="phone" class="form-control" type="text" name="phone" value="{{ $company->phone }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Company email <span class="text-danger">*</span></label>
                                    <input id="email" class="form-control" type="email" name="email" value="{{ $company->email }}">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">Upload Logo <span class="text-danger">*</span></label>
                                    <input id="logo" class="form-control-file" type="file" name="logo">
                                </div>

                                <div class="my-2">
                                    <img src="{{ asset($company->logo) }}" width="120" alt="">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Update Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
