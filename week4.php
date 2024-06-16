<html>
<head>
<meta charset="utf8">
</head>

<h2>
資管晚會報名表單
</h2>

<form action="week4result.php" method="post">

姓名：<input type="text" name="sname" value="">
<br/>
科系：<input type="text" name="sdepartment" value="">
<br/>
年級：
<input type="radio" name="sgrade" value="大一">一
<input type="radio" name="sgrade" value="大二">二
<input type="radio" name="sgrade" value="大三">三
<input type="radio" name="sgrade" value="大四">四
年級
<br/>
性別：
<input type="radio" name="Gender" value="男">男
<input type="radio" name="Gender" value="女">女
<br/>
Email：
<input type="email" name="Email" value="">
<br/>
請輸入衣服尺寸：
<select name="Size">
<option value="S">S
<option value="M">M
<option value="L">L
</select>
<br/>
<br/>
其他：
<textarea name="Comment" value="" rows="10" cols="50">

</textarea>
<br/>
<input type="hidden" name="Secret" value="I love u">
<br/>
<input type="submit" value="確認">
<input type="reset" value="刪除">
</form>
</html>