<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập Form </title>
    <link rel="stylesheet" href="Css/style.css">
</head>
<body>

    <?php 
    $bankinh = $acreage = $bankinhtang = "";
    $countErr = 0;
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (!empty($_POST["bankinh"])) {
            if ($_POST["bankinh"] <= 0) {
                $bankinhtang = "Bán kính phải lớn hơn 0";
                $countErr++;
            } else {
                (int)$bankinh= $_POST["bankinh"];
            }
        } else {
            $bankinhtang = "Bán kính không được để trống";
            $countErr++;
        }
      
        if ($countErr == 0) {
            (double)$acreage = ( (double)$bankinh * (double)$bankinh )*3.14;
        }
    }
    ?>
    <div class="content">
        <h2 class="title">Diện Tích Hình Tròn</h2>
        <form action="" method="post">
            <div class="form-group">
                <label>Bán kính:</label>
                <input type="number" name="bankinh" value="<?php echo $_POST["bankinh"]; ?>">
                <span class="error-message"><?php echo $bankinhtang ?></span>
            </div>
    
            <div class="form-group">
                <label>Diện tích:</label>
                <input class="readonly-input" type="number" name="acreage" value="<?php echo $acreage ?>" readonly>
            </div>
            <input type="submit" value="Tính">
        </form>
    </div>
    

    
</body>
</html>