<!doctype html>
<html xmlns="http://www.w3.org/1999/html">
<head>
    <title>test</title>
        <link rel="stylesheet" href="<?php echo URL?>public/css/default.css"/>
    <script type="text/javascript" src="<?php echo URL?>public/js/jquery.js"/></script>
    <script type="text/javascript" src="<?php echo URL?>public/js/custom.js"/></script>

    <?php
    if (isset($this->js))
    {
        foreach ($this->js as $js)
        {
        echo '<script type="text/javascript" src="'.URL.'views/'.$js.'"></script>';
        }
    }
    ?>

</head>
<body>
</body>

<?php session::init(); ?>

<div id="header">
    <?php if(session::get('loggedIn') == false):?>
    <a href="<?php echo URL; ?>index">index</a>
    <a href="<?php echo URL; ?>help">help</a>
    <?php endif;?>
    <?php if(session::get('loggedIn') == true):?>
        <a href="<?php echo URL; ?>dashboard">dashboard</a>

    <?php if(session::get('role') == 'owner'):?>
            <a href="<?php echo URL; ?>user">Users</a>
        <?php endif;?>
        <a href="<?php echo URL; ?>dashboard/logout">logout</a>
    <?php else: ?>
         <a href="<?php echo URL ;?>login">login</a>
    <?php endif;?>
</div>
<div id="conten">
