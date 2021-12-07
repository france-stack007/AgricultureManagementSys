<?php
include "connection.php";
include "personnel_dash_header.php";
?>
    <!--sidebar start-->
    <div class="sidebar">
    <center>
        <img src="img/LOGO.png" class="profile_image" alt="">
        <a href="personnel_dash_profile.php"><i class="fas fa-user"></i><span class="prof">Profile</span></a>
        <!-- <a href="#" id="declineB"><button class="btn btn-danger">Decline</button></a> -->
      </center>
      <hr style="color: white">
      <nav class="nav1">
          <ul>
            <li><a href="personnel_dash_body.php"><i class="fas fa-desktop"></i><span>Dashboard</span></a></li>
            <li class="dropdown">
              <a href="#"><i class="fas fa-cogs"></i><span>Features</span></a>
              <ul>
                  <li><a href="personnel_dash_farmers_request.php" style="color: rgba(0, 255, 0, 0.8)"><i class="fas fa-user-edit"></i><span>Farmers Request</span></a></li>
                  <li><a href="personnel_dash_approved_panel.php"><i class="fas fa-thumbs-up"></i><span>Approved Panel</span></a></li>
                  <li><a href="#" id="viewB"><i class="fas fa-user-plus"></i><span>Add Farmer</span></a></li>
                  <li><a href="personnel_dash_farmers_list.php"><i class="far fa-address-book"></i><span>Farmers List</span></a></li>
                  <!-- <li><a href="personnel_dash_deactivate_farmer.php"><i class="fas fa-user-slash"></i><span>Deactivate Farmer</span></a></li> -->
              </ul>
            </li>
            <li><a href="#"><i class="fas fa-info-circle"></i><span>About</span></a></li>
          </ul>
        <hr style="color: white">
      </nav>
      <nav class="nav2">
        <ul>
            <li class="dropdown">
              <a href="#"><i class="fas fa-tools"></i><span>Home Features</span></a>
              <ul>
                  <li><a href="personnel_dash_home_image.php"><i class="fas fa-wrench"></i><span>Customized Home Image</span></a></li>
                  <li><a href="personnel_dash_home_content.php"><i class="fas fa-wrench"></i><span>Customized Home Content</span></a></li>
              </ul>
            </li>
        </ul>
      </nav>
    </div>
    <div class="popup">
        <div class="popup-content">
            <div class="popup-child1">
                    <form role="form">
                    <h3>Create Farmers Account</h3>
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h5>Farmers Information</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <label for="selectD">Register for: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Services</option>
                                          <option value="1">High Value Crops</option>
                                          <option value="2">Corn Value Crop</option>
                                          <option value="3">Rice Crop</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="first_name">Last Name:</label>
                                            <input type="text" name="last_name" id="first_name" class="form-control input-lg" tabindex="1" placeholder="Last Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">First Name:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" tabindex="2" placeholder="First Name">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="password">Middle Name:</label>
                                            <input type="text" name="password" id="password" class="form-control input-lg" tabindex="5" placeholder="Middle Name">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="password_confirmation">Contact Number:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" tabindex="6" placeholder="Contact Number">
                                        </div>
                                    </div>
                                </div>
                                <div class="row" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="inputC">
                                            <label for="start">Birth Date:</label>
                                            <input type="date" id="start" name="trip-start"
                                                value="2000-01-01"
                                                min="1900-01-01" max="2050-12-31" style="width: 100%" readonly>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <label for="selectD">Civil Status: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Status</option>
                                          <option value="1">Married</option>
                                          <option value="2">Single</option>
                                          <option value="3">Widowed</option>
                                      </select>
                                    </div>
                                </div>
                                <div class="row" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <label for="selectD">Sex: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Sex</option>
                                          <option value="1">Male</option>
                                          <option value="2">Female</option>
                                      </select>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="first_name">Religion:</label>
                                            <input type="text" name="first_name" id="first_name" class="form-control input-lg" value="Religion">
                                        </div>
                                    </div>
                                </div>
                                <div class="column" style="text-align: left">
                                    <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                        <div class="form-group">
                                            <label for="password">Place of Birth:</label>
                                            <input type="text" name="password" id="password" class="form-control input-lg" placeholder="Place of Birth">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <button type="button" class="btn btn-success" style="width: 50%" id="nextB">Next</button>
                                <hr class="colorgraph" style="height: 10px">
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="closeB" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
    <div class="popup1">
        <div class="popup-content1">
            <div class="popup-child2">
                    <form role="form">
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h5>Farmers Address</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Street/Subdiv/Sitio:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Street/Subdiv/Sitio">
                                        </div>
                                  </div>
                                </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Barangay:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Barangay">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Municipality:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Municipality">
                                        </div>
                                    </div>
                            </div>
                            <div class="row" style="text-align: left">
                                <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Zipcode:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Zipcode">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h5>Person to contact in case of emergency</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Full Name:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Full Name">
                                        </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Contact Number:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Contact Number">
                                    </div>
                                </div>
                            </div>
                                <br>
                                <div class="column" style="text-align: center">
                                    <button type="button" class="btn btn-dark" style="width: 25%" id="backB">Back</button>
                                    <button type="button" class="btn btn-success" style="width: 25%" id="next1B">Next</button>
                                </div>
                                <hr class="colorgraph" style="height: 10px">
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="close1B" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
    <div class="popup2">
        <div class="popup-content2">
            <div class="popup-child2">
                    <form role="form">
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h5>Farm Land Description</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <label for="selectD">Farm Type: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Services</option>
                                          <option value="1">High Value Crops</option>
                                          <option value="2">Corn Value Crop</option>
                                          <option value="3">Rice Crop</option>
                                      </select>
                                  </div>
                                </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Barangay:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Barangay">
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                        <div class="form-group" >
                                        <label for="last_name">Municipality:</label>
                                            <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Municipality">
                                        </div>
                                    </div>
                            </div>
                            <div class="row" style="text-align: left">
                                <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Total farm area:</label>
                                            <input type="number" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Total farm area">
                                    </div>
                                </div>
                            </div>
                            <br>
                            <h5>Farmers Account</h5>
                            <hr>
                            <div class="row" style="text-align: left">
                                <div class="column">
                                    <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                            <div class="form-group" >
                                            <label for="last_name">Username:</label>
                                                <input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Username">
                                            </div>
                                    </div>
                                </div>

                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Password:</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Password">
                                    </div>
                                </div>
                                <div class="col-xs-12 col-sm-6 col-md-6" style="margin: 10px 0 10px;">
                                    <div class="form-group">
                                            <label for="password_confirmation">Confirm Password:</label>
                                            <input type="password" name="password_confirmation" id="password_confirmation" class="form-control input-lg" placeholder="Confirm Password">
                                    </div>
                                </div>
                            </div>
                                <br>
                                <div class="column" style="text-align: center">
                                    <button type="button" class="btn btn-dark" style="width: 25%" id="back1B">Back</button>
                                    <button type="button" class="btn btn-success" style="width: 25%" id="submitBx">Submit</button>
                                </div>
                                <hr class="colorgraph" style="height: 10px">
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="close2B" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
    <div class="popup3">
        <div class="popup-content3">
            <div class="popup-child3">
                    <form role="form">
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h5>Reason of Declination</h5>
                            <hr>
                            <div class="row" style="text-align: left; display: flex; justify-content: center">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <label for="selectD">For crops: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Reason</option>
                                          <option value="1">OUT OF STOCK [CROP]</option>
                                          <option value="2">KILO OUT OF RANGE [CROP]</option>
                                          <option value="3">REQUEST DOESN'T EXIST [CROP]</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <label for="selectD">For services: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Reason</option>
                                          <option value="1">PERSONNEL UNAVAILABLE [SERVICE]</option>
                                          <option value="2">SERVICE IS NOT AVAILABLE [SERVICE]</option>
                                      </select>
                                  </div>
                                </div>
                                <div class="row">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px;">
                                    <label for="selectD">For registration: </label>
                                      <select class="selectD" style="width: 100%; height: auto; margin-bottom: 0; padding: 5px; border-radius: 3px">
                                          <option selected>Choose Reason</option>
                                          <option value="1">LACK OF INFORMATION [REGISTRATION]</option>
                                          <option value="2">SERVICE IS NOT AVAILABLE [SERVICE]</option>
                                      </select>
                                  </div>
                                </div>
                            </div>
                                <br>
                                <div class="column" style="text-align: center">
                                    <button type="button" class="btn btn-success" style="width: 50%" id="submitBdec">Submit</button>
                                </div>
                                <hr class="colorgraph" style="height: 10px">
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="closeDecB" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
    <div class="popup4">
        <div class="popup-content4">
            <div class="popup-child4">
                    <form role="form">
                        <hr class="colorgraph" style="height: 10px">
                        <div class="formG" style="display: flex; flex-direction: row; gap: 40px; justify-content: center">
                            <div style="width: 100%">
                            <br>
                            <h5>Purpose of Request</h5>
                            <hr>
                            <div class="row" style="text-align: left; display: flex; justify-content: center">
                                <div class="row">
                                  <div class="col-xs-12 col-sm-6 col-md-12" style="margin: 10px 0 10px; ">
                                    <label for="selectD">Purpose of Request </label>
                                    <textarea name="selectD" id="selectD" cols="58" rows="5">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odit nesciunt quasi quibusdam officiis magnam numquam quae nostrum fugiat reiciendis tenetur ut, velit, quod beatae perferendis earum dolor maiores soluta quisquam?</textarea>
                                  </div>
                                </div>
                            </div>
                                <br>
                                <div class="column" style="text-align: center">
                                    <button type="button" class="btn btn-success" style="width: 50%" id="submitBdec">Confirm</button>
                                </div>
                                <hr class="colorgraph" style="height: 10px">
                            </div>
                        </div>
                    </form>
                <!-- </div> -->
            </div>
            <div class="popup-child2">
                <a type="button" href="" id="closeViewB" class="btn btn-success" style="position:absolute; top:0; right:0; text-decoration: none; z-index: 1; cursor: pointer; border-radius: 5em">X</a>
            </div>
        </div>
    </div>
<div class="content">
    <div class="container-fluid">
      <div class="row-fluid" style="background-color: white; min-height: 600px; padding:10px;">
          <div class="span12">
                <div class="printGrp" style="display: flex; flex-direction: row; gap: 20px; justify-content: flex-end; border: 2px solid black;
                    padding: 15px 0 15px 0; margin-top: 10px; flex-wrap: wrap; background-color: rgba(0, 128, 0, 0.7); position: relative">
                    <div style="left: 10px; position: absolute">
                        <h3>Farmers Request</h3>
                    </div>
                        <div style="margin: 0 10px 0 0">
                            <!-- <label for="middlename">Program: </label>
                            <input class="inputC" type="text" name="middlename" placeholder="Program" required> -->
                            <label for="drpProg" style="font-weight: bold">Program:</label>
                                <select id="mylist2" onchange="myFunction2()" style="width: 150px; height: auto; padding: 2.5px" class="drpProg">
                                    <option value="">None</option>
                                    <option value="HVC">High Value Crops(HVC)</option>
                                    <option value="Rice">Rice Program(Rice)</option>
                                    <option value="Corn">Corn Program(Corn)</option>
                                    <option value="Registration">Registrations</option>
                                    <option value="Service">Services</option>
                                </select>
                        </div>
                        <div style="margin: 0 10px 0 0">
                            <label for="drpBar" style="font-weight: bold">Barangay:</label>
                                <select id="mylist1" onchange="myFunction1()" style="width: 150px; height: auto; padding: 2.5px">
                                    <option value="">None</option>
                                    <option value="Sinunuc">Sinunuc</option>
                                    <option value="Maasin">Maasin</option>
                                    <option value="Cawit">Cawit</option>
                                    <option value="Baluno">Baluno</option>
                                    <option value="Recodo">Recodo</option>
                                    <option value="Tulungatung">Tulungatung</option>
                                    <option value="Ayala">Ayala</option>
                                    <option value="Talisayan">Talisayan</option>
                                    <option value="Sinubong">Sinubong</option>
                                    <option value="Patalon">Patalon</option>
                                    <option value="Labuan">Labuan</option>
                                    <option value="Limpapa">Limpapa</option>
                                </select>
                        </div>
                        <div style="margin: 0 10px 0 0">
                            <label for="middlename" style="font-weight: bold">Search name: </label>
                            <input id="myInput" onkeyup="myFunction3()" class="inputC" type="text" name="middlename" placeholder="Search name" required>
                        </div>
                    </div>
                    <hr>
                    <div class="table-responsive">
                        <table class="table table-hover table-sm" id="myTable">
                            <thead>
                                <tr>
                                    <th>Reference No.</th>
                                    <th>Full Name</th>
                                    <th>Sex</th>
                                    <th>Commodity</th>
                                    <th>Size(HA)</th>
                                    <th>Barangay</th>
                                    <th>Contact Number</th>
                                    <th>Accept</th>
                                    <th>Decline</th>
                                    <th>Purpose of request</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <th scope="row">1</th>
                                        <td>France Perez</td>
                                        <td>Male</td>
                                        <td>Registration</td>
                                        <td>1.5</td>
                                        <td>Ayala</td>
                                        <td>09661573159</td>
                                        <td><button type="button" class="btn btn-success">Accept</button></td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn1">Decline</button></td>
                                        <td><button type="button" class="btn btn-success btn2">View Message</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">2</th>
                                        <td>Respituto Rompetrapo</td>
                                        <td>Male</td>
                                        <td>Rice</td>
                                        <td>1.5</td>
                                        <td>Recodo</td>
                                        <td>09661573159</td>
                                        <td><button type="button" class="btn btn-success">Accept</button></td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn1">Decline</button></td>
                                        <td><button type="button" class="btn btn-success btn2">View Message</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">3</th>
                                        <td>Jessa Mendoza</td>
                                        <td>Male</td>
                                        <td>HVC</td>
                                        <td>1.5</td>
                                        <td>Tulungatung</td>
                                        <td>09661573159</td>
                                        <td><button type="button" class="btn btn-success">Accept</button></td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn1">Decline</button></td>
                                        <td><button type="button" class="btn btn-success btn2">View Message</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">4</th>
                                        <td>Vanessa Jane</td>
                                        <td>Male</td>
                                        <td>Service</td>
                                        <td>1.5</td>
                                        <td>Recodo</td>
                                        <td>09661573159</td>
                                        <td><button type="button" class="btn btn-success">Accept</button></td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn1">Decline</button></td>
                                        <td><button type="button" class="btn btn-success btn2">View Message</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">5</th>
                                        <td>Mary Jane</td>
                                        <td>Male</td>
                                        <td>Corn</td>
                                        <td>1.5</td>
                                        <td>Patalon</td>
                                        <td>09661573159</td>
                                        <td><button type="button" class="btn btn-success">Accept</button></td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn1">Decline</button></td>
                                        <td><button type="button" class="btn btn-success btn2">View Message</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">6</th>
                                        <td>Jenny Santisima</td>
                                        <td>Male</td>
                                        <td>Rice</td>
                                        <td>1.5</td>
                                        <td>Labuan</td>
                                        <td>09661573159</td>
                                        <td><button type="button" class="btn btn-success">Accept</button></td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn1">Decline</button></td>
                                        <td><button type="button" class="btn btn-success btn2">View Message</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">7</th>
                                        <td>George Hokage</td>
                                        <td>Male</td>
                                        <td>Service</td>
                                        <td>1.5</td>
                                        <td>Limpapa</td>
                                        <td>09661573159</td>
                                        <td><button type="button" class="btn btn-success">Accept</button></td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn1">Decline</button></td>
                                        <td><button type="button" class="btn btn-success btn2">View Message</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">8</th>
                                        <td>Mark Ruffalo</td>
                                        <td>Male</td>
                                        <td>Registration</td>
                                        <td>1.5</td>
                                        <td>Limpapa</td>
                                        <td>09661573159</td>
                                        <td><button type="button" class="btn btn-success">Accept</button></td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn1">Decline</button></td>
                                        <td><button type="button" class="btn btn-success btn2">View Message</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">9</th>
                                        <td>Norton Limpapa</td>
                                        <td>Male</td>
                                        <td>HVC</td>
                                        <td>1.5</td>
                                        <td>Recodo</td>
                                        <td>09661573159</td>
                                        <td><button type="button" class="btn btn-success">Accept</button></td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn1">Decline</button></td>
                                        <td><button type="button" class="btn btn-success btn2">View Message</button></td>
                                    </tr>
                                    <tr>
                                        <th scope="row">10</th>
                                        <td>Tabs Mercado</td>
                                        <td>Male</td>
                                        <td>Registration</td>
                                        <td>1.5</td>
                                        <td>Ayala</td>
                                        <td>09661573159</td>
                                        <td><button type="button" class="btn btn-success">Accept</button></td>
                                        <td><button id="declineB" type="button" class="btn btn-danger btn1">Decline</button></td>
                                        <td><button type="button" class="btn btn-success btn2">View Message</button></td>
                                    </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
function myFunction1() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("mylist1");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[4];
                if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }       
        }
    }

        function myFunction2() {
            var input, filter, table, tr, td, i;
            input = document.getElementById("mylist2");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[2];
                if (td) {
                if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

    function myFunction3() {
            var input, filter, table, tr, td, i, txtValue;
            input = document.getElementById("myInput");
            filter = input.value.toUpperCase();
            table = document.getElementById("myTable");
            tr = table.getElementsByTagName("tr");
            for (i = 0; i < tr.length; i++) {
                td = tr[i].getElementsByTagName("td")[0];
                if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";
                }
            }
        }
    }

        let elements = Array.from(document.getElementsByClassName('btn1'))
        for (let element of elements) {
        element.addEventListener('click', function(){
            document.querySelector(".popup3").style.display = "flex";
        })
      }

      let elements1 = Array.from(document.getElementsByClassName('btn2'))
        for (let element of elements1) {
        element.addEventListener('click', function(){
            document.querySelector(".popup4").style.display = "flex";
        })
      }

      document.getElementById("viewB").addEventListener("click", function(){
            document.querySelector(".popup").style.display = "flex";
        })

      document.getElementById("closeB").addEventListener("click", function(){
          document.querySelector(".popup").style.display = "none";
      })

      document.getElementById("nextB").addEventListener("click", function(){
            document.querySelector(".popup1").style.display = "flex";
            document.querySelector(".popup").style.display = "none";
        })

      document.getElementById("backB").addEventListener("click", function(){
            document.querySelector(".popup1").style.display = "none";
            document.querySelector(".popup").style.display = "flex";
        })

      document.getElementById("close1B").addEventListener("click", function(){
          document.querySelector(".popup1").style.display = "none";
      })

      document.getElementById("next1B").addEventListener("click", function(){
            document.querySelector(".popup2").style.display = "flex";
            document.querySelector(".popup1").style.display = "none";
        })

        document.getElementById("back1B").addEventListener("click", function(){
            document.querySelector(".popup2").style.display = "none";
            document.querySelector(".popup1").style.display = "flex";
        })

        document.getElementById("close2B").addEventListener("click", function(){
          document.querySelector(".popup2").style.display = "none";
      })

      
    </script>
<?php
include "personnel_dash_footer.php";
?>