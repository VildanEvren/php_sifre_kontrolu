<form action="" method="POST">
�ifre Girin :  <input type="text" name="sifre"/>
<input type="submit" value="Kontrol Et"/>
</form>
<?php
if($_POST["sifre"])
{
 $sifre = $_POST["sifre"];
 $kontrol = "/\S*((?=\S{8,})(?=\S*[A-Z]))\S*/";


 if(preg_match($kontrol,$sifre))
 {  
  echo "�ifreniz uygun formatta.";
 }
  
 else
 {
  echo "<b> Hata : </b>�ifreniz uygun formatta de�il.";
 }
}
?>
