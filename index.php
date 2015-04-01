<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- 
process.php -->

		<form name="multiform" id="multiform" action="process.php" method="POST" enctype="multipart/form-data">
              First Name : <input type="text" name="firstname" id="firstname" placeholder="First Name" />
              </br>
              Last Name : <input type="text" name="lastname" id="lastname" placeholder="Last Name" />
              </br>
              Email: <input type="text" name="email" id="email" placeholder="Email" />
              <br />
              Phone Number: <input type="text" name="phonenumber" id="phonenumber" placeholder="Phone number" />
              <br />
              Message: <textarea rows="5" cols="40" input type="text" name="message" id="message" placeholder="Message"/></textarea>
              <br />
              Resume : <input type="file" name="file" id="file" />
              <br />
              
        </form>
               <input  type="button" id="multi-post" value="Submit"></input>
               <div id="multi-msg"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="script/my_script.js" type="text/javascript"></script>
</body>
</html>