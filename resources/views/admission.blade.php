@extends('layouts.main')

@section('content')
    <section class="banner-admission">
      <div class="container">
        <img src="{{asset('image/admission-open.jpg')}}" alt="admission-open" class="img-fluid">
      </div>
    </section>

    <section class="admission-form">
      <h2 class="sec-title">Online Admission Enquiry Form</h2>

      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6">
            <div>
              <img src="{{asset('image/common/reg-sch.jpg')}}" class="img-fluid" alt="admission-poster">
            </div>
          </div>
          <div class="col-lg-6  shadow py-5 ">
            <form action="{{ url('/add-admission') }}" method="post" autocomplete="off">
              @csrf
              <div class="row">
                  <div class="col-12 mb-4">
                      <div class="form-floating ">
                          <input type="text" class="form-control" id="floatingInput"
                              placeholder="Name of the applicant" name="name" value="{{old('name')}}">
                          <label for="floatingInput">Applicant name</label>
                      </div>
                      @error('name')
                          <div class="text-danger"><small>{{ $message }}</small></div>
                      @enderror
                  </div>
  
                  <div class="col-12 mb-4">
                      <div class="form-floating">
                          <input type="email" class="form-control" id="floatingPassword" placeholder="email"
                              name="email" value="{{old('email')}}">
                          <label for="floatingPassword">E-mail</label>
                      </div>
                      @error('email')
                          <div class="text-danger"><small>{{ $message }}</small></div>
                      @enderror
                  </div>
                  <div class="col-12 mb-4">
                      <div class="form-floating">
                          <input type="text" class="form-control" id="floatingPassword"
                              placeholder="Mobile Number" name="mobile" maxlength="10" value="{{old('mobile')}}">
                          <label for="floatingPassword">Mobile Number</label>
                      </div>
                      @error('mobile')
                          <div class="text-danger"><small>{{ $message }}</small></div>
                      @enderror
                  </div>
                  <div class="col-12 mb-4">
                    <div class="form-floating">
                        <select class="form-select" id="floatingSelect"
                            aria-label="Floating label select example" name="class">
                            <option selected value="">Choose</option>
                            <option value="Class-06">Class-06</option>
                            <option value="Class-07">Class-07</option>
                            <option value="Class-08">Class-08</option>
                            <option value="Class-09">Class-09</option>
                            <option value="Class-10">Class-10</option>
                            <option value="Class-11">Class-11</option>
                            <option value="Class-12">Class-12</option>
                        </select>
                        <label for="floatingSelect">Grade/class</label>
                    </div>
                    @error('class')
                        <div class="text-danger"><small>{{ $message }}</small></div>
                    @enderror
                </div>
              </div>
              <div class="btn-wrap my-3 text-center">
                  <button class="btn-main w-25" type='submit'>Submit Now</button>
              </div>
          </form>
          </div>
        
        </div>
      </div>
    </section>
@endsection

