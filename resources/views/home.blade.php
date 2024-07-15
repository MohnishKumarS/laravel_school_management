@extends('layouts.main')

@section('content')
    <div>
        <div class="row">
            <div class="col-lg-3">
              <div class="left-section">
                <aside>
                    <p> Menu </p>
                    <a href="javascript:void(0)">
                        <i class="fa fa-user" aria-hidden="true"></i>
                        Home
                    </a>
                    <a href="javascript:void(0)">
                        <i class="fa fa-laptop" aria-hidden="true"></i>
                        Banners
                    </a>
                    <a href="javascript:void(0)">
                        <i class="fa fa-clone" aria-hidden="true"></i>
                        Latest News
                    </a>
                    <a href="javascript:void(0)">
                        <i class="fa fa-star" aria-hidden="true"></i>
                        Quotes
                    </a>
                    <a href="javascript:void(0)">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        Standards/classes
                    </a>
                    <a href="javascript:void(0)">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        Teachers
                    </a>
                    <a href="javascript:void(0)">
                        <i class="fa fa-trash" aria-hidden="true"></i>
                        Students
                    </a>
                </aside>
              </div>
            </div>
            <div class="col-lg-9">
                <div class="right-section">
                    asd
                </div>
            </div>
        </div>
      
       
    </div>

    <style>
        aside {
            color: #fff;
            width: 250px;
            padding-left: 20px;
            height: 100vh;
            background-image: linear-gradient(30deg, #0048bd, #44a7fd);
            border-top-right-radius: 80px;
        }

        aside a {
            font-size: 12px;
            color: #fff;
            display: block;
            padding: 12px;
            padding-left: 30px;
            text-decoration: none;
            -webkit-tap-highlight-color: transparent;
        }

        aside a:hover {
            color: #3f5efb;
            background: #fff;
            outline: none;
            position: relative;
            background-color: #fff;
            border-top-left-radius: 20px;
            border-bottom-left-radius: 20px;
        }

        aside a i {
            margin-right: 5px;
        }

        aside a:hover::after {
            content: "";
            position: absolute;
            background-color: transparent;
            bottom: 100%;
            right: 0;
            height: 35px;
            width: 35px;
            border-bottom-right-radius: 18px;
            box-shadow: 0 20px 0 0 #fff;
        }

        aside a:hover::before {
            content: "";
            position: absolute;
            background-color: transparent;
            top: 38px;
            right: 0;
            height: 35px;
            width: 35px;
            border-top-right-radius: 18px;
            box-shadow: 0 -20px 0 0 #fff;
        }

        aside p {
            margin: 0;
            padding: 40px 0;
        }

        body {
            font-family: 'Roboto';
            width: 100%;
            height: 100vh;
            margin: 0;
        }

        .social {
            height: 0;
        }

        .social i:before {
            width: 14px;
            height: 14px;
            font-size: 14px;
            position: fixed;
            color: #fff;
            background: #0077B5;
            padding: 10px;
            border-radius: 50%;
            top: 5px;
            right: 5px;
        }
    </style>
@endsection
