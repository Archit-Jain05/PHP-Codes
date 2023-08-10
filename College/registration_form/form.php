<html>
    <body>

    
<form action="display.php" method="post">

<h3>Name:       <input type="text" name="name"><br></h3>

<h3>Email:      <input type="email" name="email"><br></h3>

<h3>Password:   <input type="password" name="pass"><br></h3>

<h3>Gender: </h3>
<input type="radio" name="gender" value="Male" />
<label for="contact_email">Male</label><br><br>
<input type="radio" name="gender"  value="Female" />
<label for="contact_phone">Female</label>

<h3>Discipline: </h3>
<select name="discipline" >
    <option value="IT">IT</option>
    <option value="CSE">CSE</option>
    <option value="EXTC">EXTC</option>
    <option value="Civil">Civil</option>
    <option value="Electrical">Electrical</option>
    <option value="MechanicaL">Mechanical</option>
    <option value="Chemical">Chemical</option>
</select><br><br>

<h3>Hobbies</h3>
<input type="checkbox" id="swimming" name="hobbie[]" value="Swimming">
  <label for="swimming">Swimming</label><br>
  <input type="checkbox" id="cycling" name="hobbie[]" value="Cycling">
  <label for="cycling">Cycling</label><br>
  <input type="checkbox" id="reading" name="hobbie[]" value="Reading">
  <label for="reading">Reading</label><br><br><br>

<input type="submit" value="Submit">

</form>
</body>
</html>