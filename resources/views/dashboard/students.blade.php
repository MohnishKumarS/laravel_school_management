@extends('layouts.admin')

@section('content')
<section class="students-sec">
  <h2 class="sec-title">add students</h2>

  <div class="block-wrap container">
 <div class="bs">
  <form action="{{ url('/add-student') }}" method="post"  autocomplete="off">
    @csrf
    <div class="row">
        <div class="col-lg-4 mb-4">
            <div class="form-floating ">
                <input type="text" class="form-control" id="floatingInput"
                    placeholder="Name of the staff" name="name">
                <label for="floatingInput">Name</label>
            </div>
            @error('name')
                <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
        <div class="col-lg-4 mb-4">
            <div class="form-floating">
                <select class="form-select" id="floatingSelect"
                    aria-label="Floating label select example" name="gender">
                    <option selected>Choose</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <label for="floatingSelect">Gender of Staff</label>
            </div>
            @error('gender')
                <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
        <div class="col-lg-4 mb-4">
            <div class="form-floating">
                <select class="form-select" id="floatingSelect"
                    aria-label="Floating label select example" name="std_id">
                    <option selected value="">Choose</option>
                    @foreach ($std as $item)
                    <option value="{{$item->id}}">{{$item->class}}</option>
                    @endforeach
                
                </select>
                <label for="floatingSelect">class / grade</label>
            </div>
            @error('std_id')
                <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
        <div class="col-lg-4 mb-4">
            <div class="form-floating">
                <select class="form-select" id="floatingSelect"
                    aria-label="Floating label select example" name="year">
                    <option selected value="">Choose</option>
                    <option value="2024-25">2024-25</option>
                    <option value="2025-26">2025-26</option>
                </select>
                <label for="floatingSelect">select a year</label>
            </div>
            @error('year')
                <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>

        <div class="col-lg-4 mb-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" placeholder="email"
                    name="email">
                <label for="floatingPassword">Email address</label>
            </div>
            @error('email')
                <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
        <div class="col-lg-4 mb-4">
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingPassword" placeholder="mobile"
                    name="mobile">
                <label for="floatingPassword">Mobile</label>
            </div>
            @error('mobile')
                <div class="text-danger"><small>{{ $message }}</small></div>
            @enderror
        </div>
    </div>
    <div class="btn-wrap my-3 text-center">
        <button class="btn btn-outline-success w-25" type='submit'>Submit</button>
    </div>
</form>
 </div>
 <h2 class="sec-title">students list</h2>
      <div class="student-table">

          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Gender</th>
                      <th scope="col">Class</th>
                      <th scope="col">Email</th>
                      <th scope="col">Mobile</th>
                      <th scope="col">year</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>

                  @if ($student->count())
                      @php
                          $i = 1;
                      @endphp
                      @foreach ($student as $val)
                          <tr class="align-middle">
                              <th scope="row">{{ $i++ }}</th>
                              <td>{{ $val->name }}</td>
                              <td>{{ $val->gender }}</td>
                              <td>{{ $val->std->class }}</td>
                              <td>{{ $val->email }}</td>
                              <td>{{ $val->mobile }}</td>
                              <td>{{ $val->year }}</td>
                              <td>
                                  <div>
                                      <a data-bs-toggle="modal" data-bs-target="#edit-student"
                                          class="btn btn-primary">Edit</a>
                                      <a href="{{ URL::to('delete-student/' . $val->id) }}"
                                          class="btn btn-danger">Delete</a>
                                  </div>
                              </td>
                          </tr>
                      @endforeach
                  @else
                      <tr>
                          <td colspan="6">
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
