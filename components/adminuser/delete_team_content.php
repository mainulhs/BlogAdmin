<?php 
	$id=$_GET['id'];

	$imgSql = "SELECT name FROM team WHERE id='$id'";
	$rows = fetchDataWithID($imgSql);
    $img = $rows['name'];

    unlink("../public/upload/" . $img); //deleting a file
	if ($rows) {
	     ?>
	    <script type="text/javascript">
	        alert("Delete has been completed successfully");
            window.location.href = 'dashboard.php?page=team_content';
        </script>
<?php
	$delete ="delete from team where id='$id'";
    query($delete);
    }
?>