@extends('layouts.app')

@section('content')
    <!-- ======= Home Start ======= -->
    <div class="Home " id="Home">
        <span id="typed" data-aos="fade-up" data-aos-duration="500"></span>
    </div>
    <!-- ======= Home End ======= -->
    <!-- ======= about Start ======= -->
    <div class="about">
        <div class="contener">
            <div class="row">
                <div class="col-md-6">

                </div>
                <div class="col-md-6">

                </div>
            </div>
        </div>
    </div>
    <!-- ======= about End ======= -->

    <!-- ======= LatestNews Start ======= -->
    <div class="LatestNews " id="LatestNews">
        <div class="container">
            <h1 class="judul text-center" data-aos="fade-up" data-aos-duration="1500" data-aos-delay="200">اخر الاخبار</h1>
            <div class="carousel mt-5">

                @for ($i = 0; $i < 10; $i++)
                    <div class="card ms-5" data-aos="zoom-in-down" data-aos-duration="1500" data-aos-delay="200">
                        <img src="{{ asset('assets/img/11.jpg') }}" class="card-img-top" alt="...">
                        <div class="card-body ">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of
                                the card's content.</p>
                            <a href="#" class="btn">More</a>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
    </div>
    <!-- ======= LatestNews End ======= -->
    
@endsection
