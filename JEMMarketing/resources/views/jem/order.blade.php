@extends('layout')

@section('content')
<section id="steps" class="steps">
		<div class="container">
			<div class="row">

            
					
                  <div>
                    
                  
                    <div class="col-md-12">
                     


                     <div class="col-md-6 borderall">


                      <div class="single_wedo col-md-12">
                        <div class="row">
                           <p class="ortile orderph ab-p">5 Bottle Package - Buy 3 Bottles & Get 2 FREE</p>
                        </div>
                        <div class="row">
                           <div class="col-md-8">
                             <img src="{{ URL::asset('assets/images/order1.png') }}" alt="">
                           </div>
                           <div class="col-md-4 tcxright">
                              <p class="oldprice">Original Price: <span class="lnthr">$270.00</span></p>
                              <p class="newprice">Total <span class="totl">$87.00</span></p>
                              <button type="button" class="selec-btn">Select</button>
                           </div>
                         </div>
                      </div>


                      <div class="single_wedo col-md-12">
                        <div class="row">
                           <p class="ortile orderph ab-p">3 Bottle Package - Buy 2 Bottles & Get 1 FREE</p>
                        </div>
                        <div class="row">
                           <div class="col-md-8">
                               <img src="{{ URL::asset('assets/images/order2.png') }}" alt="">
                           </div>
                           <div class="col-md-4 tcxright">
                                   <p class="oldprice">Original Price: <span class="lnthr">$162.00</span></p>
                                   <p class="newprice">Total <span class="totl">$58.00</span></p>
                                   <button type="button" class="selec-btn">Select</button>
                           </div>
                         </div>
                      </div>



                      <div class="single_wedo col-md-12">
                        <div class="row">
                           <p class="ortile orderph ab-p">1 Bottle</p>
                        </div>
                        <div class="row">
                           <div class="col-md-8">
                              <img src="{{ URL::asset('assets/images/order3.png') }}" alt="">
                           </div>
                           <div class="col-md-4 tcxright">
                                   <p class="oldprice">Original Price: <span class="lnthr">$54.00</span></p>
                                   <p class="newprice">Total <span class="totl">$29.00</span></p>
                                   <button type="button" class="selec-btn">Select</button>
                           </div>
                         </div>
                      </div>






    
                     </div>

                     
                     <div class="col-md-1"></div>
                     <div class="col-md-4">
                        <div class="single_wedo wow fadeIn bilform" data-wow-duration="1s" style="visibility: visible; animation-duration: 1s; animation-name: fadeIn;">
                            <p class="ortile orderph ab-p">SHIPPING INFORMATION</p>
                            <form action="">
                               <input class="form-control mrform" type="text" placeholder="First Name">
                               <input class="form-control mrform" type="text" placeholder="Last Name">
                               <input class="form-control mrform" type="text" placeholder="Email">
                               <input class="form-control mrform" type="text" placeholder="Phone">
                               <input class="form-control mrform" type="text" placeholder="Shiping Address">
                               <input class="form-control mrform" type="text" placeholder="City">
                               <input class="form-control mrform" type="text" placeholder="Select State">
                               <input class="form-control mrform" type="text" placeholder="Zip">
                               <div>
                                 <input class="mrform stfltf" type="checkbox" value="">
                                 <p class="pshipadres">Check if Billing and Shipping address are different</p>
                               </div>
                               

                              

                           <!-- CREDIT CARD FORM STARTS HERE -->
            <div class="panel panel-default credit-card-box">
                <div class="panel-heading display-table" >
                    <div class="row display-tr" >
                        <h3 class="panel-title display-td" >Payment Details</h3>
                        <div class="display-td" >                            
                            <img class="img-responsive pull-right" src="http://i76.imgup.net/accepted_c22e0.png">
                        </div>
                    </div>                    
                </div>
                <div class="panel-body">
                    <form role="form" id="payment-form" method="POST" action="javascript:void(0);">
                    <div>
                        <select class="form-control" name="" id="">
                                  <option value="">Visa</option>
                                  <option value="">Master Card</option>
                               </select>
                        </div>
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="form-group">
                                    <label for="cardNumber">CARD NUMBER</label>
                                    <div class="input-group">
                                        <input 
                                            type="tel"
                                            class="form-control"
                                            name="cardNumber"
                                            placeholder="Valid Card Number"
                                            autocomplete="cc-number"
                                            required autofocus 
                                        />
                                        <span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    </div>
                                </div>                            
                            </div>
                        </div>
                        
                        <div class="row">
                            <div class="col-xs-7 col-md-7">
                                <div class="form-group">
                                    <label for="cardExpiry"><span class="hidden-xs">EXPIRATION</span><span class="visible-xs-inline">EXP</span> DATE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control" 
                                        name="cardExpiry"
                                        placeholder="MM / YY"
                                        autocomplete="cc-exp"
                                        required 
                                    />
                                </div>
                            </div>
                            <div class="col-xs-5 col-md-5 pull-right">
                                <div class="form-group">
                                    <label for="cardCVC">CV CODE</label>
                                    <input 
                                        type="tel" 
                                        class="form-control"
                                        name="cardCVC"
                                        placeholder="CVC"
                                        autocomplete="cc-csc"
                                        required
                                    />
                                </div>
                            </div>
                        </div>
                       
                        <div class="row">
                            <div class="col-xs-12">
                                <button class="subscribe btn btn-success btn-lg btn-block" type="button">Start Subscription</button>
                            </div>
                        </div>
                        <div class="row" style="display:none;">
                            <div class="col-xs-12">
                                <p class="payment-errors"></p>
                            </div>
                        </div>
                    </form>
                </div>
            </div>            
            <!-- CREDIT CARD FORM ENDS HERE -->
           


                            </form>
 
                         </div>
                     </div>











                      
                    </div>
                  
                  </div>	
            </div>
		</div>
	</section>


    
@endsection