@extends('layouts.main')

@section('content')

    <section class="student-details-sec mt-5 pt-5">
      <h2 class="sec-title">Class {{$std->std}}</h2>

      <div class="container">
        <h5 class="mb-4">
          Class Coordinator : {{$std->teacher->name }}  <small>({{$std->teacher->role}})</small>
        </h5>
        <div class="table-responsive">
          <div class="student-table">

            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Name</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Class</th>
                        <th scope="col">Email</th>
                        <th scope="col">Mobile</th>
                        <th scope="col">year</th>
               
                    </tr>
                </thead>
                <tbody>
  
                    @if ($students->count())
                        @php
                            $i = 1;
                        @endphp
                        @foreach ($students as $val)
                            <tr class="align-middle">
                                <th scope="row">{{ $i++ }}</th>
                                <td>{{ $val->name }}</td>
                                <td>{{ $val->gender }}</td>
                                <td>{{ $std->std }}</td>
                                <td>{{ $val->email }}</td>
                                <td>{{ $val->mobile }}</td>
                                <td>{{ $val->year }}</td>   
                            </tr>
                        @endforeach
                    @else
                        <tr>
                            <td colspan="7">
                                <div class="text-danger text-center py-5">
                                    No data found !
                                </div>
                            </td>
                        </tr>
                    @endif
                </tbody>
            </table>
            
        </div>
           <!-- Paginate -->
           <div class="paginate-pro mt-5 text-center">
            {{ $students->links() }}
        </div>
        </div>
      </div>
    </section>
@endsection

