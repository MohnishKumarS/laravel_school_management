@extends('layouts.admin')

@section('content')
<section class="admission-sec">

  <div class="block-wrap container">
     <h2 class="sec-title">Admission Form</h2>
      <div class="teacher-table table-responsive">

          <table class="table  table-hover table-bordered">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col">Name</th>
                      <th scope="col">Email</th>
                      <th scope="col">Mobile</th>
                      <th scope="col">Enquiry</th>
                      <th scope="col">Date</th>
                  </tr>
              </thead>
              <tbody>

                  @if ($admission->count())
                      @php
                          $i = 1;
                      @endphp
                      @foreach ($admission as $val)
                          <tr>
                              <th scope="row">{{ $i++ }}</th>
                              <td>{{ $val->name }}</td>
                              <td>{{ $val->email }}</td>
                              <td>{{ $val->mobile }}</td>
                              <td>{{  $val->class }}</td>
                              <td>{{ \Carbon\Carbon::parse($val->created_at)->format('d-M, Y') }}</td>
   
                          </tr>
                      @endforeach
                  @else
                      <tr>
                          <td colspan="5">
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
