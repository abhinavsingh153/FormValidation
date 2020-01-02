
<?php 

$NameError="";
$EmailError="";
$GenderError="";
$WebsiteError ="";

//on clicking submit button
    if(isset($_POST['Submit'])){
        
        // Name
        if(empty($_POST['Name'])){
            
            $NameError="Name is required.";
        }
           else{
               $Name = Test_User_Input($_POST['Name']);
               
               // cheking the regex for name
               if(!preg_match('/^[A-Za-z .]/', $Name)){
                   $NameError = "Only letters and white spaces are allowed.";
               }
           }
        
        //Email
        if(empty($_POST['Email'])){
            
            $EmailError="Email is required.";
        }
           else{
               $Email = Test_User_Input($_POST['Email']);
               
               //checking regex for email.
               if(!preg_match('/^[a-zA-Z0-9._-]{3,}@[a-zA-Z._]{3,}[.][a-zA-Z._]{2,}/', $Email)){
                   $EmailError = "Invalid Email format";
               }
           }
        
        //Gender
        if(empty($_POST['Gender'])){
            
            $GenderError="Gender is required.";
        }
           else{
               $Gender = Test_User_Input($_POST['Gender']);
               
           }
        
        //Website
        if(empty($_POST['Website'])){
            
            $WebsiteError="Website is required.";
        }
           else{
               $Website = Test_User_Input($_POST['Website']);
               
               // checking regex ofr website url
               if(!preg_match("/(https:|http:|ftp:)\/\/+[a-zA-z0-9.\-\/\$\#\~_?=&!]+\.[a-zA-z0-9.\-\/\$\#\~_?=&!:]*/", $Website)){
                   $WebsiteError="Invalid website format.";
               }
           }
        
        
    
        if(!empty($_POST["Name"]) &&
          !empty($_POST['Email']) &&
          !empty($_POST['Gender']) &&
          !empty($_POST['Website'])){
        echo "<h2>Your submit information.</h2>";
        echo "Name : {$_POST['Name']}<br>";
        echo "Email : {$_POST['Email']}<br>";
        echo "Gender : {$_POST['Gender']}<br>";
        echo "Website : {$_POST['Website']}<br>";
        echo "Comment : {$_POST['Comment']}<br>"; }
        
    }
           
    // Checks the user input for name, email, gender, website.
    function Test_User_Input($Data){
        return $Data;
    }

    
?>


<!DOCTYPE html>
<html>

    <head>
        <title>Form validation Project</title>
    </head>
    
    <body>
        
        <?php ?>
        
        <h2>Validation with php.</h2>
        
        <form action = "FormValidation.php" method="post">
        <legend>*Please fill out the following details</legend>
            
            <fieldset>
            Name:<br>
                <input type ="text" name="Name" value="">*<?php echo $NameError ?><br>
            Email:<br>
                <input type="text" name="Email" value = "">* <?php echo $EmailError ?><br>
            Gender:
                <label for="male"><input id="male" type="radio" name="Gender" value="male" >Male</label>
                <label for ="female"><input  id ="female" type="radio" name="Gender" value="female">Female</label>
                *<?php echo $GenderError ?> 
                <br>
            Website :<br>
                <input type="text" name="Website" value="">* <?php echo $WebsiteError ?><br>
            Comment:<br>
                <textarea name="Comment" rows="5" cols="25"></textarea>
                <br>
                <br>
            <button type="submit" name="Submit">Submit your information</button>
            </fieldset>
        </form>
    
    </body>
</html>