<?php session_start();

include('includes/db_config.php');

$id= $_REQUEST['id'];
$title = $_REQUEST['title'];



$sql_products = "SELECT DISTINCT `create_services`.id, `create_services`.banner2,
 `products`.full_description,
 `products`.company,`products`.icon,`products`.product_title,`products`.image
 FROM `create_services`
  INNER JOIN `products` ON `create_services`.id = `products`.service
	WHERE `products`.company = '". $id ."'";






$result_products = mysqli_query($db,$sql_products);
$row_product=array();
if($result_products){
while($row_products = mysqli_fetch_array($result_products)){
  $row_product[] = $row_products;

}



}else{
  header('Location: index.php');
}



$sql_companies = "SELECT * FROM `companies` WHERE  `companies`.company_name = '". $id ."'";

$result_companies = mysqli_query($db,$sql_companies);

if($result_companies){
while($row_companies = mysqli_fetch_array($result_companies)){
  $companies = $row_companies;
}

// var_dump($companies['image']);die;
}else{
   header('Location: index.php');
}




$sql_mts = "SELECT * FROM `company_managements` WHERE  `company_managements`.company_id = '". $id ."'";

$result_mts = mysqli_query($db,$sql_mts);

if($result_mts){
while($row_mts = mysqli_fetch_array($result_mts)){
  $mts[] = $row_mts;
}

}else{
  header('Location: index.php');
}






$sql_mks = "SELECT * FROM `compant_key_personnels` WHERE  `compant_key_personnels`.company_id = '". $id ."'";


$result_mks = mysqli_query($db,$sql_mks);

if($result_mks){
while($row_mks = mysqli_fetch_array($result_mks)){
  $mks[] = $row_mks;
}

}else{
  header('Location: index.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>The Investment Trust Of India | Product Overview</title>

	<?php include_once('includes/header.php'); ?>

	<section class="section product_banner"  style="background-image:url(<?php echo $companies['image'] ;?>) !important;">
		<div class="container banner_product_container">
			<div class="banner_product">
				<div class="banner_product_text">
					<!-- <p data-aos="fade-left" data-aos-delay="1100" class="shadow_text"><?php echo  $row_banner_txt[0]['btext_sm2']  ;?></p> -->
					<h1 data-aos="fade-left" data-aos-delay="1400"><?php echo $row_product[0]['company'] ;?></h1>
					<!-- <a href="" class="cmp_know_more">Know more</a> -->
					<span class="fin_know_more">
								<a href="<?php echo $companies['url']?>" target="_blank">Know More <img src="images/fin_arrow.png" alt=""></a>
							</span>
				</div>
			</div>
		</div>

		<div class="container patch_head">
			<div class="row">


				<div class="col-md-7 col-sm-12">

					<?php if(!empty($row_product))
				{
				foreach ($row_product as $key => $value) {

				?>

				<div class="panel-group" id="accordion">
				    <div class="panel panel-default">
				      <div class="panel-heading <?php if(!empty($value['product_title'])){echo preg_replace("|\s+|","", preg_replace("|[^a-zA-Z0-9\']|","",preg_replace("|\-|","",$value['product_title'])));}?>" title="<?php if(!empty($value['product_title'])){echo preg_replace("|\s+|","", preg_replace("|[^a-zA-Z0-9\']|","",preg_replace("|\-|","",$value['product_title'])));}?>" id="heading_<?php echo $key; ?>" >
				        <h4 class="panel-title">
				           <a data-toggle="collapse" data-tab-id="<?php if(!empty($value['product_title'])){echo preg_replace("|\s+|","", preg_replace("|[^a-zA-Z0-9\']|","",preg_replace("|\-|","",$value['product_title'])));}?>" class="pro_<?php echo $key; ?> accd" data-parent="#accordion" href="#collapse<?php echo $key; ?>">
					          	<div class="row patch_content">
									<div class="col-md-2 col-xs-2">
										<img src="<?php echo $value['icon']?>" >
									</div>
									<div class="col-md-10 col-xs-10 patch_text">

										<?php echo $value['product_title']; ?>
									</div>
								</div>
				          	</a>
				        </h4>
				      </div>

 						<div id="collapse<?php echo $key;?>" class="panel-collapse collapse cols_<?php if(!empty($value['product_title'])){echo preg_replace("|\s+|","", preg_replace("|[^a-zA-Z0-9\']|","",preg_replace("|\-|","",$value['product_title'])));}?> ">
				           <div class="panel-body patch_line">
                    			 <img class="img-rounded img_mobile lg-hidden" alt="Cinque Terre" src= "<?php echo $value['image']; ?>" >
					       	    <?php echo $value['full_description']; ?>
				    	   </div>
				        </div>
				     </div>
				</div>
			<?php }} ?>

				</div>

				<div class="col-md-5 col-sm-12 hidden-xs hidden-sm visible-lg">

					<?php if(!empty($row_product))
					{

					foreach ($row_product as $key => $value) {
					?>
					<div class="tb-img" id="img_<?php if(!empty($value['product_title'])){echo preg_replace("|\s+|","", preg_replace("|[^a-zA-Z0-9\']|","",preg_replace("|\-|","",$value['product_title'])));}?>">
            <img  class="img-rounded" alt="Cinque Terre" src= "<?php echo $value['image']; ?>" >

					</div>

				<?php }

			} ?>


				

				</div>
			</div>
		</div>




	</section>

	<section class="section_inner section_team">
		<div class="container section_team_container">
			<div class="text-center">

				<?php if(!empty($mts))
				{?>
				<h2 class="main_title">Management team</h2>

				<?php }?>
			</div>




			<div class="row management_team">


				<?php if(!empty($mts))
				{
				foreach ($mts as $key => $value) {
					//echo "<pre>";print_r($value);die;

				?>


				<div class="col-md-6 col-sm-6 block_manage">
							<div class="m_img_m_title">
								<div class="manage_image">
									<img src="<?php echo $value['image']; ?>">
								</div>

								<div class="manage_designation">

									<h4><?php echo $value['management_title']; ?></h4>

								</div>
							</div>
							<div class="team_detail">

							 <?php echo $value['management_team']; ?>
					</div>

				</div>

				<?php }} ?>
			</div>

			<div class="text-center">

				<?php if(!empty($mks))
				{?>
				<h2 class="main_title">Key managerial personnel</h2>
			<?php }?>

			</div>

			<div class="row">

				<?php if(!empty($mks))
				{
				foreach ($mks as $key => $value) {
					//echo "<pre>";print_r($value);die;

				?>


				<div class="col-md-6 col-sm-6 block_manage">
							<div class="m_img_m_title">
								<div class="manage_image">
									<img src="<?php echo $value['image']; ?>">
								</div>

								<div class="manage_designation">
									<h4><?php echo $value['keypersonnel_title']; ?></h4>

								</div>
							</div>
							<div class="team_detail">
								<?php echo $value['keypersonnel_content']; ?>
							</div>

				</div>

				<?php }} ?>

			</div>
		</div>
	</section>

	<?php if(!empty($url))
	{
	?>
	<section class="section_inner section_contact">
		<div class="container contact_container">
			<div class="contact_head">
				<div class="col-md-6 col-sm-12 col-xs-12">
					<h2 class="main_title">Contact Information</h2>
					<span class="line"></span>
				</div>

				<div class="col-md-6 col-sm-12 col-xs-12">
					<a href="#"><button class="btn_enquire">ENQUIRE NOW</button></a>
				</div>
			</div>
		</div>
		<div class="container contact_info">

				<?php echo $url['note_area']; ?>
				<!-- <h4>Date of incorporation:	08-09-2012 </h4>
				<h4>RBI NBFC Regn.No. N-13.02057 dated 7th November,2013 </h4>
				<h4>Corporate Identification Number: U65923MH2012PLC235450</h4> -->
		</div>
		<div class="container">
			<div class="row">
				<div class="col-md-5 col-md-offset-1 contact_block">
					<div class="col-md-2 col-sm-2 col-xs-2">
						<img src="images/product/icon/1.png">
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10">
						<p>
							<?php echo $url['address']; ?>
						</p>
					</div>
				</div>


				<div class="col-md-5 col-md-offset-1 contact_block">
					<div class="col-md-2 col-sm-2 col-xs-2">
						<img src="images/product/icon/2.png">
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10">
						<p><?php echo $url['phone']; ?></p>
					</div>
				</div>
			</div>
			<div class="clearfix"></div>
			<div class="row">
				<div class="col-md-5 col-md-offset-1 contact_block">
					<div class="col-md-2 col-sm-2 col-xs-2">
						<img src="images/product/icon/3.png">
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10">
						<p> <?php echo $url['website']; ?></p>
					</div>
				</div>

				<div class="col-md-5 col-md-offset-1 contact_block">
					<div class="col-md-2 col-sm-2 col-xs-2">
						<img src="images/product/icon/4.png">
					</div>
					<div class="col-md-10 col-sm-10 col-xs-10">
						<p><?php echo $url['email']; ?> </p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<?php } ?>


	<?php include_once('includes/footer.php'); ?>

<script>

		$(document).ready(function() {

		
		function getParameterByName(name) {
            name = name.replace(/[\[]/, "\\\[").replace(/[\]]/, "\\\]");
            var regexS = "[\\?&]" + name + "=([^&#-,]*)";
            var regex = new RegExp(regexS);
            var results = regex.exec(window.location.search);
            if (results == null)
                return "";
            else
                return decodeURIComponent(results[1].replace(/\+/g, " "));
        }
	
		var title = getParameterByName('title'); 
		
        // var title = '<?php // echo $title; ?>';
        title = title.replace(/[^A-Z0-9]/ig, "");
         
        $(".panel-heading").on('click',function(){
            var tit = $(this).attr('title');

               $(this).removeClass('active');
               $('.cols_'+title).removeClass('in'); 
            	
        });

        $("."+title).addClass('active');
        $(".cols_"+title).addClass('in');

      	$('.tb-img').addClass('hide');
     	$('#img_'+title ).removeClass('hide');

			$('.panel-collapse').on('show.bs.collapse', function () {
				$(this).siblings('.panel-heading').addClass('active');
			});

			$('.panel-collapse').on('hide.bs.collapse', function () {
	 		$(this).siblings('.panel-heading').removeClass('active');
	  		});

			$('.accd').on('click',function(){
				var tabid = $(this).data('tab-id');
				
				$('.tb-img').addClass('hide');
				$(".collapse").collapse('hide');
				$('#img_'+tabid ).removeClass('hide');
        	});

        	var $collapsible = $('.collapse ');


// Target the inner accordion item header

		});



</script>
</body>
</html>
