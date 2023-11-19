<!DOCTYPE html>
<html>

<head>
  <title>Menna El Rouby</title>
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
  </style>
</head>

<body class="w3-light-grey">
<?php
$_name= "Menna El Rouby";
$_email= "rouby.menna@gmail.com";
$_mobile= "01221529392";
$age=33;
if($age<25)
{
  $add_age = "Your age is less than 25";
}
if($age<=30)
{
  $add_age = "Your age is between 25 and 30";
}
if ($age<=40)
{
  $add_age = "Your age is between 40 and 31";
}
else{
  $add_age = "Your age is above 40";
}
$_image= "<img src='me.jpg' style='width:100%' alt='Avatar'/>"
?>
  <!-- Page Container -->
  <div class="w3-content w3-margin-top" style="max-width:1400px;">

    <!-- The Grid -->
    <div class="w3-row-padding">

      <!-- Left Column -->
      <div class="w3-third">

        <div class="w3-white w3-text-grey w3-card-4">
          <div class="w3-display-container">
          <?php echo $_image; ?> <br> <br> <br> <br>
            <div class="w3-display-bottomleft w3-container w3-text-teal">
            <?php echo "<h2>$_name </h2>"; ?>
            </div>
          </div>
          <div class="w3-container">
            <p><i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>Developer</p>
            <p><i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i><?php echo $add_age?></p>
           <?php echo "<p><i class='fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal'></i> $_email </p>";
                 echo "<p><i class='fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal'></i> $_mobile</p>"; ?>
            <hr>

            <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
            <p>HTML</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:90%">90%</div>
            </div>
            <p>Javascript</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:80%">
                <div class="w3-center w3-text-white">80%</div>
              </div>
            </div>
            <p>Linux</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:75%">75%</div>
            </div>
            <p>GitHub</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:50%">50%</div>
            </div>
            <br>

            <p class="w3-large w3-text-theme"><b><i
                  class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
            <p>English</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:100%"></div>
            </div>
            <p>Spanish</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:55%"></div>
            </div>
            <p>German</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:25%"></div>
            </div>
            <br>
          </div>
        </div><br>

        <!-- End Left Column -->
      </div>

      <!-- Right Column -->
      <div class="w3-twothird">

        <div class="w3-container w3-card w3-white w3-margin-bottom">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>CS Instructor / ELS, New Cairo</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i> Sep 2015 <span
                class="w3-tag w3-teal w3-round">Current</span></h6>
            <p>
            <ul>
              <li>Implemented STEM Methodology, PBL.</li>
              <li>Co-founder of Technical Club, led the team to achieve the target projects.</li>
              <li>Designed Curriculum and adapted gamification approach.</li>
              <li>Monitored and coached more than 100 employees in new technologies, helped overpass corona
                pandemic and saved time and money</li>
            </ul>
            </p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Web Tester / Guide, Heliopolis</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan 2014-Dec 2014</h6>
            <p>
            <ul>
              <li>Provided testing and feedback regarding link issues.</li>
              <li>Documented all test phases procedures, followed all guidelines.</li>
            </ul>
            </p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>IT Engineering / Cordoba, Zamalek</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jun 2010 - Mar 2012</h6>
            <p>
            <ul>
              <li>Maintained technical issues with time consumed.</li>
              <li>Collaborated with team to build infrastructure system, helped to process all technical efficient.</li>
            </ul>
            </p><br>
          </div>
        </div>

        <div class="w3-container w3-card w3-white">
          <h2 class="w3-text-grey w3-padding-16"><i
              class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Engineering, Ain-Shams University, Cairo, Egypt</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>2004 -2010</h6>
            <p>
            <ul>
              <li>BSc Bachelor’s Degree in Computer System Engineering</li>
              <li>Graduation Project Business Intelligence & Workflow Platform by JAVA</li>
            </ul>
            </p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>AWS Cloud DevOps Nanodegree, Udacity - FWD</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>(Jun-Sep) 2022</h6>
            <p>12 weeks of technical and professional training scholarship that included cloud fundamentals, deploy
              Infrastructure as code (IAC), Build CI/CD Pipelines, Monitoring & Logging.</p>
            <hr>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Front-End, Self-Learning</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Jan (2021 -2022)</h6>
            <p>HTML - CSS - Es6 JavaScript - OOP of JavaScript</p><br>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Embedded System Diploma, Embedda, Dokki</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>Oct 2017-Mar 2018</h6>
            <p>Fundamental of Embedded System, C programming</p><br>
          </div>
          <div class="w3-container">
            <h5 class="w3-opacity"><b>Employability Skills for Women, Amid-east, Us Embassy</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>(July-Dec) 2012</h6>
            <p>
            <ul>
              <li>Attended 6 month of professional soft skills, Business English.</li>
              <li>Joined Language and Cultural Exchange program with American Students.</li>
              <li>Joined workshops Strategic Planning, Operational Planning courses.</li>
            </ul>
            </p><br>
          </div>
        </div>

        <!-- End Right Column -->
      </div>

      <!-- End Grid -->
    </div>

    <!-- End Page Container -->
  </div>

  <footer class="w3-container w3-teal w3-center w3-margin-top">
    <p>Find me on social media.</p>
    <a href="https://github.com/MennaELRouby" class="fa fa-github w3-hover-opacity" target="_blank"></a>
    <a href="https://www.linkedin.com/in/menna-rouby" class="fa fa-linkedin w3-hover-opacity" target="_blank"> </a>
    <p>Powered by <a href="https://www.linkedin.com/mennarouby" target="_blank">Menna EL Rouby</a></p>
  </footer>

</body>

</html>