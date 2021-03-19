<?php
if (isset($_POST['text1']) && isset($_POST['text2'])&& isset($_POST['text3'])&& isset($_POST['text4'])) {


    $txt1=$_POST['text1'];
    $txt2=$_POST['text2'];
    $txt3=$_POST['text3'];
    $txt4=$_POST['text4'];

    if ($txt1>=0 && $txt1<=255  && $txt2>=0 && $txt2<=255  && $txt3>=0 && $txt3<=255  && $txt4>=0 && $txt4<=255) {

        if ($txt1>=1 && $txt1<=126) {
            echo "Classe A";
            echo "<br>";

        }


        if ($txt1>=128 && $txt1<=191) {
            echo "Classe B";
            echo "<br>";

        }


        if ($txt1>=192 && $txt1<=223) {
            echo "Classe C";
            echo "<br>";

        }

        if ($txt1>=224 && $txt1<=239) {
            echo "Classe D";
            echo "<br>";

        }

        if ($txt1>=240 && $txt1<=254) {
            echo "Classe E";
            echo "<br>";

   }
   if($txt1==127){
        echo "Endereço reservado a loopback ou localhost";
        echo "<br>";
        echo "IP Reservado/Inválido";
}
elseif($txt1==10){
 echo "IP Privado";
        echo "<br>";
    }
 elseif($txt1==172 && $txt2 >=16 && $txt2 <=31){
 echo "IP Privado";
        echo "<br>";
    }
  elseif($txt1==192 && $txt2==168){
     echo "IP Privado";
        echo "<br>";
    }
  else{
    echo "endereço publico";
    echo '<br>';
    }
}
}



