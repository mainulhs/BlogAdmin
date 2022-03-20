<?php 
	$id=$_GET['id'];

	$imgSql = "SELECT name FROM article WHERE id='$id'";
	$rows = fetchDataWithID($imgSql);
    $img = $rows['name'];

    unlink("../public/upload/" . $img); //deleting a file
	if ($rows) {
	     ?>
	    <script type="text/javascript">
	        alert("Delete has been completed successfully");
            window.location.href = 'dashboard.php?page=article_content';
        </script>
<?php
	$delete ="delete from article where id='$id'";
    query($delete);
    }
?>