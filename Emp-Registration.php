<html>
<head>
    <title>Employee Registration</title>
    <link rel="stylesheet" href="Emp-styles.css">
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend><h2>Employee Registration</h2></legend>
           
            <fieldset>
                <legend>Personal Details</legend>
                <table>
                    <tr>
                        <td>Full Name:</td>
                        <td><input type="text" name="full_name" required></td>
                    </tr>
                    <tr>
                        <td>Email:</td>
                        <td><input type="email" name="email" required></td>
                    </tr>
                    <tr>
                        <td>Phone Number:</td>
                        <td><input type="text" name="phone" required></td>
                    </tr>
                    <tr>
                        <td>Date of Birth:</td>
                        <td><input type="date" name="dob" required></td>
                    </tr>
                    <tr>
                        <td>Gender:</td>
                        <td>
                            <input type="radio" name="gender" value="Male"> Male
                            <input type="radio" name="gender" value="Female"> Female
                        </td>
                    </tr>
                    <tr>
                        <td>Address:</td>
                        <td><textarea name="address" rows="3" required></textarea></td>
                    </tr>
                </table>
            </fieldset>
           
            <fieldset>
                <legend>Job Details</legend>
                <table>
                    <tr>
                        <td>Employee ID:</td>
                        <td><input type="text" name="employee_id" required></td>
                    </tr>
                    <tr>
                        <td>Department:</td>
                        <td>
                            <select name="department" required>
                                <option value="HR">HR</option>
                                <option value="IT">IT</option>
                                <option value="Finance">Finance</option>
                                <option value="Marketing">Marketing</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Designation:</td>
                        <td><input type="text" name="designation" required></td>
                    </tr>
                    <tr>
                        <td>Date of Joining:</td>
                        <td><input type="date" name="joining_date" required></td>
                    </tr>
                    <tr>
                        <td>Salary:</td>
                        <td><input type="number" name="salary" required></td>
                    </tr>
                </table>
            </fieldset>
           
            <fieldset>
                <legend>Login Information</legend>
                <table>
                    <tr>
                        <td>Username:</td>
                        <td><input type="text" name="username" required></td>
                    </tr>
                    <tr>
                        <td>Password:</td>
                        <td><input type="password" name="password" required></td>
                    </tr>
                    <tr>
                        <td>Confirm Password:</td>
                        <td><input type="password" name="confirm_password" required></td>
                    </tr>
                </table>
            </fieldset>
           
            <br>
            <table align="center">
                <tr>
                    <td>
                        <input type="submit" value="Register">
                    </td>
                </tr>
            </table>
        </fieldset>
    </form>
</body>
</html>