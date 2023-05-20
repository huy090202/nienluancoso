<div class="container">
    <?php
        if (isset($data["adminChild"])) {
            require_once "./mvc/views/pages/".$data["adminChild"].".php";
        } 
    ?>
</div>