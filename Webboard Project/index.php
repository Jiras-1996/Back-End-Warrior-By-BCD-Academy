<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    
        <link rel="stylesheet" href="app.css">
    </head>
    <body>
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-6">
                    
                    <?php if($_GET['message'] ): ?>

                        <div class = "alert alert-danger">
                            <?php echo $_GET['message']; ?>
                        </div>
                        
                    <?php endif; ?> 
                   
                    <h1>สมัครเรียนว่ายน้ำ กับ จารย์เจ</h1>

                    <form action= "submit.php" method = "POST">

                        <div class = "mt-3">

                            <label for="firstname" class = "form-label">ชื่อ*</label>
                            <input type = "text" name = "firstname" placeholder = "ใส่ชื่อที่นี่" class = "form-control">
                    
                        </div>

                        <div class = "mt-3">

                            <label for="lastname" class = "form-label">นามสกุล*</label>
                            <input type = "text" name = "lastname" placeholder = "ใส่นามสกุลที่นี่" class = "form-control">
                    
                        </div>

                        <div class = "mt-3">

                            <label for="height" class = "form-label">ส่วนสูง*</label>
                            <input type = "text" name = "height" placeholder = "ใส่ส่วนสูง (cm.)" class = "form-control">
                    
                        </div>

                        <div class = "mt-3">

                            <label for="weight" class = "form-label">น้ำหนัก*</label>
                            <input type = "text" name = "weight" placeholder = "ใส่น้ำหนัก (kg.)" class = "form-control">
                    
                        </div>

                        <div class = "mt-3">

                            <label for="age" class = "form-label">อายุ*</label>
                            <input type = "text" name = "age" placeholder = "ใส่อายุของท่าน" class = "form-control">
                    
                        </div>

                        <div class = "mt-3">
                            <button type = "submit" class = "btn btn-primary btn-lg w-100">ยืนยันการสมัครเรียนว่ายน้ำ</button>
                        </div>

                    </form>

                </div>
            </div>
        </div>
    </body>
</html>