<!DOCTYPE html>
<html>

<head>
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
            width: 50px !important;
        }

    </style>



    <div class="inner-page-wrapper">
        <div class="container">
            <!--- datatable -->
            <h2 class="main_title">COMPLIANCES</h2>
            <div class='input-group date ' style="float:right;">
                <p>Search by Year <select id="financialYear"></select></p>

            </div>
            <div class="datatableCustomFilter">
                <div class="row">
                    <!--
                    <div class="col-md-4">
                        <select id="categoryFilter" class="form-control">
                            <option value="">Show All</option>
                            <option value="Classical">Classical</option>
                            <option value="Hip Hop">Hip Hop</option>
                            <option value="Jazz">Jazz</option>
                        </select>
                    </div>
-->
                    <!--
                    <div class="col-md-4">
                        <div class='input-group date'>
                            <p>Search by Year <select id='years'></select></p>

                        </div>
                    </div>
-->
                    <!--
                    <div class="col-md-4">
                        <input type="text" id="searchBar" class="form-control" placeholder="Search Here">
                    </div>
-->
                </div>
            </div>

            <div class="row">

                <div class="datePickerWrapper table-responsive">
                    <table id="filterTable" class="table table-striped table-bordered" style="width:100%">
                        <thead>
                            <tr>
                                <th scope="col">Sr No.</th>
                                <th scope="col">Name</th>
                                <th scope="col">Category</th>
                                <th scope="col">Date</th>
                                <th scope="col">Download</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td scope="col">1</td>
                                <td scope="col">Public Enemy</td>
                                <td scope="col">Hip Hop</td>
                                <td scope="col">2022</td>
                                <td scope="col"><a href="#" download><i class="fas fa-file-download"></i> Download</a></td>
                            </tr>
                            <tr>
                                <td scope="col">2</td>
                                <td scope="col">Public Enemy</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">2021</td>
                                <td scope="col"><a href="#" download><i class="fas fa-file-download"></i> Download</a></td>
                            </tr>
                            <tr>
                                <td scope="col">3</td>
                                <td scope="col">Billie Holiday</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">2020</td>
                                <td scope="col"><a href="#" download><i class="fas fa-file-download"></i> Download</a></td>
                            </tr>
                            <tr>
                                <td scope="col">4</td>
                                <td scope="col">Vivaldi</td>
                                <td scope="col">Classical</td>
                                <td scope="col">2022</td>
                                <td scope="col"><a href="#" download><i class="fas fa-file-download"></i> Download</a></td>
                            </tr>
                            <tr>
                                <td scope="col">5</td>
                                <td scope="col">Jurrasic 5</td>
                                <td scope="col">Hip Hop</td>
                                <td scope="col">2022</td>
                                <td scope="col"><a href="#" download><i class="fas fa-file-download"></i> Download</a></td>
                            </tr>
                            <tr>
                                <td scope="col">6</td>
                                <td scope="col">Onyx</td>
                                <td scope="col">Hip Hop</td>
                                <td scope="col">2023</td>
                                <td scope="col"><a href="#" download><i class="fas fa-file-download"></i> Download</a></td>
                            </tr>
                            <tr>
                                <td scope="col">7</td>
                                <td scope="col">Tchaikovsky</td>
                                <td scope="col">Classical</td>
                                <td scope="col">2018</td>
                                <td scope="col"><a href="#" download><i class="fas fa-file-download"></i> Download</a></td>
                            </tr>
                            <tr>
                                <td scope="col">8</td>
                                <td scope="col">Oscar Peterson</td>
                                <td scope="col">Jazz</td>
                                <td scope="col">2010</td>
                                <td scope="col"><a href="#" download><i class="fas fa-file-download"></i> Download</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            <!--- datatable -->
        </div>
    </div>


    <?php include_once('includes/footer.php'); ?>

    <script>
        $("document").ready(function() {
            var table = $('#filterTable').DataTable();

            $('#categoryFilter').on('change', function() {
                table.columns(2).search(this.value).draw();
            });
            $('#dataTbaleDate input').on('change', function() {
                table.columns(3).search(this.value).draw();
            });

            $('#searchBar').on('change', function() {
                table.columns(1).search(this.value).draw();
            });

            var date = new Date();
            var today = new Date(date.getFullYear(), date.getMonth(), date.getDate());

            $("#dataTbaleDate").datepicker({
                format: "yyyy",
                viewMode: "years",
                minViewMode: "years",
                autoclose: true //to close picker once year is selected
            });

            $('#dataTbaleDate').datepicker('setDate', today);
        });

    </script>
    <script type="text/javascript">
        //        $(document).ready(function(e) {
        //            $('.yearselect').yearselect();
        //
        //            $('.yrselectdesc').yearselect({
        //                step: 5,
        //                order: 'desc'
        //            });
        //            $('.yrselectasc').yearselect({
        //                order: 'asc'
        //            });
        //        });

        //        var mySelect = $('#years');
        //        var startYear = 2023;
        //        var prevYear = 2022;
        //        for (var i = 0; i < 30; i++) {
        //            startYear = startYear - 1;
        //            prevYear = prevYear - 1;
        //            mySelect.append(
        //                $('<option></option>').val(startYear + "-" + prevYear).html(startYear + "-" + prevYear)
        //            );
        //        }

        var yearsLength = 30;
        var currentYear = new Date().getFullYear();
        for (var i = 0; i < 30; i++) {
            var next = currentYear + 1;
            var year = currentYear + '-' + next.toString().slice(-2);
            $('#financialYear').append(new Option(year, year));
            currentYear--;
        }

    </script>

    </body>

</html>
