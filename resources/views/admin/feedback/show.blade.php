<x-admin-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>Feedback</h5>
               <a href="{{ route('admin.dashboard') }}" class="btn btn-primary btn-sm">Go Back</a>
            </div>
            <div class="card-body">
               <h5>By: {{ $feedback->name }}</h5>
               <div>Email: {{ $feedback->email }}</div>
               {!! $feedback->message !!}
            </div>
        </div>
    </section>
</x-admin-layout>
