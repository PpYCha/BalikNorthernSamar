<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="images/favicon.nsamarLogo.ico" />
    <title>LSI</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom-design.css">
    <!-- Latest compiled JavaScript -->
    <script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</head>


<!--Search-->
<script>
// $(document).ready(function(){
//   $("#myInput").on("keyup", function() {
//     var value = $(this).val().toLowerCase();
//     $("#myTable tr").filter(function() {
//       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//     });
//     let rowCount = $('#myTable tr:visible').length;
    
//             document.getElementById("totalNumber").innerHTML = rowCount;
//   });
// });
</script>
<!--Search-->

<script>
$(document).ready(function(){
  $('#myInput').keypress(function (event) {
      enableEnter(event);
   
  });
});

function enableEnter(event){
    if(event.keyCode == 13){
        var value =  $('#myInput').val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
    let rowCount = $('#myTable tr:visible').length;
    
            document.getElementById("totalNumber").innerHTML = "Found: " + rowCount + " result(s)";
    }

}
</script>


<!--Counting Rows-->
<script>


</script>
<!--Counting Rows-->

<body>
    <header class="header-global">
        <nav class="navbar navbar-main navbar-expand-sm navbar-transparent navbar-dark navbar-theme-primary headroom py-lg-2 px-lg-6"
            style="background: linear-gradient(90deg, #0C3897 0%, #0C3897 100%);">
            <div class="container">
                <img class="navbar-brand-dark img-responsive"
                    style=" height: 141px !important; width:  564px !important; margin-top: 0px !important; margin-bottom: 0px !important; "
                    src="assets/img/logoHeader.png" alt="Logo light">
            </div>
        </nav>
    </header>
    <br>
    <main>
        <div class="section section-md">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">
                        <!--Start of Form-->
                        <div class="table-responsive text-nowrap">
                            <input class="form-control" id="myInput" type="text" placeholder="Search.."
                                onkeydown="getRowsCount()">
                            <br>
                            <table id="tblApplicants" class="table table-striped table-bordered table-hover ">
                                <thead class="black white-text">
                                    <tr>
                                        <th scope="col">Names</th>
                                        <th scope="col">Travel Company</th>
                                        <th scope="col">Place of Origin</th>
                                        <th scope="col">Destination LGU</th>
                                        <th scope="col">Travel Date</th>
                                        <th scope="col">Contact No.</th>
                                    </tr>
                                </thead>
                                <tbody id="myTable">

                                    <?php include 'rpt_Daily_query.php';?>

                                </tbody>
                            </table>
                            
                            <h4 id="totalNumber">Found: <?php echo $count ?> result(s) </h4>
                        </div>`
                        <!--End of form-->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <div id="gwt-standard-footer"><iframe
            src="./Provincial Government of Northern Samar _ Official Website_files/footer-source.html"
            id="footer-gwt-frame" width="100%" scrolling="no"
            style="border: 0px; min-height: 188px; margin-bottom: -3px; overflow: hidden; height: 640px;"></iframe>
    </div><!-- end standard footer -->

    <div class="js-off-canvas-exit"></div>
    </div><!-- #off-canvass-content -->
    </div><!-- #off-canvass-wrapper inner -->
    </div><!-- #off-canvass-wrapper -->

    <!-- standard footer script -->
    <script type="text/javascript">
    (function(d, s, id) {
        var js, gjs = d.getElementById('gwt-standard-footer');

        js = d.createElement(s);
        js.id = id;
        js.src = "//gwhs.i.gov.ph/gwt-footer/footer.js";
        gjs.parentNode.insertBefore(js, gjs);
    }(document, 'script', 'gwt-footer-jsdk'));
    </script>


    <!-- philippine standard time script-->
    <script id="gwt-pst-jsdk"
        src="./Provincial Government of Northern Samar _ Official Website_files/gwtpst.js.download"></script>
    <script type="text/javascript" id="gwt-pst">
    (function(d, eId) {
        var js, gjs = d.getElementById(eId);
        js = d.createElement('script');
        js.id = 'gwt-pst-jsdk';
        js.src = "//gwhs.i.gov.ph/pst/gwtpst.js?" + new Date().getTime();
        gjs.parentNode.insertBefore(js, gjs);
    }(document, 'gwt-pst'));

    var gwtpstReady = function() {
        var firstPst = new gwtpstTime('pst-time');
    }
    </script>
    <script id="gwt-pst-jsonp-time"
        src="./Provincial Government of Northern Samar _ Official Website_files/jsonp_unix.php"></script>
    <!-- end philippine standard time -->

    <script>
    (function(body) {
        'use strict';
        body.className = body.className.replace(/\btribe-no-js\b/, 'tribe-js');
    })(document.body);
    </script>
    <script>
    /* <![CDATA[ */
    var tribe_l10n_datatables = {
        "aria": {
            "sort_ascending": ": activate to sort column ascending",
            "sort_descending": ": activate to sort column descending"
        },
        "length_menu": "Show _MENU_ entries",
        "empty_table": "No data available in table",
        "info": "Showing _START_ to _END_ of _TOTAL_ entries",
        "info_empty": "Showing 0 to 0 of 0 entries",
        "info_filtered": "(filtered from _MAX_ total entries)",
        "zero_records": "No matching records found",
        "search": "Search:",
        "all_selected_text": "All items on this page were selected. ",
        "select_all_link": "Select all pages",
        "clear_selection": "Clear Selection.",
        "pagination": {
            "all": "All",
            "next": "Next",
            "previous": "Previous"
        },
        "select": {
            "rows": {
                "0": "",
                "_": ": Selected %d rows",
                "1": ": Selected 1 row"
            }
        },
        "datepicker": {
            "dayNames": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"],
            "dayNamesShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
            "dayNamesMin": ["S", "M", "T", "W", "T", "F", "S"],
            "monthNames": ["January", "February", "March", "April", "May", "June", "July", "August", "September",
                "October", "November", "December"
            ],
            "monthNamesShort": ["January", "February", "March", "April", "May", "June", "July", "August",
                "September", "October", "November", "December"
            ],
            "monthNamesMin": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"],
            "nextText": "Next",
            "prevText": "Prev",
            "currentText": "Today",
            "closeText": "Done",
            "today": "Today",
            "clear": "Clear"
        }
    }; /* ]]> */
    </script>
    <script type="text/javascript">
    /* <![CDATA[ */
    var wpcf7 = {
        "apiSettings": {
            "root": "https:\/\/northernsamar.gov.ph\/index.php?rest_route=\/contact-form-7\/v1",
            "namespace": "contact-form-7\/v1"
        }
    };
    /* ]]> */
    </script>
    <script type="text/javascript"
        src="./Provincial Government of Northern Samar _ Official Website_files/scripts.js.download"></script>
    <script type="text/javascript"
        src="./Provincial Government of Northern Samar _ Official Website_files/skip-link-focus-fix.js.download">
    </script>
    <script type="text/javascript"
        src="./Provincial Government of Northern Samar _ Official Website_files/theme.js.download"></script>
    <div class="reveal-overlay">
        <div id="a11y-modal" class="reveal large" title="Accessibility Statement" data-reveal="pttwjx-reveal"
            role="dialog" aria-hidden="true" data-yeti-box="a11y-modal" data-resize="a11y-modal" data-events="resize"
            style="top: 154px;">
            <!-- Footer -->
</body>





</html>