<?php include('header.php');?>
<div class="clearfix"></div>
<div class="form-back">
  <div class="container ">
  <div class="col-md-12 col-sm-12 col-lg-12   contact-border">
<div class="booking-margin">  

  <h2><span class=" txt_top contct"><b>Book Your Trip</span></h2>
 <form action="/action_page.php">
      
          <div class="col-md-6 col-sm-6 col-lg-6">
          	<div class="grid-container">
            <h3><b>Your Details</b></h3>
            <label for="title"> Title
            	<select>
				  <option value="Mr">Mr</option>
				  <option value="Mrs">Mrs</option>
				  <option value="Miss">Miss</option>
				</select>
            </label>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="firstname" placeholder="John M. Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="text" id="email" name="email" placeholder="john@example.com">
            <label for="mobile"><i class="fa fa-mobile"></i>Mobile</label>
            <input type="text" id="mobile" name="mobile" placehoder="0415678979">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="New York">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="state" name="state" placeholder="NY">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="text" id="zip" name="zip" placeholder="10001">
              </div>
              <div class="col-50">
                <label for="zip">Name Of People *</label>
                <input type="text" id="nPeople" name="nPeople" placeholder="Ram Sharma">
              </div>
              <div class="col-50">
                <label for="numberOfRooms">Number Of Rooms</label>
                <input type="text" id="numberOfRooms" name="numberOfRooms" placeholder="1">
              </div>
               <div class="col-50">
                <label for="arrivalDateTime">Arrival Date/Time</label>
                <input type="text" id="arrivalDateTime" name="arrivalDateTime" placeholder="29/02/20 | 08:00 p.m">
              </div>
              <div class="col-50">
                <label for="numOfNights">Number Of Nights</label>
                <input type="numOfNights" id="numOfNights" name="numOfNights" placeholder=" 2 ">
              </div> 
              <div class="col-50">
                  <label for="Occupancy">Occupancy</label>
				  <input type="radio" name="Occupancy" value="single"> Single<br>
				  <input type="radio" name="Occupancy" value="twin"> Twin<br>
				  <input type="radio" name="Occupancy" value="double"> Double<br> 
			  </div> 
			   <div class="col-50">
			   	<label for="info">Additional Info:</label>
                   <textarea class="form-control" style="height:90px"></textarea>
                        </div>
			   </div>           
            </div>
          </div>

          <div class="col-md-6 col-sm-6 col-lg-6">
            <h3><b>Payment Information</b></h3>
            <label for="fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="expmonth" name="expmonth" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="352">
              </div>
            </div>
          </div>
        
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Continue to checkout" class="btn">
      </form>

  </div><!--/contact-margin-------->
</div>
</div>
</div>
<div class="clearfix"></div>		

<?php include('footer.php');?>