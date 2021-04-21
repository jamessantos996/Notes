<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notes</title>
    <link rel="stylesheet" href="assets/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="assets/script.js.php"></script>
</head>
<body>
    <form id="add" action="notes/add" method="post">
        <h2>Add notes</h2>
        <label>Title</label>
        <input type="text" name="title">
        <label>Description</label>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
        <input type="submit" value="Add note">
    </form>
    <div id="note">

    </div>
</body>
</html>