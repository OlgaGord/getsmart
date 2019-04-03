<?php
if (

    isset($_POST['create']) &&
    isset($_POST['username']) &&
    isset($_POST['pass'])
) {

    $result = User::create($_POST['username'], $_POST['pass']);

    echo $result['message'];
} else {
    ?>
<!-- <form method="post" action="?p=create_account"> -->

<form method="post" action="?p=<?php echo $page ?>">
    <input type="hidden" name="create" />
    <div>
        Username: <input type="text" name="username">
    </div>
    <div>
        Password: <input type="password" name="pass">
    </div>
    <input type="submit" value="Create" />
</form>

<?php

}
?> 