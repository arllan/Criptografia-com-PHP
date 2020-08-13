<?php
     /*   
          $sessao = new sessao();
          $sessao->setSessao('login','logado');
          echo $sessao->getSessao('login');
    */
    class sessao 
    {
       public function setSessao($varSessao,$conteudo)
       {
          if (session_status() !== PHP_SESSION_ACTIVE) 
          {
               session_start();
          }
            $_SESSION[$varSessao] = $conteudo ;
       } 

       public function getSessao($sessao)
       {
          if (session_status() !== PHP_SESSION_ACTIVE) 
          {
               session_start();
          }
           if (isset($_SESSION[$sessao])) 
           {
                return $_SESSION[$sessao];
           }
           else
           {
                return '300' ;
           }
       }

       public function finalizaSessao()
       {
          if (session_status() !== PHP_SESSION_ACTIVE) 
          {
               session_start();
          }
          session_unset();
          session_destroy();
       }    
    }  
?>