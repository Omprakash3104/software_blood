<?php 
    session_start();

    ?>
<!DOCTYPE html>
<html>
<?php $title="Bloodbank | index page"; ?>
<?php require 'head.php'; ?>
<body>
    <?php require 'header.php'; ?>

    <div class="container cont">

   <?php require 'message.php'; ?>

        <div class="row justify-content-center">
            <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5 col-xs-6 mb-5" style="width: 60%">
                <div class="card">
                    <img src="image/bg.png" class="card-img-top">
                </div>
            </div>

            <div class="col-lg-9">
            <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">A+</div>
                    <div class="card-body">
                        If you are A+: You can give blood to A+ and AB+. You can receive blood from A+, A-, O+ and O-
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">A-</div>
                    <div class="card-body">
                        If you are A-: You can give blood to A-, A+, AB- and AB+. You can receive blood from A- and O-. 
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B+</div>
                    <div class="card-body">
                         You can give blood to A+ and AB+. You can receive blood from A+, A-, O+ and O-.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">B-</div>
                    <div class="card-body">
                        If you are B-: You can give blood to B-, B+, AB+ and AB-, You can receive blood from B- and O-.You can give blood to B+ and AB+.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB+</div>
                    <div class="card-body">
                         People with AB+ blood can receive red blood cells from any blood type. This means that demand for AB+ can donate with AB only.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">AB-</div>
                    <div class="card-body"> 
                         AB- patients can receive red blood cells from all negative blood types.
                         AB- can give red blood cells to both AB- and AB+ blood types.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O+</div>
                    <div class="card-body">
                        Blood O+ can donate to A+, B+, AB+ and O+ Blood
                        Group O can donate red blood cells to anybody. It's the universal donor.
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-xs-12 mb-5">
                <div class="card">
                    <div class="card-header text-center">O-</div>
                    <div class="card-body">
                        O- can donate to A+, A-, B+, B-, AB+, AB-, O+ and O- Blood
                        People with O negative blood can only receive red cell donations from O negative donors.
                    </div>
                </div>
            </div>
            
            </div>
            </div>

        </div>

        <div class="row">
            <div class="col-lg-6 rounded mb-5">

            </div>
            <div class="col-lg-6 rounded mb-5">
                 </div>
        </div>

<div class="row mb-5">
    <div class="col-lg-12">
        <div class="card">
            <div class="card-header">Healthy Living Tips</div>
            <div class="card-body">
                <h5>Eat a Balanced Diet</h5>
                <p>Eat a variety of foods including fruits, vegetables, lentils, nuts, and whole grains. Aim for at least five servings of fruits and vegetables daily. Incorporate seasonal produce into your meals, and limit processed foods and sugary snacks to reduce the risk of malnutrition and diseases like diabetes, heart disease, and cancer.</p>
                
                <h5>Limit Salt and Sugar Intake</h5>
                <p>Avoid excessive salt and sugar consumption as it can lead to health issues such as high blood pressure, tooth decay, and obesity. Limit your intake of sugary snacks, candies, and sweetened beverages. Adults and children should consume less than 10% of total energy from sugars, according to WHO guidelines.</p>
                
                <h5>Stay Physically Active</h5>
                <p>Engage in regular physical activity to maintain a healthy lifestyle. Adults aged 18-64 should aim for at least 150 minutes of moderate-intensity exercise per week. Increase activity levels for additional health benefits. Incorporate activities like walking, cycling, or yoga into your daily routine.</p>
                
                <h5>Avoid Tobacco</h5>
                <p>Quit smoking and avoid exposure to second-hand smoke. Smoking tobacco increases the risk of lung disease, heart disease, and stroke. Seek support to quit smoking if you are a smoker, and encourage others to maintain smoke-free environments.</p>
                
                <h5>Stay Hydrated with Safe Water</h5>
                <p>Drink clean and safe water to stay hydrated and maintain good health. Ensure that the water you consume is safe for drinking to prevent waterborne diseases. Use filtration methods if necessary, especially in areas with poor water quality.</p>
                
                <h5>Regular Health Check-ups</h5>
                <p>Visit your healthcare provider regularly for check-ups and screenings. Early detection of health issues can lead to better outcomes. Follow medical advice and recommendations for preventive care, vaccinations, and screenings based on your age and risk factors.</p>
                
                <p>For more health tips, visit the <a href="https://www.who.int/india" target="_blank">World Health Organisation's India website</a>.</p>
            </div>
        </div>
    </div>
</div>

    <?php require 'footer.php'; ?>

</body>
</html>