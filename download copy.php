<?php 
session_start();
include('includes/db_config.php');
$slug = $_REQUEST['slug'];
$category_slug= "SELECT * FROM `investors_relation_category`  where slug = '". $slug ."'";
$result_category_slug = mysqli_query($db,$category_slug);
while($row_category_slug = mysqli_fetch_assoc($result_category_slug)){
  $cat_slug= $row_category_slug;
}



$investors_relations= "SELECT * FROM `investors_relations`  where id = '". $cat_slug['invesors_relation_id'] ."'";

$result_investors_relations = mysqli_query($db,$investors_relations);
while($row_investors_relations = mysqli_fetch_assoc($result_investors_relations)){
  $investors_relation_title= $row_investors_relations;
}


$categorys= "SELECT `irc`.`category` AS `cat`, `irc`.* , `rd`.id as id1, `rd`.investorsrelation, `rd`.category FROM `investors_relation_category` `irc` LEFT JOIN `relation_documents` rd ON `irc`.`id` = `rd`.`category` where `irc`.`invesors_relation_id` = '". $cat_slug['invesors_relation_id'] ."'";

$result_category = mysqli_query($db,$categorys);

while($row_categor = mysqli_fetch_array($result_category)){
    $category[]= $row_categor;
}
//var_dump($category);die;
foreach ($category as $key => $value) {
  $categorys= "SELECT *, GROUP_CONCAT(`docs`.subtitle SEPARATOR  '$,#' ) AS sub FROM `docs`  WHERE `docs`.relation_documents_id = '". $value['id1'] ."' Group By `docs`.title";
  //var_dump($categorys);die;
// 	$categorys = "SELECT `a`.id, `a`.title,`a`.document, `a`.subtitle,GROUP_CONCAT(`a`.subtitle SEPARATOR  '$,#' ) AS sub, `d`.category, `d`.slug  FROM `docs` a  
// join `relation_documents` b on (`b`.id = `a`.relation_documents_id) 
// join `investors_relations` c on (`c`.id = `b`.investorsrelation)
// join `investors_relation_category` d on (`d`.id = `b`.category)
// where `a`.relation_documents_id = 135";
  // var_dump($categorys);die;
   $result = mysqli_query($db,$categorys);
     while($row_catego = mysqli_fetch_array($result)){
       $docs_title[]=$row_catego;
     }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>The Investment Trust Of India | Download</title>
	<?php include_once('includes/header.php');?>
	<section class="section download_header" id="">
		<div class="banner_about container">
			<div class="col-md-6">
				<h2 class="main_title"><?php echo $investors_relation_title['title']; ?></h2>
			</div>
			<div class="col-md-6 ">
				<div class="download_header_right" style="background-image:url('<?php echo $investors_relation_title["image2"]; ?>');">
				</div>
			</div>
		</div>
	</section>
  <section class="section_inner section_download ">
		<div class="container-fluid">
		    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		         <div class="panel panel-default">
               <?php
								 foreach ($category as $catkey => $value) {

                   ?>
		            <div class="panel-heading" role="tab" id="heading<?php echo $catkey ?>">
		                <h4 class="container panel-title">
		                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $catkey ?>" aria-expanded="false" aria-controls="collapse<?php echo $catkey ?>">
		                       <?php if($_GET["slug"]==$value['slug']){ echo '<i class="more-less glyphicon glyphicon-minus"></i>';}else{echo '<i class="more-less glyphicon glyphicon-plus"></i>';} ?>
		                       <?php echo $value['cat'] ?>
		                    </a>
		                </h4>
		            </div>
		            <div id="collapse<?php echo $catkey ?>" class="panel-collapse collapse  <?php if($_GET["slug"]==$value['slug']){ echo 'in';} ?>" role="tabpanel" aria-labelledby="heading<?php echo $catkey ?>">
                    <div class="container panel-body">
                      <?php foreach ($docs_title as $doc_key => $doc) { 
                      	$documents = explode('$,#', $doc['docu']); 
                      	$titles = explode('$,#', $doc['sub']);

                          if($doc['relation_documents_id'] ==$value['id1']){
                        ?>
		                   <div class="panel-group annual_report" id="accordion<?php echo $doc_key; ?>" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_7">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion<?php echo $doc_key; ?>" href="#qua_7_report<?php echo $doc_key ?>" aria-expanded="true" aria-controls="qua_7_report<?php echo $doc_key ?>">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		 <?php echo $doc['title'] ?>
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_7_report<?php echo $doc_key ?>" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_7">
									                <div class="panel-body">
                                   <?php foreach($titles as $title_key => $tit) { ?>
                                       <a target="_blank" class="download_file" href="<?php echo $documents[$title_key]; ?>"><?php echo $tit; ?><i class="icon_download fa fa-download"></i></a>
                                     <?php } ?>
                                  </div>
									            </div>
									        </div>
                      </div><!-- panel-group -->
                        <?php } } ?>
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
