<?php include('./db/db.php') ?>

<?php include('./pages/Navbar.php') ;



// $sql='INSERT INTO `faculty`(`name`, `mobile`, `email`, `password`) VALUES ("hello",123,"user@gmail.com","123")';

// $result = mysqli_query($conn,$sql);

// if($result)
// {
//     echo 'data added successfully';
// }


?>


<div>
    <form action="index.php" method='get'>

        <input type="text" name="name" placeholder='enter your name' required>
        <input type="number" name="mobile" id="" placeholder='enter your mobile number' >
        <input type="email" name="email" id="" placeholder='enter your email' >
        <input type="password" name="password" id="" placeholder='enter your password' >
        <input type="submit" value="submit">
    </form>



    <?php
    
    $name = $_GET['name'];
    $mobile = $_GET['mobile'];
    $email=$_GET['email'];
    $password=$_GET['password'];
 

    $sql = "INSERT INTO `faculty`(`name`, `mobile`, `email`, `password`) VALUES ('$name','$mobile','$email','$password')";
    
    $result = mysqli_query($conn,$sql);

    if($result)
    {
        echo 'data added success';
    }
    
    
    
    ?>
</div>