<div class="certificate-container">
    <img src="{{ asset('assets/images/certificate.png') }}" alt="Certificate Background" class="bg-image"/>
    <div class="content-box">
        <div class="logos">
            <img src="{{asset('assets/images/mahakumbh.png')}}" alt="">
            <img src="{{asset('assets/images/Seal_of_Uttar_Pradesh.svg')}}" alt="">
        </div>
        <h2>उत्तर प्रदेश राज्य पुरातत्व निदेशालय</h2>
        <div class="main-text">महाकुम्भ प्रयागराज - 2025 महोत्सव के अन्तर्गत</div>
        <p>प्रमाणित किया जाता है कि सुश्री / श्री <span class="dynamic-text">{{ $user }}</span> ने 'महाकुम्भ प्रयागराज 2025 महोत्सव' के अन्तर्गत आयोजित ऑन द स्पॉट प्रश्नोत्तरी प्रतियोगिता में प्रतिभाग किया।</p>
        <div class="bottom-box">
            <div class="date-box">
                <div>{{ now()->format('d-m-Y') }}</div>
                <div>दिनांक</div>
            </div>
            <div class="signature-box">
                <img src="{{asset('assets/images/sign_dic.png')}}" alt="">
                <div>रेनू द्विवेदी</div>
                <div>निदेशक</div>
                <div>उत्तर प्रदेश राज्य पुरातत्व निदेशालय, लखनऊ</div>
            </div>
        </div>
    </div>
</div>
