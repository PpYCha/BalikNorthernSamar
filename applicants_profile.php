<!DOCTYPE html>
<html>

<head>
    <link rel="shortcut icon" href="images/favicon.nsamarLogo.ico" />
    <title>Group Applicants</title>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="icon" href="assets/img/favicon/nsamarLogo.ico">
    <!--Bootstrap css-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/custom-design.css">
    <!-- Latest compiled JavaScript -->
    <script src="assets/js/jquery-3.1.1.min.js" type="text/javascript"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>

    <script type="text/javascript">


        $(document).ready(function () {


            $cntr = 1;
            $('#add_more').click(function () {
                $cntr++;
                // Selecting last id 
                var lastname_id = $('.groupColumnContentInputs input[type=text]:nth-child(1)').last().attr('placeholder');
                var split_id = lastname_id.split(' ');

                // New index
                var index = Number(split_id[1]) + 1;

                // Create clone
                var newel = $('.groupColumnContentInputs:last').clone(true);
                //alert($cntr);
                // Set id of new element
                //$(newel).find('input["type=text]:nth-child(1)').attr("placeholder", "Name " + index);
                $(newel).find('p').replaceWith("<p>MEMBER " + $cntr + "</p>");

                // Set value

                // Insert element
                $(newel).insertAfter(".groupColumnContentInputs:last");
            });

            $('.txt').focus(function () {
                $(this).css('border-color', 'red');
            });

            $('.txt').focusout(function () {
                $(this).css('border-color', 'initial');
            });

        });
    </script>

    <script>
        $(document).ready(function () {
            $("#myModal").modal('show');
        });
    </script>

</head>

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
    
  
    <main>
        <div class="section section-md">
            <div class="container">
                <div class="row mb-4">
                    <div class="col-12">
                        <!--Start of Form-->
                        <form autocomplete="off" method="POST" action="add_withgroup_query.php" enctype="multipart/form-data">
                            <!--Personal Details-->
                            <div class="card shadow-soft border p-2 mb-2" style="margin-top: 30px">
                                <h5 class="en"><strong>A: Head of the Group</strong></h5>
                                <div class="col-md-12 groupHeader">
                                    <p><strong>PERSONAL DETAILS</strong></p>
                                </div>
                                <div class="row mb-3 groupContent">
                                    <div class="col-md-4">
                                        <label style="color: #e85a4f;" class="mr-1">*</label><label
                                            style="color: #66799e;">Firstname</label>
                                        <input class="form-control form-control-sm mb-2" id="firstName" name="firstName"
                                            value="" type="text" required>
                                    </div>


                                    <div class="col-md-4">
                                        <label style="color: #66799e;">Middle name</label>
                                        <input class="form-control form-control-sm mb-2" id="middleName"
                                            name="middleName" value="" type="text">
                                    </div>


                                    <div class="col-md-4">
                                        <label style="color: #e85a4f;" class="mr-1">*</label><label
                                            style="color: #66799e;">Lastname</label>
                                        <input class="form-control form-control-sm mb-2" id="lastName" name="lastName"
                                            value="" type="text" required="">
                                    </div>
                                </div>

                                <div class="row mb-2 groupContent">
                                    <div class="col-md-4">
                                        <label style="color: rgb(232, 90, 79);" class="en mr-1">*</label><label
                                            class="en" style="color: rgb(102, 121, 158);">Date of Birth</label>
                                        <input class="form-control form-control-sm mb-2 datepicker" id="dateOfBirth"
                                            name="dateOfBirth" value="" type="date" placeholder="mm/dd/yyyy"
                                            maxlength="10" required>
                                    </div>


                                    <div class="col-md-4">
                                        <label style="color: rgb(232, 90, 79);" class="en mr-1">*</label><label
                                            class="en" style="color: rgb(102, 121, 158);">Civil Status</label>

                                        <select class="custom-select custom-select-sm mb-2" id="civilStatus"
                                            name="civilStatus" value="" required>
                                            <option></option>
                                            <option>Single</option>
                                            <option>Married</option>
                                            <option>Separated</option>
                                            <option>Widower</option>
                                            <option>With Common-Law Partner/ Cohabitating</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <label style="color: rgb(232, 90, 79);" class="en mr-1">*</label><label
                                            class="en" style="color: rgb(102, 121, 158);">Present Complete
                                            Address:</label>
                                        <input class="form-control form-control-sm mb-2 datepicker"
                                            name="presentCompleteAddress" value="" id="presentCompleteAddress"
                                            type="text" placeholder="House#, St., Brgy, City/Municipality" required>
                                    </div>
                                </div>

                                <div class="col-md-12 groupHeader">
                                    <p><strong>CONTACT DETAILS</strong></p>
                                </div>
                                <div class="row mb-2 groupContent">
                                    <div class="col-md-4">
                                        <label style="color: #e85a4f;" class="mr-1">*</label><label
                                            style="color: #66799e;">Contact Number: </label>
                                        <input class="form-control form-control-sm mb-2" name="contactNumberHead"
                                            id="contactNumberHead" value="" type="text" required=""
                                            placeholder="09XXXXXXXXX" maxlength="13">
                                    </div>
                                    <div class="col-md-6">
                                        <label style="color: #66799e;">Email (Optional): </label>
                                        <input class="form-control form-control-sm mb-2" name="emailHead" id="emailHead"
                                            value="" type="text" placeholder="example@gmail">
                                    </div>
                                    <div class="col-md-4">
                                        <label style="color: #66799e;">Alt Contact Number: </label>
                                        <input class="form-control form-control-sm mb-2" name="altContactNumberHead"
                                            id="altContactNumberHead" value="" type="text" placeholder="09XXXXXXXXX"
                                            maxlength="13">
                                    </div>
                                    <div class="col-md-6">
                                        <label style="color: #66799e;">Alt Email (Optional): </label>
                                        <input class="form-control form-control-sm mb-2" name="altEmailHead"
                                            id="altEmailHead" value="" type="text" placeholder="example@gmail">
                                    </div>
                                </div>
                            </div>
                            <!--Departure-->
                            <div class="card shadow-soft border p-2 mb-2">
                                <h5 class="en"><strong>B: Travel Details</strong></h5>
                                <div class="col-md-12 groupHeader">
                                    <p><strong>ORIGIN:</strong></p>
                                </div>
                                <div class="row mb-2 groupContent">
                                    <div class="col-md-4">
                                        <p class="text-danger">
                                            <label style="color: #e85a4f;" class="mr-1">*</label>
                                            <label style="color: #66799e;">Place of Origin</label><br>
                                            <input class="form-control form-control-sm mb-2" type="text"
                                                id="pointOfOrigin" name="pointOfOrigin" required>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-danger">
                                            <label style="color: #e85a4f;" class="mr-1">*</label>
                                            <label style="color: #66799e;">Date of travel:</label><br>
                                            <input class="form-control form-control-sm mb-2 datepicker"
                                                id="dateOfTravel" name="dateOfTravel" type="date"
                                                placeholder="mm/dd/yyyy" required>
                                        </p>
                                    </div>

                                    <div class="col-md-4">
                                        <p class="text-danger">
                                            <label style="color: #e85a4f;" class="mr-1">*</label>
                                            <label style="color: #66799e;">Attach a photo of your group Travel Pass</label><br>
                                            <input type="file" name="file" capture="camera" accept="image/x-png,image/jpeg,image/jpg">
                                        </p>
                                    </div>

                                </div>
                                <div class="col-md-12 groupHeader">
                                    <p><strong>DESTINATION:</strong></p>
                                </div>
                                <div class="row mb-2 groupContent">
                                    <div class="col-md-4">
                                        <p class="text-danger">
                                            <label style="color: #e85a4f;" class="mr-1">*</label>
                                            <label style="color: #66799e;">Province:</label><br>
                                            <input class="form-control form-control-sm  mb-2 member" name="province"
                                                value="Northern Samar" id="province" type="text"
                                                placeholder="Northern Samar" readonly>
                                        </p>
                                    </div>
                                    <div class="col-md-4">
                                        <label style="color: #e85a4f;" class="mr-1">*</label>
                                        <label style="color: #66799e;">Municipality:</label><br>
                                        <select class="custom-select custom-select-sm mb-2" id="municipality"
                                            name="municipality" value="" required>
                                            <option></option>
                                            <option>Allen</option>
                                            <option>Biri</option>
                                            <option>Bobon</option>
                                            <option>Capul</option>
                                            <option>Catarman</option>
                                            <option>Catubig</option>
                                            <option>Gamay</option>
                                            <option>Laoang</option>
                                            <option>Lapinig</option>
                                            <option>Las Navas</option>
                                            <option>Lavezares</option>
                                            <option>Lope de Vega</option>
                                            <option>Mapanas</option>
                                            <option>Mondragon</option>
                                            <option>Palapag</option>
                                            <option>Pambujan</option>
                                            <option>Rosario</option>
                                            <option>San Antonio</option>
                                            <option>San Isidro</option>
                                            <option>San Jose</option>
                                            <option>San Roque</option>
                                            <option>San Vicente</option>
                                            <option>Silvino Lobos</option>
                                            <option>Victoria</option>
                                        </select>
                                    </div>
                                    <div class="col-md-4">
                                        <p class="text-danger">
                                            <label style="color: #e85a4f;" class="mr-1">*</label>
                                            <label style="color: #66799e;">Vehicle to be used::</label><br>
                                            <select class="form-control form-control-sm  mb-2 member"
                                                name="vehicleToBeUsed" value="" id="vehicleToBeUsed" type="text"
                                                required>
                                                <option></option>
                                                <option>Public Utility Vehicle</option>
                                                <option>Private Utiliy Vehicle</option>
                                            </select>
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <!--Others Members-->
                            <!--For bigger reso-->
                            <!--For lower reso-->
                            <div class="card shadow-soft border p-2 mb-2">
                                <h5 class="en"><strong>C: Other members on the group (Excluding the head /
                                        leader):</strong></h5>
                                <div class="groupColumnContent ">

                                    <div class="groupColumnContentInputs">
                                        <strong>
                                            <hr></strong>
                                        <p>MEMBER 1</p>
                                        <div class="row mb-1">
                                            <div class="col-md-4 ">
                                                <input class="form-control form-control-sm  mb-1 member"
                                                    placeholder="Name" name="memberFName[]" type="text">
                                            </div>
                                            <div class="col-md-4 ">
                                                <input class="form-control form-control-sm  mb-1 member"
                                                    placeholder="Contact Number" name="memberContactNum[]" type="text">
                                            </div>
                                            <div class="col-md-4 ">
                                                <input class="form-control form-control-sm  mb-1 member"
                                                    placeholder="Local or Provincial Address" name="memberAddrs[]"
                                                    type="text">
                                            </div>
                                        
                                        </div>
                                        <strong>
                                            <hr></strong>
                                    </div>

                                    <div class="row mb-2">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-secondary shadow-soft"
                                                style="width: 50%; margin:0" id="add_more">Add More</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <!--Agreement-->
                            <div class="card shadow-soft border p-2 mb-2">
                                <h5 class="en"><strong>D: Agreement</strong></h5>
                                <div class="row">
                                    <div class="col-md-12">
                                        <p class="en">I hereby certify that the above statements are true and
                                            correct to the best of my knowledge. I understand that a false statement may
                                            disqualify me from this program. Furthermore, I hereby declare my
                                            willingness to undergo a minimum
                                            14-day quarantine, a COVID-19 rapid/PCR test and/or such other policies
                                            imposed by the local
                                            goverment unit of my destination.
                                        </p>

                                        <div class="options options-list">
                                            <label class="ml-3"><input type="radio" name="my_agg" id="my_agg"
                                                    value="Yes" class="valid" aria-invalid="false">
                                                <span class="en">&nbsp;I Agree</span>

                                            </label>
                                            <label class="ml-6"><input type="radio" name="my_agg" id="my_agg" value="No"
                                                    class="valid" aria-invalid="false">
                                                <span class="en">&nbsp;I Disagree</span>

                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!--Submit Button-->
                            <div class="card shadow-soft border p-2 mb-2">
                                <div class="row  p-2 ">
                                    <button type="submit" class="btn btn-secondary shadow-soft btn-block"
                                        id="form_submit" name="submit" data-loading-text="Sending"
                                        style="background-color:#E85A4F; border-color:#E85A4F; margin: 10px;"><span
                                            class="en">Submit</span>
                                    </button>
                                </div>
                            </div>
                        </form>
                        <!--End of form-->
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- Footer -->
    <footer class="text-muted">
        <div class="container">
          <p class="float-right">
            <a href="#">Back to top</a>
          </p>
          <p> &copy;Northern Samar Balik Samar Project</p>
   
        </div>
      </footer>

</body>

</html>