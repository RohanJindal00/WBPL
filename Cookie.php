<?php
echo"Rohan Jindal<br>";
    setcookie("Household_Item", "Groceries", time() + 2 * 24 * 60 * 60);
?>
<html>
<body>
    <?php
    if (isset($_COOKIE["Household_Item"]))
    {
        echo "Household Item is a " . $_COOKIE["Household_Item"];
    }
    else
    {
        echo "No items related to Household.";
    }
    ?>
    <p>
        <strong>Note:</strong>
        You might have to reload the page 
        to see the value of the cookie.
    </p>
  
</body>
</html>