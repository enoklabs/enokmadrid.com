<?php
  $dashboard_page = "contacts";
  include('../partials/header.php');
?>


    <section class="container">
      <!-- TABLE CARD HEADER -->
        <div class="block-header p-l-0 p-r-0 m-b-0">
            <h3><img src="http://placehold.it/40x40" alt="vault icon" /> Contacts</h3>
            <ul class="actions">

                <li>
                    <div class="fg-line">
                        <input type="text" class="form-control input-sm" placeholder="&#xf002; &nbsp; Search...">
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

                <li>
                  <div class="">
                      <button type="button" class="btn bgm-blue" style="border:none;"> <i class="fa fa-plus"></i>Add Contact </button>
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
                          <th data-field="name">Name</th>
                          <th data-field="email">Email</th>
                          <th data-field="phone">Phone</th>
                          <th data-field="gold" class="text-center">Send Payment <i class="fa fa-info-circle c-gray"></i></th>
                          <th data-field="status" class="text-center">Send Invoice <i class="fa fa-info-circle c-gray"></i></th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                          <td class="c-blue">Jame Smith</td>
                          <td>jamesmith@gmail.com</td>
                          <td>(702)-777-7878</td>
                          <td class="text-center"><a href="" class="btn btn-xs no-shadow border-blue"><i class="md-file-upload c-lightblue"></i></a></td>
                          <td class="text-center"><a href="" class="btn btn-xs no-shadow border-blue"><i class="md-file-download c-lightblue"></i></a></td>
                      </tr>
                      <tr>
                          <td class="c-blue">Donald Jackson</td>
                          <td>djackson74@gmail.com</td>
                          <td>(702)-777-8888</td>
                          <td class="text-center"><a href="" class="btn btn-xs no-shadow border-blue"><i class="md-file-upload c-lightblue"></i></a></td>
                          <td class="text-center"><a href="" class="btn btn-xs no-shadow border-blue"><i class="md-file-download c-lightblue"></i></a></td>
                        </tr>
                    </tbody>
                </table><!-- END TABLE CONTENT -->

                <div class="card-header">
                    <p class="text-center">Start adding contacts so that you can send and receive gold.</p>
                </div>
            </div>
        </div>
    </section>



<?php include('../partials/footer.php'); ?>
