<?php
require_once "functions.php";
?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
    <link rel="stylesheet" href="style.css"/>
</head>
<body>
<h1>Add Employee</h1>
<form action="" method="">
    <div>
        <label for="name">First name:</label>
        <input type="text" name="name" />
    </div>
    <div>
        <label for="name">Last name:</label>
        <input type="text" name="name" />
    </div>
    <div>
        <label for="name">Title:</label>
        <input type="text" name="name" />
    </div>
    <div>
        <label for="action">Title of Courtesy:</label>
        <input type="radio" name="action" id="dr" value="dr" /><span>Dr.</span>
        <input type="radio" name="action" id="mr" value="mr"  /><span>Mr</span>
        <input type="radio" name="action" id="mrs" value="mrs" /><span>Mrs</span>
        <input type="radio" name="action" id="ms" value="ms" /><span>Ms</span>
    </div>
    <div>
        <label for="date_month">Birth Date:</label>
        <?= date_dropdown(18);    ?>
    </div>
    <div>
        <label for="date_month">Hire Date:</label>
        <?= date_dropdown();    ?>
    </div>
    <div>
        <label for="adress">Adress:</label>
        <input type="text" name="adress" />
    </div>
    <div>
        <label for="city">City:</label>
        <input type="text" name="city" />
    </div>
    <div>
        <label for="postal_code">Postal Code:</label>
        <input type="text" name="postal_code" />
    </div>

    <div>
        <label for="country">Country:</label>
        <input type="text" name="country" />
    </div>
    <div>
        <label for="home_phone">Home Phone:</label>
        <input type="text" name="home_phone" />
    </div>
    <div>
        <label for="extension">Extension:</label>
        <input type="text" name="extension" />
    </div>
    <div>
        <label for="notes">Notes:</label>
        <div>
            <textarea name="notes" id="" cols="60" rows="5"></textarea>
        </div>
    </div>
    <div>
        <label for="manager">Manager:</label>
        <select name="manager" id="manager">
            <option value="1" selected >Andrew Fuller</option>
            <option value="2">Melissa Davon</option>
            <option value="3">Kim Roberts</option>
        </select>
    </div>
    <div>
        <label for="pass">Password:</label>
        <input type="password" id="pass"/>
    </div>
    <div>
        <label for="rep_pass">Repeat Password:</label>
        <input type="password" id="rep_pass"/>
    </div>
    <div>
        <input type="button" value="Add Employee"/>
    </div>
</form>
</body>
</html>
