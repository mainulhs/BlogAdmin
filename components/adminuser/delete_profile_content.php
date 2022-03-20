<?php 
	$id=$_GET['id'];

	$imgSql = "SELECT name FROM profile_info WHERE id='$id'";
	$rows = fetchDataWithID($imgSql);
    $img = $rows['name'];

    unlink("../public/upload/" . $img); //deleting a file
	if ($rows) {
	     ?>
	    <script type="text/javascript">
	        alert("Delete has been completed successfully");
            window.location.href = 'dashboard.php?page=profile';
        </script>
<?php
	$delete ="delete from profile_info where id='$id'";
    query($delete);
    }
?>