@extends('layouts.main')


@section('content')
    <div>
        @if ($banner->count())
        <section class="banners-sec container">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    @foreach ($banner as $key=>$val)
                    <div class="carousel-item @if($key == 0) active @endif" data-bs-interval="{{$val->time}}">
                        <img src="{{ url('image/banners/'.$val->image) }}" class="d-block w-100 img-fluid object-fit-cover"
                            style="height: 450px" alt="banner-poster">
                    </div>
                    @endforeach

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
        @endif


        <section class="news-sec">
          
            @if ($news)

                <div class="news-block">
                    <div class="row news-row">
                        <div class="col col-lg-2 p-0">
                            <div class="news-title">
                                LATEST NEWS
                            </div>
                        </div>
                        <div class="col col-lg-10 news-col-two p-0">
                            <div class="news-marquee">
                                 <img src="{{asset('image/new-icon.gif')}}" class="pe-3" alt="new-news">   {{$news->news}}                         
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </section>


        <section class="quotes-sec">
            <h2 class="sec-title">Thought of the day</h2>
            @if ($quote)
            <div class="quotes-block">
                <h4 class="quotes__txt">
                    <q>{{$quote->name}}</q>
                </h4>
                @if ($quote->author)
                <div class="quotes__author">
                  --  {{$quote->author}}
                </div>
                @endif
                
            </div>
            @endif
        </section>

        <section class="about container">
            <h2 class="sec-title">About US</h2>
            <div class="row ">
                <div class="col-lg-6">
                    <div>
                        <p class="about-title">
                            A team that believes that education will create globally competitive individuals</p>
                        <p class="about-txt">We started with a small school, few students, one Oxford Educational Trust and a dedicated set of teachers back in 1986. Today we are an educational edifice with lakhs of students, hundreds of teachers and several top-notch institutions growing under our umbrella. Our institutional breadth spans from Kindergarten (KG) to Post-Graduate levels. With focus on evolving our teaching and learning practices to meet the best of global standards the group pioneered the Oxford New Gen Edu Network mission.</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="video-container">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/7eogR103sPU?si=vVG3K9NYN5_GiyQ0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </section>
        <section class="standard-sec">
            <h2 class="sec-title">Classes (std)</h2>
            <div class="std-block container">
                <div class="row">
                  <div class="col-md-6 col-lg-4 mb-4">
                    <a href="{{url('std-details/2')}}">
                      <div class="std-item">
                        <div class="std-block__icon">
                          <img src="https://img.icons8.com/?size=100&id=K2tDfCBeUCPR&format=png&color=000000" alt="classes" loading="lazy">
                        </div>
                        <div class="std-block__title">
                          <h3>Class 10</h3>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-4">
                    <a href="{{url('std-details/3')}}">
                      <div class="std-item">
                        <div class="std-block__icon">
                          <img src="https://img.icons8.com/?size=100&id=D5JkHSDonyLY&format=png&color=000000" alt="classes" loading="lazy">
                        </div>
                        <div class="std-block__title">
                          <h3>Class 11</h3>
                        </div>
                      </div>
                    </a>
                  </div>
                  <div class="col-md-6 col-lg-4 mb-4">
                    <a href="{{url('std-details/4')}}">
                      <div class="std-item">
                        <div class="std-block__icon">
                          <img src="https://img.icons8.com/?size=100&id=g0hFAy7X4Ef7&format=png&color=000000" alt="classes" loading="lazy">
                        </div>
                        <div class="std-block__title">
                          <h3>Class 12</h3>
                        </div>
                      </div>
                    </a>
                  </div>
                </div>
              </div>
        </section>

        @if ($teacher->count())
        <section class="teachers-sec">
            <h2 class="sec-title">Teachers</h2>
            <div class="teacher-block container">
                <div class="swiper teacher-swiper">
                  <div class="swiper-wrapper">

                    @foreach ($teacher as $val)
                    <div class="swiper-slide">
                        <div class="teacher-item">
                          <div class="teacher-block__icon">
                            <img src="{{url('image/'.$val->gender.'.png')}}" alt="avatar-icon" loading="lazy">
                          </div>
                          <div class="teacher-block__title">
                            <h3>{{$val->name}}</h3>
                          </div>
                          <p class="teacher-block__sub-title">{{$val->role}}</p>
                        </div>
                      </div>
                    @endforeach
               
    
                    
                  </div>
                    <!-- If we need navigation buttons -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
                </div>
              </div>
        </section>
        @endif
     

    </div>
@endsection

@push('scripts')
    <script>
             var swiper = new Swiper('.teacher-swiper', {
      autoplay:{
        delay:3000,
      },
      slidesPerView: 3,
      spaceBetween: 5,
      loop: false,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
        draggable: true,
      },
      // If we need pagination
      pagination: {
        el: '.swiper-pagination',
      },


      // And if we need scrollbar
      scrollbar: {
        el: '.swiper-scrollbar',
        draggable: true,
        hide: false,
      },

      breakpoints: {
        250: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        576: {
          slidesPerView: 1,
          spaceBetween: 20,
        },
        768: {
          slidesPerView: 2,
          spaceBetween: 20,
        },
        1024: {
          slidesPerView: 2,
          spaceBetween: 40,
        },
        // 1200: {
        //   slidesPerView: 6,
        //   spaceBetween: 20,
        // },
        1400: {
          slidesPerView: 3,
          spaceBetween: 40,
        },
      },
    });
    </script>
@endpush





