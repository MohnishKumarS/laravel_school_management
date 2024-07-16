@extends('layouts.admin')

@section('content')
<section class="standard-sec">
  <h2 class="sec-title">Add Classes (std)</h2>

  <div class="block-wrap container">
     <div class="bs">
      <form action="{{ url('/add-std') }}" method="post"  autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="form-floating ">
                    <select class="form-select" id="floatingSelect"
                        aria-label="Floating label select example" name="class">
                        <option selected value="">choose a classes</option>
                        <option value="Class-09">Class-09</option>
                        <option value="Class-10">Class-10</option>
                        <option value="Class-11">Class-11</option>
                        <option value="Class-12">Class-12</option>
                    </select>
                    <label for="floatingSelect">select</label>
                </div>
                @if ($errors->has('class'))
                    <div class="text-danger"><small>{{ $errors->first('class') }}</small></div>
                @endif
            </div>
            <div class="col-lg-6 mb-4">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect"
                        aria-label="Floating label select example" name="std">
                        <option selected value="">choose a standard</option>
                        <option value="IX">IX</option>
                        <option value="X">X</option>
                        <option value="XI">XI</option>
                        <option value="XII">XII</option>
                    </select>
                    <label for="floatingSelect">select</label>
                </div>
                @if ($errors->has('std'))
                    <div class="text-danger"><small>{{ $errors->first('std') }}</small></div>
                @endif
            </div>
            <div class="col-lg-6 mb-4">
                <div class="form-floating">
                    <select class="form-select" id="floatingSelect"
                        aria-label="Floating label select example" name="cc">
                        <option selected value="" value="">choose a class coordinate</option>
                        @forelse ($teacher as $val)
                            <option value="{{ $val->id }}">{{ $val->name }}</option>
                        @empty
                        @endforelse
                    </select>
                    <label for="floatingSelect">select</label>
                </div>
                @if ($errors->has('cc'))
                    <div class="text-danger"><small>{{ $errors->first('cc') }}</small></div>
                @endif
            </div>
            <div class="col-lg-6 mb-4">
                <div class="form-floating">
                    <input type="text" class="form-control" id="floatingPassword"
                        placeholder="Date of joning" name="year">
                    <label for="floatingPassword">year <small>(ex:2023-24)</small></label>
                </div>
                @if ($errors->has('year'))
                    <div class="text-danger"><small>{{ $errors->first('year') }}</small></div>
                @endif
            </div>
        </div>
        <div class="btn-wrap my-3 text-center">
            <button class="btn btn-outline-success w-25" type='submit'>Submit</button>
        </div>
    </form>
     </div>

     <h2 class="sec-title">Class list</h2>
      <div class="teacher-table">

          <table class="table">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Class</th>
                      <th scope="col">Standard</th>
                      <th scope="col">Co-ordinator</th>
                      <th scope="col">year</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>

                  @if ($std->count())
                      @php
                          $i = 1;
                      @endphp
                      @foreach ($std as $val)
                          <tr>
                              <th scope="row">{{ $i++ }}</th>
                              <td>{{ $val->class }}</td>
                              <td>{{ $val->std }}</td>
                              <td>{{ $val->teacher->name }}</td>
                              <td>{{  $val->year }}</td>
                              <td>
                                  <div>
                                      <a data-bs-toggle="modal" data-bs-target="#edit-std"
                                      data-id="{{ $val->id }}"
                                      data-class="{{ $val->class }}"
                                      data-std="{{ $val->std }}"
                                      data-cc="{{ $val->teacher->id }}"
                                      data-year="{{ $val->year }}"
                                          class="btn btn-primary edit-std-btn">Edit</a>
                                      <a href="{{ URL::to('delete-std/' . $val->id) }}"
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

@push('scripts')
    <script>
        document.addEventListener('DOMContentLoaded', function () {
    var editButtons = document.querySelectorAll('.edit-std-btn');
    editButtons.forEach(function (button) {
        button.addEventListener('click', function () {
            var id = this.getAttribute('data-id');
            var className = this.getAttribute('data-class');
            var stdName = this.getAttribute('data-std');
            var teacherName = this.getAttribute('data-cc');
            var year = this.getAttribute('data-year');
            console.log(teacherName);
            // document.getElementById('std-id').value = id;
            document.getElementById('std-class').value = className;
            document.getElementById('std-standard').value = stdName;
            document.getElementById('std-cc').value = teacherName;
            document.getElementById('std-year').value = year;
        });
    });
});

    </script>
@endpush



<!-- Edit standard Modal -->
<div class="modal fade" id="edit-std" tabindex="-1" aria-labelledby="edit-stdLabel" aria-hidden="true">
  <div class="modal-dialog">
      <div class="modal-content">
          <div class="modal-header">
              <h1 class="modal-title fs-5" id="edit-stdLabel">Edit std</h1>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
              <form action="{{ url('/add-std') }}" method="post"  autocomplete="off">
                  @csrf
                  <div class="row">
                      <div class="col-12 mb-4">
                          <div class="form-floating ">
                              <select class="form-select" id="std-class"
                                  aria-label="Floating label select example" name="class">
                                  <option selected value="">choose a classes</option>
                                  <option value="Class-09">Class-09</option>
                                  <option value="Class-10">Class-10</option>
                                  <option value="Class-11">Class-11</option>
                                  <option value="Class-12">Class-12</option>
                              </select>
                              <label for="floatingSelect">select</label>
                          </div>
           
                      </div>
                      <div class="col-12 mb-4">
                          <div class="form-floating">
                              <select class="form-select" id="std-standard"
                                  aria-label="Floating label select example" name="std">
                                  <option selected value="">choose a standard</option>
                                  <option value="IX">IX</option>
                                  <option value="X">X</option>
                                  <option value="XI">XI</option>
                                  <option value="XII">XII</option>
                              </select>
                              <label for="floatingSelect">select</label>
                          </div>
  
                      </div>
                      <div class="col-12 mb-4">
                          <div class="form-floating">
                              <select class="form-select" id="std-cc"
                                  aria-label="Floating label select example" name="cc">
                                  <option selected value="">choose a class coordinate</option>
                                  @forelse ($teacher as $val)
                                      <option value="{{ $val->id }}">{{ $val->name }}</option>
                                  @empty
                                  @endforelse
                              </select>
                              <label for="floatingSelect">select</label>
                          </div>
  
                      </div>
                      <div class="col-12 mb-4">
                          <div class="form-floating">
                              <input type="text" class="form-control" id="std-year"
                                  placeholder="Date of joning" name="year">
                              <label for="floatingPassword">year <small>(ex:2023-24)</small></label>
                          </div>
   
                      </div>
                  </div>

          </div>
          <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Update</button>
          </div>
          </form>
      </div>
  </div>
</div>


@endsection
