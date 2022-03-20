<?php 
	$id=$_GET['id'];

	$imgSql = "SELECT name FROM logo WHERE id='$id'";
	$rows = fetchDataWithID($imgSql);
    $img = $rows['name'];

    unlink("../public/upload/" . $img); //deleting a file
	if ($rows) {
	     ?>
	    <script type="text/javascript">
	        alert("Delete has been completed successfully");
	        window.location.href = 'dashboard.php?page=logo_content';
	    </script>
<?php
		$delete ="delete from logo where id='$id'";
    	query($delete);
	}
?>
