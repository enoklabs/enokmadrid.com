<?php
  $dashboard_page = "statements";
  include('../partials/header.php');
?>



  <section class="container">
    <!-- TABLE CARD HEADER -->
      <div class="block-header p-l-0 p-r-0 m-b-0">
          <h3><img src="http://placehold.it/40x40" alt="vault icon" /> Monthly Statements</h3>

      </div><!-- END TABLE CARD HEADER -->

      <div class="card">
          <div class="table-responsive">

              <!-- TABLE CONTENT -->
              <table id="data-table-basic" class="table table-striped">
                  <thead>
                    <tr>
                        <th data-field="date">Date <i class="fa fa-info-circle c-gray"></i></th>
                        <th data-field="desc">Description <i class="fa fa-info-circle c-gray"></i></th>
                        <th data-field="downloads">Downloads <i class="fa fa-info-circle c-gray"></i></th>
                    </tr>
                  </thead>
                  <tbody>


                  </tbody>
              </table><!-- END TABLE CONTENT -->
              <div class="card-header">
                  <p class="text-center">No monthly statements available</p>
              </div>
          </div>
      </div>
  </section>



    <section class="container">
      <!-- TABLE CARD HEADER -->
        <div class="block-header p-l-0 p-r-0 m-b-0">
            <h3><img src="http://placehold.it/40x40" alt="vault icon" /> Yearly Statements</h3>

        </div><!-- END TABLE CARD HEADER -->

        <div class="card">
            <div class="table-responsive">

                <!-- TABLE CONTENT -->
                <table id="data-table-basic" class="table table-striped">
                    <thead>
                      <tr>
                          <th data-field="date">Date <i class="fa fa-info-circle c-gray"></i></th>
                          <th data-field="desc">Description <i class="fa fa-info-circle c-gray"></i></th>
                          <th data-field="downloads">Downloads <i class="fa fa-info-circle c-gray"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td class="c-blue">Jan 20, 2015</td>
                          <td>Gold Credit</td>
                          <td class="c-green">+ 3.051 Gold Grams</td>
                      </tr>

                    </tbody>
                </table><!-- END TABLE CONTENT -->
                <div class="card-header">
                    <p class="text-center">No yearly statements available</p>
                </div>
            </div>
        </div>
    </section>



<?php include('../partials/footer.php'); ?>
