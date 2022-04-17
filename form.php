<html>
<head>
<title>
</title>

<style>
table
{
color:white;
border-radius:30px;
}

#button
{
background: linear-gradient(to right, #1d86df 0%, #39b49a 100%);
background-color:green;
color:white;
height:32px;
width:85px;
border-radius:25px;
}
#button:hover,#button:focus {
    background: linear-gradient(to right, #39b49a 0%, #1d86df 100%);
}
body
{
backgrond:linear-gradient(red,blue);
text-transform: uppercase;
    padding: 0;
    margin: 0 0 5px;
    font-weight: 600;
    letter-spacing: 0.5px;
    font-size: 17px;
    color: #0071d1;
}
</style>
</head>
<body>
<br><br><br><br><br><br><br>

<form action="pdf.php" method="POST">
<table border="0" bgcolor="#c1afe2" align="center" cellspacing="30">

<tr>
<td>Roll NO</td>
<td><input type="text" placeholder="rollno" name="rollno"></td>
</tr>

<tr>
<td>First Name</td>
<td><input type="text" placeholder="firstname" name="firstname"></td>
</tr>

<tr>
<td>Last Name</td>
<td><input type="text" placeholder="lastname" name="lastname"></td>
</tr>

<tr>
<td>Email Address</td>
<td><input type="text" placeholder="email" name="email"></td>
</tr>

<tr>
<td colspan="2" align="center"><input type="submit" id="button" name="submit"></td>
</tr>
</form>
</table>
</body>
</html>