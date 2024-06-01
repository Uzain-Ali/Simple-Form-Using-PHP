<html>
<body>

<?php
    $nameErr = $emailErr = $websiteErr = $genderErr = $commentErr = "";
    $name = $email = $website = $gender = $comment= "";
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        if(empty($_POST["name"])){
            $nameErr = "Name is Required";
        }else{
            $name = test_input($_POST["name"]);
        }
        if(empty($_POST["email"])){
            $emailErr = "Email is Required";
        }else{
            $email = test_input($_POST["email"]);
        }
        if(empty($_POST["website"])){
            $websiteErr = "Website is Required";
        }else{
            $website = test_input($_POST["website"]);
        }
        if(empty($_POST["gender"])){
            $genderErr = "Gender is Required";
        }else{
            $gender = test_input($_POST["gender"]);
        }
        if(empty($_POST["comment"])){
            $commentErr = "Comment is Required";
        }else{
            $comment = test_input($_POST["comment"]);
        }

    }
?>


<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Name:<input type="text" name="name">
    <span class="error">* <?php echo $nameErr;?></span>
    Email::<input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>

    Website:<input type="text" name="website">
    <span class="error">* <?php echo $websiteErr;?></span>

    Gender:
    <input type="radio" name="gender" value="female" <?php if(isset($gender))>female
    <input type="radio" name="gender" value="male">Male
    <input type="radio" name="gender" value="other">Other
    <span class="error">* <?php echo $genderErr;?></span>

    Comment: <textarea name="comment" cols="40" rows="5"></textarea>
    <span class="error">* <?php echo $commentErr;?></span>

    <br><br>
    <input type="submit" name="submit" value="Submit"> 

</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $website;
echo "<br>";
echo $comment;
echo "<br>";
echo $gender;
?>


</body>
</html>