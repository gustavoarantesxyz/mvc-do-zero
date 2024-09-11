<center>
    <h1>User finded page</h1>

    <?php
    foreach ($data as $user) {
        echo "$user->user_id $user->user_name $user->user_age <br>";
    }
    ?>
</center>