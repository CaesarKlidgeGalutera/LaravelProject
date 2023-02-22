<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'home')</title>
    {{---CSS---}}
    <link rel="stylesheet" href="{{asset('css/design.css')}}">
</head>
<body>
    @section('navbar')
      <nav class="navBar">
        <div class="navImg">
          <img src="#" alt="#">
        </div>
        <div class="navList">
          <ul>
            <li class=""><a class="navList--item__current"href="/">Home</a></li>
            <li ><a class="navList--item" href="/academics">Academics</a></li>
            <li ><a class="navList--item last" href="/about">About Us</a> </li>
            <li class="">|</li>
            <li ><a class="button button--register" href="/register">Register</a></li>
            <li><a  class="button button--login" href="/login">Login</a></li>
          </ul>
        </div>
      </nav>
      @section('content')
      </div>
      <div class="heroSection">
        <div class="herSection--right">
          <div class="heroSection--content">
            <p class="heroSection--content__opening">100% Trusted School in the North</p> 
            <h1>
              EMPOWERS STUDENT TO THE GLOBAL INDUSTRY
            </h1>
            <p class="heroSection--content__desc">This University is home of top-notchers student that excels in the industry that they've chosen. "" University is also at the Top 10 University in the country</p>
            <div class="heroSection--button">
              <button class="Sectbutton heroSection--button__white "name="Enroll">Enroll Now
              <button class="Sectbutton heroSection--button__gray "name="Enroll">Programs Offered
            </div>
          </div>
        </div>

        <div class="heroSection--img">
          <img class="heroImg"src="img/univ.jpg" alt="univ_Pic">
        </div>
      </div>

      <div class="whyInfo">
        <div class="whyInfo--title">
          <p class="whyInfo--desc__title">Why choose us</p>
          <p class="whyInfo--desc__p">A highly performing university of the north</p>
        </div>
        <div class="ImgDesc">
          <div class="ImgDesc--img">
            <img class="img-students"src="img/students.jpeg" alt="students">
          </div>
          <div class="ImgDesc--infor">
            <div class="ImgDesc--infor__block">
              <div class="contacts contacts--customer">
                <div class="contacts--customer__block">
                  <div class="contacts--customer__icon"><i class="fa-solid fa-phone fa-xl"></i></div>
                  <div class="contacts--customer__title"><h3>Customer Support<h3></div>
                </div>
                <div class="contacts--customer__desc"><p>For queries please contact: 074-553-012</p></div>
              </div>

              <div class="contacts contacts--quality">
                <div class="contacts--customer__block">
                  <div class="contacts--customer__icon"><i class="fa-solid fa-thumbs-up fa-xl"></i></div>
                  <div class="contacts--customer__title"><h3>Guarantted Quality Education<h3></div>
                </div>
                <div class="contacts--customer__desc"><p>The university is equipped with new equipments and facilities</p></div>
              </div>
              <div class="contacts contacts--customer">
                <div class="contacts--customer__block">
                  <div class="contacts--customer__icon"><i class="fa-sharp fa-solid fa-location-dot fa-xl"></i></div>
                  <div class="contacts--customer__title"><h3>Location<h3></div>  
                </div>
                <div class="contacts--customer__desc"><p>The University is Located at New Clark City that the students will enjoy and experience the city living </p></div>
                  </div>
                </div>
            </div>
        </div>
      </div>
      @endsection

      @yield('content')

      <footer>
        <div class="UpperFooter">
          <div class="logoSection">
            <img src="#" alt="logo">
            <p>Our vision is to provide quality education and help students gain qualities they needed in their chosen industry</p>
            <div class="contentsLogo">
              <div class="footer-icon"><a class="facebook"href="#"><i class="fa-brands fa-facebook-f fa-lg"></i></a></div>
              <div class="footer-icon"><a class="twitter" href="#"><i class="fa-brands fa-twitter fa-lg"></i></a></div>
              <div class="footer-icon"><a class="instagram" href="#"><i class="fa-brands fa-instagram fa-xl"></i></a></div>
            </div>
          </div>
          <div class="aboutSection">
            <h3>About</h3>
            <a href="#">About us</a>
            <a href="#">Academics</a>
            <a href="#">Contacts</a>
          </div>
          <div class="socialsSection">
            <h3>Socials</h3>
            <a href="#">Facebook</a>
            <a href="#">Twitter</a>
            <a href="#">Instagram</a>
          </div>
        </div>
        <hr>

        <div class="lowerFooter">
          <div class="copyright">
            <p>&#169;2023Galutera. All rights reserved</p>
          </div>
          <div class="terms">
            <p>Privacy &#38; Policy</p>
            <p>Terms &#38; Condition</p>
          </div>
        </div>
      </footer>
</body>

{{--Script--}}
<script src="https://kit.fontawesome.com/cd398faff6.js" crossorigin="anonymous"></script>
</html>