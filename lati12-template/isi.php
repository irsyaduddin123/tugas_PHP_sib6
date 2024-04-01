<div style="height:900px; background-color: #B5C0D0;  padding: 1rem; margin-botom">
    <!-- Halaman Depan -->
    <?php
    $hal = $_GET['hal'];
    if (! empty($hal)) {
        include_once $menu_bawah[$hal];
    }
    else{
        include_once "home.php";
    }
    ?>
</div>
