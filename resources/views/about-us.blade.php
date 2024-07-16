@extends('layouts.main')

@section('content')
<div class="pt-5 mt-5">
  <section class="about container">
    <h2 class="sec-title">About US</h2>
    <div class="row pb-5 mb-5">
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

    <div class="map-container">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3887.1094882897833!2d80.22220117575615!3d13.028699113622515!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a5267047a69805f%3A0x8f133bdde39d263b!2sOxford%20Matriculation%20Higher%20Secondary%20School!5e0!3m2!1sen!2sin!4v1721120356846!5m2!1sen!2sin" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>


  </section>
</div>
@endsection