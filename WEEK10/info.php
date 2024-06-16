<html>
<head>
<meta charset="utf8">

<style>
  body {
    background-color: #ADD8E6;
    font-family: "標楷體", "KaiTi", serif;
  }
</style>

</head>

<center>
  <h1 style="font-size: 40px;">國立高雄大學資訊管理學系晚會報名表</h1>
</center>

<center>
  <h2 style="font-size: 30px;">晚會時間:2024/05/20 18:00~21:00</h2>
</center>

<center>
<form action="result.php" method="post">
    姓名:
    <input type="text" name="Name" value="" required><br/>
    學號:
    <input type="text" name="ID" value="" required><br/>
    性別:
    <input type="radio" name="Gender" value="男">男
    <input type="radio" name="Gender" value="女">女<br/>
    出生日期:
    <input type="date" name="Birthday" value=""><br/> 
    同行人數:
    <input type="number" name="PeopleNum" value="" min="0"><br/>
    活動當天到場時間:
    <input type="time" name="Time" value=""><br/>
    聯絡電話:
    <input type="text" name="Phone" value="" required><br/>
    聯絡信箱:
    <input type="text" name="Email" value="" required><br/>
    飲食習慣:
    <input type="text" name="Food" value="" required><br/>

<br/>
<input type="submit" style="font-size: 25px;" value="報名">
<input type="reset" style="font-size: 25px;" value="清除">

</center>

</form>

</html>