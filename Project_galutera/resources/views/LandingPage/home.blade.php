<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'home')</title>
</head>
<body>
    @section('navbar')
      <nav>
        <img src="#" alt="#">
        <ul>
          <li><a href="/home">Home</a></li>
          <li><a href="/academics">Academics</a></li>
          <li><a href="/about">About Us</a> </li>
          <li>|</li>
          <li><a href="/register">Register</a></li>
          <li><a href="/login">Login</a></li>
        </ul>
      </nav>

      @section('content')
      <div class="heroSection">
        <div class="heroSection--content">
          <p>100% Trusted School in the North</p>
          <h1>Provides Quality Education And Empowers Student To the Global Industry</h1>
          <p>This University is home of top-notchers student that excels in the industry that they've chosen. "" University is also at the Top 10 University in the country</p>
          <div class="heroSection--button">
            <button class="heroSection--button__white "name="Enroll">Enroll Now
              <button class="heroSection--button__gray "name="Enroll">Programs Offered
          </div>
          
        </div>
        <div class="heroSection--img">
          <img src="#" alt="#">
        </div>
      </div>
      @endsection

      @yield('content')

      <footer>
        copyright
      </footer>
</body>
</html>