<?php session_start();

include('includes/db_config.php');

$id= $_REQUEST['id'];
$title = $_REQUEST['title'];

// var_dump($id,$title);die;

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

$sql_service = "SELECT `products`.service,`products`.company From `products` WHERE `products`.company = '". $id ."'";

$result_service = mysqli_query($db,$sql_service);

if($result_service){
while($row_service = mysqli_fetch_assoc($result_service)){
  $service = $row_service;
}
}

$sql_more = "SELECT DISTINCT `create_services`.id as create_service_id,`create_services`.title,
`products`.id as product_id,`products`.product_title,`products`.company,`products`.icon
FROM
`create_services`
INNER JOIN `products` ON `products`.service= `create_services`.id where `products`.service=".$service['service'];

$result_more = mysqli_query($db,$sql_more);
$mores=array();
if($result_more){
while($more = mysqli_fetch_array($result_more)){
  $mores[] = $more;

}
// var_dump($mores);die;
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

$all_companies = [];
$sql_all_companies = "SELECT id,company_name FROM `companies`";
$sql_all_companies_result = mysqli_query($db, $sql_all_companies);
while ($row_all_companies = mysqli_fetch_array($sql_all_companies_result))
{
    $all_companies[] = $row_all_companies;
}

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>The Investment Trust Of India | Product Overview</title>

        <?php include_once('includes/header.php'); ?>

            <section class="section product_banner" style="background-image:url(<?php echo $companies['image'] ;?>) !important;">
                <div class="container banner_product_container">
                    <div class="banner_product">
                        <div class="banner_product_text">
                            <!-- <p data-aos="fade-left" data-aos-delay="1100" class="shadow_text"><?php echo  $row_banner_txt[0]['btext_sm2']  ;?></p> -->
                            <h1 data-aos="fade-left" data-aos-delay="1400"><?php echo $row_product[0]['company'] ;?></h1>
                            <!-- <a href="" class="cmp_know_more">Know more</a> -->
                            <?php if(!empty($companies['url'])){?><span class="fin_know_more">
								<a href="<?php echo $companies['url']?>" target="_blank">Know More <img src="images/fin_arrow.png" alt=""></a>
							</span>
                                <?php } ?>
                        </div>
                    </div>
                </div>
                <ul class="enquire_now">
                    <li class="li1"><a href="javascript:void(0);" data-toggle="modal" data-target="#contact_popup"><i class="fa fa-envelope"></i><span class="enquire_text">Enquire Now</span></a></li>
                </ul>

                <div class="container patch_head">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="col-md-7 col-sm-12 col-xs-12">

                            <?php if(!empty($row_product))
						{
						foreach ($row_product as $key => $value) {

						?>

                                <div class="panel-group" id="accordion">
                                    <div class="panel panel-default">
                                        <div class="panel-heading <?php if(!empty($value['product_title'])){echo preg_replace(" |\s+| "," ", preg_replace("|[^a-zA-Z0-9\ ']|","",preg_replace("|\-|","",$value['product_title '])));}?>" data-id='<?php if(!empty($value[ 'product_title'])){echo preg_replace( "|\s+|", "", preg_replace( "|[^a-zA-Z0-9\']|", "",preg_replace( "|\-|", "",$value[ 'product_title'])));}?>' title="
                                            <?php if(!empty($value['product_title'])){echo preg_replace("|\s+|","", preg_replace("|[^a-zA-Z0-9\']|","",preg_replace("|\-|","",$value['product_title'])));}?>" id="heading_
                                                <?php echo $key; ?>" >
                                                    <h4 class="panel-title">
						           <a data-toggle="collapse" data-tab-id="<?php if(!empty($value['product_title'])){echo preg_replace("|\s+|","", preg_replace("|[^a-zA-Z0-9\']|","",preg_replace("|\-|","",$value['product_title'])));}?>" class="pro_<?php echo $key; ?> accd" data-parent="#accordion" href="#collapse<?php echo $key; ?>">
							          	<div class="row patch_content">
											<div class="col-md-2 col-xs-3">
												<img src="<?php echo $value['icon']?>" >
											</div>
											<div class="col-md-10 col-xs-9 patch_text">

												<p id="tab_click" class="one tab_value<?php echo $key ?>"><?php echo $value['product_title']; ?></p>
												

											</div>
										</div>
						          	</a>
						        </h4>
                                        </div>

                                        <div id="collapse<?php echo $key;?>" class="panel-collapse collapse cols_<?php if(!empty($value['product_title'])){echo preg_replace(" |\s+| "," ", preg_replace("|[^a-zA-Z0-9\ ']|","",preg_replace("|\-|","",$value['product_title '])));}?> ">
						           <div class="panel-body patch_line">
		                    			 <img class="img-rounded img_mobile hidden-lg hidden-md" alt="Cinque Terre" src= "<?php echo $value['image ']; ?>" >
							       	    <?php echo $value['full_description ']; ?>

							    <?php if(!empty($companies['url '])){?><span class="fin_know_more">
								<a href="<?php echo $companies['url ']?>" target="_blank">Know More <img src="images/fin_arrow.png" alt=""></a>
							</span><?php } ?>
						    	   </div>
						        </div>
						     </div>
						</div>
					<?php }} ?>


					<div class="other_product  hidden-lg hidden-md visible-sm visible-xs ">
						<h4 class="know_more_product">Checkout more <?php echo strtolower($mores[0]['title ']); ?> options</h4>

						<div class="col-md-12 col-sm-12 col-xs-12">
							 <?php if(!empty($mores))              {
				                $dispay_block =0;

				              foreach ($mores as $k => $value) {
				                if(!($value['product_title ']==$row_product[0]['product_title ']) && !($value['product_title ']==$row_product[1]['product_title ']) && !($value['product_title ']==$row_product[2]['product_title ']) && !($value['product_title ']==$row_product[3]['product_title ']) && !($value['product_title ']==$row_product[4]['product_title ']) && !($value['product_title ']==$row_product[5]['product_title '])){
				                  $dispay_block++;
				              ?>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="other_p_block">
					              	<a href="product_description.php?id=<?php echo urlencode($value['company ']);?>&title=<?php echo preg_replace("|\s+|","", preg_replace("|[^a-zA-Z0-9\']| "," ",preg_replace("|\-| "," ", $value['product_title'])));?>">
                                            <div class="img_icoo">
                                                <!-- <img src="http://itigroup.firsteconomy.com/images/product/icoo.png"  class="img-responsive"> -->
                                                <img src="<?php echo $value['icon']?>">
                                            </div>
                                            </a>
                                            <a href="product_description.php?id=<?php echo urlencode($value['company']);?>&title=<?php echo preg_replace(" |\s+| "," ", preg_replace("|[^a-zA-Z0-9\ ']|","",preg_replace("|\-|","", $value['product_title '])));?>">
				              			<p class="other_title"><?php echo $value['product_title ']; ?></p>
				              		</a>
				              	</div>
			             	</div>
			             		<!-- end one -->

			             		  <?php }}
					                if($dispay_block==0){ ?>
					                  <script type="text/javascript">$('.know_more_product ').hide()</script>
					                <?php }
					            } ?>
						</div>
					</div>
				</div>

				<div class="col-md-5 col-sm-12">
					<div class="hidden-xs hidden-sm visible-lg visible-md">
							<?php if(!empty($row_product))
							{

							foreach ($row_product as $key => $value) {
							?>
							<div class="tb-img" id="img_<?php if(!empty($value['product_title '])){echo preg_replace("|\s+|","", preg_replace("|[^a-zA-Z0-9\']| "," ",preg_replace("|\-| "," ",$value['product_title'])));}?>">
                                            <img class="img-rounded" alt="Cinque Terre" src="<?php echo $value['image']; ?>">

                                        </div>

                                        <?php }

					} ?>

                                    </div>

                                    <div class="other_product visible-lg visible-md hidden-sm hidden-xs">
                                        <h4 class="know_more_product">Checkout more <?php echo strtolower($mores[0]['title']); ?> options</h4>

                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <?php if(!empty($mores))              {
		                		$dispay_block =0;

				              foreach ($mores as $k => $value) {
				                if(!($value['product_title']==$row_product[0]['product_title']) && !($value['product_title']==$row_product[1]['product_title']) && !($value['product_title']==$row_product[2]['product_title']) && !($value['product_title']==$row_product[3]['product_title']) && !($value['product_title']==$row_product[4]['product_title']) && !($value['product_title']==$row_product[5]['product_title'])){
				                  $dispay_block++;
				              ?>
                                                <div class="col-md-6 col-sm-6 col-xs-12">
                                                    <div class="other_p_block">
                                                        <a href="product_description.php?id=<?php echo urlencode($value['company']);?>&title=<?php echo preg_replace(" |\s+| "," ", preg_replace("|[^a-zA-Z0-9\ ']|","",preg_replace("|\-|","", $value['product_title '])));?>">
					              		<div class="img_icoo">
						              		<!-- <img src="http://itigroup.firsteconomy.com/images/product/icoo.png"  class="img-responsive"> -->
						              		<img src="<?php echo $value['icon ']?>" >
					              		</div>
					             	</a>
				              		<a href="product_description.php?id=<?php echo urlencode($value['company ']);?>&title=<?php echo preg_replace("|\s+|","", preg_replace("|[^a-zA-Z0-9\']| "," ",preg_replace("|\-| "," ", $value['product_title'])));?>">

                                                            <p class="other_title">
                                                                <?php echo $value['product_title']; ?>
                                                            </p>
                                                        </a>
                                                    </div>
                                                </div>
                                                <!-- end one -->

                                                <?php }}
				                if($dispay_block==0){ ?>
                                                    <script type="text/javascript">
                                                        $('.know_more_product').hide()

                                                    </script>
                                                    <?php }
				            } ?>
                                        </div>
                                    </div>

                                </div>
                        </div>
                    </div>




            </section>

            <section class="section_inner section_team">
                <div class="container section_team_container">

                    <?php if($_REQUEST['id'] == 'ITI Mutual Fund'){?>
                        <h2 class="main_title text-center">ITI Mutual Fund Trustee Pvt. Ltd</h2>

                        <div class="col-md-12 trustee_team">
                            <div class="col-md-6 col-sm-6 block_manage">
                                <div class="m_img_m_title">
                                    <div class="manage_image">
                                        <img src="images/about/team4/Sudhir-Velia.jpg">
                                    </div>

                                    <div class="manage_designation">
                                        <h4>Mr. Sudhir Valia </h4>
                                    </div>
                                </div>
                                <div class="team_detail1">
                                    Mr. Sudhir Valia is a member of the Institute of Chartered Accountants of India and carries more than three decades of experience in taxation and finance. He has been a Director of Sun Pharmaceuticals Industries Ltd. since the inception of the company and was instrumental in the excellent growth and profitability of the company over the last two decades. He is also on the Board of Taro Pharmaceuticals Ltd. He was awarded the CNBC TV18 ‘CFO of the Year’ in the Pharmaceutical and Healthcare Sectors for two consecutive years (2011 and 2012). He has also been awarded the Adivasi Sevak Puraskar (2008-09) by the Government of Maharashtra. Mr. Sudhir Valia is also the mentor and one of the shareholders of ITI Group.

                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 block_manage">
                                <div class="m_img_m_title">
                                    <div class="manage_image">
                                        <img src="images/about/team4/tpostwal.png">
                                    </div>

                                    <div class="manage_designation">
                                        <h4>Mr. T.P. Ostwal  </h4>
                                    </div>
                                </div>
                                <div class="team_detail1">
                                    Mr. T. P. Ostwal is a Chartered Accountant and in practice for last 40 years. He is a Senior Partner of M/s T. P. Ostwal & Associates LLP & DTS & Associates and on the board of several companies. He has experience in FEMA Tax, International Tax, Transfer Pricing, Valuation, etc. Mr. Ostwal was one of the members of Govt. of India’s committee drafting Transfer Pricing Regulations in India in 2001. Mr. Ostwal is a visiting professor at Vienna University Austria for teaching International tax for LLM studies and is a member of Transfer Pricing sub-committee of UN since inception. He was a member of the Expert Committee set up by the Central Board for Direct Taxes for framing transfer pricing regulations in India. He has authored various books on a range of subjects covering International Taxation, Transfer Pricing and Black Money Law in India. He is a member on the board of reputed companies.

                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 block_manage">
                                <div class="m_img_m_title">
                                    <div class="manage_image">
                                        <img src="images/about/team4/Naushad-Panjwani.jpg">
                                    </div>

                                    <div class="manage_designation">
                                        <h4>Mr. Naushad Panjwani  </h4>
                                    </div>
                                </div>
                                <div class="team_detail1">
                                    Mr. Naushad Panjwani is a Founder & Managing Partner at Mandarus Partners focusing on cross-border Mergers & Acquisitions Transaction Advisory. He has served as a Senior Executive Director for Knight Frank India and is a member of the Institute of Chartered Accountants of India.

                                </div>
                            </div>

                            <div class="col-md-6 col-sm-6 block_manage">
                                <div class="m_img_m_title">
                                    <div class="manage_image">
                                        <img src="images/about/team4/priti.png">
                                    </div>

                                    <div class="manage_designation">
                                        <h4>Ms. Priti Savla  </h4>
                                    </div>
                                </div>
                                <div class="team_detail1">
                                    Ms. Priti Savla is a Chartered Accountant and a fellow member of ICAI, New Delhi. She is also a qualified Information System Auditor and holds a certificate in entrepreneur’s development program from Indian School of Business (ISB), Hyderabad and on Forensic Accounting and Fraud Prevention from the ICAI. She is a partner in K P B & Associates, Chartered Accountants and a director in Perch Strategic Advisors Private Ltd. and Perch Foundation. She is serving as an Independent director on the board of listed companies, Aarti Industries Ltd. and Aarti Drugs Ltd. She is a Chairperson of the WIRC of the ICAI, serving as the Regional Council member of WIRC of ICAI since 2013-14. She is a member on various committees and life member of the professional organizations and social organization - Chamber of Tax Consultants, Bombay Chartered Accountants’ Society. Ms. Savla has an exposure about 20 years in the areas of strategic planning, business advisory, process set up, risk mitigation and project finance.


                                </div>
                            </div>
                        </div>

                        <?php } ?>

                            <?php if($row_product[0]['company'] == 'Fortune Integrated Assets Finance Limited'){ ?>
                                <div>
                                    <section class="fortune">
                               <!--          <div class="text-center">
                                            <h2 class="main_title">Fortune eConnect Mobile Application</h2>
                                        </div>
                                        <div class="container">
                                            <div class="row">
                                                <div class="app-details col-lg-12">
                                                    <div class="col-lg-7">
                                                        <div class="desc-app">
                                                            <p>Fortune Integrated Assets Finance Limited (“FIAFL”) is company registered as NBFC with the Reserve Bank of India having registered office at Naman Midtown, &quot;A&quot; Wing 21st Floor, Unit No. 2101 Senapati Bapat Marg, Elphinstone Road, Mumbai - 400013 Maharashtra, India. FIAFL is primarily engaged into business of Retail vehicle loans across India. Fortune eConnect Mobile Application (“Fortune eConnect App”) is a developed by Best1 Techsoft LLP (“Developer”) for Fortune Integrated Assets Finance Limited (“FIAFL”) which enables customers of FIAFL to make online payment of their EMIs and/or outstanding over dues.
                                                                <br> Fortune eConnect App needs to be downloaded by customer in his/her android mobile via Google Play Store. Post downloading (subject to acceptance of Terms and conditions) and after signing up with the mobile no associated with the active loans with FIAFL, the customer can view the details of his/her loan account and initiate payment of dues.</p>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-5 app-img">
                                                        <img src="images/app-img.jpg">
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">

                                                <div class="vision col-lg-12">
                                                    <h2>Vision</h2>
                                                    <div class="col-lg-5">
                                                        <img src="images/vision.jpg">
                                                    </div>
                                                    <div class="col-lg-7">
                                                        <p>FIAFL has introduced Fortune eConnect with the vision to promote the digitization, easy access to make the payment of EMIs and other outstanding dues in more quickly, safer and smarter way. This will eliminate the requirement of personally visiting branches by customer for making payment and thereby saving time, effort and energy of our customers. Additionally, this will also enables us to improve our effectiveness in servicing our customers more efficiently.</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="grievance-address col-lg-12">
                                                    <h2>Grievance Redressal</h2>
                                                    <div class="col-lg-6">
                                                        <p>In case of any query/assistance /grievances in this connection, you may reach out to us on following either through phone call/letter/email.
                                                            <br> While stating your concerns, please mention your Full Name, Postal Address, Mobile Number, Email Address, Loan Account Number, Type of Loan, Loan Amount, Tenure, Rate of Interest so that we can respond to you at the earliest.</p>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <p class="addr">To,
                                                            <br> Mr. G Muthu Kumar,
                                                            <br> Grievance Redressal Officer
                                                            <br> Customer Grievance Redressal Unit
                                                            <br> Fortune Integrated Assets Finance Limited
                                                            <br> Naman Midtown, &quot;A&quot; Wing 21st Floor, Unit No. 2101 Senapati Bapat Marg,
                                                            <br> Elphinstone Road, Mumbai - 400013 Maharashtra, India.
                                                        </p>
                                                        <p class="contact">Contact No: <a href="tel:022-40273600">022-40273600</a> / Email ID: <a href="mailto:kummar@itiorg.com">kummar@itiorg.com</a></p>

                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                            	<div class="terms col-lg-12">
                                            		<h2>Terms and Conditions</h2>
                                            		<div class="col-lg-12">
                                            			<p>Fortune eConnect Mobile Application Terms and Conditions - <a class="tc-link" href="javascript:void(0);" data-toggle="modal" data-target="#fortune_popup">Click Here</a></p>
                                            		</div>
                                            	</div>
                                            </div>
                                        </div>
                                        
                                    </section> -->
                                </div>
                                <?php } ?>

                                
                                    <div class="text-center">


                                        <?php if(!empty($mts))
				{?>
                                            <h2 class="main_title">Management team</h2>

                                            <?php }?>
                                    </div>


                                    <div class=" management_team" id="management_team_preview">

                                    </div>





                                    <div class="clearfix">

                                    </div>
                                    <!-- <div class="text-center">

				<?php if(!empty($mks))
				{?>
				<h2 class="main_title">Key managerial personnel</h2>
			<?php }?>

			</div> -->

                                    <!-- <div class="">

				<?php if(!empty($mks))
				{
				foreach ($mks as $keyz => $value) {
					

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
								<?php echo $value['keypersonnel_content'];?>
							</div>

			</div>
			<?php }} ?> -->

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
                                <a href="#">
                                    <button class="btn_enquire">ENQUIRE NOW</button>
                                </a>
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
                                    <p>
                                        <?php echo $url['phone']; ?>
                                    </p>
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
                                    <p>
                                        <?php echo $url['website']; ?>
                                    </p>
                                </div>
                            </div>

                            <div class="col-md-5 col-md-offset-1 contact_block">
                                <div class="col-md-2 col-sm-2 col-xs-2">
                                    <img src="images/product/icon/4.png">
                                </div>
                                <div class="col-md-10 col-sm-10 col-xs-10">
                                    <p>
                                        <?php echo $url['email']; ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <?php } ?>

                    <!-- contact popup -->
                    <div id="contact_popup" class="modal fade" role="dialog">
                        <div class="modal-dialog">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Enquire With Us</h4>
                                </div>
                                <div class="modal-body">
                                    <div class="form_contact">
                                        <form id="block_enqiure" class="block_enqiure">
                                            <div class="row">
                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <select name="company_name_select" id="company_name_select" class="form-control">
                                                        <option value="">Company Name</option>
                                                        <?php foreach ($all_companies as $cp) { ?>
                                                            <option value="<?php echo $cp['company_name']; ?>">
                                                                <?php echo $cp['company_name']; ?>
                                                            </option>
                                                            <?php  } ?>
                                                    </select>
                                                </div>

                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <select class="form-control" name="product_select" id="product_select">
                                                        <option value="">Select your Product</option>
                                                    </select>
                                                </div>


                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <select name="organisation" class="form-control">
                                                        <option>Sector of your Organisation</option>
                                                        <option>HNIs &amp; NRIs </option>
                                                        <option>Small &amp; Medium Businesses</option>
                                                        <option>NGOs</option>
                                                        <option>Corporates</option>
                                                        <option>DSA &amp; Sourcing Partners</option>
                                                        <option>RSPs</option>
                                                        <option>Banks</option>
                                                        <option>Vendors</option>
                                                    </select>
                                                </div>

                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <input type="text" class="form-control" name="name" placeholder="Full Name">
                                                </div>

                                                <!-- <div class="clearfix"></div> -->

                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <input type="email" class="form-control" name="email" placeholder="Email ID">
                                                </div>

                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <input type="tel" class="form-control" name="phone" placeholder="Phone Number">
                                                </div>

                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <input type="text" class="form-control" name="city" placeholder="City">
                                                </div>

                                                <!-- <div class="clearfix"></div> -->

                                                <div class="col-md-6 col-sm-12 form-group">
                                                    <input type="text" class="form-control" name="state" placeholder="State">
                                                </div>

                                                <div class="col-md-12 col-sm-12 form-group">
                                                    <!-- <textarea class="form-control" rows="5" name="Description" placeholder="Description"> </textarea> -->
                                                    <textarea class="form-control" rows="5" name="Description" placeholder="Message"></textarea>
                                                </div>

                                            </div>
                                            <div class="row text-center btn_down modal-footer">
                                                <input type="submit" class="btn_submit" value="Submit">
                                                <input type="reset" class="btn_reset" value="Reset">
                                            </div>
                                            <div class="">
                                                <span id="msg"></span>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                                <!--  <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	      </div> -->
                            </div>

                        </div>
                    </div>


                    <!-- modal team -->


                    <!-- modal team end -->



                    <!-- contact popup -->
                    <div id="fortune_popup" class="modal fade" role="dialog">
                        <div class="modal-dialog modal-dialog-centered">

                            <!-- Modal content-->
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    <h4 class="modal-title">Fortune eConnect Mobile Application - Terms and Conditions</h4>
                                </div>
                                <div class="modal-body">
                   <p>Fortune eConnect Mobile Application (“Fortune eConnect App”) developed by Best1
Techsoft LLP (“Developer”) for Fortune Integrated Assets Finance Limited (“FIAFL”)
which enables customers of FIAFL to make online payment of their EMIs and/or
outstanding over dues. By visiting or accessing and before using the Fortune eConnect
App, customer need to agree following Terms and Conditions and the customer’s
acceptance of the same is reaffirmed each time the he/she access its Payment Service
(“Service”). The Fortune eConnect App reserves the right, at its sole discretion, to
change, modify, add, or delete portions of these Terms &amp; Conditions at any time without
further notice. The Customer shall re-visit the “Terms &amp; Conditions” link from time to
time to stay abreast of any changes that the Fortune eConnect App may introduce.<p>
<p>We, Fortune eConnect App, do not collect or store Customer Debit Card or bank account
information. In case of Debit Cards, you will be transferred to a secure payment gateway
where you can enter your Debit Card details. The payment gateway authenticates the
transaction and we would then initiate the payment request. For Net Banking/ Debit
Cards, you would be transferred to the relevant bank website where you are required to
enter your Net Banking login and password or your Debit Card details. The payment
request is initiated once authentication is complete. </p>
<p>We, Fortune eConnect App, shall not be liable for any failure of the payment gateway to
authenticate the transaction or any failure of internet services during the transaction.
The Customer hereby agrees and undertakes not to use the information contained for
any commercial purposes, any portion of this Service. For the removal of doubt, it is
clarified that this Service is not for commercial use but is specifically meant for personal
use only.</p>
<p>This document is an electronic record in terms of the Information Technology Act, 2000
and the rules thereunder as applicable and the amended provisions pertaining to
electronic records in various statutes as amended by the Information Technology Act,
2000. This electronic record is generated by a computer system and does not require
any physical or digital signatures.</p>
<p>The Customer agrees and undertakes to abide by the provisions of Information
Technology Act and/or any other laws/rules/regulations of India. The Customer
impliedly and expressly undertakes to submit to the jurisdiction of enforcing/statutory
authorities for any violation of the IT act and other laws.<p>
<p>The Customer agrees and undertakes not to use the Service or the Fortune eConnect
App in any unlawful manner or in any other manner that could damage, disable,
overburden, impair or disrupt the Service, servers, system, site or networks connected to
the Service.</p>
<p>As a condition of use of Fortune eConnect App, the Customer agrees to indemnify the
FIAFL &amp; Developer and its directors, officers, employees, agents and affiliates from and
against any and all actions, claims, losses, damages, liabilities and expenses (including
reasonable attorneys&#39; fees) arising out Customer’s use of Fortune eConnect App.<p>
<p>The FIAFL or Developer is not to be held liable for special, consequential, incidental,
indirect or punitive loss, damage or expenses , data, loss of facilities, or equipment or
the cost of recreating lost data regardless of whether arising out of a breach of contract,
warranty, tort, strict liability or otherwise.<p>
<p>Fortune eConnect App may contain links to third party sites. The linked sites are not
under the control of the Fortune eConnect App and the Fortune eConnect App is not
responsible for the contents of any linked site/App or any link contained in the linked
site/App. The Fortune eConnect App provides these links only as a convenience, and the
inclusion of a link does not imply endorsement of the linked site/App by the Fortune
eConnect App.<p>
<p>Fortune eConnect App and the contents hereof are provided &quot;as is&quot; and without
warranties of any kind either expressed or implied to the fullest extent permissible
pursuant to applicable law. The Fortune eConnect App disclaims all warranties, express
or implied, and conditions including, but not limited to, implied warranties of
merchantability, fitness for particular purpose, title and non - infringement. Nor do we
warrant that the functions of Fortune eConnect App or the functions contained in the
materials of Fortune eConnect App will be interrupted or be error free, that defects will
be corrected, or that Fortune eConnect App or the server(s) that make the Fortune
eConnect App available are free of viruses or other harmful components. In no event
shall we be liable for any special, indirect or consequential damages or any damages
whatsoever resulting from loss of use, data or profits, whether in an action of contract,
negligence or other wrongful actions, arising out of or in connection with the use or
performance of any products, materials or information available from Fortune eConnect
App. Fortune eConnect App in whole or in part, could include technical inaccuracies or
typographical errors. Changes are periodically added to the information herein.
Customer’s continued use of Fortune eConnect App following the posting of any change
or modification of the Terms and Conditions will mean the Customer has accepted
those changes or modifications.</p>
                                </div>
                  
                            </div>

                        </div>
                    </div>

                    <?php include_once('includes/footer.php'); ?>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
                        <script>
                            $(document).ready(function() {

                                function getParameterByName(name) {
                                    // console.log('test2');
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

                                $("." + title).addClass('active');
                                $(".cols_" + title).addClass('in');

                                if ($("#heading_1").hasClass('active')) {
                                    var product = $('.tab_value1').text();
                                } else {
                                    var product = $('.tab_value0').text();
                                }


                                $.ajax({
                                    type: 'get',
                                    url: '/product_management_team.php',
                                    data: {
                                        'product': product
                                    },
                                    success: function(response) {
                                        $('#management_team_preview').html(response);
                                    }
                                });

                                $(document).on('click', '#tab_click', function() {
                                    var product = $(this).text();
                                    $.ajax({
                                        type: 'get',
                                        url: '/product_management_team.php',
                                        data: {
                                            'product': product
                                        },
                                        success: function(response) {
                                            $('#management_team_preview').html(response);
                                        }
                                    });

                                });






                                $(".panel-heading").on('click', function() {
                                    var tit = $(this).attr('title');

                                    $(this).removeClass('active');
                                    $('.cols_' + title).removeClass('in');

                                });



                                $('.tb-img').addClass('hide');
                                $('#img_' + title).removeClass('hide');

                                $('.panel-collapse').on('show.bs.collapse', function() {
                                    $(this).siblings('.panel-heading').addClass('active');
                                });

                                $('.panel-collapse').on('hide.bs.collapse', function() {
                                    $(this).siblings('.panel-heading').removeClass('active');
                                });

                                $('.accd').on('click', function() {
                                    var tabid = $(this).data('tab-id');

                                    $('.tb-img').addClass('hide');
                                    $(".collapse").collapse('hide');
                                    $('#img_' + tabid).removeClass('hide');
                                });

                                var $collapsible = $('.collapse ');

                                var host_url = location.protocol + "//" + location.host;

                                // Target the inner accordion item header

                                $('#company_name_select').on('change', function() {
                                    var com = $.trim($(this).val());
                                    if (com != '' && com != null) {
                                        $.ajax({
                                            type: 'post',
                                            url: host_url + '/includes/ajax.php',
                                            data: {
                                                'com': com,
                                                'ajax': 'get_prod'
                                            },
                                            success: function(response) {
                                                var res = JSON.parse(response);
                                                if (res['error'] == 0) {
                                                    $('#product_select').empty();
                                                    var data = res['data'];
                                                    data.forEach(function(entry) {

                                                        $('#product_select').append($("<option></option>").attr("value", entry["product_title"]).text(entry["product_title"]));
                                                    });
                                                }
                                            }
                                        });
                                    } else {
                                        $('#product_select').empty().append('<option value="">Select your Product</option>')
                                    }
                                });

                                $('form#block_enqiure').validate({ // initialize the plugin

                                    rules: {
                                        company_name_select: {
                                            required: true
                                        },
                                        product_select: {
                                            required: true
                                        },
                                        organisation: {
                                            required: true
                                        },
                                        name: {
                                            required: true
                                        },
                                        email: {
                                            required: true,
                                            email: true
                                        },
                                        phone: {
                                            required: true,
                                            number: true
                                        },
                                        fatherMobile: {
                                            required: true
                                        },
                                        city: {
                                            required: true
                                        },
                                        state: {
                                            required: true
                                        },

                                    },
                                    submitHandler: function(form) {

                                        var formData = new FormData(form);
                                        formData.append('ajax', 'frm_submit');
                                        $('#msg').html('Please wait...');
                                        $('input[type="submit"]').prop('disabled', true);
                                        $.ajax({
                                            url: host_url + '/includes/ajax.php', // Url to which the request is send
                                            type: "POST", // Type of request to be send, called as method
                                            data: formData, //new FormData('this'), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
                                            contentType: false, // The content type used when sending data to the server.
                                            cache: false, // To unable request pages to be cached
                                            processData: false, // To send DOMDocument or non processed data file it is set to false
                                            success: function(data) // A function to be called if request succeeds
                                                {
                                                    var res = JSON.parse(data);
                                                    $('input[type="submit"]').prop('disabled', false);
                                                    if (res['error'] == 0) {
                                                        $('#block_enqiure').trigger('reset');
                                                        $('#msg').html('Thank you for filling out the  enquiry form. We will get back to you shortly.');
                                                    } else {
                                                        $('#msg').html('Something went wrong');
                                                    }
                                                },
                                            error: function() {
                                                $('input[type="submit"]').prop('disabled', false);
                                                $('#msg').html('Something went wrong');
                                            }
                                        });
                                    }
                                });
                            });

                        </script>



                        </body>

    </html>
