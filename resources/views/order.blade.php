@extends('layouts/molla')

@section('title', 'Order')

@section('content')

        <main class="main">


            <div class="page-content">
            	<div class="checkout">
	                <div class="container">
            			<div class="checkout-discount">

            			</div><!-- End .checkout-discount -->
            			<form action="#">
		                	<div class="row">
		                		<div class="col-lg-9">

		                			<h2 class="checkout-title">Butir butir Pesanan</h2><!-- End .checkout-title -->
									
		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Nama *</label>
		                						<input type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>No Telefon Bimbit (WhatsApp) *</label>
		                						<input type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Username/Bot Telegram </label>
		                						<input type="text" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Email</label>
		                						<input type="email" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->										
										
	            						<label>Alamat / Address (Sila klik pada "Autocomplete" jika alamat bersamaan dengan autocomplete)</label>
	            						<input type="text" id="autocomplete" class="form-control" placeholder="Enter your Address or City or Location" onFocus="geolocate()">										

	            						<label>Street address *</label>
	            						<input type="text" name="" id="street_number" class="form-control" placeholder="House number and Street name" required>
	            						<input type="text" name="" id="route" class="form-control" placeholder="Appartments, suite, unit etc ..." required>
																			

	            						<div class="row">
		                					<div class="col-sm-6">
		                						<label>Bandar / Pekan / Daerah *</label>
		                						<input type="text" name="" id="locality" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>State / Negeri *</label>
		                						<input type="text" name="" id="administrative_area_level_1" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->

		                				<div class="row">
		                					<div class="col-sm-6">
		                						<label>Negara / Country *</label>
		                						<input type="text" name="" id="country" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->

		                					<div class="col-sm-6">
		                						<label>Zip / Postcode </label>
		                						<input type="text" name="" id="postal_code" class="form-control" required>
		                					</div><!-- End .col-sm-6 -->
		                				</div><!-- End .row -->


	                					<label>Nota Pesanan (tambahan)</label>
	        							<textarea class="form-control" cols="30" rows="4" placeholder="Notes about your order, e.g. special notes for delivery"></textarea>
		                		</div><!-- End .col-lg-9 -->
		                		<aside class="col-lg-3">
		                			<div class="summary">
		                				<h3 class="summary-title">Pesanan Anda</h3><!-- End .summary-title -->

		                				<table class="table table-summary">
		                					<thead>
		                						<tr>
		                							<th>Product</th>
		                							<th>Total</th>
		                						</tr>
		                					</thead>

		                					<tbody>
		                						<tr>
		                							<td><a href="#">Beige knitted elastic runner shoes</a></td>
		                							<td>$84.00</td>
		                						</tr>

		                						<tr>
		                							<td><a href="#">Blue utility pinafore denimdress</a></td>
		                							<td>$76,00</td>
		                						</tr>
		                						<tr class="summary-subtotal">
		                							<td>Subtotal:</td>
		                							<td>$160.00</td>
		                						</tr><!-- End .summary-subtotal -->
		                						<tr>
		                							<td>Shipping:</td>
		                							<td>Free shipping</td>
		                						</tr>
		                						<tr class="summary-total">
		                							<td>Total:</td>
		                							<td>$160.00</td>
		                						</tr><!-- End .summary-total -->
		                					</tbody>
		                				</table><!-- End .table table-summary -->

		                				<div class="accordion-summary" id="accordion-payment">
										    <div class="card">
										        <div class="card-header" id="heading-1">
										            <h2 class="card-title">
										                <a role="button" data-toggle="collapse" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
										                    Direct bank transfer
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-1" class="collapse show" aria-labelledby="heading-1" data-parent="#accordion-payment">
										            <div class="card-body">
										                Make your payment directly into our bank account. Please use your Order ID as the payment reference. Your order will not be shipped until the funds have cleared in our account.
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-2">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
										                    Check payments
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-2" class="collapse" aria-labelledby="heading-2" data-parent="#accordion-payment">
										            <div class="card-body">
										                Ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. 
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-3">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
										                    Cash on delivery
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-3" class="collapse" aria-labelledby="heading-3" data-parent="#accordion-payment">
										            <div class="card-body">Quisque volutpat mattis eros. Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. 
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-4">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-4" aria-expanded="false" aria-controls="collapse-4">
										                    PayPal <small class="float-right paypal-link">What is PayPal?</small>
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-4" class="collapse" aria-labelledby="heading-4" data-parent="#accordion-payment">
										            <div class="card-body">
										                Nullam malesuada erat ut turpis. Suspendisse urna nibh, viverra non, semper suscipit, posuere a, pede. Donec nec justo eget felis facilisis fermentum.
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->

										    <div class="card">
										        <div class="card-header" id="heading-5">
										            <h2 class="card-title">
										                <a class="collapsed" role="button" data-toggle="collapse" href="#collapse-5" aria-expanded="false" aria-controls="collapse-5">
										                    Credit Card (Stripe)
										                    <img src="assets/images/payments-summary.png" alt="payments cards">
										                </a>
										            </h2>
										        </div><!-- End .card-header -->
										        <div id="collapse-5" class="collapse" aria-labelledby="heading-5" data-parent="#accordion-payment">
										            <div class="card-body"> Donec nec justo eget felis facilisis fermentum.Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Lorem ipsum dolor sit ame.
										            </div><!-- End .card-body -->
										        </div><!-- End .collapse -->
										    </div><!-- End .card -->
										</div><!-- End .accordion -->

		                				<button type="submit" class="btn btn-outline-primary-2 btn-order btn-block">
		                					<span class="btn-text">Place Order</span>
		                					<span class="btn-hover-text">Proceed to Checkout</span>
		                				</button>
		                			</div><!-- End .summary -->
		                		</aside><!-- End .col-lg-3 -->
		                	</div><!-- End .row -->
            			</form>
	                </div><!-- End .container -->
                </div><!-- End .checkout -->
            </div><!-- End .page-content -->
        </main><!-- End .main -->


<script>

// This sample uses the Autocomplete widget to help the user select a

// place, then it retrieves the address components associated with that

// place, and then it populates the form fields with those details.

// This sample requires the Places library. Include the libraries=places

// parameter when you first load the API. For example:

// <script

// src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">


var placeSearch, autocomplete;

var componentForm = {

  street_number: 'short_name',

  route: 'long_name',

  locality: 'long_name',

  administrative_area_level_1: 'short_name',

  country: 'long_name',

  postal_code: 'short_name'

};

function initAutocomplete() {

  // Create the autocomplete object, restricting the search predictions to

  // geographical location types.

  autocomplete = new google.maps.places.Autocomplete(

      document.getElementById('autocomplete'), {types: ['geocode']});


  // Avoid paying for data that you don't need by restricting the set of

  // place fields that are returned to just the address components.

  autocomplete.setFields(['address_component']);

  // When the user selects an address from the drop-down, populate the

  // address fields in the form.

  autocomplete.addListener('place_changed', fillInAddress);   

}

function fillInAddress() {

  // Get the place details from the autocomplete object.

  var place = autocomplete.getPlace();

  for (var component in componentForm) {

    document.getElementById(component).value = '';

    document.getElementById(component).disabled = false;	

  }

  // Get each component of the address from the place details,

  // and then fill-in the corresponding field on the form.

  for (var i = 0; i < place.address_components.length; i++) {

    var addressType = place.address_components[i].types[0];

    if (componentForm[addressType]) {

      var val = place.address_components[i][componentForm[addressType]];

      document.getElementById(addressType).value = val;	

    }	

  }  

  loadDoc();

}


// Bias the autocomplete object to the user's geographical location,

// as supplied by the browser's 'navigator.geolocation' object.

function geolocate() {

  if (navigator.geolocation) {

    navigator.geolocation.getCurrentPosition(function(position) {

      var geolocation = {

        lat: position.coords.latitude,

        lng: position.coords.longitude

      };

      var circle = new google.maps.Circle(

          {center: geolocation, radius: position.coords.accuracy});

      autocomplete.setBounds(circle.getBounds());

    });	

   }  

}

</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDl10B-F8_z4_-WnLhpToooySlRFZSi6xw&libraries=places&callback=initAutocomplete" async defer></script>

<script>
function loadDoc() {

var address = document.getElementById("autocomplete").value;

  var xhttp = new XMLHttpRequest();

  xhttp.onreadystatechange = function() {

    if (this.readyState == 4 && this.status == 200) {

      //document.getElementById("demo").innerHTML = this.responseText;

	  var data = JSON.parse(this.responseText);	  				

					var lat = data.results[0].geometry.location.lat;

					var lng = data.results[0].geometry.location.lng;				

				//document.getElementById("lat").innerHTML = lat;

				//document.getElementById("lng").innerHTML = lng;				

				document.getElementById("lat").value = lat;

				document.getElementById("lng").value = lng;				

				document.getElementById("sub").disabled = false;				

				//location.href = "start.php?lat="+lat+"&lng="+lng+"&rad="+rad;
    }

  };

  xhttp.open("GET", "https://maps.googleapis.com/maps/api/geocode/json?address=" + address + "&key=AIzaSyDl10B-F8_z4_-WnLhpToooySlRFZSi6xw", true);

  xhttp.send();

}

function start(){
		

		var lat = document.getElementById("lat").value;

		var lng = document.getElementById("lng").value;

		//location.href = "start.php?lat="+lat+"&lng="+lng+"&rad="+rad;		

	}

</script>        

@endsection