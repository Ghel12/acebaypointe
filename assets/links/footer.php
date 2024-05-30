<!-- ======= Footer ======= -->
<footer id="footer">
  <div class="footer-top">
    <div class="container" style="font-family: poppins;">
      <div class="row">
        <div class="col-lg-2 col-md-6">
          <div class="footer-info">
            <!-- First column content -->
            <a href="index.php" class="logo me-auto"><img src="assets/img/logos/logo-l.png" alt="Small Logo"
                class="img-fluid small-logo"></a>
          </div>
        </div>
        <div class="col-lg-2 col-md-6 footer-links"> <!--USEFUL LINKS-->
          <h4>Useful Links</h4>
          <ul>
            <!-- Second column content -->
            <li><a href="index.php">Home</a></li>
            <li><a href="about_us.php">About us</a></li>
            <li><a href="">News & Events</a></li>
            <li><a href="doctors.php">Doctors</a></li>
            <li><a href="#">Department & Services</a></li>
            <li><a href="careers.php">Careers</a></li>
            <li><a href="#">Patient Guide & Features</a></li>
            <li><a href="contact_us.php">Contact Us</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 footer-links"> <!--OUR SERVICES-->
          <h4>Service Offerings</h4>
          <ul>
            <!-- Third column content -->
            <li><a href="pricelist.php">Price List</a></li>
            <li><i class="bx bx-chevron-right"></i><a href="pricelist.php #room_rates">Room Rates</a></li>
            <li><i class="bx bx-chevron-right"></i><a href="http://localhost/acebaypointeFinal/pricelist.php">Philhealth
                Case Rate Packages<span class="align-text-bottom"></span></a></li>
            <li><i class="bx bx-chevron-right"></i><a href="pricelist.php/#departmental_item">Department Item</a></li>
            <li><a href="packages_for_you.php">Packages For You</a></li>
          </ul>
        </div>
        <div class="col-lg-2 col-md-6 footer-links"> <!--OTHER LINKS-->
          <h4>Other Links</h4>
          <ul>
            <!-- Fourth column content -->
            <li><a href="admission_guide.php">Admission Guide</a></li>
            <li><a href="investment.php">Investments</a></li>
            <li><a href="job_announcement.php">Job Announcements</a></li>
            <li><a href="equipment_acquisition.php">Equipment Acquisition</a></li>
            <li><a href="hmos.php">Accredited HMOS</a></li>
          </ul>
        </div>
        <?php
        include ("config/db_con.php"); // Connection to database
        
        $medical = mysqli_query($conn, "SELECT * FROM Contact_Information WHERE Active = 1");
        $row = mysqli_fetch_assoc($medical)
          ?>
        <div class="col-lg-4 radiantthemes-contact-box rt412613828 element-one" style="font-family: poppins;">
          <h3 style="font-size: 18px;color: #000000;line-height: 24px;text-align: left"
            class="vc_custom_heading font-weight-bold vc_custom_1546582444223">Quick Contact</h3>
          <ul>
            <li class="address no-bullet"><i class="fa fa-map-marker"></i><strong>Address</strong>
              <?php echo $row['Address']; ?></li>
            <li class="email"><i class="fa fa-envelope"></i><strong>Email</strong> <?php echo $row['Email']; ?>
            </li>
            <li class="phone"><i class="fa fa-phone"></i><strong>Phone</strong> <?php echo $row['Phone']; ?></li>
            <li class="mobile" style="list-style-type: none; margin:0;"><i
                class="fa fa-mobile"></i><strong>Mobile</strong>
              <?php
              $patientItems = explode("\n", $row['Mobile']);
              foreach ($patientItems as $item) {
                echo htmlspecialchars(trim($item)) . "<br>";
              }
              ?>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <div class="container d-md-flex py-4">
    <div class="me-md-auto text-center text-md-start">
      <div class="copyright"> &copy; Copyright <strong><span> &#169;</span> 2024</strong>. All Rights Reserved</div>
      <div class="credits">
        <!-- All the links in the footer should remain intact. -->
        <!-- You can delete the links only if you purchased the pro version. -->
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/onepage-multipurpose-bootstrap-template/ -->
        Design and Developed by <a href="#">MIS Department</a>
      </div>
    </div>
    <div class="footer-info">
      <div class="social-links mt-3 d-flex align-items-center justify-content-center">
        <a href="https://www.facebook.com/people/Allied-Care-Experts-Medical-Center-Baypointe/100064028532593/"
          class="facebook me-2"><i class="bx bxl-facebook"></i></a>
        <a href="#" class="instagram me-2"><i class="bx bxl-instagram"></i></a>
      </div>
    </div>
  </div>
</footer><!-- End Footer -->