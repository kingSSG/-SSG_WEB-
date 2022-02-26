
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ssg</title>
    <link rel="stylesheet" href="st.css">
    <style>
        .cont {
    max-width: 80%;
    background-color: blueviolet;
    padding: 34px;
    margin: auto;
}

.cont h1 {
    text-align: center;
}

input,
textarea {
    width: 80%;
    margin: 11px;
}

.btn {
    color: white;
    background: #49126ab8;
    padding: 8px 12px;
    font-size: 20px;
    border-radius: 14px;
    cursor: pointer;
    
}
    </style>
    

</head>
<body>
    <div class =cont >
    <h1> Admision </h1> 
    <p> enter details </p>
    <form action="database.php" method="POST">
        <input type="text" name="name" id="name" placeholder="name"> 
        <input type="text" name="age" id="age" placeholder="age">
        <input type="text" name="phone" id=" phone" placeholder="phone">
        <input type="email" name="email" id="email" placeholder="email">
        <textarea name="about" id="about " cols="30" rows="20" placeholder="about your self"></textarea>
        <br>
        <button class="btn" type="submit">submit</button>
        <button class="btn" type="reset">reset</button>
    </form>

    </div>

    <script src="index.js">
    </script>

</body>
</html> 
<?php 

    
    $server = "localhost";
    $usernam= "root";
    $password ="";
    $con= mysqli_connect($server,$usernam, $password);
    if (!$con) {
        die(" connection failed bal :".mysqli_connect_errno());
    
    }
    echo " sucessfuLL";
    $name = $_POST['name'];
    $age = $_POST['age'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $about = $_POST['about'];
if(isset($POST['name'])) 
{
    $sql= "INSERT INTO `ssg_web`.`form`(`name`, `age`, `phone`, `gmail`, `about`, `date_add`) VALUES ('$name', '$age','$phone','$email', '$about', current_timestamp());";
    if ($con ->query($sql) == true) {

        echo " successfully incerted";
    }
    else {
        echo "error : $sql <br> $con->error ";
    }
    $con-> close(); 

}

?>
