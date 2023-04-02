<html>
<body>
<h2>Add:</h2>
<form method="get" action="addition.php">
Add number: <input type="number" name="num_one">
Add number: <input type="number" name="num_two">
<input type="submit" value="Add">
</form>

<h2>Subtract:</h2>
<form method="get" action="division.php">
Add number: <input type="number" name="num_three">
Add number: <input type="number" name="num_four">
<input type="submit" value="Subtract">
</form>
<a href="index.php">Reset</a>

 <form action="/addition.php" method="get">
  <label for="fname">Number:</label>
  <input type="number" id="fname" name="num_one"><br><br>
  <label for="lname">Number:</label>
  <input type="number" id="lname" name="num_two"><br><br>
  <button type="submit">Submit</button>
  <button type="submit" formaction="/division.php">Submit to another page</button>
</form> 

</body>
</html>