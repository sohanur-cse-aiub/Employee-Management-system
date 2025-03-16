<!DOCTYPE html>
<html>
<head>
<title>Employee Registration</title>
</head>
<body>
<h2>Employee Registration</h2>
<form action="register_employee.php" method="post">
<fieldset>
<legend>Employee Details</legend>
<table>
<tr>
<td><label for="emp_name">Full Name:</label></td>
<td><input type="text" id="emp_name" name="emp_name" required></td>
</tr>
<tr>
<td><label for="emp_email">Email:</label></td>
<td><input type="email" id="emp_email" name="emp_email" required></td>
</tr>
<tr>
<td><label for="emp_password">Password:</label></td>
<td><input type="password" id="emp_password" name="emp_password" required></td>
</tr>
<tr>
<td><label for="emp_phone">Phone Number:</label></td>
<td><input type="tel" id="emp_phone" name="emp_phone" required></td>
</tr>
<tr>
<td><label for="emp_department">Department:</label></td>
<td><input type="text" id="emp_department" name="emp_department" required></td>
</tr>
<tr>
<td><label for="emp_designation">Designation:</label></td>
<td><input type="text" id="emp_designation" name="emp_designation" required></td>
</tr>
<tr>
<td><label for="emp_id">Employee ID:</label></td>
<td><input type="text" id="emp_id" name="emp_id" required></td>
</tr>
<tr>
<td><label for="emp_dob">Date of Birth:</label></td>
<td><input type="date" id="emp_dob" name="emp_dob" required></td>
</tr>
<tr>
<td><label for="emp_gender">Gender:</label></td>
<td>
<input type="radio" id="male" name="emp_gender" value="Male" required> <label for="male">Male</label>
<input type="radio" id="female" name="emp_gender" value="Female" required> <label for="female">Female</label>
<input type="radio" id="other" name="emp_gender" value="Other" required> <label for="other">Other</label>
</td>
</tr>
<tr>
<td><label for="emp_education">Education Background:</label></td>
<td><textarea id="emp_education" name="emp_education" rows="4" required></textarea></td>
</tr>
<tr>
<td><label for="emp_experience">Work Experience:</label></td>
<td><textarea id="emp_experience" name="emp_experience" rows="4"></textarea></td>
</tr>
<tr>
<td><label for="emp_doj">Date of Joining:</label></td>
<td><input type="date" id="emp_doj" name="emp_doj" required></td>
</tr>
<tr>
<td><label for="emp_address">Address:</label></td>
<td><textarea id="emp_address" name="emp_address" rows="4" required></textarea></td>
</tr>
<tr>
<td><label for="emp_emergency_contact">Emergency Contact:</label></td>
<td><input type="tel" id="emp_emergency_contact" name="emp_emergency_contact" required></td>
</tr>
<tr>
<td colspan="2" style="text-align: center;"><input type="submit" value="Register"></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>