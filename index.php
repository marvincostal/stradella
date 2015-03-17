<?php include "header.php";?>

  <div id="carousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carousel" data-slide-to="0" class="active"></li>
      <li data-target="#carousel" data-slide-to="1"></li>
      <li data-target="#carousel" data-slide-to="2"></li>
    </ol>

    <div class="carousel-inner" role="listbox">
      <div class="item active">
        <img src="../img/slide1.png" alt="Slide 1">
        <div class="carousel-caption">
          <div class="carousel-title  "><img src="img/slide-header.png" alt=""></div>
          <div class="carousel-subtitle"><img src="../img/slide-logo.png" alt=""></div>
        </div>
      </div>
      <div class="item">
        <img src="../img/slide2.png" alt="Slide 1">
        <div class="carousel-caption">
          <div class="carousel-title"><img src="img/slide-header.png" alt=""></div>
          <div class="carousel-subtitle"><img src="../img/slide-logo.png" alt=""></div>
        </div>
      </div>
      <div class="item">
        <img src="../img/slide1.png" alt="Slide 1">
        <div class="carousel-caption">
          <div class="carousel-title  "><img src="img/slide-header.png" alt=""></div>
          <div class="carousel-subtitle"><img src="../img/slide-logo.png" alt=""></div>
        </div>
      </div>
    </div>

    <div class="booking-container">
      <div class="container-lg">
          <form action="">

            <div class="booking-form-field input-group date">
              <input id="booking-arrival" type="text" class="form-control" placeholder="Arrival"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>

            <div class="booking-form-field input-group date">
              <input id="booking-departure" type="text" class="form-control" placeholder="Departure"><span class="input-group-addon"><i class="glyphicon glyphicon-calendar"></i></span>
            </div>

            <div class="booking-form-field booking-form-field-select">
              <select name="" class="form-control">
                <option value="placeholder">Adults</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>

            <div class="booking-form-field booking-form-field-select">
              <select name="" class="form-control">
                <option value="placeholder">Children</option>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
              </select>
            </div>
            <button type="submit" class="btn btn-booking-form">Check Availabilty</button>
        </form>
      </div><!--/.contain-lg -->
    </div><!--/.booking-container -->
  </div><!--/#carousel -->

    <div class="content-section container-fluid">
      <div class="row">
        
        <div class="content col-md-4">
          <div class="content-heading">
            <h4 class="heading">Featured Package</h4>
          </div>
          <div class="content-img">
            <img src="img/content1.png" clas="img-responsive" alt="Content 3">
          </div>
          <div class="content-column">
            <p class="column-heading">Features Package Offer</p>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-content" href="#" role="button">View details</a></p>
          </div>
        </div><!--/.content-->

        <div class="content col-md-4">
          <div class="content-heading">
            <h4 class="heading">Experience Stradella Hotel</h4>
          </div>
          <div class="content-img">
            <img src="img/content2.png" clas="img-responsive" alt="Content 3">
          </div>
          <div class="content-column">
            <p class="column-heading">Experience Stradella Hotel</p>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-content" href="#" role="button">View details</a></p>
          </div>
        </div><!--/.content-->

        <div class="content col-md-4">
          <div class="content-heading">
            <h4 class="heading">Special Offers</h4>
          </div>
          <div class="content-img">
            <img src="img/content3.png" clas="img-responsive" alt="Content 3">
          </div>
          <div class="content-column">
            <p class="column-heading">Special Offers</p>
            <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
            <p><a class="btn btn-content" href="#" role="button">View details</a></p>
          </div>
        </div><!--/.content-->
      </div><!-- /.row -->
    </div><!-- /.content-section -->

      <div class="pre-footer container">
          <img src="img/pre-footer-logo.png" alt="">
          <div class="pre-footer-content">
            <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
          </div>
      </div>

<?php include "footer.php"; ?>
