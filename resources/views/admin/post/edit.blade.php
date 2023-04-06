<x-admin-layout>
    <section>
        <div class="container">
            <div class="card">
                <div class="card-header d-flex justify-content-between">
                    <h3>Edit Product</h3>
                    <a href="{{ route('post.index') }}" class="btn btn-primary btn-sm">Back</a>
                </div>

                <div class="card-body">
                    <form action="{{ route('post.update',$post->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('put')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="title">Title<span class="text-danger">*</span></label>
                                    <input id="title" class="form-control" type="text" name="title" value="{{ $post->title }}">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea id="description" class="form-control summernote" name="description" rows="3">{{ $post->description }}</textarea>
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
                                    <input id="tags" class="form-control" type="tags" name="tags" value="{{ $post->tags }}">
                                </div>
                            </div>

                           <div class="col-md-6">
                            <div class="form-group">
                                <label for="payment_category_id">Payment Category</label>
                                <select id="payment_category_id" class="form-control" name="payment_category_id">
                                    @foreach ($payment as $item)
                                        <option value="{{ $item->id }}">{{ $item->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                           </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="type_id">Type<span class="text-danger">*</span></label>
                                        <select id="type_id" class="form-control" name="type_id">
                                            @foreach ($type as $item)
                                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label for="max_age">max_age<span class="text-danger">*</span></label>
                                            <input id="max_age" class="form-control" type="text" name="max_age" value="{{ $post->max_age }}">
                                        </div>
                                    </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="image">Upload image <span class="text-danger">*</span></label>
                                    <input id="image" class="form-control-file" type="file" name="image">
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="status">Select Status</label>
                                    <select id="status" class="form-control" name="status">
                                        <option value="pending" {{ "pending" == $post->status ? 'selected' : '' }}>Pending</option>
                                        <option value="approved" {{ "approved" == $post->status ? 'selected' : '' }}>Approved</option>
                                        <option value="rejected" {{ "rejected" == $post->status ? 'selected' : '' }}>Rejected</option>
                                    </select>
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
