<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1.0"/>
    <link rel="stylesheet" href="css/admin dash.css">
    <link rel="stylesheet" href="css/upcoming events.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" integrity="sha384-DyZ88mC6Up2uqS4h/KRgHuoeGwBcD4Ng9SiP4dIRy0EXTlnuz47vAwmeGwVChigm" crossorigin="anonymous"/>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script type="text/javascript" src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <title>UDM Almuni Portal</title>
</head>
<body>
    
  <div class="container1">
      <div class="topbar">
        <p>Welcome Almuni's</p>
          <img src="img/udm logo.png" alt="Avatar" class="avatar">          
        </div>
  
       
      <div class="sidebar">
        <h1>Dashboard</h1>
          <ul>
          <li>  
            <a href="announcement.html">
            <i class="fas fa-bullhorn"></i>
            <div>Announcement</div>
            </a>
          </li>           
          <li>
            <a href="myprofile.html">
              <i class="fas fa-id-card"></i>
              <div>My Profile</div>
            </a>
          </li>
          <li>
            <a href="chart.php">
              <i class="fas fa-user-tie"></i>
              <div>Job Offerings</div>
            </a>
          </li>
          <li>
            <a href="mapping.html">
              <i class="fas fa-map-marked-alt"></i>
              <div>Mapping Alumni Trajectories</div>
            </a>
          </li>
          <!--
          <li>
            <a href="AddData.html">
              <i class="fas fa-users"></i>
              <div>Add Data</div>
            </a>
          </li>
  -->
        </ul>
          <img src="img/udm.png" alt="Avtr" class="avtr">
        </div>
       


        <div class="container2">
          <h3>EVENTS & NEWS</h3>
          
          <button class="button button1">Add Event & News</button>
          <button class="button button2">Edit</button>
         
          <hr>
          <div class="row">
            <div class="col-lg-push-4 col-md-4 col-md-push-4">
              <div class="searchForm type2">
                <form action="" class="searchForm"><!-- Add The Appropriate Action for Your Site's Search Form/Page -->
                  <label class="sr-only" for="searchNewsEvents">Search News and Events</label>
                   <input id="searchNewsEvents" name="q" placeholder="What are you looking for?" type="search"> <input type="submit" value="Search">
                </form>
              </div>
            </div>
            <div class="clearfix visible-sm visible-xs">
              &nbsp;
            </div>
            <div class="col-lg-push-4 col-md-4 col-md-push-4">
              <div class="dropdownCategories">
              <label class="sr-only" for="dropdownNewsEvents">Category dropdown for News and Events</label>
              <select>
                <option value="">
                  Select Category
                </option>
                <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
                  Alumni party
                </option>
                <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
                  Design
                </option>
                <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
                  Programming
                </option>
                <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
                  Support
                </option>
                <option value=""><!-- Each option value should correspond to the appropriate filter on your site's News or Events page -->
                  Training
                </option>
              </select>
              </div>
            </div>  
            <div class="clearfix visible-sm visible-xs">
              &nbsp;
            </div>
            <div class="col-lg-4 col-lg-pull-8 col-md-4 col-md-pull-8">
              <ul class="nav nav-pills" role="tablist">
                <li class="active">
                  <a data-toggle="tab" href="#tab1" role="tab">Events</a>
                </li>
                <li>
                  <a data-toggle="tab" href="#tab2" role="tab">News</a>
                </li>
              </ul>
            </div>
          </div><!-- / row -->
          <hr>
          <div class="tab-content">
            <div class="tab-pane fade in active" id="tab1">
              <div class="row">
                <div class="col-md-6">
                  <div class="media">
                    <a class="pull-left" href="#"><span class="dateEl"><em>30</em>Nov</span></a>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="#">UNIVERSITY WEEK</a>
                      </h4>
                      <div class="meta-data">
                        <span class="longDate">Nov 30, 2023</span> <span class="timeEl">12:00pm - 02:00pm</span>
                      </div>
                      <p>
                        See the latest University week.
                      </p>
                    </div><!-- / media-body -->
                  </div><!-- / media -->
                  <div class="media">
                    <a class="pull-left" href="#"><span class="dateEl"><em>11</em>Dec</span></a>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="#">Tech Conference UDM</a>
                      </h4>
                      <div class="meta-data">
                        <span class="longDate">Dec 11, 2023</span> <span class="timeEl">06:00pm - 07:30pm</span>
                      </div>
                      <p>
                        Local tech entrepreneurs gather to share their knowledge.
                      </p>
                    </div><!-- / media-body -->
                  </div><!-- / media -->
                  <div class="media">
                    <a class="pull-left" href="#"><span class="dateEl"><em>15</em>Dec</span></a>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="#">Alumni party</a>
                      </h4>
                      <div class="meta-data">
                        <span class="longDate">Dec 15, 2023</span> <span class="timeEl">03:30pm - 07:30pm</span>
                      </div>
                      <p>
                        Opening party for alumni
                      </p>
                    </div><!-- / media-body -->
                  </div><!-- / media -->
                </div><!-- / .col-md-6 -->
                <div class="col-md-6">
                  <div class="media">
                    <a class="pull-left" href="#"><span class="dateEl"><em>18</em>Dec</span></a>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="#">Programming 101</a>
                      </h4>
                      <div class="meta-data">
                        <span class="longDate">Dec 17, 2023</span> <span class="timeEl">06:00pm - 08:00pm</span>
                      </div>
                      <p>
                        Take the basic CMS training class to see where things are and how to build custom modules.
                      </p>
                    </div><!-- / media-body -->
                  </div><!-- / media -->
                  <div class="media">
                    <a class="pull-left" href="#"><span class="dateEl"><em>21</em>Dec</span></a>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="#">Designing for Mobile</a>
                      </h4>
                      <div class="meta-data">
                        <span class="longDate">Dec 21, 2023</span> <span class="timeEl">10:00am - 12:00pm</span>
                      </div>
                      <p>
                        Get tips and information regarding how to design websites for mobile devices.
                      </p>
                    </div><!-- / media-body -->
                  </div><!-- / media -->
                  <div class="media">
                    <a class="pull-left" href="#"><span class="dateEl"><em>21</em>Dec</span></a>
                    <div class="media-body">
                      <h4 class="media-heading">
                        <a href="#">Modern Support</a>
                      </h4>
                      <div class="meta-data">
                        <span class="longDate">Dec 22, 2023</span> <span class="timeEl">10:00am - 12:00pm</span>
                      </div>
                      <p>
                        Learn from industry leaders about providing the best support possible.
                      </p>
                    </div><!-- / media-body -->
                  </div><!-- / media -->
                </div><!-- / .col-md-6 -->
              </div><!-- / row -->
              <div class="text-center">
                <br>
                <a class="btn btn-default" href="#">SEE ALL EVENTS</a>
              </div>
            </div>
            <div class="tab-pane fade" id="tab2">
              <div class="row">
                <div class="col-md-6">
                  <div class="blogPost--small">
                    <div class="media">
                      <span class="pull-left"><a href="#"><span class="date"><span>29</span> <small>Nov</small></span></a></span>
                      <div class="media-body">
                        <h4 class="media-heading">
                          <a href="#">CET esports week</a>
                        </h4>
                        <p>
                          Join CET week Eports tournaments
                        </p>
                      </div>
                    </div>
                  </div><!-- / blogPost -->
                  <div class="blogPost--small">
                    <div class="media">
                      <span class="pull-left"><a href="#"><span class="date"><span>22</span> <small>Nov</small></span></a></span>
                      <div class="media-body">
                        <h4 class="media-heading">
                          <a href="#">Universidad de Manila in collaboration with the UDM College of Law will host a Roundtable Discussion on the topic</a>
                        </h4>
                        <p>
                          The Makati and Taguig Case" to be held at the UDM Palma Hall
                        </p>
                      </div>
                    </div>
                  </div><!-- / blogPost -->
                </div><!-- / .col-md-6 -->
                <div class="col-md-6">
                  <div class="blogPost--small">
                    <div class="media">
                      <span class="pull-left"><a href="#"><span class="date"><span>12</span> <small>Nov</small></span></a></span>
                      <div class="media-body">
                        <h4 class="media-heading">
                          <a href="#">The battle begins now!</a>
                        </h4>
                        <p>
                          The UDM SSG proudly presents the Official Candidates of the 28th Founding Anniversary edition of Mister and Miss Universidad De Manila 2023 with the theme: "𝘔𝘢𝘬𝘢𝘣𝘢𝘺𝘢𝘯𝘨 𝘔𝘦𝘳𝘭𝘪𝘰𝘯 𝘱𝘢𝘳𝘢 𝘴𝘢 𝘔𝘢𝘬𝘢𝘣𝘢𝘨𝘰𝘯𝘨 𝘉𝘢𝘺𝘢𝘯".
                        </p>
                      </div>
                    </div>
                  </div><!-- / blogPost -->
                  <div class="blogPost--small">
                    <div class="media">
                      <span class="pull-left"><a href="#"><span class="date"><span>10</span> <small>Nov</small></span></a></span>
                      <div class="media-body">
                        <h4 class="media-heading">
                          <a href="#">What Is A Content Management System</a>
                        </h4>
                        <p>
                          So many acronyms that most of us know a brief amount about, if at all, let alone the meaning of those three little letters we hear so often.
                        </p>
                      </div>
                    </div>
                    </div>
                    </div>
              </div>
            </div>
          </div>
        </div>
      </body>
      </html>