<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 3</title>
    <link rel="stylesheet" href="../Css/style3.css">
</head>
<body>
    <div class="content">
        <h2 class="title">PHÉP TÍNH TRÊN HAI SỐ</h2>
        <form align='center' action="../LinkForm/BaiTapFormPhepTinh2So-1.php" method="post">
            <div class="form-group">
                <label style="color: red;">Chọn phép tính:</label>
                <div class="form-control">
                    <input type="radio" name="operation" value="Cộng" <?php if (isset($_GET["operation"]) && $_GET["operation"] == "Cộng") echo "checked" ?>><span class="operation"> Cộng<span> &nbsp;
                </div>
                <div class="form-control">
                    <input type="radio" name="operation" value="Trừ" <?php if (isset($_GET["operation"]) && $_GET["operation"] == "Trừ") echo "checked" ?>><span class="operation"> Trừ</span> &nbsp;
                </div>
                <div class="form-control">
                    <input type="radio" name="operation" value="Nhân" <?php if (isset($_GET["operation"]) && $_GET["operation"] == "Nhân") echo "checked" ?>><span class="operation"> Nhân</span> &nbsp;
                </div>
                <div class="form-control">
                    <input type="radio" name="operation" value="Chia" <?php if (isset($_GET["operation"]) && $_GET["operation"] == "Chia") echo "checked" ?>><span class="operation"> Chia</span>
                </div>
            </div>
            <div class="form-group">
                <label>Số thứ nhất: </label>
                <input type="text" name="firstNumber" value="<?php if (isset($_GET["firstNumber"])) echo $_GET["firstNumber"]; ?>">
                <p style="color: red;"><?php if (isset($_GET["firstNumberErr"])) echo $_GET["firstNumberErr"]; ?></p>
            </div>
            <div class="form-group">
                <label>Số thứ hai: </label>
                <input type="text" name="secondNumber" value="<?php if (isset($_GET["secondNumber"])) echo $_GET["secondNumber"]; ?>">
                <p style="color: red"><?php if (isset($_GET["secondNumberErr"])) echo $_GET["secondNumberErr"]; ?></p>
            </div>
            <input type="submit" name="submit" value="Tính">
        </form>
        
    </div>
</body>
</html>