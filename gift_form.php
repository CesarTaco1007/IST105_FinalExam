<!-- 
HTML FORM FOR GIFT SELECTION EXTRAVAGANZA 
-->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift Selection Extravaganza</title>
</head>
<body>
  <h2>Gift Selection Extravaganza</h2>
  <form action="process_gift.php" method="get">
    <label>Select Gifts:</label><br>
    <input type="checkbox" name="gifts[]" value="0"> Book<br>
    <input type="checkbox" name="gifts[]" value="1"> Toy<br>
    <input type="checkbox" name="gifts[]" value="2"> Gadget<br>
    <input type="checkbox" name="gifts[]" value="3"> Video Game<br>
    <input type="checkbox" name="gifts[]" value="4"> Headphones<br>
    <input type="checkbox" name="gifts[]" value="5"> Smartphone<br>
    <input type="checkbox" name="gifts[]" value="6"> Laptop<br>
    <input type="checkbox" name="gifts[]" value="7"> Watch<br>
    <input type="checkbox" name="gifts[]" value="8"> Shoes<br>
    <input type="checkbox" name="gifts[]" value="9"> Wallet<br>
    <input type="checkbox" name="gifts[]" value="10"> Headset<br>
    <input type="checkbox" name="gifts[]" value="11"> Camera<br>
    <input type="checkbox" name="gifts[]" value="12"> Drone<br>
    <input type="checkbox" name="gifts[]" value="13"> Smart Watch<br>
    <input type="checkbox" name="gifts[]" value="14"> Bluetooth Speaker<br><br>
    <button type="submit">Submit</button>
  </form>
</body>
</html>