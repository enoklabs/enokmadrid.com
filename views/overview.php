<?php
  $dashboard_page = "overview";
  include('../partials/header.php');
?>



  <section class="container">
    <!-- TABLE CARD HEADER -->
      <div class="block-header p-l-0 p-r-0 m-b-0">
          <h3><img src="http://placehold.it/40x40" alt="vault icon" /> Vault</h3>
          <ul class="actions">
              <li>
                January 10, 2015 <span>19:35 GMT -5.00 </span>
              </li>
              <li>
                  <a href="">
                      <i class="fa fa-print c-bluegray"></i>
                  </a>
              </li>
              <li>
                  <a href="">
                      <i class="fa fa-file c-bluegray"></i>
                  </a>
              </li>
          </ul>
      </div><!-- END TABLE CARD HEADER -->
      <div class="card">
          <div class="table-responsive">

              <!-- TABLE CONTENT -->
              <table id="data-table-basic" class="table table-striped">
                  <thead>
                  <tr>
                      <th data-column-id="id">Name <i class="fa fa-info-circle c-gray"></i></th>
                      <th data-column-id="name">Location <i class="fa fa-info-circle c-gray"></i></th>
                      <th data-column-id="price">Custodian <i class="fa fa-info-circle c-gray"></i></th>
                      <th data-column-id="price" data-type="numeric">Today's Change <i class="fa fa-info-circle c-gray"></i></th>
                      <th data-column-id="price" data-type="numeric">Balance <i class="fa fa-info-circle c-gray"></i></th>
                  </tr>
                  </thead>
                  <tbody>
                  <tr>
                      <td>Education Fund</td>
                      <td><img src="http://placehold.it/25x15" alt=""/> New York</td>
                      <td><img src="http://placehold.it/75x20" alt=""/></td>
                      <td>0.000g Gold</td>
                      <td class="c-black">3.051g Gold</td>
                  </tr>
                  <tr>
                      <td>Vacation Fund</td>
                      <td><img src="http://placehold.it/25x15" alt=""/> Singapore</td>
                      <td><img src="http://placehold.it/75x20" alt=""/></td>
                      <td class="c-green">+ 4.282g Gold</td>
                      <td class="c-black">6.981g Gold</td>
                  </tr>
                  <tr>
                      <td>Main Savings</td>
                      <td><img src="http://placehold.it/25x15" alt=""/> London</td>
                      <td><img src="http://placehold.it/75x20" alt=""/></td>
                      <td class="c-red">- 4.052g Gold</td>
                      <td class="c-black">57.839g Gold</td>
                  </tr>
                  </tbody>
              </table><!-- END TABLE CONTENT -->

              <!-- TABLE TOTALS -->
              <table class="table table-striped">
                <thead>
                <tr>
                    <th data-column-id="id">Total Vault Value <i class="fa fa-info-circle c-gray"></i></th>
                    <th></th>
                    <th></th>
                    <th class="text-center"> $0.00  <i class="fa fa-info-circle c-gray"></i></th>
                    <th class="text-center"> $0.00  <i class="fa fa-info-circle c-gray"></i></th>
                </tr>
                </thead>
              </table><!-- END TABLE TOTALS -->

          </div>
      </div>
    </section>




    <section class="container">
      <!-- TABLE CARD HEADER -->
        <div class="block-header p-l-0 p-r-0 m-b-0">
            <h3><img src="http://placehold.it/40x40" alt="vault icon" /> Recent Activity</h3>
            <a href="" class="actions" style="top:10px;">View All Transactions</a>
        </div><!-- END TABLE CARD HEADER -->

        <div class="card">
            <div class="table-responsive">

                <!-- TABLE CONTENT -->
                <table id="data-table-basic" class="table table-striped">
                    <thead>
                      <tr>
                          <th data-field="date">Date <i class="fa fa-info-circle c-gray"></i></th>
                          <th data-field="loc">Location <i class="fa fa-info-circle c-gray"></i></th>
                          <th data-field="desc">Description <i class="fa fa-info-circle c-gray"></i></th>
                          <th data-field="gold">Gold <i class="fa fa-info-circle c-gray"></i></th>
                          <th data-field="status">Status <i class="fa fa-info-circle c-gray"></i></th>
                          <th data-field="hist">Historical Basis <i class="fa fa-info-circle c-gray"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td class="c-blue">Jan 20, 2015</td>
                          <td></td>
                          <td>Gold Credit</td>
                          <td class="c-green">+ 3.051 Gold Grams</td>
                          <td><i class="fa fa-exclamation-triangle c-orange"></i> Pending</td>
                          <td class="c-green">+ $7,031.93(COP)</td>
                      </tr>
                      <tr>
                          <td class="c-blue">Jan 20, 2015</td>
                          <td> London</td>
                          <td>Gold Credit</td>
                          <td class="c-green">+ 3.051 Gold Grams</td>
                          <td><i class="fa fa-exclamation-triangle c-orange"></i> Pending</td>
                          <td class="c-green">+ $7,031.93(COP)</td>
                      </tr>
                      <tr>
                          <td class="c-blue">Jan 20, 2015</td>
                          <td> Singapore</td>
                          <td>Gold Credit</td>
                          <td class="c-green">+ 3.051 Gold Grams</td>
                          <td><i class="fa fa-check c-green"></i> Confirmed</td>
                          <td><a href="">Details <i class="fa fa-arrow-right"></i></a></td>
                      </tr>
                      <tr>
                          <td class="c-blue">Jan 20, 2015</td>
                          <td> New York</td>
                          <td>Gold Credit</td>
                          <td class="c-red">- 3.051 Gold Grams</td>
                          <td><i class="fa fa-check c-green"></i> Confirmed</td>
                          <td><a href="">Details <i class="fa fa-arrow-right"></i></a></td>
                      </tr>
                    </tbody>
                </table><!-- END TABLE CONTENT -->
                <div class="card-header">
                    <p class="text-center">All your future transactions will be displayed here.</p>
                </div>
            </div>
        </div>
    </section>



<?php include('../partials/footer.php'); ?>
