<?php
$title = 'Thursday Things';
//include header template
require('config.php');
require('inc/header.php');
?>
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <h2>Choose a field type</h2>
            <ul>
                <?php
                include("functions.php");
                foreach($field_types as $field) {

                    echo "<li class='draggable'>
                    " . $field . "</li>";
                }

                ?>
            </ul>
        </div>
        <div class="col-md-6">
            <div class="right">


            </div>

        </div>
    </div>
</div>
<?php
//include header template
require('inc/footer.php');
?>
