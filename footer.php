<?php get_footer(); ?>
<!DOCTYPE html>
<html>
    <head>
	
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width,initial-scale=1.0">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
		<title>Login page</title>
            </head>
            <body>		
				<center><img src="aliya.jfif" alt="aliya"></center>
				<?php
                if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email']) && isset($_POST['State']) && isset($_POST['phoneno']) && isset($_POST['gender']) && isset($_POST['city']) && isset($_POST['photo']) && isset($_POST['graduation']) && isset($_POST['graduation grade']) &&  isset($_POST['graduation year']) && isset($_POST['specilization']) && isset($_POST['Primary']) && isset($_POST['secondary']) && isset($_POST['certification']) && isset($_POST['pitch']))
                {
					echo "<h1>From Submitted</h1>";
                	echo "First Name :"  . $_POST['firstname'] . "<br>";
                    echo "last Name :"  . $_POST['lastname'] . "<br>";
                    echo "email :"  . $_POST['email'] . "<br>";
                	echo "state :"  . $_POST['state'] . "<br>";
                    echo "phoneno :"  . $_POST['phoneno'] . "<br>";
                	echo "gender :"  . $_POST['gender'] . "<br>";
                    echo "city :"  . $_POST['city'] . "<br>";
                	echo "photo :"  . $_POST['photo'] . "<br>";
                    echo "graduation :"  . $_POST['graduation'] . "<br>";
                	echo "graduation grade :"  . $_POST['graduation grade'] . "<br>";
                    echo "graduation year :"  . $_POST['graduation year'] . "<br>";
                	echo "Specialization :"  . $_POST['Specialization'] . "<br>";
                    echo "college :"  . $_POST['collge'] . "<br>";
                	echo "primary :"  . $_POST['primary'] . "<br>";
                    echo "secondary :"  . $_POST['secondary'] . "<br>";
                	echo "certification :"  . $_POST['certification'] . "<br>";
                    echo "pitch :"  . $_POST['lastname'] . "<br>";


	} else {				
			?>
			}	
		
		<body bgcolor="gold" font-color="red">
			<div class="row">
  <div class="column" style="background-color:#aaa;">
 <form method="GET">
<table border='0' width='480px' cellpadding='0' cellspacing='0' align='center'>
<center><tr>
   <td><h3>Personal Details</h3></td>
</tr><center>
 <tr>
		<td align='center'>First Name*:</td>
		<td><input type="text field" placeholder="Enter text" ></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>	
		<tr>
		<td align='center'>Last Name*:</td>
		<td><input type="text field" placeholder="Enter text" ></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>
	

<tr>
		
<tr>
		<td align='center'>Email*:</td>
		<td><input type="text field" placeholder="Enter text" ></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>	
		
	
	<tr>
	<td align='center'>State:</td>
  <td><select id="State"input type="text" name="State">
	  <option value=""></option>
    <option value="Maharastra">Maharastra</option>
    <option value="US">"US</option>
    <option value="Gujarat">Gujarat</option>
    <option value="Saudi Arebia">Saudi Arebia</option>
  </select></td>
	</tr>
		
<tr> <td>&nbsp;</td> </tr>		
		
		
<tr>
    <td align='center'>Phone No:</td>
    <td><input type='Number' name='Phone no'></td>
</tr>
<tr> <td>&nbsp;</td> </tr>
	<tr>
	<td align='center'>Gender:</td> 
		<td><input type="radio" id="male" name="gender" value="male">
		<label for="male">Male</label>
		<input type="radio" id="female" name="gender" value="female">
	<label for="female">Female</label></td>
	</tr>
	<tr> <td>&nbsp;</td> </tr>
	
	<tr>
		<td align='center'>City*:</td>
		<td><input type="text field" placeholder="Enter text" ></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>	
		
	<tr>
		<td align='center'>Upload your Photo:</td>
		<td><input type="file" /></td>
	</tr>
	<tr> <td>&nbsp;</td> </tr>
	
	<center><tr>
   <td><h3>Educational Details</h3></td>
</tr><center>
	<tr>
	 <td align='Center'>Graduation*:</td>
  <td><select id="Graduation" name="Graduation">
	  <option value=""></option>
    <option value="B.Tech">B.Tech</option>
    <option value="BSC">BSC</option>
    <option value="BCS">BCS</option>
    <option value="BCOM">BCOM</option>
    <option value="Pharmcy">Pharmacy</option>
	  </select></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>
		
	<tr>
		<td align='center'>Graduation Grade:</td>
		<td><input type="text field" placeholder="Enter text" ></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>
		<tr>
 <td align='center'>Graduation year*:</td>
  <td><select id="Graduation" name="Graduation">
	  <option value=""></option>
    <option value="2016">2016</option>
    <option value="2017">2017</option>
    <option value="2018">2018</option>
    <option value="2019">2019</option>
    <option value="2020">2020</option>
	  </select></td>	
		<tr> <td>&nbsp;</td> </tr>
		
		<tr>
		<td align='center'>Specialization*:</td>
		<td><input type="text field" placeholder="Enter text" ></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>
		<tr>
		<td align='center'>College/Univercity*:</td>
		<td><input type="text field" placeholder="Enter text" ></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>
		
	<center><tr>
   <td><h3>Skills</h3></td>
</tr><center>	
		
	<tr>
    <td align='center'>Primary*:</td>
		<td><input type="text field" placeholder="Enter text" ></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>	
		
		<tr>
		<td align='center'>Secondary*:</td>
		<td><input type="text field" placeholder="Enter text" ></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>
		
		<tr>
		<td align='center'>Certifications:</td>
		<td><input type="text field" placeholder="Enter text" ></td>
		</tr>
		<tr> <td>&nbsp;</td> </tr>
		<tr>
			<td align='center'>Pitch*:</td>
				<td><textarea></textarea></td>    
		</tr>
		<tr> <td>&nbsp;</td> </tr>
<table border='0' cellpadding='0' cellspacing='0' width='480px' align='center'>
<tr>
    <td align='center'>
		<a href="barhate sharvri_resume.pdf"  target=”_blank” name='register' value="Register">Register</a></td>
	<a href=”yourname_resume.pdf” target=”_blank”>
</tr>
</table>
</table>
 
</table>
</form>
	</div>
	
    </body>




























 





            
            </form>
				<?php } ?>            
				</body>
            </html>
				
	