@extends('layouts.admin')

@section('content')
<section class="banners">
    <h2 class="sec-title">ADD Banners</h2>

    <div class="block-wrap container">
       <div class="bs">
        <form action="{{ url('/add-banner') }}" method="post" enctype="multipart/form-data">
          @csrf
          <div class="row">
              <div class="col-lg-6 mb-4">
                  <div class="form-floating ">
                      <input type="file" class="form-control" id="floatingInput"
                          placeholder="Image" required name="image">
                      <label for="floatingInput">Images</label>
                  </div>
                  @error('image')
                  <div class="text-danger"><small>{{ $message }}</small></div>
              @enderror
              </div>
              <div class="col-lg-6 mb-4">
                  <div class="form-floating">
                      <select class="form-select" id="floatingSelect" aria-label="Floating label select example" required name="time">
                          <option selected value="">Choose</option>
                          <option value="1000">1 second</option>
                          <option value="2000">2 second</option>
                          <option value="3000">3 second</option>
                          <option value="4000">4 second</option>
                          <option value="5000">5 second</option>
                      </select>
                      <label for="floatingSelect">Autoplay (seconds)</label>
                  </div>
                  @error('time')
                  <div class="text-danger"><small>{{ $message }}</small></div>
              @enderror
              </div>
          </div>
          <div class="btn-wrap my-3 text-center">
              <button class="btn-main w-25" type='submit'>Submit</button>
          </div>
      </form>
       </div>


        <h2 class="sec-title">Banners List</h2>
        <div class="banner-table table-responsive">

            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Image</th>
                        <th scope="col">Time</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @if ($banner->count())
                    @php
                        $i = 1;
                    @endphp
                    @foreach ($banner as $val)
                    <tr class="align-middle">
                        <th scope="row">{{$i++}}</th>
                        <td><img src="image/banners/{{$val->image}}" height="150" class="object-fit-cover" alt=""></td>
                        <td>{{ $val->time / 1000  }} sec</td>
                        <td>
                            <div>
                                {{-- <a data-bs-toggle="modal" data-bs-target="#edit-banner"
                                    class="btn btn-primary">Edit</a> --}}
                                <a href="{{ URL::to('delete-banner/' . $val->id) }}"
                                    class="btn btn-outline-danger">Delete <i class="bi bi-trash"></i></a>
                            </div>
                        </td>
                    </tr>
                    @endforeach
          
                    @else
                        <tr>
                            <td colspan="4">
                                <div class="text-danger text-center py-5">
                                    No data found !
                                </div>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>


        </div>
    </div>
</section>

@endsection
