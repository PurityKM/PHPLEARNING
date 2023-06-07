<?php

?>
<html>
    <body>
        <ul>
            <li>Host: <?php echo $_SERVER['HTTP_HOST']; ?></li>
            <li>Document Root: <?php echo $_SERVER['DOCUMENT_ROOT']; ?></li>
            <li>Server Name: <?php echo $_SERVER['SERVER_NAME']; ?></li>
            <li>Server Port: <?php echo $_SERVER['SERVER_PORT']; ?></li>
            <li>Current File Dir: <?php echo $_SERVER['PHP_SELF']; ?></li>
            <li>Request URL: <?php echo $_SERVER['REQUEST_URL']; ?></li>
            <li>Server Software: <?php echo $_SERVER['SERVER_SOFTWARE']; ?></li>
            <li>Client Info: <?php echo $_SERVER['HTTP_USER_AGENT']; ?></li>
            <li>Remote Address: <?php echo $_SERVER['REMOTE_ADDR']; ?></li>
            <li>Remote Port: <?php echo $_SERVER['REMOTE_PORT']; ?></li>
        </ul>
    </body>
</html>