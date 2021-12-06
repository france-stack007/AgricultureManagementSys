<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Ayala Agriculture</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
  </head>
  <body>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header style="background: #2f323a;">
        <label for="check">
          <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
          <h3>Coding<span>Snow</span></h3>
        </div>
        <div class="right_area">
          <a href="#" class="logout_btn">Logout</a>
        </div>
    </header>
    <!--header area end-->
    <!--sidebar start-->
    <div class="sidebar">
      <center>
        <img src="1.png" class="profile_image" alt="">
        <h4>Jessica</h4>
      </center>
        <nav>
          <ul>
            <li><a href="#"><i class="fas fa-desktop"></i><span>Dashboard</span></a></li>
            <li class="dropdown">
              <a href="#"><i class="fas fa-cogs"></i><span>Features</span></a>
              <ul>
                  <li><a href="#"><span>Dashboard</span></li>
                  <li><a href="#"><span>Dashboard</span></li>
                  <li><a href="#"><span>Dashboard</span></li>
              </ul>
            </li>
            <li><a href="#"><i class="fas fa-info-circle"></i><span>About</span></a></li>
            <li class="dropdown">
              <a href="#"><i class="fas fa-sliders-h"></i><span>Settings</span></a>
              <ul>
                  <li><a href="#"><span>Dashboard</span></li>
                  <li><a href="#"><span>Dashboard</span></li>
                  <li><a href="#"><span>Dashboard</span></li>
              </ul>
            </li>
          </ul>
      </nav>
    </div>

    <div class="content">
        <div class="printGrp" style="display: flex; flex-direction: row; gap: 20px; justify-content: flex-end;
         padding: 15px 0 15px 0; flex-wrap: wrap; position: relative">
          <div style="left: 10px; position: absolute">
            <h3 style="position: relative">Search Request</h3>
          </div>
            <div style="margin: 0 10px 0 0">
                <!-- <label for="middlename">Program: </label>
                   <input class="inputC" type="text" name="middlename" placeholder="Program" required> -->
                <label for="drpProg" style="font-weight: bold">Program:</label>
                    <select style="width: 150px; height: auto; padding: 2.5px" class="drpProg">
                        <option value="1">Select One</option>
                        <option value="2">High Value Crops</option>
                        <option value="3">Rice Crops</option>
                        <option value="4">Crops</option>
                    </select>
            </div>
            <div style="margin: 0 10px 0 0">
                <label for="drpBar" style="font-weight: bold">Barangay:</label>
                    <select style="width: 150px; height: auto; padding: 2.5px" class="drpBar">
                        <option value="1">Select One</option>
                        <option value="2">Zone 1</option>
                        <option value="3">Zone 2</option>
                        <option value="4">Zone 3</option>
                        <option value="5">Zone 4</option>
                    </select>
            </div>
            <div style="margin: 0 10px 0 0">
                <label for="middlename" style="font-weight: bold">Search name: </label>
                   <input class="inputC" type="text" name="middlename" placeholder="Search name" required>
            </div>
        </div>
        <hr>
        <div class="table-responsive">
            <table class="table table-hover table-sm" id="tableSearch">
                <thead>
                    <tr>
                    <th>No.</th>
                    <th>Image</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Middle Name</th>
                    <th>Sex</th>
                    <th>Commodity</th>
                    <th>Size(HA)</th>
                    <th>Barangay</th>
                    <th>Contact Number</th>
                    <!-- <th>Username</th>
                    <th>Password</th>
                    <th>Role</th>
                    <th>Status</th> -->
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $res=mysqli_query($link,"SELECT * FROM user_registration");
                    while($row=mysqli_fetch_array($res))
                    {
                            echo "<tr>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; ?> <img src="<?php echo $row["image"]; ?>" height="100" width="100"> <?php echo "</td>";
                            echo "<td>"; echo $row["lastname"]; echo "</td>";
                            echo "<td>"; echo $row["firstname"]; echo "</td>";
                            //echo "<td>"; echo $row["username"]; echo "</td>";
                            //echo "<td>"; echo $row["password"]; echo "</td>";
                            //echo "<td>"; echo $row["role"]; echo "</td>";
                            //echo "<td>"; echo $row["status"]; echo "</td>";
                            echo "<td>"; echo $row["username"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "<td>"; echo $row["id"]; echo "</td>";
                            echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
<style>
body{
  margin: 0;
  padding: 0;
  font-family: "Roboto", sans-serif;
}
nav ul{
  
  margin: 0;
  padding: 0;
  position: relative;
  list-style-type: none;
}
nav ul ul{
  position: absolute;
  text-align: left;
  left: 250px;
  width: 160px;
  top: 0;
  background: #2f323a;
  display: none;
  box-shadow: 2px 2px 10px grey;
}
nav ul .dropdown{
  position: relative;
}
nav ul .dropdown:hover ul{
  display: initial;
}
header{
  position: fixed;
  background: #22242A;
  padding: 10px;
  width: 100%;
  z-index: 1;
  height: auto;
}
.left_area h3{
  color: #fff;
  margin: 0;
  margin-left: 50px;
  text-transform: uppercase;
  font-size: 22px;
  font-weight: 900;
}
.left_area span{
  color: #19B3D3;
}

.logout_btn{
  padding: 5px;
  background: #19B3D3;
  text-decoration: none;
  float: right;
  margin-top: -30px;
  margin-right: 40px;
  border-radius: 2px;
  font-size: 15px;
  font-weight: 600;
  color: #fff;
  transition: 0.5s;
  transition-property: background;
}

.logout_btn:hover{
  background: #0B87A6;
}
/* sidebar */
.sidebar {
  background: #2f323a;
  margin-top: 70px;
  padding-top: 30px;
  position: fixed;
  left: 0;
  width: 250px;
  height: 100%;
  transition: 0.5s;
  transition-property: left;
}

.sidebar .profile_image{
  width: 100px;
  height: 100px;
  border-radius: 100px;
  margin-bottom: 10px;
}

.sidebar h4{
  color: #ccc;
  margin-top: 0;
  margin-bottom: 20px;
}

.sidebar a{
  color: #fff;
  display: block;
  width: 100%;
  line-height: 60px;
  text-decoration: none;
  padding-left: 40px;
  box-sizing: border-box;
  transition: 0.5s;
  transition-property: background;
}

#prof{
  color: #ccc;
  margin-top: 0;
  margin-right: 40px;
  margin-bottom: 20px;
}

.sidebar a:hover{
  background: #19B3D3;
}

.sidebar i{
  padding-right: 10px;
}

label #sidebar_btn{
  z-index: 1;
  color: #fff;
  position: fixed;
  cursor: pointer;
  left: 300px;
  font-size: 20px;
  margin: 5px 0;
  transition: 0.5s;
  transition-property: color;
}

label #sidebar_btn:hover{
  color: #19B3D3;
}

#check:checked ~ .sidebar{
  left: -190px;
}

#check:checked ~ .sidebar a span{
  display: none;
}

#check:checked ~ .sidebar a{
  font-size: 20px;
  margin-left: 170px;
  width: 80px;
}
.content{
  margin-left: 260px;
  margin-right: 5px;
  padding-top: 80px;
  transition: 0.5s;
}
#check:checked ~ .content{
  margin-left: 60px;
}

#check{
  display: none;
}
</style>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  </body>
</html>
