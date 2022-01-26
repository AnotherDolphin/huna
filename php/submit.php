<?php
    include_once dirname(__FILE__) . '/../php/dbh.php';
    $email = $_POST["email"];
    $name = $_POST["name"];
    $nationality = $_POST["nationality"];
    $phone = $_POST["phone"];
    $whatsapp = $_POST["nationality"];
    $job = $_POST["job"];

    $interest_area = implode(',', $_POST["interest_area"]);
    $estate_type = implode(',', $_POST["estate_type"]);

    $sql = "select * from registered_users where email = \"".$email."\"";
    $result = mysqli_query($mysqli, $sql);
    $resultCheck = mysqli_num_rows($result);
    $userExists = $resultCheck ?: false;

    if($userExists) {
        header("Location: ../dist/index.php?rej=true&email=".$email);
        exit();
    }

    readfile('../components/fixed-bg.html');
    include('../components/fixed-nav.php');
?>

<!-- `registered_users` (`email`, `name`, `job`) VALUES ('asd@asd.com', 'asd', 'asd'); -->


<html lang="ar" dir="rtl">
<head>
    <link rel="stylesheet" href="../dist/output.css">

</head>

<body class="flex flex-col h-screen">
    <main class="gap-12 flex flex-col items-start relative w-full h-screen overflow-hidden px-8 laptop:px-[8vw]">
        <?php include('../components/main-nav.php');?>
        <div class="bg-gray-100 bg-opacity-80 absolute p-8 flex flex-col justify-center items-center rounded-xl center-absolute">
        <?php 
            if($userExists) {?>
            <h1><?=$email?> is already registered under the name <?=mysqli_fetch_assoc($result)['name']?></h1>
            
        <?php 
            header("Location: ../dist/index.php");
        } else {

    // echo $mysqli->error;

            $sql = "insert into registered_users (email, name, nationality, phone, whatsapp, job, interest_area, estate_type) values (?,?,?,?,?,?,?,?)";
            $stmt= $mysqli->prepare($sql);
            $stmt->bind_param("ssssssss", $email, $name, $nationality, $phone, $whatsapp, $job, $interest_area, $estate_type);
            $stmt->execute();
            ?>
            <h1 class="text-center">You have been successfully registered to attend HUNA AL ASEMA EXPO</h1>
            <h2>You will receive a confirmation email shortly</h2>
        <?php }?>
        </div>
    </main>



</body>
</html>