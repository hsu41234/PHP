<meta charset="utf8">

<?php

    $Name=$_POST["Name"];
    echo "姓名:".$Name."<br/>";
    
    $ID=$_POST["ID"];
    echo "學號:".$ID."<br/>";

    $Gender=$_POST["Gender"];
    echo "性別:".$Gender."<br/>";

    $Birthday=$_POST["Birthday"];
    echo "出生日期:".$Birthday."<br/>";

    $PeopleNum=$_POST["PeopleNum"];
    echo "同行人數:".$PeopleNum."<br/>";

    $Time=$_POST["Time"];
    echo "活動當天到場時間:".$Time."<br/>";

    $Phone=$_POST["Phone"];
    echo "聯絡電話:".$Phone."<br/>";

    $Email=$_POST["Email"];
    echo "聯絡信箱:".$Email."<br/>";

    $Food=$_POST["Food"];
    echo "飲食習慣:".$Food."<br/>";

    //連接資料庫
    $link = @mysqli_connect(
        'localhost',
        'root',
        '12345',
        'imparty');
    
    //SQL語法
    $SQL = "INSERT INTO information(Name,ID,Gender,Birthday,PeopleNum,Time,Phone,Email,Food) VALUES('$Name','$ID','$Gender','$Birthday','$PeopleNum','$Time','$Phone','$Email','$Food')";

    //送出查詢
    if($result = mysqli_query($link, $SQL)){
        echo "<br/>新增成功";
    }
    echo "<br/><a href='index.php'>查看資料庫資料</a>";
    
?>