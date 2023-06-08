<?php

include('includes/db_config.php');

$html = '';
$product_list = $_REQUEST['product'];
$sql_company_managements = "SELECT * FROM `company_managements` WHERE `status` = 'In-Active' and `product_list` LIKE '%".$product_list."%'";
$result_mts = mysqli_query($db,$sql_company_managements);

if(isset($result_mts) && !empty($result_mts)){
while($row_mts = mysqli_fetch_array($result_mts)){
  $mts[] = $row_mts;
}
}else{
  header('Location: index.php');
}
 // <img src=" '.$value['image'].'">
foreach ($mts as $keys_ => $value) {
$html .='<div>


 <div class="col-md-4 col-sm-6 col-xs-12 block_manage">
							<div class="m_img_m_title">
								<div class="manage_image">
								
								 <img src="images/about/default-image.png">
								</div>

								<div class="manage_designation">
									 <h4>'.$value['management_title'].'</h4>
									<span>  '.str_replace('<p>',' ',str_replace('</p>',' ',$value['management_team'])).'</span>
									<span class="designation_line"></span>
								</div>
							</div>							
						</div>
 </div>



 <div id="costumModal'.$keys_.'" class="fade-scale modal modal_teammm"  tabindex="-1" role="dialog" aria-labelledby="costumModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
           <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></button>
	              <div class="manage_designation">
								<h4 class="text-center">'.$value['management_title'].'</h4>
					</div>
	      </div>
        <div class="modal-body">
        	<div class="row">
        		<div class="col-md-12">
        			<div class="team_detail_modal">
			               <p>   
                     <div class="modal_team_img">
                         <img src="'.$value['image'].'">
                     </div>'.$value['management_team'].'</p>
        			</div>
              <div class="team_line"></div>
        		</div>
        	</div>
        </div>
      </div>
    </div>
 </div>';
}

echo $html;

 ?>
