<html>
<head>
    <title>Team page form</title>
</head>
<body>
    <h1>Here is the webpage we generated</h1>
    <?php echo $_POST["name"]; ?><br>
    <a href="mailto:<?php echo $_POST["email"]; ?>?Subject=Hello%20again" target="_top">Send Mail To : <?php echo $_POST["email"]; ?></a><br>
    <?php echo $_POST["major"]; ?><br>
    <?php echo $_POST["comments"]; ?><br>
</body>
</html>