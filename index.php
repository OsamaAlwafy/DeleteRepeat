<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2> SELECT SUBJECT:</h2>
<form method = 'post'>
            <h4>SELECT SUBJECTS</h4>
             
            <select name = 'subject[]' multiple size = 6> 
                <option value = 'english'>ENGLISH</option>
                <option value = 'maths'>MATHS</option>
                <option value = 'computer'>COMPUTER</option>
                <option value = 'physics'>PHYSICS</option>
                <option value = 'chemistry'>CHEMISTRY</option>
                <option value = 'hindi'>HINDI</option>
            </select>
            <input type = 'submit' name = 'submit' value = Submit>
        </form>

<?php
 



 if(isset($_POST["submit"]))
 {
     // Check if any option is selected
     if(isset($_POST["subject"]))
     {
         // Retrieving each selected option
         foreach ($_POST['subject'] as $subject)
             echo "You selected ". $subject."<br/>";
     }
 else
     echo "Select an option first !!";
 }






//  if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $name = $_POST['subject'];
    
    
//     if (empty($name)) {
//        echo "You are selected" .$name;
//     } else {
//       echo $name;
//     }


//  }

?>
    
</body>
</html>