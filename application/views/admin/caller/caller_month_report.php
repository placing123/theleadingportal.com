<div class="main-content">
  <section class="section">
    <div class="section-body">
      <div class="row">
        <div class="col-12">

          <div class="card">
            <div class="card-header">
              <h4> Current Month Franchise Report</h4>

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                  <thead>
                    <tr>
                      <th>Franchise Name</th>
                      <th>Franchise Register</th>
                      <th> Franchise Activate</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                    foreach ($rec as $r) {

                      $franchise_id = $r->id;
                    ?>

                      <tr>
                        <td> <?php echo $r->franchise_name;  ?> </td>
                        <td> <?php echo $this->model->franchise_current_month_report($franchise_id);
        
                        ?> </td>
                        <td> <?php echo $this->model->franchise_current_month_signcount($franchise_id);  ?> </td>
                      </tr>

                    <?php    }      ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>

          <div class="card">
            <div class="card-header">
              <h4>Current Month Caller Report</h4>
            </div>
            <div class="card-body">
              <!-- start -->
              <div class="tab">

                        <?php
                              foreach ($rec as $r) {

                                $franchise_id = $r->id;
                              ?>
                              <button class="tablinks" onclick="openCity(event, 'fran_<?php  echo $franchise_id; ?>')" id="defaultOpen"><?php  echo $r->franchise_name; ?></button>
                           
                          
                              <?php    }      ?>


                
                </div>

              <?php
                    foreach ($rec as $r) {

                      $franchise_id = $r->id;

                      $where = array('franchise_id'=>$franchise_id);
                       $franchise_caller_data =   $this->model->hdm_get_where('tbl_caller',$where);
                    ?>
                    <div id="fran_<?php  echo $franchise_id; ?>" class="tabcontent">
                      <h3><?php  echo $r->franchise_name; ?></h3>

                      <div class="table-responsive">
                            <table class="table table-striped table-hover" id="tableExport" style="width:100%;">
                              <thead>
                                <tr>
                                  <th>Caller Name</th>
                                  <th>Total Caller Register</th>
                                  <th>Total Caller Activate</th>

                                </tr>
                              </thead>
                              <tbody>
                                <?php
                                foreach ($franchise_caller_data as $r) {
                                  $caller_id = $r->id;
                                ?>

                                  <tr>
                                    <td> <?php echo $r->caller_name;  ?> </td>
                                    <td> <?php echo $this->model->get_total_caller_franchiswisemonth_count($franchise_id,$caller_id);  ?> </td>
                                    <td> <?php echo $this->model->get_total_caller_franchiswisemonth_signcount($franchise_id,$caller_id);  ?> </td>
                                  </tr>

                                <?php    }      ?>
                              </tbody>
                            </table>
                         </div>

                      
                    </div>
                 
                    <?php    }      ?>

           

              <!-- end  -->

            </div>
          </div>



        </div>
      </div>
    </div>
  </section>


<script>

function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();


</script>








</div>