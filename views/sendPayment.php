<?php
  $dashboard_page = "send";
  include('../partials/header.php');
?>



    <section class="container">
      <!-- TABLE CARD HEADER -->
        <div class="block-header p-l-0 p-r-0 m-b-0">
            <h3 class="text-center"><img src="http://placehold.it/40x40" alt="vault icon" /> Send Payment</h3>

        </div><!-- END TABLE CARD HEADER -->

        <div class="row">

          <div class="col-md-8 col-md-offset-2">



            <div class="card">
                <div class="card-header ch-alt m-b-20">
                    <h3>Salt Lake City, USA</h3>
                    <h3><small>Vault Balance</small><br> $0.00</h3>
                    <h3><small>Gold Amount</small><br> 0.00g Gold</h3>

                    <ul class="actions">
                        <li class="row">
                          <div class="col-md-3">

                                  <select class="selectpicker" style="display: none;">
                                      <option>Salt Lake City</option>
                                      <option>London</option>
                                      <option>Spain</option>
                                      <option>Germany</option>
                                  </select>

                              </div>
                        </li>

                    </ul>
                    <button class="btn btn-float-left btn-float-far-left bgm-white waves-effect waves-effect waves-button waves-float"><i class="md md-arrow-back"></i></button>

                    <button class="btn btn-float-right btn-float-far-right bgm-white waves-effect waves-effect waves-button waves-float"><i class="md md-arrow-forward"></i></button>
                </div>

                <div class="card-body card-padding">

                  <form>
                    <div class="form-group fg-line">
                      <label for="inputEmail1">Payment Recipient <i class="fa fa-info-circle c-gray"></i>  </label>
                      <input type="email" class="form-control" id="inputEmail1" placeholder="Email Address or Contact Name...">
                    </div>
                    <div class="form-group fg-line">
                      <label for="inputAmount">Amount</label>
                      <input type="number" class="form-control" id="inputAmount" placeholder="0.00">
                    </div>


                    <div class=" text-center">
                      <button type="submit" class="btn bgm-orange btn-lg">Send Payment</button>
                    </div>
                  </form>

                </div>
            </div>
          </div>
      </div>
    </section>



<?php include('../partials/footer.php'); ?>
