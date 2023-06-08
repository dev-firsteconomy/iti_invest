<?php
    session_start();

    $postData = [
        'category_id' => @$_GET['id'],
        'year' => @$_GET['year']
    ];
    $curl = curl_init();    // create & initialize a curl session
    // $url = "http://127.0.0.1:8000/api/category-documents";   // local url
    $url = "http://itiadmin.firsteconomy.com/api/category-documents";   //prod url
    curl_setopt($curl, CURLOPT_URL, $url);   // set our url with curl_setopt()
    curl_setopt($curl, CURLOPT_RETURNTRANSFER,true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($postData));    
    $result = curl_exec($curl);      // curl_exec() executes the started curl session
    $data = json_decode($result,true);    // $data contains the output string
    // var_dump($data);
    // die();
    // EXECUTE:
    if(!$result)
    {die("Connection Failure");}
    curl_close($curl);  // close curl resource to free up system resources
?>

<!DOCTYPE html>
<html>

<head>
    <!-- <meta http-equiv="Content-Security-Policy" content="upgrade-insecure-requests">  -->
    <title>The Investment Trust Of India | Investor Relations</title>

    <?php include_once('includes/header.php'); ?>

    <style>
        .investor-tabs .block_text {
            position: relative;
        }

        .dataTables_length,
        .dataTables_filter {
            display: none
        }

        table.table-bordered.dataTable thead tr:first-child th {
            width: auto !important;
        }

        .inner-page-wrapper {
            padding: 100px 0;
        }

        table.table-bordered.dataTable thead tr th:first-child {
            width: 50px !important;
        }

        @media only screen and (max-width: 767px) {
            .main_title {
                padding-bottom: 15px;
                font-size: 15px;
                text-decoration: none;
                line-height: 25px;
            }
            .input-group.date{
                margin-right: 15px !important;
            }
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

    <div class="inner-page-wrapper">

        <div class="container">

            <!--- datatable -->
            <!-- display parent name and its category name above doscuments listing -->
            <h4 class="main_title category-title"> <?php echo $data['parent_name'].' > '.$data['category']['name'] ?> </h4>

            <div class="row">
                <div class="input-group date" style="float:right;margin: 10px 0px;">
                    <p>Search by Year
                        <select id="financialYear" onchange="financialYearChange(event)">
                            <option selected="" value="">Please Select</option>
                        </select>
                    </p>
                </div>
            </div>

            <!-- <div class="clearfix"></div> -->

            <div class="row">
                <div id="data-list-view" class="data-list-view-header invoices ml-1">
                    <!--- datatable starts-->
                    <div class="">
                        <table class="table data-list-view table-striped table-bordered table-responsive">
                            <thead>
                                <tr>
                                    <th>Sr No.</th>
                                    <th>Name</th>
                                    <!-- <th>Category</th> -->
                                    <th>Year</th>
                                    <th>Download</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                    <!--- datatable ends-->
                </div>
            </div>
        </div>
    </div>

    <?php include_once('includes/footer.php'); ?>

    <script type="text/javascript">
        var category_id;

        //get financial years for dropdown
        var yearsLength = 9;
        var currentYear = new Date().getFullYear();
        for (var i = 0; i < 9; i++) {
            var next = currentYear + 1;
            var year = currentYear + '-' + next.toString().slice(-2);
            $('#financialYear').append(new Option(year, year));
            currentYear--;
        }

        function financialYearChange(event) {
            // console.log(event.target.value, 'dddddddddddddddd');
            // by default get category documents data
            if (event.target.value) {
                getDocumentsData({
                    category_id: category_id,
                    year: event.target.value
                });
            } else {
                getDocumentsData({
                    category_id: category_id
                });
            }

        }

        $(document).ready(function(e) {
            // e.preventDefault();
            // get category id from query params on document ready
            const params = new Proxy(new URLSearchParams(window.location.search), {
                get: (searchParams, prop) => searchParams.get(prop),
            });
            category_id = params.id; // get category_id from query params

            // by default get category documents data
            getDocumentsData({
                category_id: category_id
            });
        });

        function getDocumentsData(data) {
            $('.data-list-view').DataTable({
                "processing": true,
                "serverSide": true,
                "ajax": {
                    // "url": "http://127.0.0.1:8000/api/cat-documents",    //local url
                    "url": "http://itiadmin.firsteconomy.com/api/cat-documents", //prod url
                    "dataType": "json",
                    "type": "POST",
                    "data": data,
                },
                "columns": [{
                        "data": "id"
                    },
                    {
                        "data": "title"
                    },
                    // {"data": "category"},
                    {
                        "data": "year"
                    },
                    {
                        "data": "document"
                    },
                    // {"data": "action", orderable: false, searchable: false}
                ],
                destroy: true,
                paging: false,
                searching: true,
                bAutoWidth: false,
                responsive: false,
                searchDelay: 1500,
                ordering: false,
                columnDefs: [{
                    orderable: false,
                    targets: 0,
                    checkboxes: {
                        selectRow: true
                    }
                }],
                dom: '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actions">p>',

                aLengthMenu: [
                    [10, 20, 50, 100],
                    [10, 20, 50, 100]
                ],
                select: {
                    style: "multi"
                },
                order: [
                    [0, "desc"]
                ],
                bInfo: false,
                pageLength: 10,
                buttons: [],
                initComplete: function() {
                    $(".dt-buttons .btn").removeClass("btn-secondary")
                },

            });
        }

    </script>
</body>

</html>
