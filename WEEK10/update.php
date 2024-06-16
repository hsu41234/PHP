<meta charset="utf-8">

<?php
$No=$_GET["No"];

//連接資料庫
$link = @mysqli_connect(
    'localhost', //MySQL主機名稱
    'root', //使用者名稱
    '12345', //密碼
    'imparty'); //預設使用的資料庫名稱
    
//SQL語法
$SQL="SELECT * FROM information WHERE No='$No'";
if($result=mysqli_query($link,$SQL)){
    $row=mysqli_fetch_assoc($result);
    $Name=$row["Name"];
    $ID=$row["ID"];
    $Gender=$row["Gender"];
    $Birthday=$row["Birthday"];
    $PeopleNum=$row["PeopleNum"];
    $Time=$row["Time"];
    $Phone=$row["Phone"];
    $Email=$row["Email"];
    $Food=$row["Food"];
}
?>

<form action="updatecheck.php" method="post">

編號:<?php echo $No ?><input type="hidden" Name="No" value="<?php echo $No ?>"><br/>
姓名:<input type="text" name="Name" value="<?php echo $Name ?>"><br/>
學號:<input type="text" name="ID" value="<?php echo $ID ?>"><br/>
性別:<input type="text" name="Gender" value="<?php echo $Gender ?>"><br/>
生日:<input type="date" name="Birthday" value="<?php echo $Birthday ?>"><br/>
同行人數:<input type="number" name="PeopleNum" value="<?php echo $PeopleNum ?>"><br/>
時間:<input type="time" name="Time" value="<?php echo $Time ?>"><br/>
手機:<input type="text" name="Phone" value="<?php echo $Phone ?>"><br/>
信箱:<input type="text" name="Email" value="<?php echo $Email ?>"><br/>
飲食習慣:<input type="text" name="Food" value="<?php echo $Food ?>"><br/>
<input type="submit">

</form>