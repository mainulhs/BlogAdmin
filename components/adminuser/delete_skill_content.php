<?php 
    $id=$_GET['id'];
    $delete ="delete from skill where id='$id'";
    query($delete);
?>

<script type="text/javascript">
    alert("Delete has been completed successfully");
    window.location.href = 'dashboard.php?page=skill_content';
</script>