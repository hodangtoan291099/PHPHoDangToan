<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bai 3</title>
</head>
<link rel="stylesheet" href="../Css/style3.css">
<body>
<?php
    $num1=0;
    $result= 0;
    $num2=0;
    if(isset($_POST['firstNumber']) && isset($_POST['secondNumber'])){
       
        $operation = $_POST['operation'];
        $num1 = $_POST['firstNumber'];
        $num2 = $_POST['secondNumber'];
        if($operation == "Cộng"){
            $result = $num1+$num2;
        } 
        else if($operation == "Trừ"){
            $result = $num1-$num2;
        } 
        else if($operation == "Nhân"){
            $result = $num1*$num2;
        }
        else if($operation == "Chia"){
            $result = $num1/$num2;
        }
}	
	?>
    <div class="content">
        <h2 class="title"> <?php echo "Phép $operation Hai Số" ?></h2>
        <form align='center' action="../BaiTapForm/BaiTapFormPhepTinh2So.php" method="post">
            <div class="form-group">
                <label>Số thứ nhất: </label>
                <input type="text" name="firstNumber" value="<?php echo $num1; ?>">          
            </div>
            <div class="form-group">
                <label>Số thứ hai: </label>
                <input type="text" name="secondNumber" value="<?php echo $num2; ?>">
            </div>
            <div class="form-group">
                <label>Kết quả: </label>
                <input type="text" name="result" value="<?php echo $result; ?>">
            </div>
            <a href="javascript:window.history.back(-1);">Quay về trang trước</a>
</body>
</html>