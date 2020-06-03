<?php 
//postされたデータを変数に格納
 $name = $_POST['name'];
 $mail = $_POST['mail'];
 $message = $_POST['message'];
 $h = date('Y/m/d/ H:i:s');
 //explodeする準備
 $c = ',';
 $str = $h.$c.$name.$c.$mail.$c.$message;
 //explodeを使って配列にする
 $strArr = explode(',', $str);
 //postされたデータを外部ファイルに書き込む
 $file = fopen("contactData/contact.txt","a");	// ファイル読み込み
 fwrite($file, $str."\r\n");//第一引数が書き込むファイル、第二引数が記述する内容「\r\n」はwindousとmacどちらでも改行される記述
 fclose($file);

?>





<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="css/style.css" rel="stylesheet">
  <link href="css/con.css" rel="stylesheet">

</head>
<body>

<?php 
include('header.php');
?>
  <div class='contact-header'>
      <div class="container">
          <div class="contact-header-area">
          <div class=><img src="imgs/contact.jpg" class="tama"></div>          
          </div>
      </div>
  </div>
<!-- 結果の表示 -->
  <div class="main-wrapper">
    <div class="container">
      <div class="main-area">
        <h2>Send your Message</h2>
      </div>
    </div>
  </div>

  <div class="form-wrapper">
      <div class="container">
          <div class="form-area">
            <form class='answerBox' action="contactw.php"  method='post'>
            <div class='formBox'>
              <p class='answer'>Date : <?=$strArr[0]?></p>
              <p class='answer'>Name : <?=$strArr[1]?></p>
              <p class='answer'>Mail : <?=$strArr[2]?></p>
              <p class='answer'>Message :<?=$strArr[3]?> </p>       
             </div>            
            </form>
            <div class="link">
            <div class="link"><a href="contactR.php">Send</a></div>              
              <div class="link"><a href="contact.php">Back</a></div>
            </div>
          </div>
      </div>
   </div>






   <?php 
include('footer.php');
?>

</body>
</html>
