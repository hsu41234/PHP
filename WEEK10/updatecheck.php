<meta charset="utf-8">

<?php 

$No=$_POST["No"];
$Name=$_POST["Name"];
$ID=$_POST["ID"];
$Gender=$_POST["Gender"];
$Birthday=$_POST["Birthday"];
$PeopleNum=$_POST["PeopleNum"];
$Time=$_POST["Time"];
$Phone=$_POST["Phone"];
$Email=$_POST["Email"];
$Food=$_POST["Food"];

//連接資料庫
$link = @mysqli_connect(
    'localhost', //MySQL主機名稱
    'root', //使用者名稱
    '12345', //密碼
    'imparty'); //預設使用的資料庫名稱
    
//SQL語法
$SQL="UPDATE information SET Name='$Name', ID='$ID', Gender='$Gender',Birthday='$Birthday', PeopleNum='$PeopleNum',Time='$Time', Phone='$Phone', Email='$Email' ,Food='$Food'  WHERE No='$No'";
if($result=mysqli_query($link,$SQL)){
    echo "更新成功";
}
echo "<br/><a href='index.php'>查看資料庫資料</a>"; 


?>