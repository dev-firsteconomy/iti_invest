<?php session_start();

include('includes/db_config.php');
$id= $_REQUEST['id'];
$sql_products = "SELECT DISTINCT `create_services`.id as create_service_id,`create_services`.banner,`create_services`.title,`create_services`.btext_sm,
`products`.id as product_id,`products`.image,`products`.product_title,`products`.product_sub_title,`products`.description,`products`.company
FROM
`create_services`
INNER JOIN `products` ON `products`.service= `create_services`.id where `products`.service=".$id;

$result_products = mysqli_query($db,$sql_products);
$row_product=array();
if($result_products){
while($row_products = mysqli_fetch_array($result_products)){
  $row_product[] = $row_products;

}
}else{
  header('Location: index.php');
}

$count = count($row_product);
?>




<!DOCTYPE html>
<html>
<head>
	<title>The Investment Trust Of India </title>

	<?php include_once('includes/header.php'); ?>

	<section class="section" id="finance_block">
		<div class="banner_inner">
			<img src=<?php echo $row_product[0]['banner'] ?> alt="">
			<div class="banner_about_text">
				<span data-aos="fade-left" data-aos-delay="1100" class="shadow_text"><?php echo $row_product[0]['btext_sm'] ?></span>
				<h1 data-aos="fade-left" data-aos-delay="1400"><?php echo $row_product[0]['title'] ?></h1>
			</div>
		</div>
	</section>


	<section class="section_inner" id="it_blocks">
		<div class="container">
			<div class="fin_blocks_2">
				<ul >
				<?php

          			if(count($row_product)>0)
          				{
          				foreach ($row_product as $key => $value) {
                    //echo "<pre>";print_r($value);die;
                    $url=  $value['company'];
          				?>

					<li class="col-md-4 col-sm-6 <?php if($count==2){ echo "two_product";}elseif($count==5 && $key>2){  echo "five_product"; }elseif($count==4 && $key>2){  echo "four_product"; }else{ echo '';}?>" data-aos="fade-up" data-aos-delay="500">
						<div class="fin_inner">
							<div class="fin_img">
								<img src="<?php echo $value['image'] ;?>" alt="">
							</div>
							<div class="fin_title">
								<h4><?php echo $value['product_title'] ;?></h4>
								<span class="divider"></span>
									<h5 class="fin_subtitle"><?php echo $value['product_sub_title'] ;?></h5>
							</div>

                				<?php echo $value['description']; ?>

							<span class="fin_know_more ">
								<?php if($value['product_title'] != 'Micro Business Loan'){ ?><a href="product_description.php?id=<?php echo urlencode($url);?>&title=<?php echo preg_replace("|\s+|","", preg_replace("|[^a-zA-Z0-9\']|","",preg_replace("|\-|","", $value['product_title'] ))); ?>" id="<?php echo $value['product_title'] ;?>" class='know_more_click'>Know More <img src="images/fin_arrow.png" alt=""></a><?php }else{ ?>
                                          <a href="http://fccl.itiorg.com/" target="_blank" class="know_more_click">Know more</a>    
								<?php } ?>
							</span>
						</div>
					</li>

      <?php }
    }else{ ?>

                <li class="col-md-6" data-aos="fade-up" >
                  <div class="fin_inner">
                    <div style="background:#c7c9cc" class="alert alert-warning fade in .col-md-4">
                        <a href="#" class="close" data-dismiss="alert">&times;</a>
                        <strong>info!</strong> No Prodct Found
                    </div>
                 </div>
                </li>
  <?php } ?>



				</ul>
			</div>
		</div>
	</section>


	<?php include_once('includes/footer.php'); ?>

</body>
</html>
<!--

<li class="col-md-4" data-aos="fade-up" data-aos-delay="600">
						<div class="fin_inner">
							<div class="fin_img">
								<img src="images/finance/1.png" alt="">
							</div>
							<div class="fin_title">
								<h4>3 Wheeler Finance</h4>
								<span class="divider"></span>
								<h5 class="fin_subtitle">Lorem Ipsum is simply dummy text </h5>
							</div>

							<p>
								Our focus has always been catering to the people who are in dire need of financial services. We provide loans to the Three Wheeler Sector. It is a way to empower the first time buyers with the ability to become small entrepreneurs in their own way.
							</p>
							<span class="fin_know_more">
								<a href="product.php">Know More <img src="images/fin_arrow.png" alt=""></a>
							</span>
						</div>
					</li>
					<li class="col-md-4" data-aos="fade-up" data-aos-delay="800">
						<div class="fin_inner">
							<div class="fin_img">
								<img src="images/finance/2.png" alt="">
							</div>
							<div class="fin_title">
								<h4>Commercial Vehical Finance</h4>
								<span class="divider"></span>
								<h5 class="fin_subtitle">Lorem Ipsum is simply dummy text </h5>
							</div>
							<p>
								The idea is to give financial aid to people wanting to invest their money in commercial vehicles. Drivers who have always aimed of owning vehicles and not just driving them is our audience.
							</p>
							<span class="fin_know_more">
								<a href="#">Know More <img src="images/fin_arrow.png" alt=""></a>
							</span>
						</div>
					</li>
					<li class="col-md-4" data-aos="fade-up" data-aos-delay="1000">
						<div class="fin_inner">
							<div class="fin_img">
								<img src="images/finance/3.png" alt="">
							</div>
							<div class="fin_title">
								<h4>Gold Loan</h4>
								<span class="divider"></span>
								<h5 class="fin_subtitle">Lorem Ipsum is simply dummy text </h5>
							</div>
							<p>
								We have wide range of services for gold loans. It is important to cater to the household audience by providing financial services against gold.
							</p>
							<span class="fin_know_more">
								<a href="#">Know More <img src="images/fin_arrow.png" alt=""></a>
							</span>
						</div>
					</li>

					<li class="col-md-4" data-aos="fade-up" data-aos-delay="1200">
						<div class="fin_inner">
							<div class="fin_img">
								<img src="images/finance/4.png" alt="">
							</div>
							<div class="fin_title">
								<h4>Personal Loans </h4>
								<span class="divider"></span>
								<h5 class="fin_subtitle">Education Loans, Travel Loans and Medical Loans</h5>
							</div>
							<p>
								We take pride in helping others fulfil their dreams by giving them the right financial advice and the money to back their decisions. Our personal loans cover Travel loans, Educational Loans and Medical loans.
							</p>
							<span class="fin_know_more">
								<a href="#">Know More <img src="images/fin_arrow.png" alt=""></a>
							</span>
						</div>
					</li>
					<li class="col-md-4" data-aos="fade-up" data-aos-delay="1400">
						<div class="fin_inner">
							<div class="fin_img">
								<img src="images/finance/5.png" alt="">
							</div>
							<div class="fin_title">
								<h4>Education Institutional Loans </h4>
								<span class="divider"></span>
								<h5 class="fin_subtitle">Loan Against Property and Unsecured Loans</h5>
							</div>
							<p>
								Private educational institutions always require the best financial aid combined with effective management during its years of inception. We provide top financial services to such private institutions to facilitate quick expansion and higher student enrolment whenever possible.
							</p>
							<span class="fin_know_more">
								<a href="#">Know More <img src="images/fin_arrow.png" alt=""></a>
							</span>
						</div>
					</li>
					<li class="col-md-4" data-aos="fade-up" data-aos-delay="1600">
						<div class="fin_inner">
							<div class="fin_img">
								<img src="images/finance/6.png" alt="">
							</div>
							<div class="fin_title">
								<h4>SME Finance</h4>
								<span class="divider"></span>
									<h5 class="fin_subtitle">business/working capital, inventory funding, bill discounting - kapital tech</h5>
							</div>
							<p>
								Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
							</p>
							<span class="fin_know_more">
								<a href="#">Know More <img src="images/fin_arrow.png" alt=""></a>
							</span>
						</div>
					</li> -->
