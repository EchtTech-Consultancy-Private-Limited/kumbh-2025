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
      /* max-width: 400px; */
      height: auto;
      margin: auto;
      /* border: 1px solid #ccc; */
      padding: 20px;
      /* border-radius: 8px;
      box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); */
      font-size: 14px;
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
      background-color: ##955152;
      color: #fff;
      padding: 10px 15px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
      box-shadow: rgba(0, 0, 0, 0.24) 0px 3px 8px;
    }
    button:hover {
      background-color: #0056b3;
    }
    .height-fixed {
    max-height: 500px; /* Set max height for the map container */
    overflow-y: auto; /* Allows vertical scrolling if content overflows */
    padding-right: 15px; /* Optional: prevents the scrollbar from overlapping */
    position: relative;
}

.quiz-form {
    position: relative; /* Keeps the form in its normal flow */
}

.submit-container {
  
    bottom: 0; /* Stick the button to the bottom */
    width: 100%; /* Ensures the button stays within the container width */
    background-color: white; /* Optional: make the background white */
    padding: 10px; /* Optional: add some padding */
}

.submit-container .btn-primary {
    width: 100%; /* Optional: make the button full width */
}
.option-box .options {
    margin-left: 20px;
}
.option-box .options label {
    margin-bottom: 0;
    margin-left: 5px;
    font-weight: 500;
}

#timer {
    font-size: 20px;
    font-weight: bold;
    color: red;
    text-align: center;
    margin-bottom: 20px;
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
        <div class="second-child container-fluid my-4">
            <div class="row g-3 mx-3 second-child-box">
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
                <div class="col-md-6 question-form second-childd">
                    <div class="map height-fixed">
                        {{-- <h2 class="text-center">Quiz Questions</h2> --}}
                        <!-- Timer -->
                         <div class="user-timer-box">
                            <h5>उत्तर प्रदेश राज्य पुरातत्व निदेशालय ( {{ @$user->name }} )</h5>
                            <div id="timer" class="text-center mb-3" style="font-size: 15px; font-weight: bold; color: red;">
                                Time Remaining: 05:00
                            </div>
                            
                        </div>
                        <!-- Quiz Form -->
                        <form id="quizForm" action="{{ route('checkQuiz') }}" method="post" class="quiz-form">
                            @csrf
                            <input type="hidden" value="{{ @$user->name }}" name="user">
                            @foreach ($questions as $index => $question)
                                <label for="question{{ $index }}">Q:{{ $index + 1 }} {{ $question->questions }}</label>
                                @php
                                    // Decode the JSON options
                                    $options = json_decode($question->options, true);
                                @endphp
                                <div class="option-box d-flex align-items-center">
                                @if (is_array($options))
                                    @foreach ($options as $key => $option)
                                        <div class="options d-flex align-items-center">
                                            <input 
                                                type="radio" 
                                                id="question{{ $index }}_{{ $key }}" 
                                                name="answers[{{ $question->id }}]" 
                                                value="{{ $option }}" 
                                                required
                                            >
                                            <label for="question{{ $index }}_{{ $key }}">{{ $option }}</label>
                                        </div>
                                    @endforeach
                                @else
                                    <p class="text-danger">Invalid options format for this question.</p>
                                @endif
                                </div>
                              
                                <br>
                            @endforeach
                            <div class="submit-container">
                                <button type="submit" class="btn btn-primary" id="submitButton">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>

                <!--End Center -->
                <!--Start Right Side Banner -->
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

    // timer
    document.addEventListener('DOMContentLoaded', function () {
        // Timer functionality
        const timerElement = document.getElementById('timer');
        const quizForm = document.getElementById('quizForm');

        let timeRemaining = 300; // 5 minutes in seconds

        const updateTimerDisplay = () => {
            const minutes = Math.floor(timeRemaining / 60);
            const seconds = timeRemaining % 60;
            timerElement.textContent = `Time Remaining: ${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;
        };

        const countdown = setInterval(() => {
            timeRemaining -= 1;
            updateTimerDisplay();

            if (timeRemaining <= 0) {
                clearInterval(countdown);
                alert('Time is up! The form will now be submitted.');
                quizForm.submit(); // Automatically submit the form
            }
        }, 1000);

        updateTimerDisplay(); // Initialize the timer display
    });
    </script>
</body>
