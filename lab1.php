<?php
$text="";
if ($_SERVER["REQUEST_METHOD"] == "POST") 
{
    if(empty($_POST['name']))
    {
        $ename="";
        
    }
    else{
        $file=fopen('newfile.text',"w") or die("Unabel to open");
        $text=$_POST['name'];
        fwrite($file, $text);
        $text=$_POST['mail'];
        fwrite($file, $text);
		$text=$_POST['pass'];
        fwrite($file, $text);
        fclose($file);
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Registration Page</title>
</head>
<body>
<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"method="post">

 
	<fieldset>
        <legend> REGISTRATION </legend>
        <label for="name"> Name:</label>
       <input type="text" id="name" name="name"placeholder="Enter your name"><br><br><hr>
         <label for="mail">Email:</label>
        <input type="email" id="mail" name="mail"placeholder="Enter your email"><br><br><hr>
        <label for="pass">Password:</label>
         <input type="text" id="pass" name="pass"placeholder="Enter your pass"><br><br><hr>
		<label for="img"><B>Your Image:</B></label>
		<input type="file"name="img"id="fileupload"><br><br><br>
		 <button type="submit">Submit</button>

		
		</fieldset>
	</form>
</body>
</html>