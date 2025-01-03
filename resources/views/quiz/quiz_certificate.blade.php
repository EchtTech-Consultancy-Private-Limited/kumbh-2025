@extends('layouts.master')
@section('style')
<style>
    body {
      font-family: Arial, sans-serif;
      margin: 20px;
    }
    .certificate-container {
        position: relative;
        width: 800px;
        height: 570px;
        /* background-image: url("{{ asset('assets/images/certificate.png') }}"); */
        background-size: cover;
        background-position: center;
    }

    .certificate-container .logos {
        text-align: center;
        margin-bottom: 12px;
    }

    .certificate-container .logos img {
        width: 70px;
    }

    .certificate-container .logos img:first-child {
        border-right: 1px solid #333;
    }

    .certificate-container .logos img:first-child {
        border-right: 2px solid #e1ae7b;
        padding-right: 10px;
    }

    .certificate-container .logos img:not(:first-child) {
        padding-left: 5px;
    }

    .certificate-container .content-box {
            padding: 32px 40px;
            z-index: 9;
            position: relative;
        }

        .certificate-container img.bg-image {
            width: 100%;
            height: auto;
            position: absolute;
            z-index: 1;
            left: 0;
            top: 0;
        }

        .certificate-container h2 {
        text-align: center;
        color: #333;
        margin-bottom: 15px;
        font-size: 26px
    }

    .certificate-container .devider-text {
        font-size: 18px;
        color: #333;
        text-align: center;
        font-weight: 500;
    }

    .certificate-container .main-text {
        color: #f53c3c;
        margin-top: 8px;
        text-align: center;
        font-size: 26px;
        margin-bottom: 18px;
    }

    .certificate-container p {
        text-align: center;
        color: #333;
        font-size: 12px;
        margin-bottom: 12px;
    }

    .certificate-container .text-first {
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .certificate-container span.dynamic-text {
        border-bottom: 2px dotted #333;
        width: 250px;
        display: block;
        font-weight: 600;
        font-size: 15px;
    }

    .certificate-container .bottom-box {
        display: flex;
        align-items: center;
        justify-content: center;
        margin-top: 20px;
    }

    .certificate-container .date-box {
        font-size: 12px;
        margin-right: 160px;
        text-align: center;
    }

    .certificate-container .date-dymanic {
        border-bottom: 2px solid #999595;
        width: 116px;
        display: block;
        font-weight: 600;
        padding-bottom: 5px;
        margin-bottom: 5px;
        font-size: 14px;
    }

    .certificate-container .signature-box {
        text-align: center;
        font-size: 15px;
    }

    .certificate-container .signature-box img {
        width: 116px;
        height: 40px;
        border-bottom: 2px solid #999595;
        padding-bottom: 3px;
        margin-bottom: 2px;
        object-fit: contain;
    }

    .certificate-container .sign-text {
        font-size: 12px;
        line-height: 19px;
    }
</style>
@endsection
@section('content')
<div class="second-child container-fluid my-4">
    <div class="row g-3 mx-3 second-child-box">
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
        <div class="text-center col-md-6 second-childd">
            <div class="certificate-container" id="printableArea">
                <img src="{{ asset('assets/images/certificate.png') }}" alt="img" class="bg-image"/>
                <div class="content-box">
                    <div class="logos">
                        <img src="{{asset('assets/images/mahakumbh.png')}}" alt="">
                        <img src="{{asset('assets/images/Seal_of_Uttar_Pradesh.svg')}}" alt="">
                    </div>
                    <div class="text-box">
                        <h2>उत्तर प्रदेश राज्य पुरातत्व निदेशालय</h2>
                        <div class="devider-text">द्वारा</div>
                        <h2 class="main-text">महाकुम्भ प्रयागराज - 2025 महोत्सव के अन्तर्गत</h2>
                        <p class="text-first">प्रमाणित किया जाता है कि सुश्री / श्री <span class="dynamic-text">
                                {{ $user }}</span> ने </p>
                        <p>'महाकुम्भ प्रयागराज 2025 महोत्सव' के अन्तर्गत आयोजित ऑन द स्पॉट प्रश्नोत्तरी प्रतियोगिता में प्रतिभाग
                            किया। </p>
                        <p>राज्य पुरातत्व निदेशालय इनके उज्ज्वल भविष्य की कामना करता है।</p>
                        <div class="bottom-box">
                            <div class="date-box">
                                <div class="date-dymanic">{{ now()->format('d-m-Y') }}</div>
                                <div>दिनांक</div>
                            </div>

                            <div class="signature-box">
                                <img src="{{asset('assets/images/sign.png')}}" alt="">
                                <div class="sign-text">
                                    <div>रेनू द्विवेदी</div>
                                    <div>निदेशक</div>
                                    <div>उत्तर प्रदेश राज्य पुरातत्व निदेशालय, लखनऊ</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
            </div><br><br>
            <input type="button" onclick="printDiv('printableArea')" value="print a div!" />
            <a href="{{ route('homePage') }}" class="btn btn-primary" id="submitLink" role="button">New Quiz Start</a>
        </div>
    </div>
</div>
@section('script')
<script>
$(document).ready(function() {
    $('.my-slider').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        dots: false,
        speed: 500,
        infinite: true,
        autoplay: true,
        autoplaySpeed: 2000,
        responsive: [{
                breakpoint: 768,
                settings: {
                    slidesToShow: 1
                }
            },
            {
                breakpoint: 576,
                settings: {
                    slidesToShow: 1
                }
            }
        ]
    });

});

function printDiv(divId) {
     var printContents = document.getElementById(divId).innerHTML;
     var originalContents = document.body.innerHTML;

     document.body.innerHTML = printContents;

     window.print();

     document.body.innerHTML = originalContents;
}
</script>
@endsection
@endsection
