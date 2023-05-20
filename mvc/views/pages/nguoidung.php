<div class="container">
    <?php
        if (isset($data["userChild"])) {
            require_once "./mvc/views/pages/".$data["userChild"].".php";
        } 
    ?>
</div>