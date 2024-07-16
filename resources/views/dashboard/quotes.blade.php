@extends('layouts.admin')

@section('content')
<section class="quotes-sec">
  <h2 class="sec-title">Add quote</h2>


  <div class="block-wrap container">
     <div class="bs">
      <form action="{{ url('/add-quote') }}" method="post"  autocomplete="off">
        @csrf
        <div class="row">
            <div class="col-lg-6 mb-4">
                <div class="form-floating ">
                    <input type="text" class="form-control" id="floatingInput" placeholder="Quote of the day"
                        name="quote">
                    <label for="floatingInput">Quotes</label>
                </div>
                @error('quote')
                    <div class="text-danger"><small>{{ $message }}</small></div>
                @enderror
            </div>
            <div class="col-lg-6 mb-4">
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
            <button class="btn-main w-25" type='submit'>Submit</button>
        </div>
    </form>
     </div>
     <h2 class="sec-title">Thought of the day</h2>
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
                      <tr class="align-middle">
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


<!-- Edit quote Modal -->
@if ($quote)
<div class="modal fade" id="edit-quote" tabindex="-1" aria-labelledby="edit-quoteLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="edit-quoteLabel">Edit Quote</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('update-quote/' . $quote->id) }}" method="post"  autocomplete="off">
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
@endif
@endsection
