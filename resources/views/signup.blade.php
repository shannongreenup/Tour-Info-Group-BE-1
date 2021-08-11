<!DOCTYPE html>
<html lang="en">
  <head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous"referrerpolicy="no-referrer" />
    <title>Create Account</title>
    <link rel="shortcut icon" type="image/jpg" href="" />
    <link rel="stylesheet" href="{{asset('css/createaccount.css')}}">
    <!-- <link rel="stylesheet" href="/headerfooter.css"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  </head>
<body>
  <header class="header">
    <div class="menu">
      <a href="#"><img src="{{asset('img/Group 186.png')}}" alt="Touryst Logo"></a>
      <ul class="right">
        <li><a href="#">Home</a></li>
        <li><a href="#">About Us</a></li>
        <li><a href="#">Contact</a></li>
        <li class="signin"><a href="#"><i class="far fa-user-circle"></i>Sign In</a></li>
        <li><a href="#" class="purpbg">Join Now</a></li>
      </ul>
    </div>
  </header>

  <hr>

  <div class="account">
    <h2>Create Your Account</h2>
  </div>
  
  <section class="middle-section">
    <div class="form-container">
      <form action="">
        
        <div class="name">
            <div class="form-group">
                <label for="fname">First Name</label>
                <input type="text" id="fname" name="firstname">
              </div>  
              <div class="form-group">
                <label for="lname">Last Name</label>
                <input type="text" id="lname" name="lastname">
              </div>                     
        </div>        
  
        <div class="form-group">
          <label for="address">Address</label>
          <input type="text" id="address" name="address">
        </div>

        <div class="location">
          <div class="form-group">
              <label for="city">City</label>
              <input type="text" id="city" name="city">
            </div>
            <div class="form-group">
              <label for="state">State</label>
              <input type="text" id="state" name="state">
            </div>  
            <div class="form-group">
              <label for="zipcode">Zip Code</label>
              <input type="text" id="zipcode" name="zipcode">
          </div>
        </div>

        <div class="num-bday-byear">
          <div class="form-group">
            <label for="phone">Phone</label>
            <input type="tel" id="phone" name="phone">
          </div>  
          <div class="form-group bdaymonth">
            <label for="bdaymonth">Birthday Month</label>
            <input type="text" id="bdaymonth" name="bdaymonth">
          </div>  
          <div class="form-group">
            <label for="bdayyear">Birthday Year</label>
            <input type="text" id="bdayyear" name="bdayyear">
          </div>
        </div>        
  
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email">
        </div>
  
        <div class="form-group">
          <label for="username">Username</label>
          <input type="text" id="username" name="username">
        </div>
  
        <div class="form-group">
          <label for="pssword">Password</label>
          <input type="password" id="pssword" name="password" required>
        </div>
  
      </form>

      </div>

  </section>
  






  <!-- <section class="middlesection">   
    <div class="input-field">
      <label for="fname">First Name</label>
      <input type="text" id="fname" name="firstname" required>
  
      <label for="lname">Last Name</label>
      <input type="text" id="lname" name="lastname">

      <label for="address">Address</label>
      <input type="text" id="address" name="address">

      <label for="city">City</label>
      <input type="text" id="city" name="city">

      <label for="zipcode">Zip Code</label>
      <input type="text" id="zipcode" name="zipcode">

      <label for="phone">Phone</label>
      <input type="tel" id="phone" name="phone">

      <label for="bdaymonth">Birthday Month</label>
      <input type="text" id="bdaymonth" name="bdaymonth">

      <label for="bdayyear">Birthday Year</label>
      <input type="text" id="bdayyear" name="bdayyear">

      <label for="email">Email</label>
      <input type="email" id="email" name="email" required>

      <label for="username">Username</label>
      <input type="text" id="username" name="username">

      <label for="pssword">Password</label>
      <input type="password" id="pssword" name="password" required>
    </div> 

  </section> -->



  <div class="signup">
    <button>Sign up</button>
  </div>





  <section class="prefooter">
      <div class="footerleft">
          <ul class="footerlinks">
              <li><a href="#">Home</a></li>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Contact Us</a></li>
          </ul>

          <ul class="socialmediaicons">
              <li><i class="fab fa-twitter fa-2x"></i></li>
              <li><i class="fab fa-facebook-f fa-2x"></i></li>
              <li><i class="fab fa-instagram fa-2x"></i></li>
          </ul>
      </div>

      <div class="newsletter">
          <h1>Be in the know on all travel deals and news</h1>
      <div class="newslettercontainer">
          <input type="email" placeholder="Email Address: "><button type="submit">Sign Up</button>
      </div>
      </div>
      
</section>



  <footer>
      <div class="footertxtcontainer">
          <div class="footertxt">
              <h2>Experience the Adventure that Awaits you!</h2></br>
              <p> &#169; 2021 Toursyt | All Rights Reserved </br>
              Privacy Policy | Terms & Conditions</p>
          </div>
      </div>
  </footer> 
  








  
</body>
</html>
