<!DOCTYPE html>
<html>
<head>
<title>Admin Registration</title>
</head>
<body>
<h1>Admin Panel - Registration</h1>
<form action="register_admin.php" method="post">
<fieldset>
<legend>Admin Details</legend>
<table border="1" cellpadding="5" cellspacing="0">
<tr>
<td><strong>Full Name:</strong></td>
<td><input type="text" id="admin_name" name="admin_name" required></td>
</tr>
<tr>
<td><strong>Email:</strong></td>
<td><input type="email" id="admin_email" name="admin_email" required></td>
</tr>
<tr>
<td><strong>Password:</strong></td>
<td><input type="password" id="admin_password" name="admin_password" required></td>
</tr>
<tr>
<td><strong>Admin Code:</strong></td>
<td><input type="text" id="admin_code" name="admin_code" required></td>
</tr>
<tr>
<td><strong>Phone Number:</strong></td>
<td><input type="tel" id="admin_phone" name="admin_phone" required></td>
</tr>
<tr>
<td><strong>Role/Designation:</strong></td>
<td><input type="text" id="admin_role" name="admin_role" required></td>
</tr>
<tr>
<td><strong>Security Question:</strong></td>
<td>
<select id="admin_security_question" name="admin_security_question" required>
<option value="">Select a question</option>
<option value="pet">What is the name of your first pet?</option>
<option value="mother_maiden">What is your mother's maiden name?</option>
<option value="first_school">What was the name of your first school?</option>
</select>
</td>
</tr>
<tr>
<td><strong>Security Answer:</strong></td>
<td><input type="text" id="admin_security_answer" name="admin_security_answer" required></td>
</tr>
<tr>
<td><strong>Date of Joining:</strong></td>
<td><input type="date" id="admin_doj" name="admin_doj" required></td>
</tr>
<tr>
<td><strong>Address:</strong></td>
<td><textarea id="admin_address" name="admin_address" rows="4"></textarea></td>
</tr>
<tr>
<td colspan="2" style="text-align: center;"><input type="submit" value="Register"></td>
</tr>
</table>
</fieldset>
</form>
</body>
</html>