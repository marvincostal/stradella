<?php include "header.php"; ?>

  <div class="content-page content-contact padding-md">
    <section class="section-map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3860.8634643193245!2d121.1046899!3d14.6068527!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397b8718c8a9dbb%3A0x39cea9184502abf!2sFelix+Ave%2C+Cainta%2C+Rizal!5e0!3m2!1sen!2sph!4v1425971593680" width="100%" height="544" frameborder="0" style="border:0"></iframe>
    </section>

    <div class="container">
      <h1 class="page-title text-center"><span>C</span>ontact Us</h1>
      <div class="row">
        <div class="col-md-6">
          <form class="form-contact">
            <div class="form-group">
              <label for="firstname">First Name</label>
              <input type="text" class="form-control" id="firstname">
            </div>
            <div class="form-group">
              <label for="lastname">Last Name</label>
              <input type="text" class="form-control" id="lastname">
            </div>
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <label for="contact">Contact Number</label>
                  <input type="text" class="form-control" id="contact">
                </div>
              </div>
              <div class="col-md-6">
                <label for="country">Country</label>
                <select id="country" class="form-control">
                  <option>Australia</option>
                  <option>America</option>
                  <option>Canada</option>
                  <option>Japan</option>
                  <option>Philippines</option>
                </select>
              </div>
            </div>
            <div class="form-group">
              <label for="message">Message</label>
              <textarea id="message" class="form-control" rows="3"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
          </form>
        </div>
        <div class="col-md-6">
          <ul class="contact-details">
            <li>
              Stradella Hotel
              <span>Felix Avenue, Cainta, Rizal, Philippines</span>
            </li>
            <li>
              Reservations
              <span>+63 32.238.6592</span>
            </li>
            <li>
              Reception
              <span>+63 32.238.6590 | +63 32.238.6591</span>
            </li>
            <li>
              Bannquet Sales
              <span>+63 32.266.4589</span>
            </li>
            <li>
              Email Add
              <span>info@stradellaehotel.com</span>
              <span>reservations@sstradellahotel.com</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div><!-- /.content-page -->

<?php include "footer.php"; ?>
