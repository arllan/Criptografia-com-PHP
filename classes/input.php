<?php
    class input 
    {
        public function hora() 
        {
            $timezone = new DateTimeZone('America/Recife'); // define o fuso do local
            $agora = new DateTime('now', $timezone); 
            $hora = $agora->format("H:i:s");
            return $hora;
        }

        // public function calculoHora($horaValidar)
        // {
        //     $hora = '14:31:23';

        //     echo $parte = substr($hora,0 , 3);
        // }

        public function criptografar($textoSerCriptografado, $chave = "AnYlOpHgFbJgrkeR" ) // a chave deve ter no minimo 16bit
        {
            $algoritmo = "AES128"; // padrão da criptografia
            //$chave = "AnYlOpHgFbJgrkeR"; // AnYlOpHgFbJgrkeR
            $mensagem = openssl_encrypt($textoSerCriptografado, $algoritmo, $chave, OPENSSL_RAW_DATA, $chave);
            return base64_encode($mensagem); 
        }

        public function descriptografar($textoSerDescriptografado, $chave = "AnYlOpHgFbJgrkeR")
        {
            $algoritimo = "AES128";
            //$chave = "AnYlOpHgFbJgrkeR";
            $mensagem = openssl_decrypt(base64_decode($textoSerDescriptografado), $algoritimo, $chave, OPENSSL_RAW_DATA, $chave);
            return $mensagem ;
        } 
    }
    $texto = new input();
    echo $textoCriptografado = $texto->criptografar($texto->hora(),'AnYlOpHgFbJgrlop');
    echo "<br>";
    echo $texto->descriptografar($textoCriptografado, 'AnYlOpHgFbJgrlop');
    echo '<br>';
    
    $horaServidor = '15:24:25';
    $texto = new input();
    $time = $texto->hora(); // entrada da hora do formulario

    echo $hora = substr($time,0,2);
    echo '<br>';
    echo $minuto = substr($time,3,2);
    echo '<br>';
    echo $segundo = substr($time,6,2);
    echo "<br>";

    function mesclarHora($time)
    {
        if (strlen($time) == 8)
        {
            $mesclando = array(
                substr($time,0,2),
                substr($time,3,2),
                substr($time,6,2)
            );
            return $mesclando;
        }
    }


    echo mesclarHora('14:34:25')[0];
    echo "<br>";
    echo mesclarHora('14:34:25')[1];
    echo "<br>";
    echo mesclarHora('14:34:25')[2];
    
    mesclarHora($texto->hora());

    echo "<br>";
    echo "...............................";
    echo '<br>';
    echo mesclarHora('14:34:25')[0] ;
    echo '<br>';
    echo mesclarHora($texto->hora())[0];
    echo '<br>';
    echo "...............................";
    echo "<br>";

    if (mesclarHora('14:34:25')[0] == mesclarHora($texto->hora())[0]) 
    {
        if (mesclarHora('14:34:25')[1] == mesclarHora($texto->hora())[1]) 
        {
            # code...
        }
    }
    else
    {
        echo "Não são as mesmas";
    }








?>