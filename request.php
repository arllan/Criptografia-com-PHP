<?php
    try 
    {
        
        require "classes/autoload.php"; // chama arquivo de autoload

        $requisicao = new requisicao();

        if ($requisicao->varURL('GET','chave')[0] == true and
            $requisicao->varURL('GET','texto')[0] == true and
            $requisicao->varURL('GET','acao')[0] == true ) 
        {
            $gerar = new criptografia();

            if ($requisicao->varURL('GET','acao')[1] == "criptografar") 
            {
                $cript =  $gerar->criptografar($requisicao->varURL('GET','texto')[1],$requisicao->varURL('GET','chave')[1]);  

                $saida = array($cript,$requisicao->varURL('GET','chave')[1]);

                echo json_encode($saida);
            }
            else
            {
                $cript = $gerar->descriptografar($requisicao->varURL('GET','texto')[1],$requisicao->varURL('GET','chave')[1]);
                $saida = array($cript,$requisicao->varURL('GET','chave')[1]);
                echo json_encode($saida);
            }
        }
        else
        {
            echo "Não chegou a requisição";
        }

        // $insert = new crud();
        // echo $insert->insert('luldsddssu','ludsdsdlu');

        // $select = new crud();
        // $select->select();

        // // foreach($select->select() as $dados)
        // // {
        // //   echo $dados['nome']  . $dados['email'] ; 
        // // }

        // $update = new crud();
        // $update->update('driele cccdsdsdsedsddsdfdfddssszerra araujo','talmfdfabrito@gmail.com', 318);


        // $delete = new crud();
        // $delete->delete(317);
        //echo $delete->retornoDafuncao(5);

    } 
    catch (PDOException $e) 
    {
        exit('Erro: ' . $e->getMessage());
    }
?>