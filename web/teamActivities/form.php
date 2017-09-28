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
    <?php var_dump($_POST["continents"]); ?><br>
    <p>I have been to these places:</p>
    <table>
        <?php foreach($_POST["continents"] as $key=>$value): ?>
        <tr>
            <td><?php echo $key; ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>