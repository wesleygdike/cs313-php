<?php
/*
 * Self checking form on personal information
 * checking will go here 
 */
// define variables and set to empty values
$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed"; 
    }
  }
  
  function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<!-- Show selections of cart in table -->

<!-- Gather Personal information-->
<form method="post" action="<?php 
echo htmlspecialchars($_SERVER["PHP_SELF"]);
?>"/>
        <div class="form-group">
            <h1>Personal stuff</h1>
            <label class="control-label col-sm-2">Name:</label>
            <div class="col-sm-10">          
                <input type="text" class="form-control" 
                       name="name" 
                       placeholder="Enter first and last name"
                       value="<?php echo $name; ?>">
                <span class="error">* <?php echo $nameErr;?></span>
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Address:</label>
            <div class="col-sm-10">          
                <input type="text" class="form-control" 
                       name="adress[]" 
                       placeholder="Enter Street Address">
                <input type="text" class="form-control" 
                       name="adress[]" 
                       placeholder="Enter City">
                <input type="text" class="form-control" 
                       name="adress[]" 
                       placeholder="Enter State">
                <input type="text" class="form-control" 
                       name="adress[]" 
                       placeholder="Enter Zip">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2">Email:</label>
            <div class="col-sm-10">          
                <input type="email" class="form-control" 
                       name="email" 
                       placeholder="Enter Email">
            </div>
        </div>


        <input type="submit" class="navbar-btn" name="Submit"
               value="Go To Cart">
</form>

