<?php
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require '../../PHPMailer/src/Exception.php';//因PHPMailer跟sendmail.php在不同目錄，所以要先跳回上一層
require '../../PHPMailer/src/PHPMailer.php';
require '../../PHPMailer/src/SMTP.php';

$subject = $_POST["subject"];
$content = $_POST["content"];
$content = nl2br($content);

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = false;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'a1113358@mail.nuk.edu.tw';                     //SMTP username
    $mail->Password   = 'xsvwa lvmh kxom zjjy';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
    $mail->CharSet    = 'utf-8';
    //Recipients
    $mail->setFrom('a1113358@mail.nuk.edu.tw', 'Mailer');

    $link = @mysqli_connect( //加@->不要顯示錯誤訊息
                'localhost',  // MySQL主機名稱 
                'root',       // 使用者名稱 
                '12345',  // 密碼
                'PhP_SendLetter');  // 預設使用的資料庫名稱
    if(!$link)
        die("無法開啟資料庫!<br/>");
    else
        echo "資料庫開啟成功!";
    
    //SQL語法
    $SQL = "SELECT * FROM SendLetter";

    //送出查詢
    $result = mysqli_query($link, $SQL);

    //結果轉陣列
    while($row = mysqli_fetch_assoc($result)){
        
        $Name = $row["Name"];
        $Email = $row["Email"];
        $mail->addAddress($Email, $Name);     //Add a recipient
    }
    $mail->addReplyTo('a1113358@mail.nuk.edu.tw', 'Information');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $content;
    //$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
}

mysqli_close($link);

?>
