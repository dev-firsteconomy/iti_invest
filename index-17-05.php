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
    font-s