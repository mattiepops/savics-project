<?php

session_start();

?>

<form action="index_post.php" method="post">
<h2>New Medical Record</h2>
<br>
<input type="text" name='first_name' placeholder='First Name'>
<br>
<input type="text" name='last_name' placeholder='Last Name'>
<br>
<br>
<input type="radio" name='gender' value="male" placeholder=''>Male
<input type="radio" name='gender' value="female" placeholder=''>Female
<input type="text" name='age' placeholder='Age'>

<select name="city" id="">
    <option value="Brussels">Brussels</option>
    <option value="Paris">Paris</option>
    <option value="London">London</option>
</select>

<select name="country" id="">
    <option value="Belgium">Belgium</option>
    <option value="France">France</option>
    <option value="UK">UK</option>
</select>

<br>
<label for="diabetes">Living with diabetes?</label>

<input type="radio" name="" placeholder="">Yes
<input type="radio" name="" placeholder="">No
<input type="radio" name="" placeholder="">Unknown

<br>
<br>

<input type="submit" value="Save">

</form>


<?php
//connect to the database:
include_once('list.php');
?>