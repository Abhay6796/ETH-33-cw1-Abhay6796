<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>about</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php include 'components/user_header.php'; ?>

<!-- about section starts  -->

<section class="about">

   <div class="row">

      <div class="image">
         <img src="images/about-img.svg" alt="">
      </div>

      <div class="content">
         <h3>why choose us?</h3>
         <p>Discover the difference at Educa.. Our team of expert tutors is committed to delivering top-quality guidance in your chosen subject. Experience personalized learning like never before, with lessons tailored to match your unique learning style and pace. We're results-driven, invested in your success, and we celebrate your achievements as if they were our own.</p>
         <a href="courses.html" class="inline-btn">our courses</a>
      </div>

   </div>

   <div class="box-container">

      <div class="box">
         <i class="fas fa-graduation-cap"></i>
         <div>
            <h3>+1k</h3>
            <span>online courses</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-user-graduate"></i>
         <div>
            <h3>+25k</h3>
            <span>brilliants students</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-chalkboard-user"></i>
         <div>
            <h3>+5k</h3>
            <span>expert teachers</span>
         </div>
      </div>

      <div class="box">
         <i class="fas fa-briefcase"></i>
         <div>
            <h3>100%</h3>
            <span>job placement</span>
         </div>
      </div>

   </div>

</section>

<!-- about section ends -->

<!-- reviews section starts  -->

<section class="reviews">

   <h1 class="heading">student's reviews</h1>

   <div class="box-container">

      <div class="box">
         <p>"Educa has been a game-changer for me in math. Their expert tutors provided clear explanations that made challenging concepts feel manageable. The personalized learning approach helped me build a strong foundation. The interactive sessions and flexible scheduling made learning enjoyable and convenient. Thanks to Educa, I'm excelling in math like never before!"</p>
         <div class="user">
            <img src="images/pic-2.jpg" alt="">
            <div>
               <h3>Saraha Jones</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"I can't recommend Educa enough for science tutoring. Their results-driven approach pushed me to reach new heights in my studies. The interactive learning methods turned complex scientific theories into engaging lessons. The holistic growth mindset nurtured not only my subject knowledge but also critical thinking skills. Choosing Educa was a smart move!"</p>
         <div class="user">
            <img src="images/pic-3.jpg" alt="">
            <div>
               <h3>Manish Malakar</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"Educa truly made a difference in my language arts journey. Their personalized approach catered to my learning style, boosting my confidence in reading and writing. The comprehensive support extended beyond lessons, providing resources and guidance whenever needed. Thanks to Educa, I've developed a deeper appreciation for the power of words."</p>
         <div class="user">
            <img src="images/pic-4.jpg" alt="">
            <div>
               <h3>Narayan Magar</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"Educa revolutionized my coding experience. Their comprehensive support went beyond the lessons, providing resources that helped me grasp even the toughest concepts. The holistic growth approach pushed me to explore coding in-depth. The expert tutors simplified complex topics, making them understandable. Thanks to Educa, coding has become my forte."</p>
         <div class="user">
            <img src="images/pic-5.jpg" alt="">
            <div>
               <h3>Roman Rana</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"Educa turned my test anxiety into confidence. Their effective strategies and expert guidance transformed my test scores. The one-on-one attention and proven success stories gave me the assurance I needed. The free consultation sealed the deal, making me realize I was making the right choice. Thanks to Educa, I conquered my exams!"</p>
         <div class="user">
            <img src="images/pic-6.jpg" alt="">
            <div>
               <h3>Roshan Dongol</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

      <div class="box">
         <p>"Learning music with Educa was an incredible journey. Their interactive methods blended theory and practice seamlessly, making lessons engaging and fun. The expert tutors not only improved my technical skills but also ignited a true passion for music. The flexibility in scheduling made balancing lessons with school easy. Educa is the way to go for music enthusiasts!"</p>
         <div class="user">
            <img src="images/pic-7.jpg" alt="">
            <div>
               <h3>Aryaman Rajbhandari</h3>
               <div class="stars">
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star"></i>
                  <i class="fas fa-star-half-alt"></i>
               </div>
            </div>
         </div>
      </div>

   </div>

</section>

<!-- reviews section ends -->










<?php include 'components/footer.php'; ?>

<!-- custom js file link  -->
<script src="js/script.js"></script>
   
</body>
</html>