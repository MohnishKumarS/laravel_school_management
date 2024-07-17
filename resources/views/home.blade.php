@extends('layouts.admin')

@section('content')
<section class="dash-home">
    <h2 class="sec-title">Dashboard</h2>
    <h2 class="mb-4">
        Welcome <span class="text-main">{{Auth::user()->name}}</span>
    </h2>
    <div class="block-wrap container">
        <div class="dash-block container">
            <div class="row">
              <div class="col-lg-4 mb-4 ">
                <div class="dash-item one">
                  <div class="dash-item__title">
                    Teachers
                  </div>
                  <div class="dash-item__sub">
                    <div class="dash-item__count">
                      {{$teacher}}
                    </div>
                    <div class="dash-item-icon">
                        <i class="fa-solid fa-person-chalkboard"></i>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-4">
                <div class="dash-item two">
                  <div class="dash-item__title">
                    Students
                  </div>
                  <div class="dash-item__sub">
                    <div class="dash-item__count">
                        {{$students}}
                    </div>
                    <div class="dash-item-icon">
                        <i class="fa-solid fa-people-roof"></i>
                    </div>
      
                  </div>
      
                </div>
              </div>
              <div class="col-lg-4 mb-4">
                <div class="dash-item three">
                  <div class="dash-item__title">
                    Admission
                  </div>
                  <div class="dash-item__sub">
                    <div class="dash-item__count">
                        {{$admission}}
                    </div>
                    <div class="dash-item-icon">
                        <i class="fa-solid fa-list-check"></i>
                    </div>
      
                  </div>
      
                </div>
              </div>
              <div class="col-lg-4 mb-4">
                <div class="dash-item four">
                  <div class="dash-item__title">
                    Classes
                  </div>
                  <div class="dash-item__sub">
                    <div class="dash-item__count">
                        {{$std}}
                    </div>
                    <div class="dash-item-icon">
                        <i class="fa-solid fa-school"></i>
                    </div>
      
                  </div>
      
                </div>
              </div>
      
            </div>
          </div>
    </div>
</section>

@endsection
