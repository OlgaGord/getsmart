<?php
if (!empty($site_user)) {
    // echo 'logged in as ' . $site_user['username'];
    echo '<a href="?p=' . $page . '&logout">Log out</a>';
} else {

    ?>

<form method="post" action="?p=<?php echo $page ?>">
    <input type="hidden" name="login" />
    <div>
        Username: <input type="text" name="username">
    </div>
    <div>
        Password: <input type="password" name="pass">
    </div>
    <input type="submit" value="Login" />
</form>

<?php

}

?> 