
<?php session_start();

include('includes/db_config.php');
$sql_services = "SELECT * FROM `create_services` ";

$result_services = mysqli_query($db,$sql_services);

while($row_services = mysqli_fetch_array($result_services)){
  $row_service[] = $row_services;
}


?>

<!DOCTYPE html>
<html>
<head>
	<title>The Investment Trust Of India </title>

	<style type="text/css">
		/* CHART */
.chart-box {
    max-width: 66rem;
    margin: 0 auto;
    padding: 3rem 0;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    position: relative;
}
.chart {
    width: 50%;
    height: 50%;
    position: relative;
    margin-right: 3.5rem;
}

.tooltip {
    position: absolute;
    display: none;
    padding: .5rem;
    border-radius: .3rem;
    pointer-events: none;
    background-color: rgba(0, 0, 0, .7);
    color: #fff;
    -webkit-transition: .3s;
    transition: .3s;
    z-index: 100;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}
.tooltip:after {
    content: "";
    position: absolute;
    width: 0;
    height: 0;
    border-width: .6rem;
    border-style: solid;
}

.tooltip.north {
    -webkit-transform: translate(-50%, .6rem);
    transform: translate(-50%, .6rem);
    left: 0px;
}
.tooltip.north:after {
    border-color: transparent transparent rgba(0, 0, 0, .7) transparent;
    top: -1.2rem;
    left: calc(50% - .6rem);
}

.tooltip.west {
    -webkit-transform: translate(calc(-100% - .6rem), -50%);
    transform: translate(calc(-100% - .6rem), -50%);
}
.tooltip.west:after {
    border-color: transparent transparent transparent rgba(0, 0, 0, .7);
    top: calc(50% - .6rem);
    left: 100%;
}

.tooltip.east {
    -webkit-transform: translate(.6rem, -50%);
    transform: translate(.6rem, -50%);
}
.tooltip.east:after {
    border-color: transparent rgba(0, 0, 0, .7) transparent transparent;
    top: calc(50% - .6rem);
    left: -1.2rem
}


.tooltip.south {
    -webkit-transform: translate(-50%, calc(-100% - .6rem));
    transform: translate(-50%, calc(-100% - .6rem));
}
.tooltip.south:after {
    border-color: rgba(0, 0, 0, .7) transparent transparent transparent;
    top: 100%;
    left: calc(50% - .6rem);
}

.tooltip .color-icon {
    width: 1.5rem;
    height: 1.5rem;
    margin-right: .5rem;
    border: 2px solid #ccc;
    -webkit-box-flex: 1;
    -ms-flex: 1 0 auto;
    flex: 1 0 auto;
}
.tooltip .label {
    -webkit-box-flex: 2;
    -ms-flex: 2 0 auto;
    flex: 2 0 auto;
}
.chart path{
    opacity: .9;
    stroke-width: 2;
    stroke: #fff;
}

.chart path:hover{
    opacity: 1;
    stroke: #ccc;
    z-index: 50;
}

.estimate {
    position: absolute;
    top: 50%;
    left: 50%;
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    text-align: center;
}

.estimate__heading {
    text-transform: uppercase;
    font-size: 1.5rem;
    color: #333;
    width: 100%;
    margin-bottom: 2rem;
}

@media (max-width: 677px) {
    .estimate__heading {
        margin-bottom: .5rem;
    }
}

@media (max-width: 400px) {
    .estimate__heading {
        margin-bottom: 0;
    }
}

.estimate__value {
    font-size: 5.5rem;
    color: #ef4023;
    font-weight: 100;
}

@media (max-width: 677px) {
    .estimate__value {
       font-size: 4rem;
    }
}

.estimate__value:before {
    font-family: "Font Awesome 5 Free";
    font-weight: 900; 
    content: "\f156";
    font-size: 2.5rem;
    vertical-align: top;
}

.info {
    display: inline-block;
    vertical-align: top;
    width: 2.5rem;
    height: 2.5rem;
    text-align: center;
}

.info__tooltip {
    position: absolute;
    min-width: 45rem;
    width: auto;
    -webkit-transform: translate(calc( -100% - 1rem), 3rem);
    transform: translate(calc( -100% - 1rem), 3rem);

    display: none;
    background: #fff;
    z-index: 100;
    -webkit-box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.15);
    box-shadow: 0 1rem 4rem rgba(0, 0, 0, 0.15);
    border-radius: 3px;
    padding: 1.5rem;
    font-size: 1.5rem;
    pointer-events: none;
    text-align: left;
}

.info__tooltip.north {
    -webkit-transform: translate(calc( -100% - 1rem), calc(-100% - 1rem));
    transform: translate(calc( -100% - 1rem), calc(-100% - 1rem));
}

.info__header {
    text-align: center;
    font-weight: 400;
}

.info__icon {
    background-image: url(data:image/svg+xml;base64,PD94bWwgdmVyc2lvbj0iMS4wIiBlbmNvZGluZz0iVVRGLTgiIHN0YW5kYWxvbmU9Im5vIj8+PHN2ZyB3aWR0aD0iMTlweCIgaGVpZ2h0PSIxOXB4IiB2aWV3Qm94PSIwIDAgMTkgMTkiIHZlcnNpb249IjEuMSIgeG1sbnM9Imh0dHA6Ly93d3cudzMub3JnLzIwMDAvc3ZnIiB4bWxuczp4bGluaz0iaHR0cDovL3d3dy53My5vcmcvMTk5OS94bGluayI+ICAgICAgICA8dGl0bGU+aW5mbyBidXR0b24gY29weSAxMDwvdGl0bGU+ICAgIDxkZXNjPkNyZWF0ZWQgd2l0aCBTa2V0Y2guPC9kZXNjPiAgICA8ZGVmcz48L2RlZnM+ICAgIDxnIGlkPSJQYWdlLTEiIHN0cm9rZT0ibm9uZSIgc3Ryb2tlLXdpZHRoPSIxIiBmaWxsPSJub25lIiBmaWxsLXJ1bGU9ImV2ZW5vZGQiPiAgICAgICAgPGcgaWQ9IkFHLUNhbGN1bGF0b3ItdjItLS1Nb2JpbGUiIHRyYW5zZm9ybT0idHJhbnNsYXRlKC00MzIuMDAwMDAwLCAtMjQyLjAwMDAwMCkiPiAgICAgICAgICAgIDxnIGlkPSJHcm91cC0xMC1Db3B5IiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgyMi4wMDAwMDAsIDI0MS4wMDAwMDApIj4gICAgICAgICAgICAgICAgPGcgaWQ9Ikdyb3VwLTkiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDIzOS4wMDAwMDAsIDAuMDAwMDAwKSI+ICAgICAgICAgICAgICAgICAgICA8ZyBpZD0iR3JvdXAtNiI+ICAgICAgICAgICAgICAgICAgICAgICAgPGcgaWQ9ImluZm8tYnV0dG9uIiB0cmFuc2Zvcm09InRyYW5zbGF0ZSgxNzEuMDAwMDAwLCAxLjAwMDAwMCkiPiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8cGF0aCBkPSJNOS41LDAgQzQuMjQyOTM3NSwwIDAsNC4yNDI5Mzc1IDAsOS41IEMwLDE0Ljc0MjIxODggNC4yNDI5Mzc1LDE5IDkuNSwxOSBDMTQuNzQyODEyNSwxOSAxOSwxNC43NDM0MDYyIDE5LDkuNSBDMTksNC4yNDI5Mzc1IDE0Ljc0MjgxMjUsMCA5LjUsMCBMOS41LDAgWiIgaWQ9IkltcG9ydGVkLUxheWVycyIgZmlsbD0iIzRBOTBFMiI+PC9wYXRoPiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8ZyBpZD0iUGFnZS0xIiBzdHJva2Utd2lkdGg9IjEiIHRyYW5zZm9ybT0idHJhbnNsYXRlKDguMDAwMDAwLCA0LjAwMDAwMCkiIGZpbGw9IiNGRkZGRkYiPiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBvbHlnb24gaWQ9IkZpbGwtMSIgcG9pbnRzPSIwIDExIDMgMTEgMyA0IDAgNCI+PC9wb2x5Z29uPiAgICAgICAgICAgICAgICAgICAgICAgICAgICAgICAgPHBhdGggZD0iTTMsMS41MDEwODcyNyBDMywzLjQ5ODE4Nzg4IDAsMy40OTgxODc4OCAwLDEuNTAxMDg3MjcgQzAsLTAuNTAwMzYyNDI0IDMsLTAuNTAwMzYyNDI0IDMsMS41MDEwODcyNyIgaWQ9IkZpbGwtMiI+PC9wYXRoPiAgICAgICAgICAgICAgICAgICAgICAgICAgICA8L2c+ICAgICAgICAgICAgICAgICAgICAgICAgPC9nPiAgICAgICAgICAgICAgICAgICAgPC9nPiAgICAgICAgICAgICAgICA8L2c+ICAgICAgICAgICAgPC9nPiAgICAgICAgPC9nPiAgICA8L2c+PC9zdmc+);
    width: 2rem;
    height: 2rem;
    background-size: 2rem;
    display: inline-block;
    cursor: pointer;
}

.info__icon:hover + .info__tooltip {
    display: inline-block;
}

.chart__description {
    font-size: 1.6rem;
    padding-left: 2.5rem;
    position: relative;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    width: 50%;
}

.chart__legend {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-bottom: 1rem;
}

.chart__description-label {
    font-size: 1.8rem;
    font-weight: 400;
    margin-top: 0px;
}

.chart__description-value {
    font-size: 3rem;
    font-weight: 400;
}

.label__colored + .chart__description-value {
    margin-left: 2.6rem;
}

.chart__description-value:before {
    font-family: "Font Awesome 5 Free";
    font-weight: 900; 
    content: "\f156";
}

.label__colored:before {
    content: '';
    display: inline-block;
    border-radius: 50%;
    width: 1.6rem;
    height: 1.6rem;
    margin-right: .7rem;
    -webkit-transform: translateY(.2rem);
    transform: translateY(.2rem);
    background-color: #5A6372;
}

.label__colored-1:before {
    background: #F79082;
}

.label__colored-2:before {
    background: #DBEFAF;
}

.label__colored-3:before {
    background: #5A6372;
}

.label__colored-4:before {
    background: #ef4023;
}

.label__colored-5:before {
    background: #ef4023;
}

.label--sub {
    display: block;
    font-size: 1.4rem;
}

/* Controllers */
.controllers-box {
     margin-bottom: 5.5rem; 
}

.controller-row.row {
    margin: 0 auto;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: horizontal;
    -webkit-box-direction: normal;
    -ms-flex-direction: row;
    flex-direction: row;
}

.controller-row [class^="col-"] {
    float: left;
}

.controller-row [class^="col-"]:not(:last-child) {
/*    margin-right: 1.5rem;*/
}

.col-1-of-2 {
    width: calc(50% - 0.5 * 1.5rem);
}

.col-1-of-3 {
    width: calc((100% - 2 * 1.5rem) / 3);
}

.col-2-of-3 {
    width: calc((200%  -  1.5rem) / 3);
}

.col-1-of-4 {
    width: calc(25% - 0.75 * 1.5rem);
}

.col-2-of-4 {
    width: calc(50% -  0.5 * 1.5rem);
}

.col-3-of-4 {
    width: calc(75% - 0.25 * 1.5rem);
}

/* Range Slider */

.calc__slider {
    -webkit-appearance: none;
    width: 100%;
    height: 1rem;
    border-radius: 5px;
    outline: none;
    -webkit-transition: .2s;
    -webkit-transition: opacity .2s;
    transition: opacity .2s;
    display: block;
    margin-top: 1.2rem;
    -webkit-box-shadow: inset 0 .1rem .3rem #555;
    box-shadow: inset 0 .1rem .3rem #555;
    background-image: -webkit-gradient(linear, left top, right top, from(#ef4023), color-stop(50%, #ef4023), color-stop(50%, white));
    background-image: linear-gradient(90deg, #ef4023 0%, #ef4023 50%, white 50%);
}

.calc__slider::-webkit-slider-thumb {
    -webkit-appearance: none;
    appearance: none;

    background: #fff;
    border: 1px solid #ddd;
    -webkit-box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.4);
    box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.4);
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
    cursor: pointer;
    z-index: 1;
}

.calc__slider::-moz-range-thumb {
    width: 3rem;
    height: 3rem;
    border-radius: 50%;
    background: #4CAF50;
    cursor: pointer;
}

/* input box */
.controller-row {
    -ms-flex-wrap: wrap;
    flex-wrap: wrap;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
}

.controller-row:not(:last-child) {
    margin-bottom: 3.7rem;
}

@media (max-width: 600px) {
    .controller-row {
        height: 10rem;
    }
    .controller-row [class^="col-"]:nth-child(2) {
        -webkit-box-ordinal-group: 2;
        -ms-flex-order: 1;
        order: 1;
        -webkit-box-flex: 0;
        -ms-flex: 0 1 100%;
        flex: 0 1 100%;
    }
    .controller-row [class^="col-"]:nth-child(1),
    .controller-row [class^="col-"]:nth-child(3){
        -webkit-box-flex: 0;
        -ms-flex: 0 1 48%;
        flex: 0 1 48%;
    }
}

.calc__input-group {
    width: 100%;
    position: relative;
    display: table;
    border-collapse: separate;
    color: #5A6372;
    font-size: 1.8rem;
    text-shadow: 1px 1px 1px rgba(0, 0, 0, 0.004);
    padding-left: 1rem;
}
.calc__input-group-addon {
    display: table-cell;
    width: 4.5rem;
    height: 4.5rem;
    background-color: #FAFAFA;
    padding: 0;
    color: #5A6372;
    text-align: center;
    border: 1px solid #ccc;
    vertical-align: middle;
    border-radius: 0;
    font-weight: 300;
}

.calc__input-group-addon:first-child {
    border-right: 0;
}

.calc__input-group-addon:nth-child(2) {
    border-left: 0;
}

.calc__input {
    display: table-cell;
    position: relative;
    z-index: 2;
    width: 100%;
    padding: .6rem 1.2rem;
    color: #5A6372;
    background-color: #fff;
    border: 1px solid #ccc;
    border-radius: .4rem;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075);
    height: 4.5rem;
    font-size: 2rem;
    font-weight: 300;
}

.calc__input:focus {
    outline: 0;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
}

.calc__input-group .calc__input:first-child {
    border-top-right-radius: 0;
    border-bottom-right-radius: 0;
}
.calc__input-group .calc__input:nth-child(2) {
    border-top-left-radius: 0;
    border-bottom-left-radius: 0;
}

.info-box {
    display: table-cell;
    width: 3.5rem;
    text-align: right;
    vertical-align: top;
}

.section-chart-controllers__footer {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    padding: 0 2.5rem;
}
/* DIALOG */
.dialog {
    display: none;
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    z-index: 10;
    min-height: 100%;
    overflow: auto;
}
.dialog.open {
    display: block;
}

.custom-emi-calc {
    background-color: red;
    color: #fff;
    padding: 10px;
    display: inline-block;
    float: left;
    border-radius: 20px;
}

.custom-emi-calc input.inner-intputs {
    width: 100%;
    font-size: 16px;
    color: #333;
    background-color: transparent;
    outline: none;
    border: 1px solid #000;
    border-radius: 0px;
}

.custom-emi-calc input.inner-intputs:focus {
    border: 1px solid #EF4023;
    border: 0px;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.emi-calc-wrapper {
    margin-bottom: 20px;
}

.heading-primary {
    color: #333;
    font-weight: 400;
    margin-bottom: 1.25rem;
    text-transform: uppercase;
    text-align: center;
    font-size: 3rem;
}

.heading-secondary {
    font-size: 1.5rem;
    font-weight: 200;
    margin-bottom: 1.75rem;
    text-align: center;
}

main {
    max-width: 66rem;
    margin: 0 auto;
}
	</style>
	<?php include_once('includes/header.php'); ?>

	<section class="section" id="home">
		<div class="banner mob-top-space">
			<img src="images/banner.jpg" class="hidden-xs" alt="building image" loading="lazy">
			<img src="images/banner_mob.jpg" class="visible-xs" alt="building image" loading="lazy">
			<div class="banner_text">
				<h1 data-aos="fade-left" data-aos-delay="700">Growth is never by<br>Mere Chance</h1>
				<div class="know_btn" data-aos="fade-up" data-aos-delay="1000">
					<!-- <a href="about.php" class="know_more">Know More</a> -->
					<!-- <img src="images/arrow_right.png" alt=""> -->
				</div>
			</div>
			<!-- <div class="scroll_down">
				<span>Scroll Down</span>
				<span class="vertical_line"></span>
			</div> -->
		</div>
	</section>

	<section class="section_inner" id="it_blocks">
		<div class="container-fluid">
			<div class="fin_blocks">
				<ul>
					<?php if(!empty($row_service)){
						foreach ($row_service as $key => $value) { $key = $key+1;?>
					<li data-aos="fade-up" data-aos-delay="<?php echo (int)(500 * $key) ; ?>">
						<div class="fin_logo">
							<img src="<?php echo $value['image'];?>" alt="">
						</div>
						<div class="fin_title">
							<h4><?php echo $value['title'];?></h4>
							<span class="divider"></span>
						</div>
						<div class="note">
						<p >
							<?php echo $value['note'];?>
						</p>
					</div>
						<div class=""> <!-- removed class fin_kn_mr-->
							<a href="product.php?id=<?php echo $value['id'];?>" class="know_more">Know More</a>
							<!-- <img src="images/fin_arrow.png" alt=""> -->
						</div>
					</li>

				<?php }} ?>

				</ul>
			</div>
		</div>
	</section>

	<section class="section_inner news_section">
		<div class="container">
			<div class="col-md-12 col-xs-12 text-center">
				<h2 class="main_title_black">Latest News </h2>
			</div>

			<div class="news_block col-xs-12  col-md-12">
                <div class="col-md-6 col-xs-12">
                <div class="flex-news-block">
                    <div class="news_image_block">
                        <img src="images/news/ffsil.png" alt="coins" loading="lazy">
                    </div>
                    <div class="news_content_block">
                        <div class="date_news">
                            <span class="date_news_val">10-06-2022</span>
                        </div>
                        <div class="news-descri">
                            <p>FIAFL - Advertisement</p>
                        </div>
                        <div class="read_more_btn_news">
                            <a href="news/FIAFL-Advertisement-10-6-22.pdf" class="know_more" target="_blank"> Read More</a>
                        </div>
                    </div>
                </div>
            </div>
				<div class="col-md-6 col-xs-12">
                <div class="flex-news-block">
                    <div class="news_image_block">
                        <img src="images/news/ffsil.png" alt="coins" loading="lazy">
                    </div>
                    <div class="news_content_block">
                        <div class="date_news">
                            <span class="date_news_val">13-09-2021</span>
                        </div>
                        <div class="news-descri">
                            <p>Fortune Integrated Assets Finance Limited - Expression of Interest & NDA</p>
                        </div>
                        <div class="read_more_btn_news">
                            <a href="news/FIAFL-ExpressionofInterest-NDA13-09-21.pdf" class="know_more" target="_blank"> Read More</a>
                        </div>
                    </div>
                </div>
            </div>
             <div class="col-md-6 col-xs-12">
                <div class="flex-news-block">
                    <div class="news_image_block">
                        <img src="images/news/ffsil.png" alt="coins" loading="lazy">
                    </div>
                    <div class="news_content_block">
                        <div class="date_news">
                            <span class="date_news_val">13-09-2021</span>
                        </div>
                        <div class="news-descri">
                            <p>Fortune Credit Capital Limited -  Expression of Interest & NDA</p>
                        </div>
                        <div class="read_more_btn_news">
                            <a href="news/FCCL-ExpressionofInterest-NDA13-09-21.pdf" class="know_more" target="_blank"> Read More</a>
                        </div>
                    </div>
                </div>
            </div>
                <div class="col-md-6 col-xs-12">
                <div class="flex-news-block">
                    <div class="news_image_block">
                        <img src="images/news/ffsil.png" alt="coins" loading="lazy">
                    </div>
                    <div class="news_content_block">
                        <div class="date_news">
                            <span class="date_news_val">13-09-2021</span>
                        </div>
                        <div class="news-descri">
                            <p>FCCL -Newspaper Advertisement</p>
                        </div>
                        <div class="read_more_btn_news">
                            <a href="news/FCCL-NewspaperAdvertisement-13-9-21.pdf" class="know_more" target="_blank"> Read More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-xs-12">
                <div class="flex-news-block">
                    <div class="news_image_block">
                        <img src="images/news/ffsil.png" alt="coins" loading="lazy">
                    </div>
                    <div class="news_content_block">
                        <div class="date_news">
                            <span class="date_news_val">13-09-2021</span>
                        </div>
                        <div class="news-descri">
                            <p>FIAFL - Newspaper Advertisement</p>
                        </div>
                        <div class="read_more_btn_news">
                            <a href="news/FIAFL-NewspaperAdvertisement-13-9-21.pdf" class="know_more" target="_blank"> Read More</a>
                        </div>
                    </div>
                </div>
            </div>
			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins" loading="lazy"> 
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">05-05-2021</span>
						</div>
						<div class="news-descri">
							<p>FIAFL- Restructuring Policy Covid19 Resolution- FAQs</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/FAQs-Restructuring-2.0Scheme.pdf" class="know_more" target="_blank"> Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins" loading="lazy">
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">22-04-2021</span>
						</div>
						<div class="news-descri">
							<p>FIAFL- Emergency Credit Line Guarantee Scheme (ECLGS) - FAQs</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/FAQs-ECLGS.pdf" class="know_more" target="_blank"> Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins" loading="lazy">
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">16-04-2021</span>
						</div>
						<div class="news-descri">
							<p>FIAFL- Emergency Credit Line Guarantee Scheme (ECLGS) - Operational Guidelines</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/Operational-Guidelines-ECLGS.pdf" class="know_more" target="_blank"> Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins"  loading="lazy">
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">02-06-2021</span>
						</div>
						<div class="news-descri">
							<p>FIAFL- Restructuring Policy Covid19 Resoultion</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/FIAFL-Restructuring-Policy-Covid19-Resoultion2.0May2021.pdf" class="know_more" target="_blank"> Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins"  loading="lazy">
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">20-03-2021</span>
						</div>
						<div class="news-descri">
							<p>FIAFL - Corrigendum</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/FIAFL-Corrigendum-20-03-21.pdf" class="know_more" target="_blank"> Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins"  loading="lazy">
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">12-03-2021</span>
						</div>
						<div class="news-descri">
							<p>FIAFL - Newspaper Publication</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/FIAFL_NewspaperPublication.pdf" class="know_more" target="_blank"> Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins"  loading="lazy">
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">12-03-2021</span>
						</div>
						<div class="news-descri">
							<p>Fortune Integrated Assets Finance Limited - EOI  NDA - 12 03 2021</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/FIAFL_EOI_NDA_12_03_2021.pdf" class="know_more" target="_blank"> Read More</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins"  loading="lazy">
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">12-03-2021</span>
						</div>
						<div class="news-descri">
							<p>FCCL-Advertisement</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/FCCL-Advertisement.jpg" class="know_more" target="_blank"> Read More</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins"  loading="lazy">
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">12-03-2021</span>
						</div>
						<div class="news-descri">
							<p>Fortune Credit Capital Limited - EOI-NDA 12-3-2021</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/Fortune-Credit-Capital-Limited-EOI-NDA-12-3-2021.pdf" class="know_more" target="_blank"> Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins"  loading="lazy">
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">25-05-2020</span>
						</div>
						<div class="news-descri">
							<p>FIAFL - Policy on EMI Moratorium - Revised - May 2020</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/FIAFL_Policy_on_EMI_Moratorium_Revised-May2020.pdf" class="know_more" target="_blank"> Read More</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins"  loading="lazy">
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">23-05-2020</span>
						</div>
						<div class="news-descri">
							<p>FIAFL - Precautionary measures to avoid Cyber Attack</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/Precautionary-measures-to-avoid-Cyber-Attack.pdf" class="know_more" target="_blank"> Read More</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins"  loading="lazy">
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">20-05-2020</span>
						</div>
						<div class="news-descri">
							<p>FIAFL - Policy on EMI Moratorium COVID 19</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/FIAFL_Policy_On_EMI_Moratorium_Open.pdf" class="know_more" target="_blank"> Read More</a>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins"  loading="lazy">
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">08-01-2020</span>
						</div>
						<div class="news-descri">
							<p>FIAFL - Corrigendum</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/FIAFL-Corrigendum.pdf" class="know_more" target="_blank"> Read More</a>
						</div>
					</div>
				</div>
			</div>


			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins"  loading="lazy">
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">06-01-2020</span>
						</div>
						<div class="news-descri">
							<p>FIAFL - EOI & NDA</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/NewFIAFL_EOI_n_NDA_03-01-2020.pdf" class="know_more"> Read More</a>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-xs-12">
				<div class="flex-news-block">
					<div class="news_image_block">
						<img src="images/news/ffsil.png" alt="coins"  loading="lazy">
					</div>
					<div class="news_content_block">
						<div class="date_news">
							<span class="date_news_val">06-01-2020</span>
						</div>
						<div class="news-descri">
							<p>FIAFL - Advertisement</p>
						</div>
						<div class="read_more_btn_news">
							<a href="news/FIAFL-NewspaperAdvertisement.pdf" class="know_more" target="_blank"> Read More</a>
						</div>
					</div>
				</div>
			</div>

			<!-- 2nd -->

			
			
			<!-- 3rd -->
			
			
			<!-- 4th -->



			
			</div>
		</div>
	</section>
    <div class="clearfix">

    </div>

    <div class="emi-calc-wrapper">
	    
    <header class="header">
        <div class="header__text-box">
            <h1 class="heading-primary">
                Emi CALCULATOR
            </h1>
            <h2 class="heading-secondary">
                Estimate your monthly payment for your next purchase using the calculator below
            </h2>
        </div>
    </header>
    <main>
        
        <section class="section-chart-controllers">
            <div class="controllers-box">
                <div class="controller-row row" id="price">
                    <div class="col-1-of-3">
                        <h3 class="chart__description-label label__colored label__colored-3">Price</h3>
                    </div>
                    <div class="col-1-of-3">
                        <input type="range" class="calc__slider">
                    </div>
                    <div class="col-1-of-3">
                        <span class="calc__input-group">
                            <input name="calc__input" type="number" class="calc__input" placeholder="Vehicle Price">
                            <span class="calc__input-group-addon"><i class="fas fa-rupee-sign"></i></span>
                            <div class="info-box">
                                <div class="info">
                                    <span class="info__icon"></span>
                                    <div class="info__tooltip">
                                        <h3 class="info__header">Vehicle Price</h3>
                                        <p class="info__body">
                                            The Manufacturer Suggested Retail Price (MSRP) or “sticker price”
                                            is the recommended selling price for the vehicle. The Dealer may adjust
                                            the actual selling price, either higher or lower. The MSRP excludes
                                            transportation and handling charges, destination charges, taxes, title,
                                            registration, preparation and documentary fees, tags, labor and installation
                                            charges, insurance, optional equipment or packages and accessories.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>

                <div class="controller-row row"  id="term">
                    <div class="col-1-of-3">
                        <h3 class="chart__description-label label__colored">Term</h3>
                    </div>
                    <div class="col-1-of-3">
                        <input name="calc_slider_term" type="range" class="calc__slider">
                    </div>
                    <div class="col-1-of-3">
                        <span class="calc__input-group">
                            <input type="number" class="calc__input" placeholder="Term">
                            <span class="calc__input-group-addon">mo</span>
                            <div class="info-box">
                                <div class="info">
                                    <span class="info__icon"></span>
                                    <div class="info__tooltip">
                                        <h3 class="info__header">Term</h3>
                                        <p class="info__body">
                                            Term represents the repayment period in months for
                                            the amount financed. This app uses a default term of 60 months.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
                
                <div class="controller-row row" id="apr">
                    <div class="col-1-of-3">
                        <h3 class="chart__description-label label__colored">APR</h3>
                    </div>
                    <div class="col-1-of-3">
                        <input name="calc_slider_apr" type="range" class="calc__slider">
                    </div>
                    <div class="col-1-of-3">
                        <span class="calc__input-group">
                            <input type="number" class="calc__input" placeholder="APR">
                            <span class="calc__input-group-addon">%</span>
                            <div class="info-box">
                                <div class="info">
                                    <span class="info__icon"></span>
                                    <div class="info__tooltip">
                                        <h3 class="info__header">APR</h3>
                                        <p class="info__body">
                                            APR is the Annual Percentage Rate. Actual APR is based on
                                            the creditworthiness of the customer. Not all customers
                                            will qualify for the lowest rate.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        </section>
        
        <section class="section-chart">
            <div class="chart-box">
                <div class="chart"></div>
                <div class="chart__description">
                    <div class="chart__legend">
                        <div class="legend__box">
                            <h3 class="chart__description-label label__colored label__colored-1">Interest</h3>
                            <p class="chart__description-value interest"> 1550</p>
                        </div>
                        <div class="info">
                            <span class="info__icon"></span>
                            <div class="info__tooltip">
                                <h3 class="info__header">Interest</h3>
                                <p class="info__body"> Interest is the dollar amount the credit will cost you.</p>
                            </div>
                        </div>
                    </div>

                    <div class="chart__legend">
                        <div class="legend__box">
                            <h3 class="chart__description-label label__colored label__colored-1">
                                Estimated Total Cost
                                <span class="label--sub">(including taxes and interest)</span>
                            </h3>
                            <p class="chart__description-value est_total_cost"> 31,550</p>
                        </div>
                        <div class="info">
                            <span class="info__icon"></span>
                            <div class="info__tooltip">
                                <h3 class="info__header">Estimated Total Cost</h3>
                                <p class="info__body">
                                    The Estimated Total Cost is a summation of the
                                    Amount Financed, Finance Charge and Taxes and any cash
                                    down payment and/or net trade-in amount.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <div class="section-chart-controllers__footer">
                <button class="btn btn-link btn__toggle-modal">
                    *Financing Disclosures
                </button>
                <button class="btn btn-secondary btn__reset know_more">
                    Reset
                </button>
            </div>
        </section>
    </main>
    <div class="dialog">
        <!-- <div class="modal-backdrop"></div> -->
        <div class="modal">
            <div class="modal__header">
                <span class="modal__header__text">Financing Disclosures</span>
                <span class="modal__header__close btn__toggle-modal">&Cross;</span>
            </div>
            <div class="modal__content">
                <p>
                    Numerical values are not an advertisement or offer for specific terms of credit.
                    Payment amounts presented are estimates and are for illustrative purposes only.
                    Actual vehicle price may vary by Dealer. The MSRP excludes transportation and handling charges,
                    destination charges, taxes, title, registration, preparation and documentary fees, tags,
                    labor and installation charges, insurance, optional products, equipment or packages and accessories.
                </p>
                <h2 class="modal__content-header">
                    Lease Transactions:
                </h2>
                <p>
                    The amount due at lease signing is the amount to be paid by the lessee prior to or at signing of
                    the lease or by delivery of the vehicle. It includes the first month’s payment, any acquisition fee,
                    down payment, less any net trade-in amount. The Estimated Monthly Lease Payment shown is based on
                    a 36 month term, down payment of $3,000, annual mileage allowance of 12,000 miles, a 0.001 money
                    factor, a tax rate of 0.0%, and a $0 net trade-in. A security deposit may be required depending on
                    creditworthiness.
                </p>
                <p>
                    If you change the Down Payment or Term or Annual Mileage allowance, or if you
                    trade in your current vehicle, the Estimated Monthly Payment will change.
                </p>
                <p>
                    The payment amount does not include title, license or registration fees.
                    Payment amounts may be different due to various factors such as fees, specials,
                    rebates, term, down payment, trade-in, applicable tax rate, and creditworthiness of
                    the customer. Please contact your selected dealer or lender for program details and actual terms.
                </p>
                <h2 class="modal__content-header">
                    Finance Transactions:
                </h2>
                <p>
                    The Estimated Monthly Payment is based on a 60 month term, a down payment of $6,000,
                    Annual Percentage Rate (APR) of 2.49%, a tax rate of 0.0%, and a $0 net trade-in.
                    If you change the Down Payment or Term, or if you trade in your current vehicle,
                    the Estimated Monthly Payment will change.
                </p>
                <p>
                    The payment amount does not include title, license or registration fees.
                    Payment amounts may be different due to various factors such as fees, specials,
                    rebates, term, down payment, APR, trade-in, and applicable tax rate. The APR presented
                    may not be the lowest rate available. Actual APR is based on the creditworthiness of the customer.
                    Not all customers will qualify for the lowest rate. Please contact your selected dealer or
                    lender for actual rates, program details and actual terms.
                </p>
            </div>
            <div class="modal__footer">
                <button class="btn btn-secondary btn_close btn__toggle-modal">
                    Close
                </button>
            </div>
        </div>
    </div>


	</div>
<div class="clearfix"></div>



<section class="section_inner good_company " id="good_company">
		<div class="container text-center">
			<!-- <h1 class="section_main_title">You Are In Good Company</h1> -->
			<h2 class="main_title_black">You Are In Good Company </h2>
		</div>

		<div class="container">	
			<div class="col-md-10 col-md-offset-1">
				<div class="testimonial-slider owl-carousel owl-theme">
			    <div class="item">
                    <div class=""> 
                       <img src="images/customer_testimonial/c1.jpg" width="90%" alt="Man standing besides the car">  
                   </div>
                </div>
                <div class="item">
                    <div class=""> 
                       <img src="images/customer_testimonial/c2.jpg" width="90%" alt="Man standing besides the car">  
                   </div>
                </div>

                <div class="item">
                    <div class=""> 
                       <img src="images/customer_testimonial/c3.jpg" width="90%" alt="family and car">  
                   </div>
                </div>

                <div class="item">
                    <div class=""> 
                       <img src="images/customer_testimonial/c4.jpg" width="90%" alt="Man standing besides the car">  
                   </div>
                </div>

                 <div class="item">
                    <div class=""> 
                       <img src="images/customer_testimonial/c5.jpg" width="90%" alt="Man standing besides the Rikshaw">  
                   </div>
                </div>              
			</div>
			</div>
			
		</div>
	</section>

	<!-- Modal -->
	<!-- <div id="popup" class="modal fade" role="dialog">
	  <div class="modal-dialog">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	      </div>
	      <div class="modal-body">
	        <img src="images/popup.jpg" alt="">
	      </div>
	    </div>

	  </div>
	</div> -->
	<!-- End of modal -->


	<?php include_once('includes/footer.php'); ?>
<script src="js/emi-calc.js"></script>
<script src="https://d3js.org/d3.v4.min.js"></script>

<script>
//Window Load
// $(window).on('load',function(){
//     $('#popup').modal('show');
// });
  $(".testimonial-slider").owlCarousel({
        items:1,
        loop:true,
        margin:50,
        navigation:false,
        dots:true,
        autoplay: true,
        animateOut: 'fadeOut',
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
  });


  // emi js
  var inputValues = {
    price: {
        _value: 30000,
        set value(val) {
            this._value = parseFloat(val);
            var tiv = inputValues.trade_in_value.value;
            var cdp = inputValues.cash_down_payment.value;

            if(this._value < tiv + cdp) {
                if(this._value > tiv) {
                    inputValues.cash_down_payment.value = this._value - tiv;
                } else {
                    inputValues.cash_down_payment.value = 0;
                    inputValues.trade_in_value.value = this._value;
                }
            }
        },
        get value() {
            return this._value;
        },
        min: 0,
        max: 500000,
        step: 5000,
        reset: function () {
            this._value = 30000;
        }
    },
    cash_down_payment: {
        _value: 6000,
        set value(val) {
            this._value = parseFloat(val);
            var sum = this._value + inputValues.trade_in_value.value;
            if(sum > inputValues.price.value) {
                inputValues.trade_in_value.value = inputValues.price.value - this._value;
            }
        },
        get value() {
            return this._value;
        },
        min: 0,
        get max() {
            return inputValues.price.value;
        },
        step: 500,
        reset: function () {
            this._value = 6000;
        }
    },
    trade_in_value: {
        _value: 0,
        set value(val) {
            this._value = parseFloat(val);
            var sum = this._value + inputValues.cash_down_payment.value;
            if(sum > inputValues.price.value) {
                inputValues.cash_down_payment.value = inputValues.price.value - this._value;
            }
        },
        get value() {
            return this._value;
        },
        min: 0,
        get max() {
            return inputValues.price.value;
        },
        step: 500,
        reset: function () {
            this._value = 0;
        }
    },
    tax_rate: {
        min: 0,
        max: 20,
        step: 0.1,
        _value: 0,
        get value() {
            return parseFloat(this._value);
        },
        set value(val) {
            this._value = val;
        },
        reset: function () {
            this._value = 0;
        }
    },
    term: {
        min: 12,
        max: 84,
        step: 12,
        _value: 60,
        get value() {
            return parseFloat(this._value);
        },
        set value(val) {
            this._value = val;
        },
        reset: function () {
            this._value = 60;
        }
    },
    apr: {
        min: 0,
        max: 30,
        step: 0.1,
        _value: 2.5,
        get value() {
            return parseFloat(this._value);
        },
        set value(val) {
            this._value = val;
        },
        reset: function () {
            this._value = 2.5;
        }
    }
};

var legendData = {
  get interest() {
      return this.est_total_cost - inputValues.price.value - this.taxes;
  },
  get taxes() {
      return inputValues.price.value * inputValues.tax_rate.value / 100;
  },
  get est_total_cost() {
    return this.est_m_payment * inputValues.term.value + inputValues.cash_down_payment.value + inputValues.trade_in_value.value;
  },
  get est_m_payment() {
      var principal = this.taxes + inputValues.price.value - inputValues.cash_down_payment.value - inputValues.trade_in_value.value;
      var r = inputValues.apr.value / 1200;
      var n = inputValues.term.value;
      var t = Math.pow(1 + r, n);

      if(!r) {
          return 0;
      }

      return principal * r * t / (t - 1);
  }

};

var chartData = [
  {
      label: 'Interest',
      id: 'interest',
      color: '#F79082',
      get value() {
          return legendData.interest;
      }
  },
  {
      label: 'Taxes',
      id: 'taxes',
      color: '#DBEFAF',
      get value() {
          return inputValues.price.value * inputValues.tax_rate.value / 100;
      }
  },
  {
      label: 'Trade-In Value',
      id: 'trade-in-value',
      color: '#88D2E0',
      get value() {
          return inputValues.trade_in_value.value;
      }
  },
  {
      label: 'Cash Down Payment',
      id: 'cash_down_payment',
      color: '#ef4023',
      get value() {
          return inputValues.cash_down_payment.value
      }
  },
  {
      label: 'Vehicle Price',
      id: 'price',
      color: '#5A6372',
      get value() {
        return inputValues.price.value;
      }
  }
];

draw();

function draw() {
    var paddingTop = 30;

    var tooltip = d3.select('.chart-box')
        .append('div')
        .attr('class', 'tooltip');

    tooltip.append('div')
        .attr('class', 'color-icon');

    tooltip.append('div')
        .attr('class', 'label');

    var chart = document.querySelector('.chart');
    chart.innerHTML = '';

    var width = chart.offsetWidth;
    var height = chart.offsetWidth + 2;

    var radius = width / 2;

    var color = d3.scaleOrdinal()
        .domain(chartData.map(function (d) {
            return d.label;
        }))
        .range(function (d) {
            return d.color;
        });

    var svg = d3.select('.chart')
        .append('svg')
        .attr('width', width)
        .attr('height', height)
        .append('g')
        .attr('transform', 'translate(' + (width / 2) +
            ',' + (height / 2) + ')');

    var donutWidth = width > 250 ? 30 : 20;
    var innerRadius = radius - donutWidth;
    var arc = d3.arc()
        .innerRadius(innerRadius)
        .outerRadius(radius);

    var pie = d3.pie()
        .padAngle(.007)
        .value(function (d) {
            return d.value;
        })
        .sort(null);

    var path = svg.selectAll('path')
        .data(pie(chartData))
        .enter()
        .append('path')
        .attr('d', arc)
        .attr('fill', function (d) {
            return d.data.color;
        });

    path.on('mouseover', function (d) {
        var x = arc.centroid(d)[0];
        var y = arc.centroid(d)[1];

        var r = innerRadius + donutWidth / 2;
        var cos = x / r;
        var sin = y / r;

        var top = height / 2 + y + paddingTop;
        var left = width / 2 + x;

        tooltip.select('.label').text(d.data.label);
        tooltip
            .style('top', top + 'px')
            .style('left', left + 'px')
            .style('display', 'flex');

        tooltip.select('.color-icon')
            .style('background-color', d.data.color);

        if (cos > 0.5) {
            tooltip.attr('class', 'tooltip west');
        } else if (cos < -0.5) {
            tooltip.attr('class', 'tooltip east');
        } else if (sin > 0.86) {
            tooltip.attr('class', 'tooltip south');
        } else {
            tooltip.attr('class', 'tooltip north');
        }
    });

    path.on('mouseout', function () {
        tooltip.style('display', 'none');
    });

    var estimateText = d3.select('.chart')
        .append('div')
        .attr('class', 'estimate');

    estimateText
        .append('div')
        .attr('class', 'estimate__heading')
        .append('text')
        .html('Estimated<br>monthly payment*');

    estimateText
        .append('div')
        .attr('class', 'estimate__value')
        .text(Math.ceil(legendData.est_m_payment));

    // controllers
    document.querySelectorAll('.controller-row')
        .forEach(function (group) {
            var min = inputValues[group.id].min;
            var max = inputValues[group.id].max;
            var value = inputValues[group.id].value;
            var step = inputValues[group.id].step;

            var boundary = max ? 100 * (value - min) / (max - min) : 0;

            var range = group.querySelector('input[type=range]');

            range.setAttribute('style',
                'background-image: linear-gradient(90deg, #ef4023 0%, #ef4023 ' + boundary + '%, white ' + boundary + '%);'
            );
            range.min = min;
            range.max = max;
            range.value = value;
            range.step = step;

            var textInput = group.querySelector('input[type=number]');
            textInput.min = min;
            textInput.max = max;
            textInput.value = value;
            textInput.step = step;
        });

    // legends
    document.querySelectorAll('.chart__description-value')
        .forEach(function (valueWrapper) {
            var value = legendData[valueWrapper.classList[1]];
            valueWrapper.textContent = Math.round(value);
        })
}

document.querySelectorAll('.info')
    .forEach(function (element) {
       element.addEventListener('mouseover', function (e) {
           if(e.screenY > window.innerHeight / 2 + 100) {
               element.querySelector('.info__tooltip').classList.add('north');
           } else {
               element.querySelector('.info__tooltip').classList.remove('north');
           }
       });
    });

document.querySelectorAll('.controller-row')
    .forEach(function (group) {
        var range = group.querySelector('input[type=range]');
        var textInput = group.querySelector('input[type=number]');
        var id = group.id;

        range.addEventListener('input', function (e) {
            inputValues[id].value = e.target.value;
            draw();
        });
        textInput.addEventListener('change', function (e) {
            inputValues[id].value = e.target.value;
            draw();
        });
    });

document.querySelector('.btn__reset')
    .addEventListener('click', function () {
       Object.values(inputValues).map(function (value) {
           value.reset();
       });
       draw();
    });

document.querySelectorAll('.btn__toggle-modal')
    .forEach(function (btn) {
        btn.addEventListener('click', function () {
            var dialog = document.querySelector('.dialog');
            dialog.classList.toggle('open');
        });
    });

d3.select(window)
    .on('resize', draw);



  // emi js end
</script>

</body>
</html>
