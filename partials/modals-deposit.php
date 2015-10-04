<!-- DEPOSIT STEP 1 -->
<div id="modalDeposit-1" class="modal fade" data-backdrop="static" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-md">
        <div class="modal-content">

            <div class="modal-header">
                <button type="button" data-dismiss="modal" class="close" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center">Deposit Funds to Vault</h4>
                <hr class="h-line v-margin-none"/>
            </div>

            <div class="modal-body">
                <div class="m-t-20 m-b-20">
                    <b><span>1</span> Select Vault Location</b>
                    <div class="map-points">
                        <ul>
                            <li>Toronto</li>
                            <li>London</li>
                            <li>Zurich</li>
                            <li>Dubai</li>
                            <li>Hong Kong</li>
                            <li>Singapore</li>


                            <div class="tooltip fade top in" role="tooltip" id="" style="top: 150px; left: 239px; display: block;">
                              <div class="tooltip-arrow" style="left: 50%;"></div>
                              <div class="tooltip-inner">Toronto</div>
                            </div>

                            <div class="tooltip fade left in" role="tooltip" id="" style="top: 114px; left: 315px; display: block;">
                              <div class="tooltip-arrow" style="top: 50%;"></div>
                              <div class="tooltip-inner">London</div>
                            </div>

                            <div class="tooltip fade left in" role="tooltip" id="" style="top: 84px; left: 330px; display: block;">
                              <div class="tooltip-arrow" style="top: 50%;"></div>
                              <div class="tooltip-inner">Zurich</div>
                            </div>
                        </ul>
                    </div>
                </div>


                <div class="row">
                    <span class="col-sm-12 m-b-15">Vault Location Details</span><br>
                    <select class="col-sm-12 selectpicker">
                        <option value="1"> Toronto</option>
                        <option value="2">London</option>
                        <option value="3">Zurich</option>
                        <option value="4">Hong Kong</option>
                        <option value="5">Singapore</option>
                    </select>
                </div>

            </div>

            <div class="modal-footer">
              <a href="#modalDeposit-2" class="btn bgm-orange m-r-10 m-b-10" data-dismiss="modal" data-toggle="modal">Next <i class="fa fa-arrow-right"></i></a>
            </div>
        </div>
    </div>
</div><!-- END DEPOSIT STEP 1 -->






<!-- DEPOSIT STEP 2 -->
<div id="modalDeposit-2" class="modal fade" data-backdrop="static" tabindex="1" role="dialog" aria-hidden="true">

  <div class="modal-dialog modal-md">
      <div class="modal-content">

          <div class="modal-header">
              <button type="button" data-dismiss="modal" class="close" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center">Deposit Funds to Vault</h4>
              <hr/>
          </div>

          <div class="modal-body">
            <div>
                <b><span>2</span> Choose Funding Option</b>
            </div>
            <div class="row">

              <a href="" class="card col-sm-4 text-center p-t-25 p-b-20">
                <img src="http://placehold.it/50x50" alt="" />
                <div class="lv-header m-t-10"><span>Bank Wire</span></div>
              </a>
              <a href="" class="card col-sm-4 text-center p-t-25 p-b-20">
                <img src="http://placehold.it/50x50" alt="" />
                <div class="lv-header m-t-10"><span>Bitcoin</span></div>
              </a>
              <a href="" class="card col-sm-4 text-center p-t-25 p-b-20">
                <img src="http://placehold.it/50x50" alt="" />
                <div class="lv-header m-t-10"><span>Visa Debit</span></div>
              </a>
              <a href="" class="card col-sm-4 text-center p-t-25 p-b-20">
                <img src="http://placehold.it/50x50" alt="" />
                <div class="lv-header m-t-10"><span>Credit Card</span></div>
              </a>
              <a href="" class="card col-sm-4 text-center p-t-25 p-b-20">
                <img src="http://placehold.it/50x50" alt="" />
                <div class="lv-header m-t-10"><span>China UnionPay</span></div>
              </a>
              <a href="" class="card col-sm-4 text-center p-t-25 p-b-20">
                <img src="http://placehold.it/50x50" alt="" />
                <div class="lv-header m-t-10"><span>Interac</span></div>
              </a>

            </div>
          </div>

          <div class="modal-footer">
            <a href="#modalDeposit-1" class="btn btn-link m-r-10 m-b-10 pull-left c-gray" data-dismiss="modal" data-toggle="modal"><i class="fa fa-arrow-left"></i> back </a>
            <a href="#modalDeposit-3" class="btn bgm-orange m-r-10 m-b-10" data-dismiss="modal" data-toggle="modal">Next <i class="fa fa-arrow-right"></i></a>
          </div>
      </div>
  </div>

</div><!-- END DEPOSIT STEP 2 -->




<!-- DEPOSIT STEP 3 -->
<div id="modalDeposit-3" class="modal fade" data-backdrop="static" tabindex="1" role="dialog" aria-hidden="true">

  <div class="modal-dialog modal-md">
      <div class="modal-content">

          <div class="modal-header">
              <button type="button" data-dismiss="modal" class="close" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center">Deposit Funds to Vault</h4>
              <hr class="h-line v-margin-none"/>
          </div>

          <div class="modal-body">
            <div>
                <b><span>3</span> Select Amount</b>
                <span class="c-green pull-right"><i class="fa fa-lock"></i> Secure</span>
            </div>

            <div class="row">

              <div class="col-md-6 col-sm-offset-1">
                  <div class="fg-line form-group">
                      <label for="amount"><small>Amount</small></label>
                      <input id="amount" type="text" class="form-control input-sm" placeholder="BTC 0.012">
                  </div>
              </div>
              <div class="col-md-3">
                  <div class="fg-line form-group">
                    <label for="currency"><small>Currency</small></label>
                    <select id="currency" class="selectpicker col-md-12" style="display: none;">
                        <option> BTC</option>
                        <option> USD</option>
                        <option> AUD</option>
                    </select>
                  </div>
              </div>


            </div>
          </div>

          <div class="modal-footer">
            <a href="#modalDeposit-2" class="btn btn-link m-r-10 m-b-10 pull-left c-gray" data-dismiss="modal" data-toggle="modal"><i class="fa fa-arrow-left"></i> back </a>
            <a href="#modalDeposit-4" class="btn bgm-orange m-r-10 m-b-10" data-dismiss="modal" data-toggle="modal">Next <i class="fa fa-arrow-right"></i></a>
          </div>
      </div>
  </div>

</div><!-- END DEPOSIT STEP 3 -->






<!-- DEPOSIT CONFIRMATION -->
<div id="modalDeposit-4" class="modal fade" data-backdrop="static" tabindex="1" role="dialog" aria-hidden="true">

  <div class="modal-dialog modal-md">
      <div class="modal-content">

          <div class="modal-header">
              <button type="button" data-dismiss="modal" class="close" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center">Deposit Funds to Vault</h4>
              <hr class="h-line v-margin-none"/>
          </div>

          <div class="modal-body">

                <p>
                  <b>How Does The Bitcoin Deposit Process Work?</b>
                  Copy the bitcoin address and paste it in your bitcoin client, deposit requires 1 confirmation. You can also use the QR code below.
                </p>

                <h3 class="text-center">BTC 0.01200000</h3>
                <div class="panel">

                  <span>1JM6KJGu7K1KsDe2q49YknD24BzND0wJUy6</span>
                  <a href="#" class="pull-right f-12"><i class="fa fa-clipboard"></i> Select Wallet Address </a>
                </div>

                <div class="text-center">
                  <a href="#modalDeposit-5" data-dismiss="modal" data-toggle="modal">

                    <img src="http://placehold.it/150x150" alt="" />

                  </a>
                  <br>
                  <b>14:56</b>
                </div>

          </div>

          <div class="modal-footer" style="text-align:center;">
            <a href="" id="sa-success" class="c-lightblue" data-dismiss="modal">Close</a>
          </div>
      </div>
  </div>

</div><!-- END DEPOSIT CONFIRMATION -->




<!-- DEPOSIT CONFIRMATION -->
<div id="modalDeposit-5" class="modal fade" data-backdrop="static" tabindex="1" role="dialog" aria-hidden="true">

  <div class="modal-dialog modal-md">
      <div class="modal-content">

          <div class="modal-header">
              <button type="button" data-dismiss="modal" class="close" aria-label="Close" ><span aria-hidden="true">&times;</span></button>
              <h4 class="modal-title text-center">Transaction Complete</h4>
              <hr class="h-line v-margin-none"/>
          </div>

          <div class="modal-body">

            <div class="row text-center">
              <small>Transaction Summary</small>

              <div class="col-xs-5">
                <h4>BTC 0.01200000</h4>
              </div>
              <div class="col-xs-2 ">
                <i class="fa fa-arrow-right fa-2x"></i>
              </div>
              <div class="col-xs-5">
                <h4>0.071g Gold</h4>
              </div>
            </div>

                <div class="text-center">
                  <small>Vault Location Details</small>
                  <p>
                    <img src="http://placehold.it/70x15" alt="" />
                    Salt Lake City, USA
                  </p>
                </div>


          </div>

          <div class="modal-footer" style="text-align:center;">
            <a href="" id="sa-success" class="c-lightblue" data-dismiss="modal">Close</a>
          </div>
      </div>
  </div>

</div><!-- END DEPOSIT CONFIRMATION -->
