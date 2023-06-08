<?php session_start();
include('includes/db_config.php');

$sql_ir= "SELECT * FROM `investors_relations` ";

$result_ir = mysqli_query($db,$sql_ir);

while($row_ir = mysqli_fetch_array($result_ir)){
  $investor_relations[] = $row_ir;
}

$sql_investor_relation = "SELECT *,GROUP_CONCAT(`investors_relation_category`.category SEPARATOR ',') as cat ,GROUP_CONCAT(`investors_relation_category`.slug SEPARATOR ',') as slug FROM `investors_relations`
INNER JOIN `investors_relation_category` ON `investors_relations`.id = `investors_relation_category`.invesors_relation_id GROUP BY `investors_relations`.title ";
$result_products = mysqli_query($db,$sql_investor_relation);
while($row_services = mysqli_fetch_array($result_products)){
  $investor_relation[] = $row_services;
}



?>

<!DOCTYPE html>
<html>
<head>
	<title>The Investment Trust Of India | Investor Relations</title>

	<?php include_once('includes/header.php'); ?>

	<section class="section" id="">
		<div class="banner_about">
			<img src="images/invester/banner.jpg" alt="">
			<div class="banner_about_text">
				<!-- <p data-aos="fade-left" data-aos-delay="1100" class="shadow_text">INVESTER RELATIONS</p> -->
				<h1 data-aos="fade-left" data-aos-delay="1400">INVESTER RELATIONS</h1>
			</div>
		</div>
	</section>

	<section class="section_inner">
		<div id="exTab2" class="container">	
			<ul class="nav nav-tabs list_investor">
				<?php foreach ($investor_relation as $key_relation => $value) { 
 					$slug = explode(",",$value['slug']);
					?>

						<li <?php if($key_relation ==0 ):?>class="active"<?php endif;?> ><a class="list_value" href="#key_relation<?php echo $key_relation ?>" data-toggle="tab"><?php echo $value['title']; ?></a></li>

				<?php } ?>
					</ul>

					<div class="tab-content ">
					<?php foreach ($investor_relation as $key_relations => $value) { ?>

						 <div  class="<?php echo $key_relations == 0 ? 'tab-pane active':'tab-pane' ?>" id="key_relation<?php echo $key_relations ?>">
			          		<div class="block_cont">
								<div class="block_invest_img">
									<img src="<?php echo $value['image']; ?>" alt="" class="img-responsive">
								</div>

								<div class="block_text">
									<ul>
										<?php $cat = explode(",",$value['cat']); $slug = explode(",",$value['slug']); ?>
										<?php  foreach(array_combine($slug,$cat) as $ke => $c) { ?>

												<li><a href="download.php?slug=<?php echo $ke; ?>"><?php echo $c; ?><img src="images/fin_arrow.png" alt=""></a></li>

										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					<?php } ?>							
					</div>
		  </div>
	</section>

	<section class="section_inner conatct-bot_section">
		<div class="container">
			<div class="col-md-12">
				<!-- <?php foreach ($investor_relation as $key => $value) { ?>
				<div class="col-md-6 col-sm-6 col-xs-12 block_invester">
					<div class="main_title">
						<h2><?php echo $value['title']; ?></h2>
					</div>
					<div class="block_cont">
						<div class="block_invest_img">
							<img src="<?php echo $value['image']; ?>" alt="" class="img-responsive">
						</div>

						<div class="block_text">
							<ul>
								<?php $cat = explode(",",$value['cat']); $slug = explode(",",$value['slug']); ?>
								<?php  foreach(array_combine($slug,$cat) as $ke => $c) { ?>

										<li><a href="download.php?slug=<?php echo $ke; ?>"><?php echo $c; ?><img src="images/fin_arrow.png" alt=""></a></li>

								<?php } ?>
							</ul>
						</div>
					</div>
				</div>
			<?php } ?> -->

				<div class="block_invester col-md-12">
					<div class="main_title">
						<h2>Contact Information</h2>
					</div>
				</div>


				<div class="col-md-6">
					<div class="add-block">
						<h4 class="subtitle add-line">The Investment Trust of India Limited </h4>

						<div class="add-descri">
							<p>(Erstwhile Fortune Financial Services India Limited)</p>
						    <p>
						        CIN :   <strong>L65910MH1991PLC062067 </strong><br>
								Company Secretary & Compliance Officer, <br>
								Haroon Mansuri <br>
								Naman Midtown | “A” Wing 21st Floor | Unit No. 2103<br>
								Senapati Bapat Marg Elphinstone Road,<br>
								Mumbai - 400 013
						    </p>
						     <p>
							      <strong>Telephone:</strong> +91 22 4027 3600 <br>										
								  <strong>Fax:</strong> +91 22 4027 3700 										
						     </p>
						     <p>
						      <strong>Email:</strong> <a href="mailto:cosecretary@itiorg.com">cosecretary@itiorg.com</a>  <br>
						      <strong>  Visit us: </strong><a href="http://itiorg.com/" target="_blank">itiorg.com</a>
						     </p>
						</div>

					</div>
				</div>
				<div class="col-md-6">

					<div class="add-block">
						<h4 class="subtitle add-line">Registrar & Share Transfer Agents</h4>

						<div class="add-descri">
							<p>
						          <strong>Purva Sharegistry (India) Private Limited</strong>, <br>		
								(Unit : The Investment Trust of India Limited) <br>		
								Shivshakti Industrial Estate, Unit No.9 <br>		
								7/B, Sitaram Mill Compound, J.R. Boricha Marg <br>		
								Lower Parel, Mumbai – 400 011. 		
						    </p>
						    <p>
						          <strong>Telephone:</strong> +91-22-2301 6761 / 8261 <br>										
								  <strong>Fax :</strong> +91-22-2301 2517 									
						    </p>
						    <p>
						         <strong>Email:</strong> <a href="mailto:support@purvashare.com">support@purvashare.com</a> <br>
						          <strong>Visit us:</strong> <a href="http://www.purvashare.com/" target="_blank">www.purvashare.com</a>
						    </p>
						</div>

					</div>
					
				</div>
				<!-- <div class="block_invester">
					<div class="main_title">
						<h2>Contact Information</h2>
					</div>
					<div class="block_cont contact_info">
						<div class="block_invest_img">
							<img src="images/invester/contact.png" alt="" class="img-responsive">
						</div>

						<div class="block_text">

							<div class="panel-group" id="accordion">
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">The Investment Trust of India Limited <img src="images/fin_arrow.png" alt=""></a>
						        </h4>
						      </div>
						      <div id="collapse1" class="panel-collapse collapse in">
						        <div class="panel-body">
						        	<p>(Erstwhile Fortune Financial Services India Limited)</p>
						        	<p>
						        		CIN : L65910MH1991PLC062067 <br>
										Company Secretary & Compliance Officer, <br>
										Haroon Mansuri <br>
										Naman Midtown | “A” Wing 21st Floor | Unit No. 2103<br>
										Senapati Bapat Marg Elphinstone Road,<br>
										Mumbai - 400 013
						        	</p>
						        	<p>
						        		Telephone: +91 22 4027 3600 <br>										
										Fax: +91 22 4027 3700 										
						        	</p>
						        	<p>
						        		Email: <a href="mailto:cosecretary@itiorg.com">cosecretary@itiorg.com</a>  <br>
						        		Visit us: <a href="http://itiorg.com/" target="_blank">itiorg.com</a>
						        	</p>
						        </div>
						      </div>
						    </div>
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Registrar & Share Transfer Agents <img src="images/fin_arrow.png" alt=""></a>
						        </h4>
						      </div>
						      <div id="collapse2" class="panel-collapse collapse">
						        <div class="panel-body">
						        	<p>
						        		Purva Sharegistry (India) Private Limited, <br>		
										(Unit : The Investment Trust of India Limited) <br>		
										Shivshakti Industrial Estate, Unit No.9 <br>		
										7/B, Sitaram Mill Compound, J.R. Boricha Marg <br>		
										Lower Parel, Mumbai – 400 011. 		
						        	</p>
						        	<p>
						        		Telephone: +91-22-2301 6761 / 8261 <br>										
										Fax : +91-22-2301 2517 									
						        	</p>
						        	<p>
						        		Email: <a href="mailto:support@purvashare.com">support@purvashare.com</a> <br>
						        		Visit us: <a href="http://www.purvashare.com/" target="_blank">www.purvashare.com</a>
						        	</p>

						        </div>
						      </div>
						    </div>						 
						  </div> 					
				
						

						</div>
					</div>
				</div> -->
			

			</div>
		</div>
	</section>


	<?php include_once('includes/footer.php'); ?>

<script>

</script>
</body>
</html>
