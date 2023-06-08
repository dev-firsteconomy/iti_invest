<!DOCTYPE html>
<html>
<head>
	<title>The Investment Trust Of India | Contact Us</title>	

	<?php include_once('includes/header.php'); ?>
<style type="text/css">
	.error{border:1px solid red !important;}
</style>
	<section class="section" id="">
		<div class="banner_about">
			<img src="images/invester/banner.jpg" alt="">
			<div class="banner_about_text">
				<!-- <p data-aos="fade-left" data-aos-delay="1100" class="shadow_text">Always within your reach</p> -->
				<h1 data-aos="fade-left" data-aos-delay="1400">Always within your reach</h1>
			</div>
		</div>		
	</section>
    
	
	<section class="section_inner ">		
		<div class="container">
			<input type="hidden" name="addresses" value="" />
			<input type="hidden" name="latlang" value="" />

			<div class="navi_sides">
				<h4></h4>
			<!-- 	<ul class="nav_lists">
					<li class="zones">North</li>
					<li class="zones">South</li>
					<li class="zones">East</li>
					<li class="active zones" id="defaultzone">West</li>
				</ul> -->
			</div>
			<div class="col-md-12 col-sm-12 col-xs-12 city_select">
					<div class="form-group col-md-6 asdf">
					  <label for="optn_business">Select Zone</label>
					  <select class="form-control" id="optn_business">
					  	<option value="">Select Zone</option>
					  	<option value="North">North</option>
					  	<option value="East">East</option>
					  	<option  value="West">West</option>
					  	<option value="South">South</option>
					  </select>
					</div>
					<div class="form-group col-md-6 asdf">
					  <label for="optn_state">Select State</label>
					  <select class="form-control" id="optn_state">
					  	<option value="state">select state</option>
					  	</select>
					</div>
					<!-- <div class="form-group col-md-3 asdf">
					  <label for="optn_city">Select city</label>
					  <select class="form-control" id="optn_city">
					  	<option value="city">select city</option>
					  	</select>
					</div>
					<div class="form-group col-md-3 asdf">
					  <label for="select_branch">Select Branch</label>
					  <select class="form-control" id="select_branch">
					  	<option value="branch">select Branch</option>
					  	</select>
					</div> -->
			</div>

			<div class="col-md-12 col-sm-12 col-xs-12">
				<div class="col-md-6 col-sm-12 col-xs-12 block_addr">
						<div class="col-md-12 col-sm-12 col-xs-12">
							<h3 class="city_name">Mumbai</h3>
							<span class="cmp_line"></span>
						</div>
						<div class="col-md-12 col-sm-12 col-xs-12 addlist no-padding">
							<!-- <div class="col-md-6 col-sm-6 col-xs-12">
							<div class="addr_cmp active" >
								<p>Fortune Integrated Assets Finance Ltd
								D.No: 42-527-1-2-3,2Nd Floor,
								Room No:1,Andhra Bank Building,
								N.G.O.Colony, Kadapa - 516001</p>
							</div>
						</div>
					
						
						<div class="col-md-6 col-sm-6 col-xs-12">
							<div class="addr_cmp">
								<p>Fortune Integrated Assets Finance Ltd
								D.No: 42-527-1-2-3,2Nd Floor,
								Room No:1,Andhra Bank Building,
								N.G.O.Colony, Kadapa - 516001</p>
							</div>
						</div> -->
						</div>				
				</div>

				<div class="col-md-6 col-sm-12 col-xs-12">
					<div id="map" style="width: 100%; height: 500px;"></div>
				</div>
			</div>
		</div>
	</section>
		<section class="section_inner">

		<div class="container">
			<div class="col-md-12">
				<h2 class="title_enquire">Enquire With Us</h2>
			</div>
			<form class="block_enqiure" id="con_form" method="post" href="javascript:void(0);">
				<div class="row">
					<div class="col-md-4 form-group">
						<select class="form-control" name="company_name" id="company_name">
							<option value="">Company Name</option>
							<option value="Fortune Credit Capital Limited">Fortune Credit Capital Limited</option>
							<option value="Fortune Integrated Assets  Finance Limited">Fortune Integrated Assets  Finance Limited </option>
							<option value="United Petro Finance Limited">United Petro Finance Limited</option>
							<option value="Intime Equities Limited">Intime Equities Limited</option>
							<option value="Intime Multi Commodity Company Limited">Intime Multi Commodity Company Limited</option>
							<option value="Antique Stock Broking Limited">Antique Stock Broking Limited</option>
							<option value="ITI Asset Management Limited">ITI Asset Management Limited</option>
							<option value="Inga Capital Private Limited">Inga Capital Private Limited</option>
							<option value="ITI Gilts Pvt. Ltd.">ITI Gilts Pvt. Ltd.</option>
							<option value="ITI Nirman Limited">ITI Nirman Limited</option>
							<option value="IRC Credit Management Private Limited">IRC Credit Management Private Limited</option>
							<option value="Fortune Integrated Home Finance Limited ">Fortune Integrated Home Finance Limited </option>
							<option value="Distress Assets Specialist Pvt. Ltd.">Distress Assets Specialist Pvt. Ltd.</option>
							<option value="ITI Mutual Fund Trustee Pvt. Ltd.">ITI Mutual Fund Trustee Pvt. Ltd.</option>
							<option value="The Investment Trust of India Ltd.">The Investment Trust of India Ltd.</option>
							<option value="ITI Reinsurance Ltd.">ITI Reinsurance Ltd.</option>
							<option value="Group HR">Group HR</option>
							<option value="Group Accounts">Group Accounts</option>
							<option value="Company Secretary">Company Secretary</option>
						</select>
					</div>


					<div class="col-md-4 form-group">
						<select class="form-control" name="organisation" id="organisation">
							<option value="">Select Of Your Organisation</option>
							<option value="HNIs NRIs">HNIs &amp; NRIs </option>
							<option value="Small Medium Business">Small &amp; Medium Businesses</option>
							<option value="NGOs">NGOs</option>
							<option value="Corporates">Corporates</option>
							<option value="DSASourcing Partners">DSA &amp; Sourcing Partners</option>
							<option value="RSPs">RSPs</option>
							<option value="Banks">Banks</option>
							<option value="Vendors">Vendors</option>
						</select>
					</div>

					<div class="col-md-4 form-group">
						<input type="text" class="form-control" name="name" id="name" placeholder="Full Name" required>
					</div>

					<div class="clearfix"></div>

					<div class="col-md-4 form-group">
						<input type="email" class="form-control" name="email" id="email" placeholder="Email ID" required>
					</div>

					<div class="col-md-4 form-group">
						<input type="tel" class="form-control" name="phone" id="phone" placeholder="Phone Number" required>
					</div>

					<div class="col-md-4 form-group">
						<input type="text" class="form-control" name="city" id="city" placeholder="City" required>
					</div>

					<div class="clearfix"></div>

					<div class="col-md-4 form-group">
						<input type="text" class="form-control" name="state" id="state" placeholder="State" required>
					</div>

					<div class="col-md-8 form-group">
						<input type="text" class="form-control" name="description" id="description" placeholder="Description" required>
					</div>

				</div>
				<div class="row text-right btn_down">
					<input type="submit" class="btn_submit" value="Submit" id="submit">
					<input type="reset" class="btn_reset" value="Reset">
				</div>
				<div class="text-center"><span class="success" style="color:green !important;"></span>
                <span class="danger" style="color:red !important;"></span></div>
			</form>
		</div>

	</section>

	
	
	<?php include_once('includes/footer.php'); ?>
     <script src="https://maps.google.com/maps/api/js?sensor=false&key=AIzaSyB-5lZV9KXZyFB-lAx7PkKS0BLOU1YxeOE" type="text/javascript"></script>
<!-- AIzaSyDkUUrQg4APnBQaFu86zWWA1pOL7ZO77rM -->

  
  <script type="text/javascript">
  	$(document).ready(function() {
            $('#submit').on('click', function(eve) {
                var company_name =$("select[name='company_name']").val();
                var organisation=$("select[name='organisation']").val();
                var name=$("input[name='name']").val();
                var email=$("input[name='email']").val();
                var mobile=$("input[name='phone']").val();
                var city =$("input[name='city']").val();
                var state=$("input[name='state']").val();
                var description=$("input[name='description']").val();
                var EmailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/i;
			    var phonePattern = /^[0-9]*$/;
                var flag = 0;   
				if(name != '' && name!= null)
				{
					$('#name').removeClass('error');
				}
				else
				{
					$('#name').addClass('error');
					flag++;
				}

				if(EmailPattern.test(email) && email != '' && email!= null)
				{
					$('#email').removeClass('error');
				}
				else
				{
					$('#email').addClass('error');
					flag++;
				}

				if(phonePattern.test(mobile) && mobile != '' && mobile!= null)
				{
					$('#mobile').removeClass('error');
				}
				else
				{
					$('#mobile').addClass('error');
					flag++;
				}

				if(state != '' && state!= null)
				{
					$('#state').removeClass('error');
				}
				else
				{
					$('#state').addClass('error');
					flag++;
				}

				if(city != '' && city!= null)
				{
					$('#city').removeClass('error');
				}
				else
				{
					$('#city').addClass('error');
					flag++;
				}

				if(state != '' && state!= null)
				{
					$('#state').removeClass('error');
				}
				else
				{
					$('#state').addClass('error');
					flag++;
				}

				if(description != '' && description!= null)
				{
					$('#description').removeClass('error');
				}
				else
				{
					$('#description').addClass('error');
					flag++;
				}

				if(flag==0)
		        {
					$('#submit').attr('disabled',true);
		            $('#submit').val('Please wait..');
                //console.log( $('form').serialize());
                  var ajax_data = {
                        company_name:company_name,
                        organisation:organisation,
                        name: name,
                        email:email,
                        mobile: mobile ,
                        city:city,
                        state:state,
                        description:description
                      };
                eve.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: 'form_submit.php',
                    data: ajax_data,
                     success: function(result) {
                     	    $("#submit").val('Submit'); 
                     	    $("#submit").attr('disabled',false); 
                            $('#con_form').trigger('reset');
                            if (result == 1) {
                               
                                $('.success').html('');
                                $('.success').html('Thank you for feedback');

                                setTimeout(function() {
                                    $('.success').html('');
                                }, 3000);

                            } else {
                                $('.danger').html('Something went wrong');
                            }
                        },
                        error: function() {
                            $('#con_form').trigger('reset');
                            $('.danger').html('Something went wrong');
                        }
                });
            };
        });
      });      
     $(document).ready(function(){
     
     	var host_url = location.protocol + "//" + location.host;
          $("#optn_business").on("change",function(){
  			var zone = $('#optn_business').val();	
             //var zone = $(this).text();

              //$(this).addClass('active').siblings().removeClass('active');
             if(zone.length > 0){
             	var formdata = {zone : zone};

		            $.ajax({
		                url: host_url+"/fetch_state.php",
		                type: 'POST',
		                data: formdata,
		                success: function(res) {
		                    if(res)
		                    {
		                     
		                        $("#optn_state").html(res);
		                        var city1 = $('#optn_state').val();
               				 	var city = city1.replace("_", " ");
		                        	var formdata = {city : city};
						            $.ajax({
						                url: host_url+"/fetch_address.php",
						                type: 'POST',
						                data: formdata,
						                success: function(res) {
						                    if(res)
						                    {
						                        $(".city_name").html(city);	
						                        $(".addlist").html(res);
						                    }
						                   
						                }
						            });
		                    }
		                   
		                }
		            });
             }
          });

          $("body").on("change","#optn_state",function(){
               var city1 = $(this).val();
               var locations = new Array();
               var city = city1.replace("_", " ");
               if(city.length > 0){
               
             	var formdata = {city : city};

		            $.ajax({
		                url: host_url+"/fetch_address.php",
		                type: 'POST',
		                data: formdata,
		                success: function(res) {
		                    if(res)
		                    {
		                        $(".city_name").html(city);	
		                        $(".addlist").html(res);
		                        $('.addr_cmp').each(function(){
										var loc = new Array();	
										

										loc.push($(this).attr('lat')); 
										loc.push($(this).attr('lng')) ;
										loc.push($(this).attr('state'));
										loc.push($(this).attr('addr'));
										locations.push(loc);
									});

									//console.log(locations);
									//return false;
									
									var map = new google.maps.Map(document.getElementById('map'), {
							      zoom: 7,
							      center: new google.maps.LatLng(locations[0][0], locations[0][1]),
							     //center: new google.maps.LatLng(15.4935265,73.8186561),
							      mapTypeId: google.maps.MapTypeId.ROADMAP
							    });
							 
							    var infowindow = new google.maps.InfoWindow();

							    var marker, i;
							    for (i = 0; i < locations.length; i++) {
							      marker = new google.maps.Marker({
							        position: new google.maps.LatLng(locations[i][0], locations[i][1]),
							        map: map
							      });
							      
									
							      google.maps.event.addListener(marker, 'click', (function(marker, i) {
							        return function() { 
							          infowindow.setContent(locations[i][3]);
							          infowindow.open(map, marker);
							        }
							      })(marker, i));
							    }
		                    }
		                   
		                }
		            });
             }
          });

          function InitializeMap() {
	        var latlng = new google.maps.LatLng(15.4935265,73.8186561);
	        var myOptions =
	        {
	            zoom: 8,
	            center: latlng,
	            mapTypeId: google.maps.MapTypeId.ROADMAP,
	            disableDefaultUI: true
	        };
	        map = new google.maps.Map(document.getElementById("map"), myOptions);

	        var marker, i;
							  
							      marker = new google.maps.Marker({
							        position: new google.maps.LatLng(latlng),
							        map: map
							      });
	    
        }
        
             $("#defaultzone").click();
             InitializeMap();  
    });
    
    

  </script>
</body>
</html>