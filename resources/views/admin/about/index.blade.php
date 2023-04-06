<x-admin-layout>
    <section>
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h3>About</h5>
              @if (empty($about))
              <a href="{{ route('about.create') }}" class="btn btn-primary btn-sm">Create about</a>

              @endif


            </div>
                @if (!empty($about))
                <div class="row">

                    <div class="col-md-12">
                        
                            <div class="card-body">
                              
                               <h1> {{ $about->title }}</h1>
                                    <img src="{{ asset($about->image) }}" class="float-md-right w-50 img-fluid" alt="">
                                    {!! $about->description !!}
                                
                                <div my-3>
                                    <form action="{{ route('about.destroy',$about->id)}}" method="post">
                                    <td><a href="{{ route('about.edit',$about->id) }}"
                                        class="btn btn-primary">Edit</a></td>
                                        @csrf
                                        @method('delete')
                                        <button type="submit" class="btn btn-danger">Delete</button>

                                    </form>
                                </div>
                            </div>
                       
                    </div>
                        <tr>
                        

                </table>
                 </div>
                @endif
      
                </div>
    </section>
</x-admin-layout>
