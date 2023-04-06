<x-admin-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Create About</h3>
                    <a href="{{ route('about.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('about.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title <span class="text-danger">*</span></label>
                                    <input id="title" class="form-control" type="text" name="title">
                                </div>
                            </div>

                            <div class="col-md-12">
                               <div class="form-group">
                                <label for="description">Text</label>
                                <textarea id="description" class="form-control summernote" name="description" rows="3"></textarea>
                               </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="image">Upload image <span class="text-danger">*</span></label>
                                    <input id="image" class="form-control-file" type="file" name="image">
                                </div>
                            </div>

                            <button type="submit" class="btn btn-primary">Save Record</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
