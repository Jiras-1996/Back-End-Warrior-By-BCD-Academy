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

    echo "ฟอร์มผ่านแล้ว";