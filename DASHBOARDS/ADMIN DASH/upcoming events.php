<?php
      include'connect/connect.php';
      include'header.php'
?>
<body style="background: url('bg/udm.jpg');">
    
  <div class="container1"   style="margin-top:-30px;">
      <?php
        include'navigation.php';
      ?>
       


        <div class="container2">
          <h3>EVENTS & NEWS</h3>
          
          <a class="button button1" href="add_events.php">Add Event & News</a>
          <!-- <button class="button button2">Edit</button> -->
         
          <hr>
          <div class="row">
            <div class="col-lg-push-4 col-md-4 col-md-push-4">
              <div class="searchForm type2">
                <form action="" class="searchForm"><!-- Add The Appropriate Action for Your Site's Search Form/Page -->
                  <label class="sr-only" for="searchNewsEvents">Search News and Events</label>
                   <input id="searchNewsEvents" name="data" placeholder="What are you looking for?" type="search" onkeyup="search_data(this.value);search_datas(this.value);"> <input type="submit" value="Search">
                </form>
              </div>
            </div>
            <div class="clearfix visible-sm visible-xs">
              &nbsp;
            </div>
            <div class="col-lg-push-4 col-md-4 col-md-push-4">
              <div class="dropdownCategories">
              <label class="sr-only" for="dropdownNewsEvents">Category dropdown for News and Events</label>
              <select id="title" onchange="search_data(this.value);search_datas(this.value);">
                <option></option>
                <?php
                  $sql = "SELECT DISTINCT title FROM announcement";
                  $result = $conn->query($sql);

                  if ($result->num_rows > 0) {
                    // output data of each row
                    while($row = $result->fetch_assoc()) {
                      extract($row);
                     ?>
                     <option><?php echo$title?></option>
                     <?php
                    }
                  }
                ?>
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
              <div class="row" id="events">
              </div>
            </div>
            <div class="tab-pane fade" id="tab2">
              <div class="row" id="news">
              </div>
            </div>
          </div>
        </div>
        <script type="text/javascript">
          function  search_data(){
            var data=document.getElementById('searchNewsEvents').value;
            var title=document.getElementById('title').value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("events").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "events_news.php?data=" + data+'&title='+title+'&type=Event', true);
            xmlhttp.send();
          }
          function  search_datas(){
            var data=document.getElementById('searchNewsEvents').value;
            var title=document.getElementById('title').value;
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function() {
              if (this.readyState == 4 && this.status == 200) {
                document.getElementById("news").innerHTML = this.responseText;
              }
            };
            xmlhttp.open("GET", "events_news.php?data=" + data+'&title='+title+'&type=News', true);
            xmlhttp.send();
          }


          search_data();
          search_datas();
        </script>
  </div>
      </body>
      </html>