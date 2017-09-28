<!DOCTYPE html>
<html lang="en">
<head>
    <title>Team Project</title>
</head>
<body>
    <form action="form.php" method="post">
        Name<input type="text" name="name"><br>
        Email<input type="text" name="email">
        <br>
        Major
        <br>
        <input type="radio" value="Computer Science" name="major">Computer Science<br>
        <input type="radio" value="Web Design and Development" name="major">Web Design and Development<br>
        <input type="radio" value="Computer Informaion Technology" name="major">Computer Informaion Technology<br>
        <input type="radio" value="Computer Engineering" name="major">Computer Engineering<br>
        Comments<br>
        <textarea rows="4" cols="50" name="comments"></textarea>
        <p>I have been to these places:</p>
        <input type="checkbox" value="North America" name="continent">North America<br>
        <input type="checkbox" value="South America" name="continent">South America<br>
        <input type="checkbox" value="Europe" name="continent">Europe<br>
        <input type="checkbox" value="Asia" name="continent">Asia<br>
        <input type="checkbox" value="Australia" name="continent">Australia<br>
        <input type="checkbox" value="Africa" name="continent">Africa<br>
        <input type="checkbox" value="Antarctica" name="continent">Antarctica<br>
        <input type="submit">
    </form>

</body>
</html>