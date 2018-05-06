<html>
<body>


<form action="PST.php" method="post">
<fieldset>
  <legend>Personal Information:</legend>
<p>First name: <input type="text" name="firstname" id="firstname" /></p>
<p>Middle Int: <input type="text" name="MI" id="MI" /></p>
<p>Last name: <input type="text" name="lastname" id="lastname" /></p>
<p>Gender: <input type="radio" name="gender" value="Male" />Male
		<input type="radio" name="gender" value="Female" /><td>Female</td></p>

<p>Skills <br>
		<li><input type="checkbox" name="sk[]" value="VB" />Visual Basic
		<li><input type="checkbox" name="sk[]" value="Java" />Java
		<li><input type="checkbox" name="sk[]" value="Web" />Web(HTML,CSS,PHP)
	<td colspan="3" align="right" id="submit-wrapper"><br><br>
						<input type="submit" value="Send" name="submit" />
	</td></p>	

</fieldset>

</form>


</body>
</html>
