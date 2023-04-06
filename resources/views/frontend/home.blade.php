<x-frontend-layout>
    <!-- Hero Section -->
    <section>
        <div class="container" style="height:90vh">
          <div class="d-flex justify-content-center align-items-center">
            <div>
              <h1>Welcome to <span class="text-danger">Sayari</span></h1>
              <br>
              <p>
                Sayari is an online literary community where readers and writers
                of original poetry and stories can interact.
              </p>
              <br>
              <a
                class="btn btn-outline-danger ms-2"
               href="/register"
              >
                <i class="fa-solid fa-pencil"></i>Start Writing
              </a>
            </div>
            <div>
              <img
                src="/images/hero-img.jpg"
                alt=""
                height="470px"
                width="620px"
              />
            </div>
          </div>
        </div>
    </section>

        <!-- Explorer section -->
        <section class="bg-light py-5">
            <div class="container" style="height:90vh">
              <div class="row">
                <div class="col-md-6">
                  <img src="/images/explore.png" class="img-fluid" style="over-flow:hidden" alt="" />
                </div>
                <div class="col-md-6 d-flex align-items-center">
                  <div>
                    <h1>Let your story be discovered</h1>
                    <p>
                      If you're a writer looking to share your stories and poems with others, Sayari is the perfect platform for you. With Sayari, you can create an account and start submitting your work right away. Once your work is published on the platform, other users can discover it, read it, and provide feedback.
                    </p>
                  </div>
                </div>
              </div>
            </div>
        </section>

    {{-- Poems Section --}}
    <section>
        <div class="container py-3">
            <div class="row">
                <h3>Poems</h3>
                @foreach ($poems as $index=>$item)
                <div class="col-md-3 py-3">
                  <div class="card">
                    <div class="card-body">
                      <a href="{{ route('post', $item->id) }}"> <img src="{{ asset($item->image) }}"
                        width="220" height="300" alt=""></a>
                        <h6 style="font-size: 14px;" class="my-2">{{ Str::words($item->title,3,'...') }}</h6>
                        <div style="font-size: 12px">Writer:{{ $item->user->name }}</div>
                        @if ($item->price == null)
                          <span class="badge bg-success">Free</span>
                        @else
                          Rs.{{ $item->price }}
                        @endif
                    </div>
                </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

     {{-- Stories Section --}}
     <section>
        <div class="container py-3">
            <div class="row">
                <h3>Stories</h3>
                @foreach ($stories as $index=>$item)
                <div class="col-md-3 py-3">
                  <div class="card">
                    <div class="card-body">
                      <a href="{{ route('post', $item->id) }}"> <img src="{{ asset($item->image) }}"
                        width="220" height="300" alt=""></a>
                        <h6 style="font-size: 14px;" class="my-2">{{ Str::words($item->title,3,'...') }}</h6>
                        <div style="font-size: 12px">Writer:{{ $item->user->name }}</div>
                        @if ($item->price == null)
                          <span class="badge bg-success">Free</span>
                        @else
                          Rs.{{ $item->price }}
                        @endif
                    </div>
                </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>

          <!--Feedback  -->  
    <section class="bg-light py-5">
        <div class="container">
          <div class="row border border-2 p-5">
            <h2 class="pb-5">Give your feedback</h2>
            <div class="col-md-6">
              <form action="{{ route('feedback.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div>
                  <div class="form-group">
                    <label for="">Enter your name</label>
                    <input type="text" class="form-control" name="name" placeholder="" aria-describedby="helpId">
                  </div>
    
                  <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control" name="email" placeholder="" aria-describedby="helpId">
                  </div>
    
                  <div class="form-group">
                    <label for="">Message</label>
                    <textarea class="form-control" name="message" rows="3"></textarea>
                  </div>
    
                  <br>
                  <button type="submit" class="btn btn-danger py-1" >Send your feedback</button>
                </div>
              </form>
            </div>
            <div class="col-md-6">
              <img src="/img/feedback.png" alt="" width="500">
            </div>
          </div>
        </div>
    </section>
</x-frontend-layout>