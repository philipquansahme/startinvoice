<?php 
    include('misc/path.php');
    include('misc/sec.php');
?>
<!DOCTYPE html>
<html dir="ltr" lang="en">
<?php include('includes/head.php'); ?>
<body>
    <?php include('includes/pre_loader.php'); ?>
    <div id="main-wrapper">
        <?php include('includes/top_header.php'); ?>
        <?php
            if ($_SESSION['position_id'] == 1) {
                include('includes/left_nav.php');
            } elseif ($_SESSION['position_id'] == 2) {
                include('includes/manager_left_nav.php');
            } elseif ($_SESSION['position_id'] == 3) {
                include('includes/billing_left_nav.php');
            }
        ?>
        <div class="page-wrapper">
            <?php include('includes/breadcrumb.php'); ?>
            <?php include('includes/content.php'); ?>
            <?php include('includes/footer_note.php'); ?>
        </div>
    </div>
    <div class="chat-windows"></div>
    <?php include('includes/jquery.php'); ?>
</body>
</html>