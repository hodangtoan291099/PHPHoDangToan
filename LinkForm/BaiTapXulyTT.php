<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bài tập 4</title>
</head>
<body>
<h3>Bạn Đã Đăng Nhập Thành Công, Dưới Đây Là Thông Tin Bạn Nhập</h3>
<?php
     if(isset($_POST["submit"]))
     {
        $name=$_POST["name"];
        echo "Họ tên: $name<br>";

        $address=$_POST["address"];
        echo "Địa chỉ: $address<br>";

        $phone=$_POST["phone"];
        echo "Số điện thoại: $phone<br>";

        $sex=$_POST["gender"];
        if($sex=="nam"){
            echo "Giới tính: Nam";
        }
        else echo "Giới tính: Nữ";
        echo "<br>";

        $world=$_POST["world"];
        if($world=="vn"){
            echo "Quốc tịch: Việt Nam";
        }
        else echo "Quốc tịch: Trung Quốc";

    echo "<br>";
    echo "Môn học: ";
    $php= isset($_POST["PHP,MYSQL"]);
    if($php) echo "PHP & MYSQL &nbsp;&nbsp;";
    $c= isset($_POST["C#"]); 
    if($c) echo "C# &nbsp;&nbsp;";  
    $xml= isset($_POST["XML"]);
    if($xml) echo "XML &nbsp;&nbsp;";   
    $python= isset($_POST["Python"]);
    if($python) echo"Python &nbsp;&nbsp;";

    echo "<br>";
    $ghichu=$_POST["comment"];
    echo "Ghi chú: $ghichu";
    echo "<br>";
}
    
?>
    <a href="javascript:window.history.back(-1);">Quay về trang trước</a>
    
</body>
</html>