<?php
//get logo url
$stmt = $conn->prepare("SELECT logo FROM tbl_school WHERE id=?");
$stmt->bind_param("s", $_SESSION['id']);
$stmt->execute();
$logo_url = $stmt->get_result()->fetch_array();

?>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
    <a class="navbar-brand" href="index.php">
        <?php if ($logo_url[0] == "empty") { ?>
            <i class="fa fa-2x fa-school"></i>
        <?php } else { ?>
            <img src="<?php echo $logo_url[0]; ?>" alt="Logo" style="width:30px;height: 30px">
        <?php } ?>
    </a>
    <ul class="nav">
        <h5 style="color: #ffffff"><?php echo $_SESSION['name']; ?></h5>
    </ul>
    <ul class=" nav ml-auto">
        <a href="#" class="navbar-icons" data-toggle="tooltip" data-placement="right" title="Information"><i class="fa fa-info-circle"></i></a>
        <a href="#" class="navbar-icons" data-toggle="tooltip" data-placement="right" title="Help"><i class="fa fa-question-circle"></i></a>
    </ul>

</nav>