<?php
require 'inc/head.php'; 
if (empty($_SESSION['loginname'])) {
    header('Location: /index.php');
    exit();
}
?>
<section class="cookies container-fluid">
    <div class="row">
        <?php foreach ($_SESSION['cookies'] as $item) {
            echo $item . "<br>";
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
