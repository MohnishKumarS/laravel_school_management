@extends('layouts.main')


@section('content')
    <div>
        <section class="banners">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" data-bs-interval="2000">
                        <img src="{{ url('image/banners/banner-1.jpg') }}" class="d-block w-100 img-fluid object-fit-contain"
                            style="height: 400px" alt="...">
                    </div>
                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ url('image/banners/banner-2.jpg') }}"
                            class="d-block w-100 img-fluid object-fit-contain" style="height: 400px" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                    data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
        <section class="banners">
            <h2 class="sec-title">Banners</h2>

            <div class="block-wrap container">
                <form action="{{ url('/add-quote') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-floating ">
                                <input type="file" class="form-control" id="floatingInput"
                                    placeholder="Quote of the day">
                                <label for="floatingInput">Images</label>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example">
                                    <option selected value="">Choose</option>
                                    <option value="1000">1 second</option>
                                    <option value="2000">2 second</option>
                                    <option value="3000">3 second</option>
                                    <option value="4000">4 second</option>
                                    <option value="5000">5 second</option>
                                </select>
                                <label for="floatingSelect">Autoplay (seconds)</label>
                            </div>
                        </div>
                    </div>
                    <div class="btn-wrap my-3 text-center">
                        <button class="btn btn-success w-25" type='submit'>Submit</button>
                    </div>
                </form>
            </div>
        </section>
        <section class="quotes">
            <h2 class="sec-title">Thought of the day</h2>
            <div class="quotes-block container">
                <h4 class="quotes__txt">
                    <q>{{$quote->name}}</q>
                </h4>
            </div>
            <div class="block-wrap container">
                <form action="{{ url('/add-quote') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-floating ">
                                <input type="text" class="form-control" id="floatingInput" placeholder="Quote of the day"
                                    name="quote">
                                <label for="floatingInput">Quotes</label>
                            </div>
                            @error('quote')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="author"
                                    name="author">
                                <label for="floatingPassword">Author</label>
                            </div>
                            @if ($errors->has('author'))
                                <div class="text-danger"><small>{{ $errors->first('author') }}</small></div>
                            @endif
                        </div>
                    </div>
                    <div class="btn-wrap my-3 text-center">
                        <button class="btn btn-success w-25" type='submit'>Submit</button>
                    </div>
                </form>
                <div class="quote-table">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col" width="60%">Quote</th>
                                <th scope="col">Author</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @if ($quote)
                                <tr>
                                    <th scope="row">1</th>
                                    <td>{{ $quote->name }}</td>
                                    <td>{{ $quote->author ?? 'No data' }}</td>
                                    <td>
                                        <div>
                                            <a data-bs-toggle="modal" data-bs-target="#edit-quote"
                                                class="btn btn-primary">Edit</a>
                                            <a href="{{ URL::to('delete-quote/' . $quote->id) }}"
                                                class="btn btn-danger">Delete</a>
                                        </div>
                                    </td>
                                </tr>
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

        <section class="teachers">
            <h2 class="sec-title">Teachers</h2>

            <div class="block-wrap container">
                <form action="{{ url('/add-teacher') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <div class="form-floating ">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="Name of the staff" name="name">
                                <label for="floatingInput">Name</label>
                            </div>
                            @error('name')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col">
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
                        <div class="col">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Role"
                                    name="role">
                                <label for="floatingPassword">Subject <small>(ex:Maths)</small></label>
                            </div>
                            @error('role')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="floatingPassword"
                                    placeholder="Date of joning" name="joined_at">
                                <label for="floatingPassword">Date of joning</label>
                            </div>
                            @error('joined_at')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <div class="btn-wrap my-3 text-center">
                        <button class="btn btn-success w-25" type='submit'>Submit</button>
                    </div>
                </form>

                <div class="teacher-table">

                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Name</th>
                                <th scope="col">Gender</th>
                                <th scope="col">Role</th>
                                <th scope="col">joined-at</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @if ($teacher->count())
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($teacher as $val)
                                    <tr>
                                        <th scope="row">{{ $i++ }}</th>
                                        <td>{{ $val->name }}</td>
                                        <td>{{ $val->gender }}</td>
                                        <td>{{ $val->role }}</td>
                                        <td>{{ $val->joined_at }}</td>
                                        <td>
                                            <div>
                                                <a data-bs-toggle="modal" data-bs-target="#edit-teacher"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ URL::to('delete-teacher/' . $val->id) }}"
                                                    class="btn btn-danger">Delete</a>
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
        <section class="standards">
            <h2 class="sec-title">Classes (std)</h2>

            <div class="block-wrap container">
                <form action="{{ url('/add-std') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col">
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
                        <div class="col">
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
                        <div class="col">
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
                        <div class="col">
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
                        <button class="btn btn-success w-25" type='submit'>Submit</button>
                    </div>
                </form>

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
                                        <td>{{ $val->year }}</td>
                                        <td>
                                            <div>
                                                <a data-bs-toggle="modal" data-bs-target="#edit-std"
                                                    class="btn btn-primary">Edit</a>
                                                <a href="{{ URL::to('delete-std/' . $val->id) }}"
                                                    class="btn btn-danger">Delete</a>
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
    </div>
@endsection



<!-- Edit quote Modal -->
<div class="modal fade" id="edit-quote" tabindex="-1" aria-labelledby="edit-quoteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="edit-quoteLabel">Edit Quote</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('update-quote/' . $quote->id) }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="Quote of the day" name="quote" value="{{ $quote->name }}">
                                <label for="floatingInput">Quotes</label>
                            </div>
                            @error('quote')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingPassword"
                                    placeholder="author" name="author">
                                <label for="floatingPassword">Author</label>
                            </div>
                            @if ($errors->has('author'))
                                <div class="text-danger"><small>{{ $errors->first('author') }}</small></div>
                            @endif
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
<!-- Edit teacher Modal -->
<div class="modal fade" id="edit-teacher" tabindex="-1" aria-labelledby="edit-teacherLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="edit-teacherLabel">Edit teacher</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/add-teacher') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
                            <div class="form-floating ">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="Name of the staff" name="name">
                                <label for="floatingInput">Name</label>
                            </div>

                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect"
                                    aria-label="Floating label select example" name="gender">
                                    <option selected value="">Choose</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <label for="floatingSelect">Gender of Staff</label>
                            </div>

                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Role"
                                    name="role">
                                <label for="floatingPassword">Subject <small>(ex:Maths)</small></label>
                            </div>

                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-floating">
                                <input type="date" class="form-control" id="floatingPassword"
                                    placeholder="Date of joning" name="joined_at">
                                <label for="floatingPassword">Date of joning</label>
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
<!-- Edit standard Modal -->
<div class="modal fade" id="edit-std" tabindex="-1" aria-labelledby="edit-stdLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="edit-stdLabel">Edit std</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('/add-std') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="col-12 mb-4">
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
             
                        </div>
                        <div class="col-12 mb-4">
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
    
                        </div>
                        <div class="col-12 mb-4">
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
    
                        </div>
                        <div class="col-12 mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingPassword"
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
