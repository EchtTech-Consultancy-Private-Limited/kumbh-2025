@extends('layouts.master')
@section('style')
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
@endsection
@section('content')
        <!-- Main Content -->
        <div class="second-child container my-4">
            <div class="row g-3">
                <!-- Left Banner -->
                <div class="col-md-3">
                    <div class="left-image">
                        <div class="my-slider">
                            <div class="img-slider"><img src="{{asset('assets/images/left-side.jpg')}}" alt="Left Side Image 1" class="img-fluid"></div>
                            <div class="img-slider"><img src="{{asset('assets/images/left-side1.jpg')}}" alt="Left Side Image 2" class="img-fluid"></div>
                            <div class="img-slider"><img src="{{asset('assets/images/left-side2.jpg')}}" alt="Left Side Image 3" class="img-fluid"></div>
                            <div class="img-slider"><img src="{{asset('assets/images/left-img-3.jpg')}}" alt="Left Side Image 4" class="img-fluid"></div>
                        </div>
                    </div>
                </div>
                <!-- Center Section -->
                <div class="col-md-6 second-childd">
                <div class="text-center">
                    <form action="{{ route('storeUser') }}" method="post" id="registrationForm">
                        @csrf
                        <label for="name">Name <span
                            class="text-danger error">*</span></label>
                        <input type="text" id="name" name="name" placeholder="Enter your name" oninput="validateInputChar(this)">
                        
                        <label for="age">Age <span
                            class="text-danger error">*</span></label>
                        <input type="text" id="age" name="age" placeholder="Enter your age" oninput="validateInput(this)" maxlength="3">
                        
                        <label for="mobile">Mobile Number <span
                            class="text-danger error">*</span></label>
                        <input type="tel" id="mobile" name="mobile" placeholder="Enter your mobile number" oninput="validateInput(this)" maxlength="10">
                        
                        <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
                    </form>
                </div>
                </div>
                <!-- Right Banner -->
                <div class="col-md-3">
                    <div class="discription-box">
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

        // Form validation
        $("#registrationForm").validate({
            rules: {
                name: {
                    required: true
                },
                age: {
                    required: true
                },
                mobile: {
                    required: true,
                    digits: true,
                    minlength: 10,
                    maxlength: 10
                }
            },
            messages: {
                name: {
                    required: "Name is required",
                },
                age: {
                    required: "Age is required",
                },
                mobile: {
                    required: "Mobile Number is required",
                    digits: "Mobile Number must be digits only",
                    minlength: "Mobile Number must be 10 digits",
                    maxlength: "Mobile Number must be 10 digits"
                }
            },
            submitHandler: function (form) {
                // Disable the submit button after form submission
                $("#submitButton").prop('disabled', true).text('Submitting...');
                form.submit();
            }
        });
    });
</script>
@endsection
@endsection