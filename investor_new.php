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


	<section class="section_inner ">
		<div class="container">
			<div class="col-md-12">

				<?php foreach ($investor_relation as $key => $value) { ?>
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
			<?php } ?>


				<div class="col-md-6 col-sm-6 col-xs-12 block_invester">
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
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">The Investment Trust of India Limited </a><img src="images/fin_arrow.png" alt="">
						        </h4>
						      </div>
						      <div id="collapse1" class="panel-collapse collapse in">
						        <div class="panel-body">
						        	<p>(earlier known as Fortune Financial Services India Limited)</p>
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
						        		Email: <a href="mailtocosecretary@itiorg.com">cosecretary@itiorg.com</a>  <br>
						        		Visit us: <a href="https://www.itigroup.co.in/">www.itigroup.co.in</a>
						        	</p>
						        </div>
						      </div>
						    </div>
						    <div class="panel panel-default">
						      <div class="panel-heading">
						        <h4 class="panel-title">
						          <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Registrar & Share Transfer Agents</a><img src="images/fin_arrow.png" alt="">
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
						        		Visit us: <a href="http://www.purvashare.com/">www.purvashare.com</a>
						        	</p>

						        </div>
						      </div>
						    </div>						 
						  </div> 					
				
						  <!-- accordion end -->

						</div>
					</div>
				</div>

			</div>
		</div>
	</section>


	<?php include_once('includes/footer.php'); ?>

<script>

</script>
</body>
</html>
