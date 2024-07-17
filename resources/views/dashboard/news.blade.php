@extends('layouts.admin')

@section('content')
<section class="news-sec">
  <h2 class="sec-title">Add news</h2>

  <div class="block-wrap container">
      <div class="bs">
        <form action="{{ url('/add-news') }}" method="post"  autocomplete="off">
          @csrf
          <div class="row">
              <div class="col-lg-12 mb-4">
                  <div class="form-floating ">
                      <textarea class="form-control" placeholder="Latest news here..." id="floatingTextarea" name="news"></textarea>
                      <label for="floatingTextarea">Latest news type here....</label>
                  </div>
                  @error('news')
                      <div class="text-danger"><small>{{ $message }}</small></div>
                  @enderror
              </div>
              <div class="col-lg-12 mb-4">
                  <div class="btn-wrap my-3 text-center">
                      <button class="btn-main w-25" type='submit'>Submit</button>
                  </div>
              </div>
          </div>
        
      </form>
      </div>

      <h2 class="sec-title">Latest news</h2>
      <div class="news-table table-responsive">

          <table class="table table-hover table-bordered">
              <thead>
                  <tr>
                      <th scope="col">#</th>
                      <th scope="col" width="60%">News</th>
                      <th scope="col">Action</th>
                  </tr>
              </thead>
              <tbody>
                  @if ($news)
                      <tr class="align-middle">
                          <th scope="row">1</th>
                          <td>{{ $news->news }}</td>
                          <td>
                              <div>
                                  <a data-bs-toggle="modal" data-bs-target="#edit-news"
                                      class="btn btn-outline-primary">Edit</a>
                                  <a href="{{ URL::to('delete-news/' . $news->id) }}"
                                      class="btn btn-outline-danger">Delete</a>
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



<!-- Edit news Modal -->
@if ($news)
<div class="modal fade" id="edit-news" tabindex="-1" aria-labelledby="edit-newsLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="edit-newsLabel">Edit news</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="{{ url('update-news/' . $news->id) }}" method="post"  autocomplete="off">
                    @csrf
                    <div class="row">
                        <div class="col-12">
                            <div class="form-floating mb-3">
                                <div class="form-floating ">
                                    <textarea class="form-control" placeholder="Latest news here..." id="floatingTextarea" name="news" style="height: 100px">{{$news->news}}</textarea>
                                    <label for="floatingTextarea">Latest news type here....</label>
                                </div>
                               
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
@endif

@endsection
