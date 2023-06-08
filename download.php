<?php 
session_start();
include('includes/db_config.php');
$slug = $_REQUEST['slug'];


$url="http://iticms.firsteconomy.com/api/dowloads"."?slug=".$slug;

$ch = curl_init();

curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_TIMEOUT, 80);
 
$response = curl_exec($ch);


$item_data_decode = json_decode($response, true);


$investors_relation = $item_data_decode['data'];

curl_close($ch);



?>
<!DOCTYPE html>
<html>
<head>
	<title>The Investment Trust Of India | Download</title>
	<?php include_once('includes/header.php');?>
	<section class="section download_header" id="">
		<div class="banner_about container">
			<div class="col-md-6">
				<h2 class="main_title"><?php echo $investors_relation['title']; ?></h2>
			</div>
			<div class="col-md-6 ">
				<div class="download_header_right" style="background-image:url('<?php echo $investors_relation["image2"]; ?>');">
				</div>
			</div>
		</div>
	</section>
  <section class="section_inner section_download ">
		<div class="container-fluid">
		    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		         <div class="panel panel-default">
               <?php
								 foreach ($investors_relation['categories'] as $catkey => $value) {
                   ?>
		            <div class="panel-heading" role="tab" id="heading<?php echo $catkey ?>">
		                <h4 class="container panel-title">
		                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $catkey ?>" aria-expanded="false" aria-controls="collapse<?php echo $catkey ?>">
		                       <?php if($value['is_active'] ==1 ){ echo '<i class="more-less glyphicon glyphicon-minus"></i>';}else{echo '<i class="more-less glyphicon glyphicon-plus"></i>';} ?>
		                       <?php echo $value['category'] ?>
		                    </a>
		                </h4>
		            </div>
		            <div id="collapse<?php echo $catkey ?>" class="panel-collapse collapse  <?php if($value['is_active'] ==1){ echo 'in';} ?>" role="tabpanel" aria-labelledby="heading<?php echo $catkey ?>">
                    <div class="container panel-body">
                      <?php 
					
					$doc_key = 1000;
							
					  foreach ($value['docs'] as $doc_title => $docs) { 

						$doc_key  = $catkey.$doc_key 

                        ?>
		                   <div class="panel-group annual_report" id="accordion<?php echo $doc_key; ?>" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_7">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion<?php echo $doc_key; ?>" href="#qua_7_report<?php echo $doc_key ?>" aria-expanded="true" aria-controls="qua_7_report<?php echo $doc_key ?>">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		 <?php echo $doc_title ?>
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_7_report<?php echo $doc_key ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_7">
									                <div class="panel-body">
                                   <?php foreach($docs as $doc) { ?>
                                       <a target="_blank" class="download_file" href="<?php echo $doc['document']; ?>"><?php echo $doc['subtitle']; ?><i class="icon_download fa fa-download"></i></a>
                                     <?php } ?>
                                  </div>
									            </div>
									        </div>
                      </div><!-- panel-group -->
                        <?php  } ?>
		                </div>
		            </div>
                <?php }  ?>
		        </div>
		    </div><!-- panel-group -->
		</div><!-- container -->
	</section>
	<?php include_once('includes/footer.php'); ?>
<script>
	$(document).ready(function(){

		   function toggleIcon(e) {
		    $(e.target)
		        .prev('.panel-heading')
		        .find(".more-less")
		        .toggleClass('glyphicon-plus glyphicon-minus');
		}
		$('.panel-body, .panel-group').on('hidden.bs.collapse', toggleIcon);
		$('.panel-body, .panel-group').on('shown.bs.collapse', toggleIcon);
	});

</script>
<script>
	$(document).ready(function(){
    var my_posts = $("[rel=tooltip]");
    for(i=0;i<my_posts.length;i++){
        the_post = $(my_posts[i]);
        if(the_post.hasClass('invert')){
            the_post.tooltip({ placement: 'left'});
            the_post.css("cursor","pointer");
        }else{
            the_post.tooltip({ placement: 'rigt'});
            the_post.css("cursor","pointer");
        }
    }
});
</script>
</body>
</html>
