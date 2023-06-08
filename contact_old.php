<?php session_start();
include('includes/config.php');
$categorylist = array();
$location = array();
$sql_state = "SELECT distinct `state` as `state` FROM `branch_locator` ORDER BY state ";
$result_state = mysqli_query($db,$sql_state);

while($row_state = mysqli_fetch_array($result_state)){

    $rows_state[] = $row_state;

}

$url_state = $_REQUEST['state'];

$latelong = "select `address`,`lat`,`long` from branch_locator where state = '".$url_state."'";

$result_latlong = mysqli_query($db,$latelong);
 

while($result_latlongs = mysqli_fetch_assoc($result_latlong)){

  $comma_separated[] = $result_latlongs;

}


 
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Investment Trust Of India | Contact Us</title>	

	<?php include_once('includes/header.php'); ?>

	<section class="section" id="">
		<div class="banner_about">
			<img src="images/invester/banner.jpg" alt="">
			<div class="banner_about_text">
				<!-- <p data-aos="fade-left" data-aos-delay="1100" class="shadow_text">Always within your reach</p> -->
				<h1 data-aos="fade-left" data-aos-delay="1400">Always within your reach</h1>
			</div>
		</div>		
	</section>
    <?php
    if(isset($_GET['state'])){
        $state = $_GET['state'];
    }else{
        $state = 'Andhra Pradesh';
    }
    $sql_state_data = "select * from branch_locator where state = '$state'" ;

    $result_state_data = mysqli_query($db,$sql_state_data);

    while($row_state_data = mysqli_fetch_assoc ($result_state_data)) {
        $state_data[] = $row_state_data;
    }


    
    ?>
	
	<section class="section_inner ">
		
		<div class="container">
			<div class="col-md-4">
					<h2 class="contact_title">Locate Us</h2>
					
                    
					<h4 class="branches_title">Branches Across India</h4>
					<span class="line_branch"></span>
				
					<div class="block_contact">
						<div class="">
							<form >
								<div class="form-group asdf list_location">
									<select class="form-control" onchange="javascript:location.href = 'contact.php?state='+this.value;">
                                        <?php if(!empty($rows_state)){
                                          foreach($rows_state as $k => $v_state)
                                          {
                                              $compare_state = rtrim($v_state[0], " ");
                                            
                                        ?>
                                              
                                            <option class="opt" lat="<?php echo $v_state[1] ; ?>" lng="<?php echo $v_state[2] ; ?>" value="<?php echo $v_state[0] ; ?>" <?php if((string)$state == (string)$compare_state) { echo "selected" ; } ?>><?php echo $v_state[0] ; ?></option>
                                        <?php }} ?>
	                         	   </select>
								</div>
							</form>
						</div>

						<div class="iti_address">
                             <h5 class="add_title">Registered and Corporate Office address:</h5>
							 <div class="address">
                                 <?php if(!empty($state_data)){

                                   foreach ($state_data as $key => $value) {
                                    
                                 ?>
                                       <div class="main" addr="<?php echo preg_replace('|\"|','',$value['address']); ?>" lat="<?php echo $value['lat']; ?>" lng="<?php echo $value['long']; ?>" state="<?php echo $value['state']; ?>"  id="content_<?php echo $value['id']; ?>"><?php echo $value['address']; ?></div>
                                 <?php
                                 }}
                                 ?>
                             </div>
						</div>
					</div>
			</div>

			<div class="col-md-7 col-md-offset-1 map_mob">
				
					<div id="map" style="width: 100%; height: 600px;"></div>
			
			</div>
		</div>
	</section>

	<!-- <section class="section_inner">

		<div class="container">
			<div class="col-md-12">
				<h2 class="title_enquire">Enquire With Us</h2>
			</div>
			<form class="block_enqiure">
				<div class="row">
					<div class="col-md-4 col-sm-6 form-group">
						<select class="form-control">
							<option value="">Company Name</option>
							<option value="">Fortune Credit Capital Limited</option>
							<option value="">Fortune Integrated Assets  Finance Limited </option>
							<option value="">United Petro Finance Limited</option>
							<option value="">Intime Equities Limited</option>
							<option value="">Intime Multi Commodity Company Limited</option>
							<option value="">Antique Stock Broking Limited</option>
							<option value="">ITI Asset Management Limited</option>
							<option value="">Inga Capital Private Limited</option>
							<option value="">ITI Gilts Pvt. Ltd.</option>
							<option value="">ITI Nirman Limited</option>
							<option value="">IRC Credit Management Private Limited</option>
							<option value="">Fortune Integrated Home Finance Limited </option>
							<option value="">Distress Assets Specialist Pvt. Ltd.</option>
							<option value="">ITI Mutual Fund Trustee Pvt. Ltd.</option>
							<option value="">The Investment Trust of India Ltd.</option>
							<option value="">ITI Reinsurance Ltd.</option>
							<option value="">Group HR</option>
							<option value="">Group Accounts</option>
							<option value="">Company Secretary</option>
						</select>
					</div>


					<div class="col-md-4 col-sm-6 form-group">
						<select class="form-control">
							<option value="">Select Of Your Organisation</option>
							<option value="">HNIs &amp; NRIs </option>
							<option value="">Small &amp; Medium Businesses</option>
							<option value="">NGOs</option>
							<option value="">Corporates</option>
							<option value="">DSA &amp; Sourcing Partners</option>
							<option value="">RSPs</option>
							<option value="">Banks</option>
							<option value="">Vendors</option>
						</select>
					</div>

					<div class="col-md-4 col-sm-6 form-group">
						<input type="text" class="form-control" name="name" placeholder="Full Name">
					</div>

					

					<div class="col-md-4 col-sm-6 form-group">
						<input type="email" class="form-control" name="email" placeholder="Email ID">
					</div>

					<div class="col-md-4 col-sm-6 form-group">
						<input type="tel" class="form-control" name="phone" placeholder="Phone Number">
					</div>

					<div class="col-md-4 col-sm-6 form-group">
						<input type="text" class="form-control" name="city" placeholder="City">
					</div>

				

					<div class="col-md-4 col-sm-4 form-group">
						<input type="text" class="form-control" name="state" placeholder="State">
					</div>

					<div class="col-md-8 col-sm-8 form-group">
						<input type="text" class="form-control" name="Description" placeholder="Description">
					</div>

				</div>
				<div class="row text-right btn_down">
					<input type="submit" class="btn_submit" value="Submit">
					<input type="reset" class="btn_reset" value="Reset">
				</div>
			</form>
		</div>

	</section>
 -->
	
	<?php include_once('includes/footer.php'); ?>
     <script src="http://maps.google.com/maps/api/js?sensor=false&key=AIzaSyCPLaTboCJrq0dwB4IbnTZVxP1gmApt7IM" type="text/javascript"></script>


  
  <script type="text/javascript">
    $(document).ready(function(){
    	var locations = new Array();
        var lat = "";
        var lng = "";     
        var state = "";                      
        var address = "";                      
        var individual_result = []; 
		$(".asdf").each(function(){
			
		$('.main').each(function(){
			var loc = new Array();
			loc.push($(this).attr('lat')); 
			loc.push($(this).attr('lng')) ;
			loc.push($(this).attr('state'));
			loc.push($(this).attr('addr'));
			locations.push(loc);
			console.log(locations);return false;
		});
        

		});
		
		var map = new google.maps.Map(document.getElementById('map'), {
      zoom: 7,
      center: new google.maps.LatLng(locations[0][0], locations[0][1]),
      //center: new google.maps.LatLng(-33.92, 151.25),
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
    });



    
  </script>
</body>
</html>