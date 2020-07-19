<?php
    
    //Criptografando dados base64
    $texto = "Meu texto normal";
    $textoCriptografado = base64_encode($texto);

    echo "Texto criptografado: $textoCriptografado </br>" ;

    $textoDescriptografado = base64_decode($textoCriptografado);

    echo "Texto descriptografado: $textoDescriptografado</br>" ;
    echo "<hr>";



    // Criptografia com HASH - Criptografia de mão unica

    $senha = '123456';

    $options = ['cost' => 10,]; // quanto maior esse numero mais seguro fica a senha. dessa forma ele processa mais para gerar o hash
    $senhaCriptografada = password_hash($senha, PASSWORD_DEFAULT, $options); // criptografa senha

    echo "HASH criptografado: $senhaCriptografada";

    //Comparando senha gerada com hash com texto em hash
    if (password_verify($senha,$senhaCriptografada)) 
    {
        echo "<br>O texto criptografado e a mesma senha!<br>";    
    }
    else
    {
        echo "<br>Os texto são diferentes<br>";
    }
    echo "<hr>";

    // Criptografando com MD5

    $MeuTexto = "meu nome e arllan pablo";

    $MeuTextoEmMD5 = md5($MeuTexto);

    $MeuTextoEmSHA1 = sha1($MeuTexto);

    echo "Texto Original: $MeuTexto<br>";
    echo "Criptogrado com MD5: ". $MeuTextoEmMD5 ." <br>";
    echo "Criptografado com SHA1: ". $MeuTextoEmSHA1 ."<br>";


    if ($MeuTextoEmMD5 = $MeuTexto) //comparando string sem está criptografada em MD5 com string normal
    {
        echo "<br>O texto são o mesmo<br>";
    }
    else{
        echo "<br>Os texto não são similares mesmo<br>";
    }

    if ($MeuTextoEmSHA1 = $MeuTexto) // comparando string sem está criptografada em SHA1 com string normal
    {
        echo "<br>O texto são o mesmo<br>";
    }
    else{
        echo "<br>Os texto não são similares mesmo<br>";
    }

    echo '<hr>';


?>