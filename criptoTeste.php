<?php
$coxinha = "coxinha de frango com catupiry";
   
   echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>
      
        ";
   
   echo "<body style='background-repeat:no-repeat; background-size:100%;' background='g.jpg'>";
   
   echo "<h1 style='text-align:center; color:#F00249; background-color: rgba(0, 0, 0, 1);'>Teste Criptografia</h1>a";
    
   echo "<p style='text-align:center; color:white; font-size:20px; background-color: rgba(0, 0, 0, 0.8);'>A $coxinha com MD5 fica : ".md5($coxinha)."</p>";
   echo "<BR>";
   
   echo "<p style='text-align:center; color:white; font-size:20px; background-color: rgba(0, 0, 0, 0.8);'>A $coxinha com SHA1 fica : ".sha1($coxinha)."</p>";
   echo "<BR>";
   
   echo "<p style='text-align:center; color:white; font-size:20px; background-color: rgba(0, 0, 0, 0.8);'>A $coxinha com BASE64_ENCONDE fica : ".base64_encode($coxinha)."</p> ";
   echo "<BR>";
   
   echo "<p style='text-align:center; color:white; font-size:20px; background-color: rgba(0, 0, 0, 0.8);'>A $coxinha com MD5 fica : ".hash('haval256,5',$coxinha)."</p> ";
   echo "<BR>";
   
   echo "<p style='text-align:center; color:white; font-size:20px; background-color: rgba(0, 0, 0, 0.8);'>A $coxinha com CRYPT fica : ".crypt('SAD',$coxinha)."</p> ";
   

?>