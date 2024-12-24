<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../resources/css/style.css">
    <title>Allahabad Kumbh</title>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />

    <!-- Slick JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="main-container row pb-5 g-0">
        <div class="logo-header">
            <div class="left-logo">
                <img src="{{asset('assets/images/logo-1.jpeg')}}" alt="">
            </div>
            <div class="middle">
                <marquee behavior="" direction="left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate recusandae tenetur doloremque aspernatur earum molestias.</marquee>
            </div>
            <div class="right-logo">
                <img src="{{asset('assets/images/logo-2.jpeg')}}" alt="">
            </div>
        </div>
        <div class="col-md-12 first-child">
            <div class="banner">
                <!-- <img src="assets/images/banner5.jpg" alt=""> -->
                <img src="{{asset('assets/images/banner_img.jpg')}}" alt="">
            </div>
        </div>
        <div class="second-child">
            <div class="row g-0 mx-3">
                <div class="col-md-3">
                    <div class="left-image height-fixed">

                        <div class="wrapper">
                            <div class="my-slider">
                                <div class="img-slider"><img src="{{asset('assets/images/left-img.jpg')}}" alt=""></div>
                                <div class="img-slider"><img src="{{asset('assets/images/left-img-1.jpg')}}" alt=""></div>
                                <div class="img-slider"><img src="{{asset('assets/images/left-img-2.jpg')}}" alt=""></div>
                                <div class="img-slider"><img src="{{asset('assets/images/left-img-3.jpg')}}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="map height-fixed text-center">
                        <img src="{{asset('assets/images/map.png')}}" frameborder="0"></img>
                    </div>
                </div>
                <div class="col-md-3 right">
                    <div class="right-child height-fixed">
                        <div class="discrittion-box">
                            <section>
                                <h5>About the Kumbh Mela</h5>
                                <p>
                                    The Kumbh Mela is one of the largest spiritual gatherings in the world. Held in
                                    Allahabad (now Prayagraj), it is a grand event
                                    that occurs every 12 years at the confluence of the Ganga, Yamuna, and the mythical
                                    Saraswati rivers.
                                </p>

                                <h6>Highlights</h6>
                                <ul>
                                    <li>Shahi Snan (Royal Bath)</li>
                                    <li>Processions of Akharas (groups of saints and sages)</li>
                                    <li>Spiritual discourses and cultural performances</li>

                                </ul>
                            </section>
                        </div>
                        <div class="bottom-image">
                        <div class="wrapper">
                            <div class="my-slider">
                                <div class="img-slider"><img src="{{asset('assets/images/right-bottom-img.jpg')}}" alt=""></div>
                                <div class="img-slider"><img src="{{asset('assets/images/right-bottom-img-1.jpg')}}" alt=""></div>
                                <div class="img-slider"><img src="{{asset('assets/images/right-bottom-img-2.png')}}" alt=""></div>
                                <div class="img-slider"><img src="{{asset('assets/images/right-bottom-img.jpg')}}" alt=""></div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    $(document).ready(function() {
        $('.my-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            speed: 500,
            infinite: true,
            autoplaySpeed: 5000,
            autoplay: true,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 3,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]
        });
    });
    </script>
</body>
</html>