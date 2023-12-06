<?php
include 'connect/connect.php';

if ($_GET['type']) {
    extract($_GET);

    if ($type == "Event" || $type == "News") {
        $sql = "SELECT * FROM announcement WHERE title LIKE '%$title%' AND type = '$type' AND description LIKE '%$data'";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while ($row = $result->fetch_assoc()) {
                extract($row);

                // Compare event/news date with the current date
                $eventDate = strtotime($date_time);
                $currentDate = time();

                // Check if the event/news has not occurred yet
                if ($eventDate > $currentDate) {
                    ?>
                    <div class="col-md-6">
                      <div class="media">
                        <a class="pull-left" href="#"><span class="dateEl"><em><?php echo date("d", strtotime($date_time))?></em><?php echo date("M", strtotime($date_time))?></span></a>
                        <div class="media-body">
                          <h4 class="media-heading">
                            <a href="#"><?php echo$title?></a>
                          </h4>
                          <div class="meta-data">
                            <span class="longDate"><?php echo date("M d,Y", strtotime($date_time))?></span> <span class="timeEl"><?php echo date(" h:i a ", strtotime($from_time))?> - <?php echo date(" h:i a ", strtotime($to_time))?></span>
                          </div>
                          <p>
                            <?php echo$description?>
                          </p>
                        </div><!-- / media-body -->
                      </div><!-- / media -->
                    </div><!-- / .col-md-6 -->
                  
                  <?php
                }
              }
            }else if($type=="News"){
              $sql = "SELECT * FROM announcement WHERE title LIKE '%$title%' AND type = '$type' AND description LIKE '%$data%'";
              $result = $conn->query($sql);

              if ($result->num_rows > 0) {
                // output data of each row
                while($row = $result->fetch_assoc()) {
                   extract($row);
                  ?>
                    <div class="col-md-6">
                      <div class="blogPost--small">
                        <div class="media">
                          <span class="pull-left"><a href="#"><span class="date"><span><?php echo date("d", strtotime($date_time))?></span> <small><?php echo date("M", strtotime($date_time))?></small></span></a></span>
                          <div class="media-body">
                            <h4 class="media-heading">
                              <a href="#"><?php echo$title?></a>
                            </h4>
                            <p>
                              <?php echo$description?>
                            </p>
                          </div>
                        </div>
                      </div><!-- / blogPost -->
                  </div>
                  <?php
                }
              }
            }
          }
        }  
      ?>