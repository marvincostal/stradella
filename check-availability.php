<?php include 'header.php'; ?>

    <section class="banner">
      <div class="container">
        <div class="banner-content">
          <h1 class="banner-title"><span>C</span>heck <span>A</span>vailability</h1>
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
          <div class="row availability-container">
            <div class="col-xs-6 col-sm-4 col-md-4">
              <div class="room-item">
                <div class="img-holder">
                  <img class="img-responsive" src="img/rooms/a.jpg" alt="image">
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-8 col-md-8">
              <div class="availability-details-container">
                <h3 class="availability-title">Resort 2 queen beds</h3>
                <p class="availability-desc">
                  This medium-sized guestroom is located in the Victorian building, Ocean Towers or California Cabanas (building assigned at check-in). It has two queen beds and various views of the resort grounds.
                </p>
                <p class="availability-desc availabilty-policy">Policy</p>
                <h3 class="availability-desc rate-title">PHP 4,500 / Night</h3>
                <p class="availability-desc rate-desc">Rate No Breakfast (3 Pax)</p>
                <button class="btn btn-book"><a href="/">Book Now</a></button>
              </div>  
            </div>
          </div>

          <div class="row availability-container">
            <div class="col-xs-6 col-sm-4 col-md-4">
              <div class="room-item">
                <div class="img-holder">
                  <img class="img-responsive" src="img/rooms/b.jpg" alt="image">
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-8 col-md-8">
              <div class="availability-details-container">
                <h3 class="availability-title">Resort queen beds</h3>
                <p class="availability-desc">
                  This medium-sized guestroom is located in the Victorian building, Ocean Towers or California Cabanas (building assigned at check-in). It has two queen beds and various views of the resort grounds.
                </p>
                <p class="availability-desc availabilty-policy">Policy</p>
                <h3 class="availability-desc rate-title">PHP 3,5oo / Night</h3>
                <p class="availability-desc rate-desc">Rate No Breakfast (3 Pax)</p>
                <button class="btn btn-book"><a href="/">Book Now</a></button>
              </div>  
            </div>
          </div>

          <div class="row availability-container">
            <div class="col-xs-6 col-sm-4 col-md-4">
              <div class="room-item">
                <div class="img-holder">
                  <img class="img-responsive" src="img/rooms/c.jpg" alt="image">
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-8 col-md-8">
              <div class="availability-details-container">
                <h3 class="availability-title">junior suite queen beds</h3>
                <p class="availability-desc">
                  This medium-sized guestroom is located in the Victorian building, Ocean Towers or California Cabanas (building assigned at check-in). It has two queen beds and various views of the resort grounds.
                </p>
                <p class="availability-desc availabilty-policy">Policy</p>
                <h3 class="availability-desc rate-title">PHP 2,5oo / Night</h3>
                <p class="availability-desc rate-desc">Rate No Breakfast (3 Pax)</p>
                <button class="btn btn-book"><a href="/">Book Now</a></button>
              </div>  
            </div>
          </div>

          <div class="row availability-container">
            <div class="col-xs-6 col-sm-4 col-md-4">
              <div class="room-item">
                <div class="img-holder">
                  <img class="img-responsive" src="img/rooms/d.jpg" alt="image">
                </div>
              </div>
            </div>
            <div class="col-xs-6 col-sm-8 col-md-8">
              <div class="availability-details-container">
                <h3 class="availability-title">2 junior suite queen beds</h3>
                <p class="availability-desc">
                  This medium-sized guestroom is located in the Victorian building, Ocean Towers or California Cabanas (building assigned at check-in). It has two queen beds and various views of the resort grounds.
                </p>
                <p class="availability-desc availabilty-policy">Policy</p>
                <h3 class="availability-desc rate-title">PHP 2,5oo / Night</h3>
                <p class="availability-desc rate-desc">Rate No Breakfast (3 Pax)</p>
                <button class="btn btn-book"><a href="/">Book Now</a></button>
              </div>  
            </div>
          </div>

            
        </div>
      </div>


<?php include 'footer.php'; ?>
