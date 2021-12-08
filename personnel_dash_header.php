<?php
include "connection.php";
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Personnel Dashboard</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    
    <!-- Reset CSS -->
    <link rel="stylesheet" href="./reset.css">
  </head>

    <input type="checkbox" id="check">
    <!--header area start-->
    <header style="background: #2f323a;" class="main-header">
        <label for="check">
          <i class="fas fa-bars" id="sidebar_btn"></i>
        </label>
        <div class="left_area">
          <a href="./index.php" style="text-decoration: none;">
            <h4 style="color: white;">Personnel<span> Dashboard</span></h4>
          </a>
        </div>
        <div class="right_area">
          <button class="logout_btn">Logout</button>
        </div>
    </header>
    <!--header area end-->

<script>
  const mainHeader = document.querySelector('.main-header')
  
  window.addEventListener('scroll', () => {
    if(window.scroll >= 220) {
      mainHeader.style = `
        background: 
      `
    }
  })
</script>
<?php
include "personnel_dash_footer.php";
?>