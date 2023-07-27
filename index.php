<html>
<head>
<title>Student Registration Form </title>
<style>
img {
    display : block;
    margin-left: auto;
    margin-right: auto;
    
}
/* body {
  background-image: url('background photo.jpg');
  background-repeat: no-repeat;} */
</style>
</head>
 
<body>
<h1 align="center">STUDENT REGISTRATION FORM</h1>
<img src="new logo copy.jpeg" alt="VSSUT LOGO" width="260" height="220"  >



<form action=insert.php method ="post">
<table align="center" cellpadding = "10">

  
<tr>
<td>NAME</td>
<td><input type="text" name="First_Name" maxlength="50"/>
</td>
 
<tr>
 <td>
    <label for="dob">DATE OF BIRTH</label>
    </td>
    <td>
    <input type="date" id="dob" name="dob">
 </td>
<td>
<tr>
    <td>REGISTRATION NO. </td>
    <td><input type="number" name="regdno" maxlength="10">
</tr>

<tr>
<td>EMAIL ID</td>
<td><input type="email" name="Email_Id" maxlength="100" /></td>
</tr>
 

<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="tel" name="Mobile_Number" id="Mobile_Number" />
</td>
</tr>
 
<tr>
    <td>PASSWORD</td>
    <td><input type="password" name="password" maxlength="100" /></td>
</tr>
     
<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="Gender" value="Male" />
Female <input type="radio" name="Gender" value="Female" />
</td>
</tr>
 
<tr>
<td>HOBBIES </td>
<td>
Drawing
<input type="checkbox" name="Hobby_Drawing" value="Drawing" />
Singing
<input type="checkbox" name="Hobby_Singing" value="Singing" />
Dancing
<input type="checkbox" name="Hobby_Dancing" value="Dancing" />
Sketching
<input type="checkbox" name="Hobby_Cooking" value="Cooking" />

</td>
</tr>
 
 <tr>
    <td>
        <label for="branch">BRANCH</label>
    </td>
    <td>
        <select name="branch" id="branch">
            <option value="IT">IT</option>
            <option value="CSE">CSE</option>
            <option value="ETC">ETC</option>
            <option value="EE">EE</option>
            <option value="CIVIL">CIVIL</option>
            <option value="MME">MME</option>
            <option value="PRODUCTION">PRODUCTION</option>
        </select>
    </td>
 </tr>
<tr>
<td colspan="2" align="center">
<input type="submit" value="Submit">
<input type="reset" value="Reset">
</td>
</tr>
</table>
 
</form>
</body>
</html>