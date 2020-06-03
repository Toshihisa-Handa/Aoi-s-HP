



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
        <div class=><img src="imgs/result.jpg" class="tama"></div>          
          </div>
      </div>
  </div>
<!-- 結果の表示 -->
<div class="main-wrapper">
    <div class="container">
      <div class="main-area">
        <h2>Histry Log</h2>
      </div>
    </div>
  </div>

  <div class="form-wrapper">
      <div class="container">
          <div class="form-area">
            <form action="contactw.php"  method='post'>
            <div class='formBox formR'>
          
          
             <?php 
                //ファイルを変数に格納
                $filename = 'contactData/contact.txt';

                //fopenでファイルを開く
                $fp = fopen($filename, 'r');

                // whileで行末までループ処理
                while (!feof($fp)) {
                
                  // fgetsでファイルを読み込み、変数に格納
                  $txt = fgets($fp);
                
                  // ファイルを読み込んだ変数を出力
                  $strArr = explode(',', $txt);
                  echo 'ーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーーー<br>';
   
                  echo $h.'<br>';
                  echo 'Date'.$strArr[0].'<br>';
                  echo 'Name：'.$strArr[1].'<br>';
                  echo 'Mail：'.$strArr[2].'<br>';
                  echo 'Message：'.$strArr[3].'<br>';
                  echo '<br>';
              
                }
                // fcloseでファイルを閉じる
                fclose($fp);



                ?>

            
             </div>
            </form>
          </div>
      </div>
   </div>








   <?php 
include('footer.php');
?>
</body>
</html>

