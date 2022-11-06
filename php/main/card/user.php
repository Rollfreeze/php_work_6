<?php


function user_item($name) {
    echo <<<USER
        <div class="user-name-container">
            <img src="/assets/user.png" class="user"></img>
            <div class="card-description-style">$name</div>
        </div>
USER;
}
?>