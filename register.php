<?php if(isset($smsg)){ ?><div class="alert alert-success" role="alert"> <?php echo $smsg; ?> </div><?php } ?>
<?php if(isset($fmsg)){ ?><div class="alert alert-danger" role="alert"> <?php echo $fmsg; ?> </div><?php } ?>
<?php
	require('connect.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['name']) && isset($_POST['password1'])){
        $username = $_POST['name'];
	$email = $_POST['email'];
        $password = $_POST['password1'];

        $query = "INSERT INTO `user` (name,  email, password, contact_no, address, pin_code, gender ) VALUES ('$name', '$email', '$password', '$cont_no', '$address', '$pin_code', '$gender')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>
