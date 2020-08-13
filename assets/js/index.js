$('#criptografar').on("click",function(){

    if($('#text-criptografar').val().length > 0 && $('#chave-criptografar').val().length > 0)
    {
        if ($('#chave-criptografar').val().length == 16) 
        {
            $.ajax({
            type: 'GET',
            url: 'request.php',
            dataType: "json",
            data: {'chave': $('#chave-criptografar').val() , 'texto': $('#text-criptografar').val(), 'acao' : 'criptografar'},
            success: function (data) {
                $('#text-descriptografar').val(data[0]);
                $('#chave-descriptografar').val(data[1]);
                corBorda('#text-descriptografar');
            },
            error: function (data) {
                alert("Erro ao tentar se conectar!");
            }
            });    
        }
        else
        {
            alert("A chave tem que ter 16 caracteres!");
        }
        
    }
    else
    {
        alert("Verifique os campos em branco");
    }
    });

    $('#descriptografar').on("click",function(){
        
    if($('#text-descriptografar').val().length > 0 && $('#chave-descriptografar').val().length > 0)
    {
        if ($('#chave-descriptografar').val().length == 16) 
        {
            $.ajax({
            type: 'GET',
            url: 'request.php',
            dataType: "json",
            data: {'chave': $('#chave-descriptografar').val() , 'texto': $('#text-descriptografar').val(), 'acao' : 'descriptografar'},
            success: function (data) {
                if(data[0] == false)
                {
                    alert('As chaves de criptografia não são as mesmas!');
                } 
                else
                {
                    $('#text-criptografar').val(data[0]);
                    $('#chave-criptografar').val(data[1]);
                    corBorda('#text-criptografar');
                }
            },
            error: function (data) {
                alert("Erro ao tentar se conectar!");
            }
            });
        }
        else
        {
            alert("A chave tem que ter 16 caracteres!");
        }
    }
    else
    {
        alert("Verifique os campos em branco");
    }
    });

    function corBorda($elemento) //#text-criptografar
    {
        setTimeout(function(){ 
            $($elemento).css("border-color","green");
            $($elemento).css("border-width","6px");
         }, 100);

         setTimeout(function(){ 
            $($elemento).css("border-color","#ccc");
            $($elemento).css("border-width","1px");
         }, 2000);
    }