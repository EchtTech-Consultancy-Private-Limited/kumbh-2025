@extends('layouts.master')
@section('content')
        <!-- Main Content -->
        <div class="second-child container-fluid my-4">
            <div class="row g-3 mx-3 second-child-box">
                <!-- Left Banner -->
                <div class="col-md-3 first-childd">
                    <div class="left-image height-fixed">
                        <div class="my-slider">
                            <div class="img-slider"><img src="{{asset('assets/images/left-side.jpg')}}" alt="Left Side Image 1" class="img-fluid"></div>
                            <div class="img-slider"><img src="{{asset('assets/images/left-side1.jpg')}}" alt="Left Side Image 2" class="img-fluid"></div>
                            <div class="img-slider"><img src="{{asset('assets/images/left-side2.jpg')}}" alt="Left Side Image 3" class="img-fluid"></div>
                            <div class="img-slider"><img src="{{asset('assets/images/left-img-3.jpg')}}" alt="Left Side Image 4" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
                <!-- Center Section -->
                <div class="text-center col-md-6 second-childd">
                    <div class="map height-fixed text-center">
                        <p class="map-quiz-title">👇🏻 Click on the image below to play the quiz and win a certificate. 👇🏻</p>
                        <a href="{{route('quizStart')}}" class="d-inline-block">
                            <img src="{{asset('assets/images/map.jpg')}}" alt="Map Quiz" id="imageShow" class="img-fluid">
                        </a>
                    </div>
                </div>
                <!-- Right Banner -->
                <div class="col-md-3 right third-childd">
                    <div class="discription-box right-child height-fixed">
                        <section>
                            <h5>कुम्भ मेले के बारे में!</h5>
                            <p>कुम्भ मेला देश में एक केंद्रीय आध्यात्मिक भूमिका निभाता है...</p>
                            <h6>मुख्य!</h6>
                            <ul>
                                <li>कुम्भ मेला हिंदू धर्म का सबसे बड़ा मेला होता है।</li>
                                <li>इस मेले को हर तीन साल में एक नये स्थान पर आयोजित किया जाता है।</li>
                            </ul>
                            <h5>उत्तर प्रदेश राज्य पुरातत्व विभाग के बारे में!</h5>
                            <p>उत्तर प्रदेश राज्य पुरातत्व विभाग आध्यात्मिक और पवित्र सांस्कृतिक विरासत...</p>
                        </section>
                    </div>
                </div>
            </div>
        </div>   
@section('script')
<script>
    $(document).ready(function () {
        $('.my-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            speed: 500,
            infinite: true,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
                { breakpoint: 768, settings: { slidesToShow: 1 } },
                { breakpoint: 576, settings: { slidesToShow: 1 } }
            ]
        });
    });
</script>
@endsection
@endsection