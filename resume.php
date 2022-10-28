<!DOCTYPE html>
<html>
<title>Resume</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
  html,
  body,
  h1,
  h2,
  h3,
  h4,
  h5,
  h6 {
    font-family: "Roboto", sans-serif
  }

  .bottom-container {
    background-color: #F2EDD7;
    padding-top: 20px;
    padding-bottom: 0;
    margin-bottom: 0;
  }

  .divider {
    visibility: hidden;
  }

  .contact-me {
    width: 50%;
    margin: auto;
  }

  .copyright {
    padding-top: 25px;
    margin-bottom: 0;
  }
</style>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">

<body class="w3-light-grey">

  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

      <!-- Left Column -->
      <div class="w3-third">
        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
            <img src="Images/bio_pic-modified.png" style="width:50%; margin-left:25%; margin-right:25%; margin-top:5%" alt="Avatar">
            <!-- <div class="w3-display-bottomleft w3-container w3-text-black"> -->
            <h2 style="text-align: center;" id="profile_name"></h2>
            <!-- </div> -->
          </div>
          <div class="w3-container">
            <p><i class="bi bi-calendar-event fa-fw w3-margin-right w3-large w3-text-teal"></i><a id="dob"></a></p>
            <p><i class="bi bi-globe fa-fw w3-margin-right w3-large w3-text-teal"></i><a id="nat"></a></p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><a id="addr"></a></p>
            <p><i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i><a id="phone"></a></p>
            <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i><a id="mail"></a></p>
            <p><i class="bi bi-linkedin fa-fw w3-margin-right w3-large w3-text-teal"></i><a id="lin">LinkedIn</a></p>
            <hr>

            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
            <p>Proficient in Python, Java, C/C++, HTML, CSS, SQL, JavaScript.</p>
            <hr style="width: 80%; margin:5% 10% 5% 10%">
            <p>Thorough knowledge on Algorithms and Data Structures, OOP, RDBMS, Operating Systems & Computer Networks.</p>
            <hr style="width: 80%; margin:5% 10% 5% 10%">
            <p>Experience in working with diverse teams on a variety of projects both as a leader and a member.</p>
            <hr style="width: 80%; margin:5% 10% 5% 10%">
            <p>Well versed in Hindi and English.</p>
            <hr style="width: 80%; margin:5% 10% 5% 10%">
            <br>
            <br>
          </div>
        </div><br>

        <!-- End Left Column -->
      </div>

      <!-- Right Column -->
      <div class="w3-twothird">

        <div class="w3-container w3-card w3-white w3-margin-bottom" id="experience">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Experience</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><a>Qiskit</a></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><a>August 2021</a></h6>
            <p>Certificate of Quantum Excellence awarded during IBM Qiskit Global Summer School on Quantum Machine Learning</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><a>Major League Hacking: Equinox '21</a></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><a>April 2021 - May 2021</a></h6>
            <p>Participation in Equinox 2021, an online hackathon organized by Major League Hacking and RoboVITics</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><a>Hackclub VITC: HacKnight</a></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><a>April 2022</a></h6>
            <p>Participation in HacKnight, a 2-day hackathon based on Blockchain, sponsored by Crust and Polygon</p>
            <hr>
          </div>
        </div>

        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><a>Delhi Public School, Vasant Kunj</a></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><a>APRIL 2018 - MAR 2020</a></h6>
            <p>Scored 94.8% overall in CBSE board examinations</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><a>Vellore Institute of Technology, Chennai — B. Tech(CSE)</a></b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i><a>August 2020 - JULY 2024 (Ongoing)</a></h6>
            <p>Pursuing B. Tech in Computer Science and Engineering - CGPA: 9.25</p>
            <hr>
          </div>
        </div>

        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i class="bi bi-kanban fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Projects</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><a>Game of Life</a></b></h5>
            <p>Simulated the classic computer science concept 'Game of Life'</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><a>Image Arithmetic</a></b></h5>
            <p>Performed image arithmetic using parallelization concepts.</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b><a>COVID-19 data analytics</a></b></h5>
            <p>Prepare various prediction models from real time COVID-19 data in order to predict and avoid future pandemic situations</p>
            <hr>
          </div>
        </div>

        <div class="w3-twothird">
          <!-- End Right Column -->
        </div>

        <!-- End Grid -->
      </div>

      <!-- End Page Container -->
    </div>

    <div class="bottom-container" style="text-align: center;">
      <a class="footer-link" href="https://www.linkedin.com/">LinkedIn</a>
      <a class="footer-link" href="https://twitter.com/">Twitter</a>
      <a class="footer-link" href="#">Website</a>
      <p class="copyright">© 2022 Rajat Mishra.</p>
    </div>

    <?php
    $con = mysqli_connect("localhost", "root", "");
    mysqli_select_db($con, "resume");

    $sel = 'select * from basic';
    $sq = mysqli_query($con, $sel);
    $row = mysqli_fetch_array($sq);

    $name = $row['Name'];
    $nat = $row['Nationality'];
    $addr = $row['Address'];
    $phone = $row['Phone'];
    $mail = $row['Mail'];
    $linkedin = $row['Linkedin'];
    $dob = $row['DOB'];
    ?>

    <script type="text/javascript">
      var name = "<?php echo "$name" ?>";
      var dob = "<?php echo "$dob" ?>";
      var nat = "<?php echo "$nat" ?>";
      var phone = "<?php echo "$phone" ?>";
      var mail = "<?php echo "$mail" ?>";
      var linkedin = "<?php echo "$linkedin" ?>";
      var addr = "<?php echo "$addr" ?>";
      document.getElementById('profile_name').innerHTML = name;
      document.getElementById('dob').innerHTML = dob;
      document.getElementById('nat').innerHTML = nat;
      document.getElementById('phone').innerHTML = phone;
      document.getElementById('addr').innerHTML = addr;
      document.getElementById('mail').innerHTML = mail;
      document.getElementById('mail').href = "mailto:" + mail;
      document.getElementById('lin').href = "https://" + linkedin;
    </script>

    <?php
    $sel = 'select * from experience';
    $sq = mysqli_query($con, $sel);

    $exp_title = array();
    $exp_dur = array();
    $exp_desc = array();

    while ($row = mysqli_fetch_array($sq)) {
      $exp_title = array_push($row['Title']);
      $exp_dur = array_push($row['Duration']);
      $exp_desc = array_push($row['Description']);
    }

    $sel = 'select * from education';
    $sq = mysqli_query($con, $sel);

    $edu_title = array();
    $edu_dur = array();
    $edu_desc = array();

    while ($row = mysqli_fetch_array($sq)) {
      $edu_title = array_push($row['Title']);
      $edu_dur = array_push($row['Duration']);
      $edu_desc = array_push($row['Description']);
    }

    $sel = 'select * from projects';
    $sq = mysqli_query($con, $sel);

    $proj_title = array();
    $proj_desc = array();

    while ($row = mysqli_fetch_array($sq)) {
      $proj_title = array_push($row['Title']);
      $proj_desc = array_push($row['Description']);
    }

    $sel = 'select * from skills';
    $sq = mysqli_query($con, $sel);

    $skill = array();

    while ($row = mysqli_fetch_array($sq)) {
      $skill = array_push($row['Skill']);
    }
    ?>
</body>

</html>