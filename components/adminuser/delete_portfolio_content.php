<?php 
	$id=$_GET['id'];

	$imgSql = "SELECT name FROM portfolio WHERE id='$id'";
	$rows = fetchDataWithID($imgSql);
    $img = $rows['name'];

    unlink("../public/upload/" . $img); //deleting a file
	if ($rows) {
	     ?>
	    <script type="text/javascript">
	        alert("Delete has been completed successfully");
            window.location.href = 'dashboard.php?page=portfolio_content';
        </script>
<?php
	$delete ="delete from portfolio where id='$id'";
    query($delete);
    }
?>