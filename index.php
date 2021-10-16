<?php 
  require 'includes/db_config.php';
  session_start();
?>

<?php include 'includes/header.php'; ?>

  <title>GammaFlight &dash; Airline Reservation System</title>
</head>
<body>
  <!--Navigation bar-->
  <div class="navbar__wrapper">
      <div class="navbar">
        <!--Brand Logo-->
        <div class="brand">
          <img src="assets/img/favicon.png" class="brand__img" alt="brand_logo">
          <div class="brand__heading">
            <h1><span>GAMMA</span>FLIGHT</h1>
          </div>          
        </div>
        <!--navigation links-->
        <?php if(isset($_SESSION['email'])) { ?>
        <div class="nav__links">
          
          <div class="nav__item">
            <a href="check_status.php">Check status</a>
          </div>
          <p class="divider">|</p>
          <div class="nav__item">
            <a href="user_profile.php">Profile</a>
          </div>
          <div class="nav__item">
            <a href="validations/logout_script.php">
              <button class="btn btn-primary">Logout</button>
            </a>
          </div>

        </div>
        <?php }  else { ?>
          <div class="nav__links">
            <div class="nav__item">
               <a href="#">Check status</a>
            </div>
          <p class="divider">|</p>
          <div class="nav__item">
            <a href="register.php">Register</a>
          </div>
          <div class="nav__item">
            <a href="login.php">
              <button class="btn btn-primary">Login</button>
            </a>
          </div>
        <?php } ?>
        </div>
      </div>
    </div>
  <!--main container-->
  <div class="home__container">   
    <div class="home__heading">
      <h1>Discover great Flight deals<span class="dot">.</span></h1>
      <img src="assets/img/airplane.png" alt="path_airplane">
    </div> 
    <!--Search Box-->
    <div class="search__wrapper">
      <div class="search__box">
        <!--Search Form-->
          <form action="search.php" method="GET">
            <div class="radio__buttons">
              <div class="radio_option">
                <input type="radio" name="trip_choice" id="trip_choice1" value="oneway" checked>
                <label for="trip_choice1">One Way</label>
              </div>
              <div class="radio_option">
                <input type="radio" name="trip_choice" id="trip_choice2" value="trip">
                <label for="trip_choice2">Round Trip</label>
              </div>
            </div>
            <!--Input Fields-->
            <div class="input__fields">
              <div class="location__inputs">
                <div class="departure">
                  <i class="icon">
                    <img src="assets/img/takeoff.png" alt="takeoff">
                  </i>
                  <input type="text" id="departure_location" placeholder="Departure (type city or airport)">
                  <div id="statelist"></div>
                </div>
                <div class="switch">
                  <i class="icon-switch" id="btn-switch">
                    <img src="assets/img/switch.png" alt="">
                  </i>
                </div>
                <div class="arrival">
                  <i class="icon">
                    <img src="assets/img/landing.png" alt="takeoff">
                  </i>
                  <input type="text" id="arrival_location" placeholder="Arrival (type city or airport)">
                </div>                
              </div>
            </div>

            <div class="input__field">
              <div class="date__inputs">
                <div class="departure_date">
                  <i class="icon">
                    <img src="assets/img/calendar.png" alt="takeoff">
                  </i>
                  <input type="text" id="departure_date" placeholder="Departure Date" onfocus="(this.type='date')" onblur="(this.type='text')"">
                </div>
                <div class="arrival_date">
                  <i class="icon">
                    <img src="assets/img/calendar.png" alt="takeoff">
                  </i>
                  <input type="text" id="arrival_date" placeholder="Return Date" onfocus="(this.type='date')" onblur="(this.type='text')" disabled="disabled">
                </div>
                <div class="total_passenger">
                  <i class="icon">
                    <img src="assets/img/user.png" alt="takeoff">
                  </i>
                  <select name="passenger" id="passenger">
                    <option hidden class="option_txt">Travellers</option>
                    <option value="1">1 Adult</option>
                    <option value="2">2 Adults</option>
                    <option value="3">3 Adults</option>
                    <option value="4">4 Adults</option>
                    <option value="5">5 Adults</option>
                  </select>
                </div>
                <div class="flight__class">
                  <i class="icon">
                    <img src="assets/img/seat.png" alt="takeoff">
                  </i>
                  <select name="f_class" id="f_class">
                  <option hidden class="option_txt">Cabin Class</option>
                    <option value="economy">Economy</option>
                    <option value="business">Business</option>
                    <option value="first_class">First Class</option>
                  </select>
                </div>
              </div>              
            </div>
            <div class="submit__form">
                  <button class="btn btn-submit">Search Flights</button>
                </div>
          </form>
          <!--Search Form Ends-->
      </div>
    </div>
  </div>  
<?php include 'includes/footer.php'; ?>
