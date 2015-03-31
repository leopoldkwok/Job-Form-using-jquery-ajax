<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

		<form name="multiform" id="multiform" action="process.php" method="POST" enctype="multipart/form-data">
               name : <input type="text" name="name" id="name"/>
               </br>
               message : <input type="text" name="message" id="message" />
               </br>
               Resume : <input type="file" name="file" id="file" />
        </form>
               <input  type="button" id="multi-post" value="Submit"></input>
               <div id="multi-msg"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script src="script/my_script.js" type="text/javascript"></script>
</body>
</html>


