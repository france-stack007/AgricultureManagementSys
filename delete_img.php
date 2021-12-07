<?php
$id=$_GET["id"];
mysqli_query($link, "DELETE FROM home_imgs WHERE id=$id");
?>
<script type="text/javascript">
    window.location= ROOT_PATH + "application/dashboards/personnel_dash_home_image.php";
</script>
