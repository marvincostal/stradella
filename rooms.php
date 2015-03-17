<?php  include "header.php";?>

  <section class="banner">
    <div class="container">
      <div class="banner-content">
        <h1 class="banner-title"><span>O</span>ur <span>R</span>ooms</h1>
        <p>“Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.”</p>
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
  </section>

  <div class="container">
    <div class="content-page content-photos padding-sm text-center">
      <div class="row rooms">
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="room-item">
            <div class="img-holder">
              <img class="img-responsive" src="img/rooms/a.jpg" alt="image">
              <div class="details">
                <img src="img/footer-logo.png" alt="image">
                <p>Click To View</p>
              </div>
            </div>
            <div class="caption">
              <h3><span>A</span>Rooms</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="room-item">
            <div class="img-holder">
              <img class="img-responsive" src="img/rooms/b.jpg" alt="image">
              <div class="details">
                <img src="img/footer-logo.png" alt="image">
                <a href="rooms-single.php"><p>Click To View</p></a>
              </div>
            </div>
            <div class="caption">
              <h3><span>B</span>Deluxe Room</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="room-item">
            <div class="img-holder">
              <img class="img-responsive" src="img/rooms/c.jpg" alt="image">
              <div class="details">
                <img src="img/footer-logo.png" alt="image">
                <p>Click To View</p>
              </div>
            </div>
            <div class="caption">
              <h3><span>C</span>Room</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="room-item">
            <div class="img-holder">
              <img class="img-responsive" src="img/rooms/d.jpg" alt="image">
              <div class="details">
                <img src="img/footer-logo.png" alt="image">
                <p>Click To View</p>
              </div>
            </div>
            <div class="caption">
              <h3><span>D</span>Deluxe Room</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="room-item">
            <div class="img-holder">
              <img class="img-responsive" src="img/rooms/e.jpg" alt="image">
              <div class="details">
                <img src="img/footer-logo.png" alt="image">
                <p>Click To View</p>
              </div>
            </div>
            <div class="caption">
              <h3><span>E</span>Deluxe Room</h3>
            </div>
          </div>
        </div>
        <div class="col-xs-6 col-sm-4 col-md-4">
          <div class="room-item">
            <div class="img-holder">
              <img class="img-responsive" src="img/rooms/f.jpg" alt="image">
              <div class="details">
                <img src="img/footer-logo.png" alt="image">
                <p>Click To View</p>
              </div>
            </div>
            <div class="caption">
              <h3><span>F</span>Suite</h3>
            </div>
          </div>
        </div>
      </div><!-- /.gallery -->
      <a class="btn btn-white" href="#">Load More</a>
    </div><!-- /.content-page -->
  </div>

<?php  include "footer.php";?>
