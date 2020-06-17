<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="images/favicon.nsamarLogo.ico" />
    <title>Reports</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/img/favicon/nsamarLogo.ico">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom-design.css">
    <!-- Latest compiled JavaScript -->
    <script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js" type="text/javascript"></script>
</head>


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

<!-- Sort -->

<script>
function sortTable(n) {
    var table, rows, switching, i, x, y, shouldSwitch, dir, switchcount = 0;
    table = document.getElementById("myTable");
    switching = true;
    //Set the sorting direction to ascending:
    dir = "asc"; 
    /*Make a loop that will continue until
    no switching has been done:*/
    while (switching) {
      //start by saying: no switching is done:
      switching = false;
      rows = table.rows;
      /*Loop through all table rows (except the
      first, which contains table headers):*/
      for (i = 0; i < (rows.length - 1); i++) {
        //start by saying there should be no switching:
        shouldSwitch = false;
        /*Get the two elements you want to compare,
        one from current row and one from the next:*/
        x = rows[i].getElementsByTagName("TD")[n];
        y = rows[i + 1].getElementsByTagName("TD")[n];
        /*check if the two rows should switch place,
        based on the direction, asc or desc:*/
        if (dir == "asc") {
          if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch= true;
            break;
          }
        } else if (dir == "desc") {
          if (x.innerHTML.toLowerCase() < y.innerHTML.toLowerCase()) {
            //if so, mark as a switch and break the loop:
            shouldSwitch = true;
            break;
          }
        } 
      }
      if (shouldSwitch) {
        /*If a switch has been marked, make the switch
        and mark that a switch has been done:*/
        rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
        switching = true;
        //Each time a switch is done, increase this count by 1:
        switchcount ++;      
      } else {
        /*If no switching has been done AND the direction is "asc",
        set the direction to "desc" and run the while loop again.*/
        if (switchcount == 0 && dir == "asc") {
          dir = "desc";
          switching = true;
        }
      }
    }
  }
</script>

<!-- Hide Search-->
<style>
@media print {
  #myInput {
    display: none;
  }
  #myfooter
  {
    display: none;
  }
}

th {
  cursor: pointer;
  word-wrap:break-word;
    white-space: normal;
    text-align: center;
    vertical-align: top;
}

td{
    word-wrap:break-word;
    white-space: normal;
    
}

</style>

<body>
<header>
      <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-md-7 py-4">
              <h4 class="text-white">About</h4>
              <p class="text-muted">This page is created by Provincial Gorvernment of Northern Samar by Management Information System Office. </p>
            </div>
            <div class="col-sm-4 offset-md-1 py-4">
              <h4 class="text-white">Contact</h4>
              <ul class="list-unstyled">
                <li><a href="#" class="text-white">Follow on Twitter</a></li>
                <li><a href="#" class="text-white">Like on Facebook</a></li>
                <li><a href="#" class="text-white">Email me</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="navbar navbar-dark bg-dark box-shadow">
        <div class="container d-flex justify-content-between">
          <a href="index.html" class="navbar-brand d-flex align-items-center">
           <img src="assets/img/favicon/icons8_connectivity_and_help_30px.png" alt="" style="width:30px;height:30px;" >
            <strong>NS-LSI</strong>
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </header>
<br>
    <main>
        <div class="section section-md">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">
                        <!--Start of Form-->
                        <div class="table-responsive text-nowrap">
                            <input class="form-control hide-on-print" id="myInput" type="text" placeholder="Search.."
                                onkeydown="getRowsCount()">
                                
                            <br>
                            <table id="tblApplicants" class="table table-striped table-bordered table-hover break-text" style="table-layout: fixed;" >
                                <thead class="black white-text">
                                    <tr>
                                        <th onclick="sortTable(0)" scope="col" style='display:none;'>ID</th>
                                        <th onclick="sortTable(1)" scope="col">Names</th>
                                        <th onclick="sortTable(2)" scope="col">Place of Origin</th>
                                        <th onclick="sortTable(3)" scope="col">Destination LGU</th>
                                        <th onclick="sortTable(4)" scope="col">Travel Date</th>
                                        <th scope="col">Contact No.</t>
                                    </tr>
                                </thead>
                                <tbody id="myTable">
                           
                                    <?php include 'rpt_Daily_query.php';?>

                                </tbody>
                            </table>
                            
                            <h4 id="totalNumber">Found: <?php echo $countAll ?> result(s) </h4>
                        </div>
                        <!--End of form-->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <footer id="myfooter" class="text-muted">
      <div class="container">
        <p class="float-right">
          <a href="#">Back to top</a>
        </p>
        <p> &copy;Northern Samar Balik Samar Project</p>
 
      </div>
    </footer>
</body>
</html>