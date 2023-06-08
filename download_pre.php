<!DOCTYPE html>
<html>
<head>
	<title>ITI Invest | Download</title>	

	<?php include_once('includes/header.php');?>

	<section class="section download_header" id="">
		<div class="banner_about container">
			<div class="col-md-6">
				<h2 class="main_title">Financial Data</h2>
			</div>
			<div class="col-md-6 ">
				<div class="download_header_right">
				</div>
			</div>
		</div>
	</section>


	
	<section class="section_inner section_download ">
		<div class="container-fluid">
		    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
		        <div class="panel panel-default">
		            <div class="panel-heading" role="tab" id="headingOne">
		                <h4 class="container panel-title">
		                    <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
		                        <?php if($_GET["tab"]==1){ echo '<i class="more-less glyphicon glyphicon-minus"></i>';}else{echo '<i class="more-less glyphicon glyphicon-plus"></i>';} ?>
		                      Financial Performance
		                    </a>
		                </h4>
		            </div>
		            <div id="collapseOne" class="panel-collapse collapse <?php if($_GET["tab"]==1){ echo 'in';} ?>"  role="tabpanel" aria-labelledby="headingOne">
		                <div class="container panel-body">
		                  
		                </div>
		            </div>
		        </div>

		        <div class="panel panel-default">
		            <div class="panel-heading" role="tab" id="headingTwo">
		                <h4 class="container panel-title">
		                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
		                       <?php if($_GET["tab"]==2){ echo '<i class="more-less glyphicon glyphicon-minus"></i>';}else{echo '<i class="more-less glyphicon glyphicon-plus"></i>';} ?>
		                      Annual Reports
		                    </a>
		                </h4>
		            </div>
		            <div id="collapseTwo" class="panel-collapse collapse <?php if($_GET["tab"]==2){ echo 'in';} ?>" role="tabpanel" aria-labelledby="headingTwo">
		                <div class="container panel-body annual_table">
		                   	<p>The corporate governance is a part of the Annual reports</p>
		                   	<div class="col-md-12">
		                   		<!-- inner annual accordion -->
		                   			 <div class="panel-group annual_report" id="accordion1" role="tablist" aria-multiselectable="true">
									        <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="annual1">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion1" href="#annual1_report" aria-expanded="true" aria-controls="annual1_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		 Financial year 2016-2017
									                    </a>
									                </h4>
									            </div>
									            <div id="annual1_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="annual1">
									                <div class="panel-body">
									                  	Annual Report - 2016-2017<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>

									        <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="annual2">
									                <h4 class="panel-title">
									                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#annual2_report" aria-expanded="false" aria-controls="annual2_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                     Financial year 2015-2016
									                    </a>
									                </h4>
									            </div>
									            <div id="annual2_report" class="panel-collapse collapse" role="tabpanel" aria-labelledby="annual2">
									                <div class="panel-body annual_table">
									                   Annual Report - 2015-2016<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>

									        <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="annual3">
									                <h4 class="panel-title">
									                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#annual3_report" aria-expanded="false" aria-controls="annual3_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                         Financial year 2014-2015
									                    </a>
									                </h4>
									            </div>
									            <div id="annual3_report" class="panel-collapse collapse" role="tabpanel" aria-labelledby="annual3">
									                <div class="panel-body">
									                     Annual Report - 2014-2015<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>

									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="annual4">
									                <h4 class="panel-title">
									                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#annual4_report" aria-expanded="false" aria-controls="annual4_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                       Financial year 2013-2014
									                    </a>
									                </h4>
									            </div>
									            <div id="annual4_report" class="panel-collapse collapse" role="tabpanel" aria-labelledby="annual4">
									                <div class="panel-body">
									                  Annual Report - 2013-2014<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>

									        <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="annual5">
									                <h4 class="panel-title">
									                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#annual5_report" aria-expanded="false" aria-controls="annual5_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                       Financial year 2012-2013
									                    </a>
									                </h4>
									            </div>
									            <div id="annual5_report" class="panel-collapse collapse" role="tabpanel" aria-labelledby="annual5">
									                <div class="panel-body">
									                  Annual Report - 2012-2013<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>

									        <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="annual6">
									                <h4 class="panel-title">
									                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#annual6_report" aria-expanded="false" aria-controls="annual6_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                       Financial year 2011-2012
									                    </a>
									                </h4>
									            </div>
									            <div id="annual6_report" class="panel-collapse collapse" role="tabpanel" aria-labelledby="annual6">
									                <div class="panel-body">
									                  Annual Report - 2011-2012<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>

									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="annual7">
									                <h4 class="panel-title">
									                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#annual7_report" aria-expanded="false" aria-controls="annual7_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                       Financial year 2010-2011
									                    </a>
									                </h4>
									            </div>
									            <div id="annual7_report" class="panel-collapse collapse" role="tabpanel" aria-labelledby="annual7">
									                <div class="panel-body">
									                  Annual Report - 2010-2011<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>

									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="annual8">
									                <h4 class="panel-title">
									                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#annual8_report" aria-expanded="false" aria-controls="annual8_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                       Financial year 2009-2010
									                    </a>
									                </h4>
									            </div>
									            <div id="annual8_report" class="panel-collapse collapse" role="tabpanel" aria-labelledby="annual8">
									                <div class="panel-body">
									                  Annual Report - 2009-2010<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>

									        <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="annual9">
									                <h4 class="panel-title">
									                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#annual9_report" aria-expanded="false" aria-controls="annual9_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                       Financial year 2008-2009
									                    </a>
									                </h4>
									            </div>
									            <div id="annual9_report" class="panel-collapse collapse" role="tabpanel" aria-labelledby="annual9">
									                <div class="panel-body">
									                  Annual Report - 2008-2009<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>

									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="annual10">
									                <h4 class="panel-title">
									                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#annual10_report" aria-expanded="false" aria-controls="annual10_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                       Financial year 2008-2009
									                    </a>
									                </h4>
									            </div>
									            <div id="annual10_report" class="panel-collapse collapse" role="tabpanel" aria-labelledby="annual10">
									                <div class="panel-body">
									                  Annual Report - 2008-2009<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>
									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="annual11">
									                <h4 class="panel-title">
									                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#annual11_report" aria-expanded="false" aria-controls="annual11_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                       Financial year 2007-2008
									                    </a>
									                </h4>
									            </div>
									            <div id="annual11_report" class="panel-collapse collapse" role="tabpanel" aria-labelledby="annual11">
									                <div class="panel-body">
									                  Annual Report - 2007-2008<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>

									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="annual12">
									                <h4 class="panel-title">
									                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#annual12_report" aria-expanded="false" aria-controls="annual12_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                       Financial year 2006-2007
									                    </a>
									                </h4>
									            </div>
									            <div id="annual12_report" class="panel-collapse collapse" role="tabpanel" aria-labelledby="annual12">
									                <div class="panel-body">
									                  Annual Report - 2006-2007<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>

									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="annual13">
									                <h4 class="panel-title">
									                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#annual13_report" aria-expanded="false" aria-controls="annual13_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                       Financial year 2005-2006
									                    </a>
									                </h4>
									            </div>
									            <div id="annual13_report" class="panel-collapse collapse" role="tabpanel" aria-labelledby="annual13">
									                <div class="panel-body">
									                  Annual Report - 2005-2006<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>

									        <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="annual14">
									                <h4 class="panel-title">
									                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion1" href="#annual14_report" aria-expanded="false" aria-controls="annual14_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                       Financial year 2004-2005
									                    </a>
									                </h4>
									            </div>
									            <div id="annual14_report" class="panel-collapse collapse" role="tabpanel" aria-labelledby="annual14">
									                <div class="panel-body">
									                  Annual Report - 2004-2005<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>
									    </div><!-- panel-group -->
		                   			<!-- inner annual accordion -->
		                   	</div>
		                </div>
		            </div>
		        </div>

		        <div class="panel panel-default">
		            <div class="panel-heading" role="tab" id="headingThree">
		                <h4 class="container panel-title">
		                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
		                      <?php if($_GET["tab"]==3){ echo '<i class="more-less glyphicon glyphicon-minus"></i>';}else{echo '<i class="more-less glyphicon glyphicon-plus"></i>';} ?>
		                        Subsidiary Companies Acts
		                    </a>
		                </h4>
		            </div>
		            <div id="collapseThree" class="panel-collapse collapse  <?php if($_GET["tab"]==3){ echo 'in';} ?>" role="tabpanel" aria-labelledby="headingThree">
		                <div class="container panel-body">
		                    <!-- <div class="page-header text-center">
						        <h1 id="timeline">Timeline 2.0</h1>
						    </div> -->
						    <ul class="timeline">
						        <li>
						          <div class="timeline-badge primary"><a><i class="fa fa-circle" rel="tooltip" id=""></i></a></div>
						          <div class="timeline-panel">
						            <div class="timeline-body">
						              <p>Intime Equities Fin Statements 2017 </p>
						              <div class="download_box_left"><i class="icon_download fa fa-download"></i> </div>
						          	</div>
						        </li>
						        
						        <li  class="timeline-inverted">
						          <div class="timeline-badge primary"><a><i class="fa fa-circle invert" rel="tooltip" id=""></i></a></div>
						          <div class="timeline-panel">
						            <!-- <div class="timeline-heading">
						              <img class="img-responsive" src="http://lorempixel.com/1600/500/sports/2" />
						              
						            </div> -->
						            <div class="timeline-body">
						              <p>Distress Asset Acts 2017</p>
						               <div class="download_box_right"><i class="icon_download fa fa-download"></i> </div>
						             </div>
						          <!--   
						            <div class="timeline-footer">
						                <a><i class="glyphicon glyphicon-thumbs-up"></i></a>
						                <a><i class="glyphicon glyphicon-share"></i></a>
						                <a class="pull-right">Continuar Lendo</a>
						            </div> -->
						          </div>
						        </li>
						        <li>
						          <div class="timeline-badge primary"><a><i class="fa fa-circle" rel="tooltip" id=""></i></a></div>
						          <div class="timeline-panel">
						          
						            <div class="timeline-body">
						              <p>Antique Stock Broking Standalone Acts 2017</p>
						               <div class="download_box_left"><i class="icon_download fa fa-download"></i> </div>
						          </div>
						            
						          </div>
						        </li>
						        
						        <li  class="timeline-inverted">
						          <div class="timeline-badge primary"><a><i class="fa fa-circle invert" rel="tooltip" id=""></i></a></div>
						          <div class="timeline-panel">
						          
						            <div class="timeline-body">
						              <p>ITI Reinsurance Acts 2017</p>
						               <div class="download_box_right"><i class="icon_download fa fa-download"></i> </div>
						            </div>
						           
						          </div>
						        </li>
						        <li>
						          <div class="timeline-badge primary"><a><i class="fa fa-circle" rel="tooltip" id=""></i></a></div>
						          <div class="timeline-panel">
						          
						            <div class="timeline-body">
						              <p>Inga Capital Acts 2017</p>
						               <div class="download_box_left"><i class="icon_download fa fa-download"></i> </div>
						            </div>
						          </div>
						        </li>
						        
						        <li  class="timeline-inverted">
						          <div class="timeline-badge primary"><a><i class="fa fa-circle invert" rel="tooltip" id=""></i></a></div>
						          <div class="timeline-panel">
						           
						            <div class="timeline-body">
						              	<p>ITI Asset Management Acts 2017</p>
						               <div class="download_box_right"><i class="icon_download fa fa-download"></i> </div>
						          </div>
						      		</div>
						        </li>
							</ul>
						
		                </div>
		            </div>
		        </div>

		         <div class="panel panel-default">
		            <div class="panel-heading" role="tab" id="headingFour">
		                <h4 class="container panel-title">
		                    <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
		                       <?php if($_GET["tab"]==4){ echo '<i class="more-less glyphicon glyphicon-minus"></i>';}else{echo '<i class="more-less glyphicon glyphicon-plus"></i>';} ?>
		                        Quarterly Reports
		                    </a>
		                </h4>
		            </div>
		            <div id="collapseFour" class="panel-collapse collapse  <?php if($_GET["tab"]==4){ echo 'in';} ?>" role="tabpanel" aria-labelledby="headingFour">
		                <div class="container panel-body">
		                   <div class="panel-group annual_report" id="accordion2" role="tablist" aria-multiselectable="true">
									        <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_1">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#qua_1_report" aria-expanded="true" aria-controls="qua_1_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		  2018-2019
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_1_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_1">
									                <div class="panel-body">
									                  	The INVEST Unaudited Fin Results for Jun 2018<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>

									        <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_2">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#qua_2_report" aria-expanded="true" aria-controls="qua_2_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		  2017-2018
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_2_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_2">
									                <div class="panel-body">
									                 	FFSIL Results - December 2017	<a href=""><i class="icon_download fa fa-download"></i></a><br>
														FFSIL Audited Financial Statement March 2018	<a href=""><i class="icon_download fa fa-download"></i></a><br>
														FFSIL Results Sept 2017	<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Fortune Unaudited Fin Results for Jun 2017	<a href=""><i class="icon_download fa fa-download"></i></a>
									                  
									                </div>
									            </div>
									        </div>

									        <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_3">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#qua_3_report" aria-expanded="true" aria-controls="qua_3_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		  2016-2017
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_3_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_3">
									                <div class="panel-body">
									                 	 Fortune Unaudited Fin Results for Dec 2016    <a href=""><i class="icon_download fa fa-download"></i></a><br>
														Fortune Unaudited Fin Results for Sept 2016    <a href=""><i class="icon_download fa fa-download"></i></a><br>
														Fortune Results March 2017    <a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1-April-June 2016 Standalone    <a href=""><i class="icon_download fa fa-download"></i></a>
																							              
									                </div>
									            </div>
									        </div>

									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_4">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#qua_4_report" aria-expanded="true" aria-controls="qua_4_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		  2015-2016
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_4_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_4">
									                <div class="panel-body">
									                  	Q2 September 2015 Standalone  <a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1-April-June 2015 Standalone  <a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 December 2015 Standalone  <a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q2 September 2015 Consolidated  <a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 December 2015 Consolidated  <a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1-April-June 2015 Consolidated  <a href=""><i class="icon_download fa fa-download"></i></a>

									                </div>
									            </div>
									        </div>


									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_5">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#qua_5_report" aria-expanded="true" aria-controls="qua_5_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		   2014-2015
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_5_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_5">
									                <div class="panel-body">
									                  	Q3 December 2014 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q2 September 2014 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 December 2014 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q 4 March 2015 Stand-alone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q 4 March 2015 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1-April-June 2014 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1-April-June 2014 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q2 September 2014 Standalone<a href=""><i class="icon_download fa fa-download"></i></a>
									                </div>
									            </div>
									        </div>

									           <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_6">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#qua_6_report" aria-expanded="true" aria-controls="qua_6_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		  2013-2014
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_6_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_6">
									                <div class="panel-body">
									                  	Q2-July-September 2013 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1-April-June 2013 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1-April-June 2013 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q4 - January-March 2014 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 - October-December 2012 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 - October-December 2013 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q4 - January-March 2014 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 - October-December 2013 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q2-July-September 2013 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
									                </div>
									            </div>
									        </div>

									           <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_7">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#qua_7_report" aria-expanded="true" aria-controls="qua_7_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		 2012-2013
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_7_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_7">
									                <div class="panel-body">
									                  	Q1 - April-June 2012 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 - October-December 2012 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1 - April-June 2012 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q4-January-March 2013 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q2 - July-September 2012 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q4-January-March 2013 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
									                </div>
									            </div>
									        </div>

									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_8">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#qua_8_report" aria-expanded="true" aria-controls="qua_8_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		  2011-2012
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_8_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_8">
									                <div class="panel-body">
									                  	
														Q4 - January-March 2012 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q2 - July-September 2011 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q2 - July-September 2011 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 - October-December 2011 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1 - April-June 2011 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1 - April-June 2011 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q4 - January-March 2012 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 - October-December 2011 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
									                </div>
									            </div>
									        </div>

									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_9">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#qua_9_report" aria-expanded="true" aria-controls="qua_9_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		 2010-2011
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_9_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_9">
									                <div class="panel-body">
									                  	Q2 - July-September 2010 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q2 - July-September 2010 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 - October-December 2010 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1 - April-June 2010 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q4 - January-March 2011 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1 - April-June 2010 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 - October-December 2010 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q4 - January-March 2011 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
									                </div>
									            </div>
									        </div>

									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_10">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#qua_10_report" aria-expanded="true" aria-controls="qua_10_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		  2009-2010
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_10_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_10">
									                <div class="panel-body">
									                  	Q4 - Jan-March 2010 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q4 - Jan-March 2010 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q2 - July-Sept 2009 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1 - April-June 2009 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1 - April-June 2009 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 - Oct-Dec 2009 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q2 - July-Sept 2009 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 - Oct-Dec 2009 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
									                </div>
									            </div>
									        </div>

									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_11">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#qua_11_report" aria-expanded="true" aria-controls="qua_11_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		   2008-2009
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_11_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_11">
									                <div class="panel-body">
									                   Q1 - April-June 2008 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q4 - Jan-March 2009 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q2 - July-Sep 2008 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q2 - July-Sep 2008 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1 - April-June 2008 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q4 - Jan-March 2009 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 - Oct-Dec 2008 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 - Oct-Dec 2008 Consolidated<a href=""><i class="icon_download fa fa-download"></i></a><br>
									                </div>
									            </div>
									        </div>

									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_12">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#qua_12_report" aria-expanded="true" aria-controls="qua_12_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		 2007-2008
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_12_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_12">
									                <div class="panel-body">
									                  	Q3 - Oct-Dec 2007<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q4 - Jan-Mar 2008 Standalone<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1 - Apr-Jun 2007<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q2 - Jul-Sep 2007<a href=""><i class="icon_download fa fa-download"></i></a><br>
									                </div>
									            </div>
									        </div>

									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_13">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#qua_13_report" aria-expanded="true" aria-controls="qua_13_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		 2006-2007
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_13_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_13">
									                <div class="panel-body">
									                  	Q2 - Jun-Sep 2006<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1 - Apr-Jun 2006<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 - Oct-Dec 2006<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q4 - Jan-Mar 2007<a href=""><i class="icon_download fa fa-download"></i></a><br>
									                </div>
									            </div>
									        </div>

									         <div class="panel panel-default">
									            <div class="panel-heading" role="tab" id="qua_14">
									                <h4 class="panel-title">
									                    <a role="button" data-toggle="collapse" data-parent="#accordion2" href="#qua_14_report" aria-expanded="true" aria-controls="qua_14_report">
									                        <i class="more-less glyphicon glyphicon-plus"></i>
									                   		 2005-2006
									                    </a>
									                </h4>
									            </div>
									            <div id="qua_14_report" class="panel-collapse collapse " role="tabpanel" aria-labelledby="qua_14">
									                <div class="panel-body">
									                    Q4 - Jan-Mar 2006<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q1 - Mar-Jun 2005<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q2 - Jun-Sep 2005<a href=""><i class="icon_download fa fa-download"></i></a><br>
														Q3 - Sep-Dec 2005<a href=""><i class="icon_download fa fa-download"></i></a><br>
									                </div>
									            </div>
									        </div>
							     
									    </div><!-- panel-group -->
		                </div>
		            </div>
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
		$('.panel-group').on('hidden.bs.collapse', toggleIcon);
		$('.panel-group').on('shown.bs.collapse', toggleIcon);
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