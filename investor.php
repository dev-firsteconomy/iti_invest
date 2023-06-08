<?php 
    session_start();
    header('Access-Control-Allow-Origin: *'); 
    header('Access-Control-Allow-Methods: GET, PUT, POST, DELETE, OPTIONS');
    header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token , Authorization');

    $curl = curl_init();    // create & initialize a curl session
    // $url = "http://127.0.0.1:8000/api/categories";   // local url
    $url = "http://itiadmin.firsteconomy.com/api/categories";   //prod url
    curl_setopt($curl, CURLOPT_URL, $url);    // set our url with curl_setopt()
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt ($curl, CURLOPT_FOLLOWLOCATION, false);     // return the transfer as a string, also with setopt()
    $result = curl_exec($curl);     // curl_exec() executes the started curl session
    $data = json_decode($result,true);      // $data contains the output string
    // EXECUTE:
    if(!$result)
    {die("Connection Failure");}
    curl_close($curl);      // close curl resource to free up system resources
?>

<!DOCTYPE html>
<html>

<head>
    <title>The Investment Trust Of India | Investor Relations</title>
    <?php include_once('includes/header.php'); ?>
    <style>
        .investor-tabs .block_text {
            position: relative;
        }

    </style>
</head>

<body>
    <section class="section" id="">
        <div class="banner_about">
            <img src="images/invester/banner.jpg" alt="">
            <div class="banner_about_text">
                <!-- <p data-aos="fade-left" data-aos-delay="1100" class="shadow_text">INVESTER RELATIONS</p> -->
                <h1 data-aos="fade-left" data-aos-delay="1400">INVESTOR RELATIONS</h1>
            </div>
        </div>
    </section>

    <section class="section_inner investor-tabs">
        <div id="exTab2" class="container">
            <!-- <ul class="nav nav-tabs list_investor">
                    <li class="active"><a class="list_value" href="#key_relation0" data-toggle="tab" aria-expanded="false">Disclosures under Regulation 46 of the SEBI LODR:-</a></li>
                    <li class=""><a class="list_value" href="#key_relation1" data-toggle="tab" aria-expanded="false">Corporate Actions</a></li>
                    <li class=""><a class="list_value" href="#key_relation2" data-toggle="tab" aria-expanded="false">Other disclosures</a></li>
                    <li class=""><a class="list_value" href="#key_relation3" data-toggle="tab" aria-expanded="false">Policies</a></li>
                    <li class=""><a class="list_value" href="#key_relation4" data-toggle="tab" aria-expanded="true">Annual reports</a></li>
                </ul> -->
            <ul class="nav nav-tabs list_investor">
                <?php foreach ($data['categories'] as $key => $value) { ?>
                <?php if($key==0){ ?>
                <li class="active"><a class="list_value" href="#key_relation<?php echo $key; ?>" data-toggle="tab" aria-expanded="false"><?php echo $value['name'] ?></a></li>
                <?php }
                                                                           else{ ?>
                <li class=""><a class="list_value" href="#key_relation<?php echo $key; ?>" data-toggle="tab" aria-expanded="false"><?php echo $value['name'] ?></a></li>
                <?php } 
                    
                    ?>

                <?php } ?>
                <li class=""><a class="list_value" href="https://www.itiorg.com/investor-inner.php?id=4" target="_blank">Annual Reports</a></li>
                <li class=""><a class="list_value" href="https://www.itiorg.com/investor-inner.php?id=16" target="_blank">Downloads</a></li>
            </ul>

            <div class="tab-content">
                <?php foreach ($data['categories'] as $key => $catValue) { ?>
                <div class="tab-pane fade <?php if($key==0){echo 'in active'; } ?>" id="key_relation<?php echo $key; ?>" role="tabpanel" aria-labelledby="pills-home-tab">
                    <div class="block_text">
                        <ul>
                            <?php foreach($catValue['children'] as $keySubCat => $value) { ?>
                            <?php if( $data['categories'][$key]['id'] == $value['parent_id'] ) { ?>
                            <li>
                                <div class="row">
                                    <div class="col-md-9">
                                        <a href="<?php echo 'investor-inner.php?id='.$value['id']?>">
                                            <?php echo $value['name']; ?>
                                            <img src="images/fin_arrow.png" alt="">
                                        </a>
                                    </div>
                                    <div class="col-md-3">
                                        <?php if(count($value['children'])>0 ) { ?>
                                        <a class="plus-btn-float-right" onclick="openChild(<?php echo $value['id']?>)">+</a>
                                        <?php } ?>
                                    </div>
                                </div>
                            </li>
                            <?php } ?>

                            <?php if(count($value['children'])>0 ) { ?>
                            <div style="display:none;" id=<?php echo 'child-'.$value['id'] ?>>
                                <?php foreach($value['children'] as $keyChildren => $valueChildren) { ?>

                                <li class="align-child-cat">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <a href="<?php echo 'investor-inner.php?id='.$valueChildren['id']?>">
                                                <?php echo $valueChildren['name']; ?>
                                                <img src="images/fin_arrow.png" alt="">
                                            </a>
                                        </div>
                                    </div>
                                </li>
                                <?php } ?>
                            </div>
                            <?php } ?>

                            <?php } ?>
                        </ul>
                    </div>
                </div>
                <?php } ?>

                <!-- <div class="tab-pane fade" id="key_relation1" role="tabpanel" aria-labelledby="pills-profile-tab">
                    <div class="block_text">
                            <ul>

                                <li><a href="">Business Segment<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Composition of Board of Directors and its Committees :-<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Notice of Board meeting for Financial results<img src="images/fin_arrow.png" alt=""></a></li>


                            
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="key_relation2" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="block_text">
                            <ul>

                                <li><a href="">Business Segment<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Composition of Board of Directors and its Committees :-<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Notice of Board meeting for Financial results<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Outcome of Board Meeting<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Financial Results<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Shareholding pattern<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Corporate governance Report<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">secretarial compliance report<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">contact details of key managerial personnel/grievance redressal officer/ contact details of key managerial personnel who are authorized for the purpose of determining materiality of an event<img src="images/fin_arrow.png" alt=""></a></li>

                                <li><a href="">Window Closure<img src="images/fin_arrow.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="key_relation3" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="block_text">
                            <ul>

                                <li><a href="">Business Segment<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Composition of Board of Directors and its Committees :-<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Notice of Board meeting for Financial results<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Outcome of Board Meeting<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Financial Results<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Shareholding pattern<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Corporate governance Report<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">secretarial compliance report<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">contact details of key managerial personnel/grievance redressal officer/ contact details of key managerial personnel who are authorized for the purpose of determining materiality of an event<img src="images/fin_arrow.png" alt=""></a></li>

                                <li><a href="">Window Closure<img src="images/fin_arrow.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="key_relation4" role="tabpanel" aria-labelledby="pills-contact-tab">
                    <div class="block_text">
                            <ul>

                                <li><a href="">Business Segment<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Composition of Board of Directors and its Committees :-<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Notice of Board meeting for Financial results<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Outcome of Board Meeting<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Financial Results<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Shareholding pattern<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">Corporate governance Report<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">secretarial compliance report<img src="images/fin_arrow.png" alt=""></a></li>


                                <li><a href="">contact details of key managerial personnel/grievance redressal officer/ contact details of key managerial personnel who are authorized for the purpose of determining materiality of an event<img src="images/fin_arrow.png" alt=""></a></li>

                                <li><a href="">Window Closure<img src="images/fin_arrow.png" alt=""></a></li>
                            </ul>
                        </div>
                    </div> -->

            </div>

        </div>
    </section>

    <?php include_once('includes/footer.php'); ?>

    <script>
        function openChild(childId) {
            $('#child-' + childId).toggle();
        }

    </script>
</body>

</html>
