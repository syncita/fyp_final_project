<x-admin-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Create post</h3>
                    <a href="{{ route('post.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('post.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input id="title" class="form-control" type="text" name="title">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description<span class="text-danger">*</span></label>
                                    <input id="description" class="form-control summernote" type="text" name="description">
                                </div>
                            </div>


                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="category_id">Category <span class="text-danger">*</span></label>
                                    <select id="category_id" class="form-control" name="category_id">
                                        @foreach ($category as $item)
                                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="tags">Tags<span class="text-danger">*</span></label>
                                    <input id="tags" class="form-control" type="tags" name="tags">
                                </div>
                            </div>

                           <div class="col-md-6">
                            <div class="form-group">
                                <label for="paymentcategory_id">Payment Category</label>
                                <select id="paymentcategory_id" class="form-control" name="paymentcategory_id">
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                           </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type">Type<span class="text-danger">*</span></label>
                                        <select id="type" class="form-control" name="type">
                                            @foreach ($type as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="age">Age<span class="text-danger">*</span></label>
                                            <input id="age" class="form-control-file" type="text" name="age">
                                        </div>
                                    </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="views">Views<span class="text-danger">*</span></label>
                                                <input id="views" class="form-control-file" type="text" name="views">
                                            </div>
                                        </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="logo">Upload image <span class="text-danger">*</span></label>
                                    <input id="logo" class="form-control-file" type="file" name="logo">
                                </div>
                            </div>

                           <div> <button type="submit" class="btn btn-primary">Save Record</button></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
</x-admin-layout>
