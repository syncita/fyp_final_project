<x-admin-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Update Type</h3>
                    <a href="{{ route('type.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('type.update',$type->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="name">Type <span class="text-danger">*</span></label>
                                    <input id="name" class="form-control" type="text" name="name" value="{{ $type->name }}">
                                </div>
                            </div>


                            <button type="submit" class="btn btn-primary">Update Type</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
