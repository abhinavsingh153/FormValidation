
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
           }
        
        //Email
        if(empty($_POST['Email'])){
            
            $EmailError="Email is required.";
        }
           else{
               $Email = Test_User_Input($_POST['Email']);
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
           }
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
                <textarea name="comment" rows="5" cols="25"></textarea>
                <br>
                <br>
            <button type="submit" name="Submit">Submit your information</button>
            </fieldset>
        </form>
    
    </body>
</html>