@extends('layouts.admin')

@section('content')
    <section class="teachers-sec">
        <h2 class="sec-title">add Teachers</h2>

        <div class="block-wrap container">
            <div class="bs">
                <form action="{{ url('/add-teacher') }}" method="post" autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-lg-6 mb-4">
                            <div class="form-floating ">
                                <input type="text" class="form-control" id="floatingInput"
                                    placeholder="Name of the staff" name="name">
                                <label for="floatingInput">Name</label>
                            </div>
                            @error('name')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="form-floating">
                                <select class="form-select" id="floatingSelect" aria-label="Floating label select example"
                                    name="gender">
                                    <option selected value="">Choose</option>
                                    <option value="Male">Male</option>
                                    <option value="Female">Female</option>
                                </select>
                                <label for="floatingSelect">Gender of Staff</label>
                            </div>
                            @error('gender')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-4">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="floatingPassword" placeholder="Role"
                                    name="role">
                                <label for="floatingPassword">Subject <small>(ex:Maths)</small></label>
                            </div>
                            @error('role')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-lg-6 mb-4">
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
                        <button class="btn btn-outline-success w-25" type='submit'>Submit</button>
                    </div>
                </form>
            </div>
            <h2 class="sec-title">Teachers list</h2>
            <div class="teacher-table">

                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Role</th>
                            <th scope="col">joined</th>
                            <th scope="col">Action</th>
                        </tr>
                    </thead>
                    <tbody>

                        @if ($teacher->count())
                            @php
                                $i = 1;
                            @endphp
                            @foreach ($teacher as $val)
                                <tr class="align-middle">
                                    <th scope="row">{{ $i++ }}</th>
                                    <td>{{ $val->name }}</td>
                                    <td>{{ $val->gender }}</td>
                                    <td>{{ $val->role }}</td>
                                    <td>{{ Carbon\Carbon::parse($val->joined_at)->diffForHumans() }}</td>
                                    <td>
                                        <div>
                                            <a data-bs-toggle="modal" data-bs-target="#edit-teacher"
                                                data-id="{{ $val->id }}" data-name="{{ $val->name }}"
                                                data-gender="{{ $val->gender }}" data-role="{{ $val->role }}"
                                                data-date="{{ $val->joined_at }}"
                                                class="btn btn-primary edit-teacher-btn">Edit</a>
                                            <a href="{{ URL::to('delete-teacher/' . $val->id) }}"
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
            document.addEventListener('DOMContentLoaded', function() {
                let editBtns = document.querySelectorAll('.edit-teacher-btn');
                if (editBtns.length) {
                    editBtns.forEach(btn => {
                        btn.addEventListener('click', function() {
                            let id = this.getAttribute('data-id');
                            let name = this.getAttribute('data-name');
                            let gender = this.getAttribute('data-gender');
                            let role = this.getAttribute('data-role');
                            let date = this.getAttribute('data-date');

                            document.getElementById('teacher-id').value = id;
                            document.getElementById('teacher-name').value = name;
                            document.getElementById('teacher-gender').value = gender;
                            document.getElementById('teacher-role').value = role;
                            document.getElementById('teacher-date').value = date;
                        })
                    });
                }
            })
        </script>
    @endpush

    <!-- Edit teacher Modal -->
    <div class="modal fade" id="edit-teacher" tabindex="-1" aria-labelledby="edit-teacherLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="edit-teacherLabel">Edit teacher</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ url('/update-teacher') }}" method="post" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-12 mb-4">
                                <div class="form-floating ">
                                    <input type="text" class="form-control" id="teacher-name"
                                        placeholder="Name of the staff" name="name">
                                    <label for="floatingInput">Name</label>
                                </div>

                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-floating">
                                    <select class="form-select" id="teacher-gender"
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
                                    <input type="text" class="form-control" id="teacher-role" placeholder="Role"
                                        name="role">
                                    <label for="floatingPassword">Subject <small>(ex:Maths)</small></label>
                                </div>

                            </div>
                            <div class="col-12 mb-4">
                                <div class="form-floating">
                                    <input type="date" class="form-control" id="teacher-date"
                                        placeholder="Date of joning" name="joined_at">
                                    <label for="floatingPassword">Date of joning</label>
                                </div>

                            </div>
                            <input type="hidden" name="id" id="teacher-id">
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
