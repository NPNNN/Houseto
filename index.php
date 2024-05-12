<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Houseton</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@300..900&family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="css/common.css">
    <style>
       
      .availability-from{
        margin-top: -50px;
        z-index: 2;
        position: relative;
      }
     @media  screen and (max-width: 575px) {
      .availability-from{
        margin-top: 0px;
        padding: 25px 35px;
        
     }

    </style>
</head>
<body class="bg-light">
  
 <nav class="navbar navbar-expand-lg navbar-light bg-white px-lg-3 py-lg-2 shadow-sm sticky-top">
  <div class="container-fluid">
    <a class="navbar-brand me-5 fw-bold fs-3 h-font  text-custom" style="color: #F5385D;" href="index.php">Houseton</a>
    <button class="navbar-toggler  shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Rooms</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Facilities</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">Contact us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link me-2" href="#">About</a>
        </li>
      </ul>
      <div class="d-flex">
        
        <button type="button" class="btn  text-white shadow-none custom-bg  me-lg-3 me-2 " data-bs-toggle="modal" data-bs-target="#LoginModel">
         Login
       </button>
       <button type="button" class="btn  text-white shadow-none custom-bg" data-bs-toggle="modal" data-bs-target="#RegisterModel">
         Register
       </button>
      </div>
    </div>
  </div>
</nav>

<div class="modal fade" id="LoginModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <form >
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center" >
        <i class="bi bi-person-circle fs-3 me-2"></i>User Login
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       <div class="mb-3">
         <label  class="form-label">Email address</label>
         <input type="email" class="form-control shadow-none">
       </div>
       <div class="mb-4">
         <label  class="form-label">Password</label>
         <input type="password" class="form-control shadow-none">
       </div>
       <div class="d-flex align-items-center justify-content-between">
        <button type="submit" class="btn shadow-none custom-bg text-white">LOGIN</button>
        <a href="javascript: void(0) " class="text-secondary text-decoration-none">Forgot Password</a>
       </div>
      </div>
       
      </form>
    </div>
  </div>
</div>

<div class="modal fade" id="RegisterModel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <form >
      <div class="modal-header">
        <h5 class="modal-title d-flex align-items-center " >
        <i class="bi bi-person-lines-fill fs-3 me-2"></i>User Registeration
        </h5>
        <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <span class="badge rounded-pill bg-light text-dark mb-3 text-wrap lh-base">
      Note: Your information must match with your ID (Aadhar card,passport,driving license, etc.)
      that will be required during check-in
      </span>
       <div class="container-fluid">
        <div class="row">
         <div class="col-md-6 ps-0 mb-3">
              <label  class="form-label">Name</label>
              <input type="text" class="form-control shadow-none">
         </div>
         <div class="col-md-6 p-0 mb-3">
              <label  class="form-label">Email address</label>
              <input type="email" class="form-control shadow-none">
         </div>
         <div class="col-md-6 ps-0 mb-3">
              <label  class="form-label">Phone Number</label>
              <input type="number" class="form-control shadow-none">
         </div>
         <div class="col-md-6 p-0 mb-3">
              <label  class="form-label">Picture</label>
              <input type="file" class="form-control shadow-none">
         </div>
         <div class="col-md-12 p-0 mb-3">
              <label  class="form-label">Address</label>
              <textarea class="form-control shadow-none"  rows="1"></textarea>
         </div>
         <div class="col-md-6 ps-0 mb-3">
              <label  class="form-label">Pincode</label>
              <input type="number" class="form-control shadow-none">
         </div>
         <div class="col-md-6 p-0 mb-3">
              <label  class="form-label">Date of Birth</label>
              <input type="date" class="form-control shadow-none">
         </div>
         <div class="col-md-6 ps-0 mb-3">
              <label  class="form-label">Password</label>
              <input type="password" class="form-control shadow-none">
         </div>
         <div class="col-md-6 p-0">
              <label  class="form-label">Confirm Password</label>
              <input type="password" class="form-control shadow-none">
         </div>

        </div>
       </div>
        <div class="text-center my-1">
        <button type="submit" class="btn custom-bg shadow-none text-white">Register</button>
        </div>
       </div>
       </form>
    </div>
  </div>
</div>

<!--Carouser-->
<div class="container-fluid px-lg-4 mt-4">
  <!-- Swiper -->
  <div class="swiper swiper-container">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <img src="images/carousel/1.png" alt="" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/2.png" alt="" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/3.png" alt="" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/4.png" alt="" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/5.png" alt="" class="w-100 d-block">
      </div>
      <div class="swiper-slide">
        <img src="images/carousel/6.png" alt="" class="w-100 d-block">
      </div>
     
    </div>
 </div>

  <!-- Swiper JS -->
</div>

<!--Check Availiltily form -->
<div class="container availability-from">
   <div class="row">
     <div class="col-lg-12 bg-white shadow p-4 rounded">
      <h5 class="mb-4">Check Booking Availability</h5>
      <form action="">
          <div class="row align-items-end">
             <div class="col-lg-3 mb-3">
                <label  class="form-label" style="font-weight: 500;">Check-in</label>
                <input type="date" class="form-control shadow-none">
             </div>
             <div class="col-lg-3 mb-3">
                <label  class="form-label" style="font-weight: 500;">Check-out</label>
                <input type="date" class="form-control shadow-none">
             </div>
             <div class="col-lg-3 mb-3">
             <label  class="form-label" style="font-weight: 500;">Adult</label>
                  <select class="form-select shadow-none" >
                    
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
             </div>
             <div class="col-lg-2 mb-3">
             <label  class="form-label" style="font-weight: 500;">Children</label>
                  <select class="form-select shadow-none" >
                   
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                  </select>
             </div>
             <div class="col-lg-1 mb-lg-3 mt-2">
              <button tyep="submit" class="btn text-white shadow-none custom-bg">Submit</button>
             </div>
          </div>
      </form>
     </div>
   </div>
</div>

<!--Rooms Sections -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font " style="color: #F5385D;">OUR ROOMS</h2>
<div class="container">
  <div class="row">
     <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <img src="images/rooms/1.jpg" class="card-img-top" >
             <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4"> ₹200 per night</h6>
              <div class="features mb-4">
               <h6 class="mb-1">Features</h6>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   2 Rooms
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   1 Bedroom
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   1 Balcony
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   2 Sofa
                 </span>
              </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   Wifi
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   Television
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   AC
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   Heater
                 </span>
              </div>
            <div class="ratings mb-4">
                <h6>Ratings</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">More Details</a>
              </div>
           </div>
          </div>     
        </div>

        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <img src="images/rooms/1.jpg" class="card-img-top" >
             <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4"> ₹200 per night</h6>
              <div class="features mb-4">
               <h6 class="mb-1">Features</h6>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   2 Rooms
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   1 Bedroom
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   1 Balcony
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   2 Sofa
                 </span>
              </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   Wifi
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   Television
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   AC
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   Heater
                 </span>
              </div>
            <div class="ratings mb-4">
                <h6>Ratings</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">More Details</a>
              </div>
           </div>
          </div>     
        </div>

        <div class="col-lg-4 col-md-6 my-3">
          <div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
             <img src="images/rooms/1.jpg" class="card-img-top" >
             <div class="card-body">
              <h5>Simple Room Name</h5>
              <h6 class="mb-4"> ₹200 per night</h6>
              <div class="features mb-4">
               <h6 class="mb-1">Features</h6>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   2 Rooms
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   1 Bedroom
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   1 Balcony
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   2 Sofa
                 </span>
              </div>
            <div class="facilities mb-4">
              <h6 class="mb-1">Facilities</h6>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   Wifi
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   Television
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   AC
                 </span>
                 <span class="badge rounded-pill bg-light text-dark text-wrap">
                   Heater
                 </span>
              </div>
            <div class="ratings mb-4">
                <h6>Ratings</h6>
                <span class="badge rounded-pill bg-light">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                </span>
              </div>
            <div class="d-flex justify-content-evenly mb-2">
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">Book Now</a>
              <a href="#" class="btn btn-sm text-white custom-bg shadow-none">More Details</a>
              </div>
           </div>
          </div>     
        </div>

     <div class="col-lg-12 text-center mt-5">
        <a href="#"class="btn rounded-0  text-white custom-bg">More Rooms >>></a>
     </div>
  </div>
</div>

<!--Facilities sections -->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font " style="color: #F5385D;">OUR FACILITIES</h2>
<div class="container">
  <div class="row justify-content-evenly px-lg-0 px-md-0 px-5">
     <div class="col-lg-2 col-md-3 text-center bg-white rounded shadow py-4 my-3">
         <img src="images\features\wifi-1018-svgrepo-com.svg" width="80px">
         <h5 class="mt-3">Wifi</h5>
     </div>  
     <div class="col-lg-2 col-md-3 text-center bg-white rounded shadow py-4 my-3">
         <img src="images\features\wifi-1018-svgrepo-com.svg" width="80px">
         <h5 class="mt-3">Wifi</h5>
     </div> 
     <div class="col-lg-2 col-md-3 text-center bg-white rounded shadow py-4 my-3">
         <img src="images\features\wifi-1018-svgrepo-com.svg" width="80px">
         <h5 class="mt-3">Wifi</h5>
     </div> 
     <div class="col-lg-2 col-md-3 text-center bg-white rounded shadow py-4 my-3">
         <img src="images\features\wifi-1018-svgrepo-com.svg" width="80px">
         <h5 class="mt-3">Wifi</h5>
     </div> 
     <div class="col-lg-2 col-md-3 text-center bg-white rounded shadow py-4 my-3">
         <img src="images\features\wifi-1018-svgrepo-com.svg" width="80px">
         <h5 class="mt-3">Wifi</h5>
     </div> 
    <div class="col-lg-12 text-center mt-5">
    <a href="#"class="btn rounded-0  text-white custom-bg">More Facilities >>></a>
    </div>
  </div>
</div>

<!--Testimonial-->
<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font " style="color: #F5385D;">TESTIMONIALS</h2>
<div class="container mt-5">
<!-- Swiper -->
  <div class="swiper swiper-testimonial">
    <div class="swiper-wrapper mb-5">
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-content-center mb-3">
           <img src="images/features/star-svgrepo-com.svg" width="30px">
           <h6 class="mt-2 ms-2 ">Random User</h6>
        </div>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
          Illum eum totam nesciunt inventore doloribus. Nam deleniti 
          nostrum amet aperiam voluptas?
          </p>
          <div class="ratiing">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
          </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-content-center mb-3">
           <img src="images/features/star-svgrepo-com.svg" width="30px">
           <h6 class="mt-2 ms-2 ">Random User</h6>
        </div>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
          Illum eum totam nesciunt inventore doloribus. Nam deleniti 
          nostrum amet aperiam voluptas?
          </p>
          <div class="ratiing">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
          </div>
      </div>
      <div class="swiper-slide bg-white p-4">
        <div class="profile d-flex align-content-center mb-3">
           <img src="images/features/star-svgrepo-com.svg" width="30px">
           <h6 class="mt-2 ms-2 ">Random User</h6>
        </div>
         <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit.
          Illum eum totam nesciunt inventore doloribus. Nam deleniti 
          nostrum amet aperiam voluptas?
          </p>
          <div class="ratiing">
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
                  <i class="bi bi-star-fill text-warning"></i>
          </div>
      </div>
      
    </div>
    <div class="swiper-pagination"></div>
  </div>
</div>

<h2 class="mt-5 pt-4 mb-4 text-center fw-bold h-font " style="color: #F5385D;">CONTACT US</h2>
<div class="container">
  <div class="row">
     <div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
     <iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61049.66451393464!2d73.28439704976543!3d16.994016645178558!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bea0d1839a6bb7f%3A0x63ab969b79bf6561!2sRatnagiri%2C%20Maharashtra!5e0!3m2!1sen!2sin!4v1715453636295!5m2!1sen!2sin"  loading="lazy"></iframe>
     </div>
  <div class="col-lg-4 col-md-4">
    <div class="bg-white p-4 rounded mb-4">
     <h5>Call us</h5>
       <a href="tel: +919137364564" class="d-inline-block mb-2 text-decoration-none text-dark">
       <i class="bi bi-telephone-fill"></i>+919137364564
       </a>
     <br>
       <a href="tel: +919137364564" class="d-inline-block  text-decoration-none text-dark">
       <i class="bi bi-telephone-fill"></i>+919137364564
       </a>
   </div>
   <div class="bg-white p-4 rounded mb-4">
     <h5>Follow us</h5>
       <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-twitter me-1"></i>Twitter
          </span>
       </a>
     <br>
       <a href="#" class="d-inline-block mb-3">
          <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-instagram me-1"></i>Instagram
          </span>
       </a>
    <br>
       <a href="#" class="d-inline-block ">
          <span class="badge bg-light text-dark fs-6 p-2">
           <i class="bi bi-facebook me-1"></i>Facebook
          </span>
       </a>
   </div>
  </div>
 </div>
</div>

<!--Footer Sections -->
<div class="container-fluid bg-white mt-5">
 <div class="row">
   <div class="col-lg-4 p-4">
     <h3 h-font fw-bold fs-3 mb-2>Houseton</h3>
      <p>
      Lorem ipsum dolor sit amet consectetur adipisicing elit. 
      Nulla maiores quos inventore provident at eum est amet 
      Nulla maiores quos inventore provident at eum est amet 
      magni velit tempora!
      </p>
   </div>
   <div class="col-lg-4 p-4">
     <h5 class="mb-3">Links</h5>
     <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Home</a><br>
     <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Rooms</a><br>
     <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Facilities</a><br>
     <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">Contact us</a><br>
     <a href="#" class="d-inline-block mb-2 text-dark text-decoration-none">About</a>
   </div>
   <div class="col-lg-4 p-4">
    <h5 class="mb-3">Follow us</h5>
    <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
     <i class="bi bi-twitter me-1"></i>Twitter
    </a><br>
    <a href="#" class="d-inline-block text-dark text-decoration-none mb-2">
     <i class="bi bi-instagram me-1"></i>Instagram
    </a><br>
    <a href="#" class="d-inline-block text-dark text-decoration-none ">
     <i class="bi bi-facebook me-1"></i>Facebook
    </a>
   </div>
 </div>
</div>

<h6 class="text-center  p-3 m-0 text-white bg-dark" >Design and Developed by Shreyash Narendra & Vinayak</h6>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- Initialize Swiper -->
<script>
    var swiper = new Swiper(".swiper-container", {
      spaceBetween: 30,
      effect: "fade",
      loop:true,
      autoplay: {
        delay: 3500,
        disableOnInteraction:false,
      }
    });

  </script>
  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".swiper-testimonial", {
      effect: "coverflow",
      grabCursor: true,
      centeredSlides: true,
      slidesPerView: "auto",
      slidesPerView: "3",
      loop: "ture",
      coverflowEffect: {
        rotate: 50,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: false,
      },
      pagination: {
        el: ".swiper-pagination",
      },
      breakpoints: {
        320: {
          slidesPerView: 1,
        },
        640: {
          slidesPerView: 1,
        },
        768: {
          slidesPerView: 2,
        },
        1020: {
          slidesPerView: 3,
        },

      },
    });
  </script>
</body>
</html>