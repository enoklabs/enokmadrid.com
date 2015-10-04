<?php
  $dashboard_page = "transactions";
  include('../partials/header.php');
?>



    <section class="container">
      <!-- TABLE CARD HEADER -->
        <div class="block-header p-l-0 p-r-0 m-b-0">
            <h3><img src="http://placehold.it/40x40" alt="vault icon" /> Transactions</h3>
            <ul class="actions">

                <li>
                    <div class="fg-line">
                        <input type="text" class="form-control input-sm" placeholder="&#xf002; &nbsp; Search...">
                    </div>
                </li>
                <li>
                  <div class="dropdown">
                      <button type="button" class="btn btn-default c-bluegray" data-toggle="dropdown">Date Filter <i class="caret"></i></button>

                      <ul class="dropdown-menu pull-right">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                      </ul>
                  </div>
                </li>
                <li>
                    <button type="button" class="btn btn-default">
                        <i class="fa fa-print c-bluegray"></i>
                    </button>
                </li>
                <li>
                  <div class="dropdown">
                      <button type="button" class="btn btn-default c-bluegray" data-toggle="dropdown">Export <i class="caret"></i></button>

                      <ul class="dropdown-menu pull-right">
                          <li><a href="#">Action</a></li>
                          <li><a href="#">Another action</a></li>
                          <li><a href="#">Something else here</a></li>
                          <li class="divider"></li>
                          <li><a href="#">Separated link</a></li>
                      </ul>
                  </div>
                </li>
            </ul>
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
                          <td> New York</td>
                          <td>Gold Credit</td>
                          <td class="c-green">+ 3.051 Gold Grams</td>
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
