@extends('layouts.main')

@section('content')
    <section class="notice-board pt-5 mt-5">
      <h2 class="sec-title">notice-board</h2>
      <div class="container">
        <div class="info-block text-center shadow py-5 px-5">
          @if ($news)
          <div class="info-block__title">
            Announcement:
          </div>
          <div class="info-block__content">
            {{$news->news}}
          </div>
          @else
          <div class="info-block__content text-danger">
           No announcement yet!
          </div>
          @endif
    
        </div>
      </div>
    </section>
@endsection


