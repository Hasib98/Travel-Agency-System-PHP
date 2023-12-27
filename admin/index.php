<?php 
      require_once('header.php');
        include('db.php');

        $hotel_booking = $mysqli->query("SELECT COUNT(*) FROM hotel_bookings");
        $package_booking = $mysqli->query("SELECT COUNT(*) FROM bookings");

        // $hotel_booking_count = $hotel_booking->count();
        // $package_booking_count = $package_booking->count();


      ?> 
        <div class="content-wrapper">
          <div class="content">						 
            <!-- Top Statistics -->
            <div class="row">
              <div class="col-xl-4 col-sm-6">
                <div class="card card-mini mb-4">
                  <div class="card-body">
                    <h2 class="mb-1"><?php echo $hotel_booking->num_rows + $package_booking->num_rows ?></h2>
                    <p>Total Bookings</p>
                    <div class="chartjs-wrapper">
                      <canvas id="barChart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6">
                <div class="card card-mini  mb-4">
                  <div class="card-body">
                    <h2 class="mb-1"><?php echo $hotel_booking->num_rows ?></h2>
                    <p>Hotel Booking</p>
                    <div class="chartjs-wrapper">
                      <canvas id="dual-line"></canvas>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-4 col-sm-6">
                <div class="card card-mini mb-4">
                  <div class="card-body">
                    <h2 class="mb-1"><?php echo $package_booking->num_rows ?></h2>
                    <p>Package Booking</p>
                    <div class="chartjs-wrapper">
                      <canvas id="area-chart"></canvas>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      <?php include('footer.php') ?>         