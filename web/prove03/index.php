
<?php
// Start the session
session_start();
$_SESSION["cartCount"] = 0;
$_SESSION["cart"] = array();
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Prove03 Shopping Cart</title>
        
    </head>
    <body>
        <?php
            //variables
            $size = "";
            $flavors = $toppings = array();
            //error msgs
            $sizeerr = $flavorserr = $$toppingserr = "";
            
            //submittal code
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
            //Check input  
                if (empty($_POST["size"])) {
                        $sizeErr = "Size is required";
                  } else {
                      $size = $_POST["size"];
                  }
            if (count($_POST["flavors"]) <= 0) {
                      $flavorErr = "Flavor is required";
                } else {
                    $flavors = $_POST["flavors"];
                    $sizeErr = "";
                }
                if (count($_POST["toppings"]) <= 0) {
                      $toppingErr = "Topping is required";
                } else {
                    $toppings = $_POST["toppings"];
                    $toppingErr = "";
                }
            }
            //Add Selection to Cart
            if($_POST["addtocart"] == "clicked"){
                echo "added to cart!";
                $newSelection = [
                    "size"=>"", 
                    "flavors"=>array(), 
                    "toppings"=>array()
                    ];
                $newSelection["size"] = $size;
                $newSelection["flavors"] = $flavors;
                $newSelection["toppings"] = $toppings;
                $_SESSION["cart"][$_SESSION["cartCount"]++] = $newSelection;
                $_SESSION["addtocart"] = "false";
            }
        ?>
        
        
        <h1>Pick Your Size</h1>
        <form method="post" 
              action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            
            Size:
                <input type="radio" name="size" 
                    <?php if (isset($size) && $size=="Small") 
                        echo "checked";?> value="Small">Small
                <input type="radio" name="size" 
                    <?php if (isset($size) && $size=="Large") 
                        echo "checked";?> value="Large">Large
                <span class="error">* <?php echo $sizeerr;?></span>
            <br/><br/>
            Flavor:
                <input type="checkbox" name="flavors[]" 
                    <?php if (isset($flavors) && $flavors=="Blueberry") 
                        echo "checked";?> value="Blueberry">Blueberry
                <input type="checkbox" name="flavors[]" 
                    <?php if (isset($flavors) && $flavors=="Pineapple") 
                        echo "checked";?> value="Pineapple">Pineapple
                <input type="checkbox" name="flavors[]" 
                    <?php if (isset($flavors) && $flavors=="Lemon") 
                        echo "checked";?> value="Lemon">Lemon
                <span class="error">* <?php echo $flavorserr;?></span>
            <br/><br/>
            Toppings:
                <input type="checkbox" name="toppings[]" 
                    <?php if (isset($toppings) && $toppings=="Nuts") 
                        echo "checked";?> value="Nuts">Nuts
                <input type="checkbox" name="toppings[]" 
                    <?php if (isset($toppings) && $toppings=="Sprinkles") 
                        echo "checked";?> value="Sprinkles">Sprinkles
                <input type="checkbox" name="toppings[]" 
                    <?php if (isset($toppings) && $toppings=="Candies") 
                        echo "checked";?> value="Candies">Candies
                <span class="error">* <?php echo $$toppingserr;?></span>
                <br/><br/>
                <input type="submit" name="submit" value="Update Selection">
        
        <?php
            echo "<h2>Your Selection:</h2>";
            echo $size;
            foreach($flavors as $flavor) {
                echo "<br>";
                echo $flavor;
            }
            foreach($toppings as $topping) {
                echo "<br>";
                echo $topping;
            }
        ?>
        <br/><br/>

            <input type="checkbox" name="addselection" value="clicked">
            Add Selection to cart?
            <input type="submit" name="submit" value="Update Selection">

            <?php
            $count = 0;
            echo "<h2>Your Cart:</h2>";     
            foreach($_SESSION["cart"] as $selection){
                echo "selection #$count";
                echo $selection["size"];
                    foreach($selection["flavors"] as $flavor) {
                        echo "<br>";
                        echo $flavor;
                    }
                foreach($selection["toppings"] as $topping) {
                        echo "<br>";
                        echo $topping;
                    }
            }
            ?>
        </form>
    </body>
</html>
