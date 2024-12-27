<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('assets/css/custom-style.css')}}">
    <title>Allahabad Kumbh</title>
    <!-- jQuery CDN -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Slick CSS -->
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css" />
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css" />

    <!-- Slick JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    form {
      max-width: 400px;
      margin: auto;
      border: 1px solid #ccc;
      padding: 20px;
      border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    label {
      display: block;
      margin-bottom: 8px;
      font-weight: bold;
    }
    input[type="text"], input[type="tel"] {
      width: 100%;
      padding: 10px;
      margin-bottom: 15px;
      border: 1px solid #ccc;
      border-radius: 4px;
    }
    button {
      background-color: #007BFF;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    button:hover {
      background-color: #0056b3;
    }
  </style>
</head>

<body>
    <div class="main-container row g-0">
        <div class="logo-header">
            <div class="left-logo">
                <img src="{{asset('assets/images/logo-1.jpg')}}" alt="">
            </div>
            <!-- <div class="middle">
                <marquee behavior="" direction="left">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                    Cupiditate recusandae tenetur doloremque aspernatur earum molestias.</marquee>
            </div> -->
            <div class="right-logo">
                <img src="{{asset('assets/images/logo-2.jpeg')}}" alt="">
            </div>
        </div>
        <div class="col-md-12 first-child">
            <div class="banner">
                <img src="{{asset('assets/images/Banner.jpg')}}" alt="">
            </div>
        </div>
        <div class="second-child">
            <div class="row g-0 mx-3 second-child-box">
                <!--Start Left Side Banner -->
                <div class="col-md-3 first-childd">
                    <div class="left-image height-fixed">

                        <div class="wrapper">
                            <div class="my-slider">
                                <div class="img-slider"><img src="{{asset('assets/images/left-side.jpg')}}" alt=""></div>
                                <div class="img-slider"><img src="{{asset('assets/images/left-side1.jpg')}}" alt=""></div>
                                <div class="img-slider"><img src="{{asset('assets/images/left-side2.jpg')}}" alt=""></div>
                                <div class="img-slider"><img src="{{asset('assets/images/left-img-3.jpg')}}" alt=""></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End Left Side Banner -->
                <!--Start Center -->
                <div class="col-md-6 second-childd">
                    <div class="map height-fixed text-center">
                        <img src="{{ asset('assets/images/certificate.jpeg') }}">                     
                    </div>
                </div>
                <!--End Center -->
                <!--Start Right Side Banner -->
                <div class="col-md-3 right third-childd">
                    <div class="right-child height-fixed">
                        <div class="discrittion-box">
                            <section>
                                <h5>कुम्भ मेले के बारे में!</h5>
                                <p>
                                    कुम्भ मेला देश में एक केंद्रीय आध्यात्मिक भूमिका निभाता है, जो आम भारतीयों पर एक मंत्रमुग्ध प्रभाव डालता है। यह आयोजन खगोल विज्ञान, ज्योतिष, आध्यात्मिकता, अनुष्ठानिक परंपराओं और सामाजिक और सांस्कृतिक रीति-रिवाजों और प्रथाओं के विज्ञान को समाहित करता है, जिससे यह ज्ञान में बेहद समृद्ध है।
                                </p>

                                <h6>मुख्य!</h6>
                                <ul>
                                    <li>कुम्भ मेला हिंदू धर्म का सबसे बड़ा मेला होता है।</li>
                                    <li>इस मेले को हर तीन साल में एक नये स्थान पर आयोजित किया जाता है। </li>
                                    <!-- <li>Spiritual discourses and cultural performances</li> -->
                                </ul>
                                <h5>उत्तर प्रदेश राज्य पुरातत्व विभाग के बारे में!</h5>
                            <p>उत्तर प्रदेश राज्य पुरातत्व विभाग आध्यात्मिक और पवित्र सांस्कृतिक विरासत को संरक्षित करके वर्तमान को अतीत से जोड़ना और इसे आस्था आधारित पर्यटन के वैश्विक केंद्र के रूप में बढ़ावा देता है!</p>
                            </section>
                        </div>
                        <div class="bottom-image">
                            <!-- <div class="wrapper">
                                <div class="my-slider">
                                    <div class="img-slider"><img src="{{asset('assets/images/right-bottom-img.jpg')}}"
                                            alt=""></div>
                                    <div class="img-slider"><img src="{{asset('assets/images/right-bottom-img-1.jpg')}}"
                                            alt=""></div>
                                </div>
                            </div> -->
                        </div>
                    </div>
                </div>
                <!--End Right Side Banner -->
            </div>
        </div>
        <footer class="footer">
            <div class="container">
                <p>&copy; 2025 UP State Archaeology Department All rights reserved.</p>
            </div>
        </footer>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>


    <script>
        function getForm(){
            alert()
            document.getElementById('imageShow').style.visibility='hidden';
        }
    $(document).ready(function() {
        $('.my-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            speed: 500,
            infinite: true,
            autoplaySpeed: 2000,
            autoplay: true,
            responsive: [{
                    breakpoint: 768,
                    settings: {
                        slidesToShow: 1,
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
