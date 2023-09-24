<html>
  <head>
      <meta charset="utf-8">
      <style>
        $@font-face {
          font-family: homa;
          src:url(font/bhoma.ttf);
        }
      </style>
      <script>
        var selectedPic;
        var flag = true;
        function getCurrentPic(pic){
          if(flag){
            selectedPic = pic;
          }else{
            temp = pic.src;
            pic.src = selectedPic.src;
            selectedPic.src = temp;
          }
          flag = !flag;
        }
      </script>
  </head>
  <body bgcolor="#14213d" align="center">
    <div style="width:500px; height:550px; margin:auto; border:solid 1px black;
     border-radius:10px; padding-top:30px; background-color:#fca311;">
     <?php
        $box = array('','','','','','','','','');
        for($i = 0; $i <= 8; $i++){
          $picNumber = rand(1,9);
          while(array_search($picNumber,$box)){
            $picNumber = rand(1,9);
          }
          array_push($box,$picNumber);
      ?>
      <img src="img/<?=$picNumber?>.jpg" width="150" height="150" onclick="getCurrentPic(this)" />
      <?php } ?>
      <br><input type="button" style="font-family:homa;margin-top:15px;height:40px;width:100px;border-radius:30px;"
           value="بازی دوباره" onclick="window.location.reload();">
   </div>
  </body>
</html>
