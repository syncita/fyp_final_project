<x-admin-layout>
    <section class="py-5">
        <div class="container">
            <h5>Update Profile</h5>
            <form action="{{ route('profile.update',$admin->id) }}" method="post">
                @csrf
                @method('put')
                <div class="form-group">
                    <label for="name">Name</label>
                    <input id="name" class="form-control" type="text" name="name" value="{{ $admin->name }}">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" class="form-control" type="text" name="email" value="{{ $admin->email }}">
                </div>
                <button type="submit">Update</button>
            </form>
        </div>
    </section>
</x-admin-layout>