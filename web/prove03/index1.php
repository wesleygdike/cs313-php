<?php
//Start the session
session_start();
$_SESSION["cartCount"] = 0;
?>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["cart"][$_SESSION["cartCount"]++] = 
            array(
                "size"=>$_POST["size"], 
                "flavor"=>$_POST["flavor"], 
                "topping"=>$_POST["topping"]);
}
?>
<!DOCTYPE html>

<html lang="en">
    <head>
        <title>TODO supply a title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="SparkleSprinkles.css" />
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>

        <div class="navbar">
            <div class="row">
                <div class="col-sm-4">
                    <img class="left-align" src="http://3.bp.blogspot.com/-SQMpm6pmNjM/Tb9K4DeVW6I/AAAAAAAAANQ/Il7HPgUJBgc/s1600/cute%2Bice%2Bcream.jpg"
                    alt="Froyo icon" width="100"/><h1>Froze Cultures</h1>
                </div>
            </div>
        </div>
        
        <!-- First Container -->
        <div class="container-fluid bg-1 text-center">
            <h3 class="fancy-text">Get Froze</h3>
            <div class="row">

                <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" 
                      class="form-horizontal">
                    <div class="form-group">
                        <h1>Pick your Size</h1>
                        <label><input type="radio" value="samll" 
                                      name="size"/> Small</label>
                        <label><input type="radio" value="Medium" 
                                      name="size"/> Medium</label>
                        <label><input type="radio" value="Large" 
                                      name="size"/> Large</label>
                    </div>
                        <h1>What's Your Taste?</h1>
                        <image src="blueberries.png" class="checkme-pic"/>
                        <input type="checkbox" class="checkme-image" 
                               value="blueberry" name="flavor[]"/>
                        <image src="lemon.png" class="checkme-pic"/>
                        <input type="checkbox" class="checkme-image" 
                               value="lemon" name="flavor[]"/>
                        <image src="grapes.png" class="checkme-pic"/>
                        <input type="checkbox" class="checkme-image" 
                               value="grapes" name="flavor[]"/>
                        <image src="pineapple.png" class="checkme-pic"/>
                        <input type="checkbox" class="checkme-image" 
                               value="pineapple" name="flavor[]"/>
                        <br/>
                        <div class="form-group">
                        <h1>And how you going to top it?</h1>
                        <image src="pistachio.png" class="checkme-pic"/>
                        <input type="checkbox" class="checkme-image" 
                               value="pistachio" name="topping[]"/>
                        <image src="coconut.png" class="checkme-pic"/>
                        <input type="checkbox" class="checkme-image" 
                               value="coconut" name="topping[]"/>
                        <image src="bacon.png" class="checkme-pic"/>
                        <input type="checkbox" class="checkme-image" 
                               value="bacon" name="topping[]"/>
                        <image src="cucumber.png" class="checkme-pic"/>
                        <input type="checkbox" class="checkme-image" 
                               value="cucumber" name="topping[]"/>
                        </div>
                        <br/>
                        
                        <input type="submit" name="addtocart" 
                               value="Add to Cart" />                
                </form>       
            </div>
            <div class="row">
                <input type="button" value="Go To Cart" />
            </div>
        </div>
        <div>Icons made by <a href="https://www.flaticon.com/authors/smashicons" title="Smashicons">Smashicons</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a> is licensed by <a href="http://creativecommons.org/licenses/by/3.0/" title="Creative Commons BY 3.0" target="_blank">CC 3.0 BY</a></div>
    </body>
</html>