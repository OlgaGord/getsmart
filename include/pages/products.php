Products

<?php
if (!empty($site_user)) {

    echo "<div>Brouws our products</div";
} else {
    echo "<div>You must be logged in tp brows our products </div>";
    include('include/pages/login.php');
}


?> 