<?php
    if(!$_POST['firstname']) {
        header("location: index.php?message=กรอกชื่อด้วย");
    }

    if(!$_POST['lastname']) {
        header("location: index.php?message=กรอกนามสกุลด้วย");
    }

    if(!$_POST['height']) {
        header("location: index.php?message=กรอกส่วนสูงด้วย");
    }

    if(!$_POST['weight']) {
        header("location: index.php?message=กรอกน้ำหนักด้วย");
    }

    if(!$_POST['age']) {
        header("location: index.php?message=กรอกอายุด้วย");
    }

    //========================
    // insert into database
    //========================
    $servername = "127.0.0.1"; // localhost กับ 127.0.0.1 อันเดียวกัน
    $username = "root"; // ใน xampp กับ mampp จะมี username เป็น "root"
    $password = ""; // ใน xampp กับ mampp จะไม่มี password หรือถ้ามีจะเป็น "root"
    $dbname = "backend2"; // ชื่อของ database ที่ต้องการเชื่อม

    // วิธีที่ 1: สำหรับมือใหม่ให้สร้างตัวแปรขึ้นมาก่อน
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $height = $_POST["height"];
    $weight = $_POST["weight"];
    $age = $_POST["age"];

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
    }

    $sql = "INSERT INTO students (firstname, lastname, height, weight, age)
    VALUES ('$firstname', '$lastname', '$height', '$weight', '$age')";

    /*
    วิธีที่ 2: ออกจาก comma ก่อนแล้วติดกาวด้วย concatenation เอาเอง 
    VALUES ('" . $_POST["firstname"] . "', '" . $_POST["lastname"] . "', '" . $_POST["height"] . "', '" . $_POST["weight"] . "', '" . $_POST["age"] . "')";   
    */

    if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
    } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();