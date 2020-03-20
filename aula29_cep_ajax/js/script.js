$(document).ready(function(){ //está pronto para uso
    $("#btnCadastrar").click(function(){
        //objeto literal

        var obj = { 
            nome : $("#nome").val(),
            sobrenome : $("#sobrenome").val()

        };
        // console.log(obj);
        //spResultado
        $.ajax({
            url: "UsuarioAction.php?req=1",
            type: "post",
            datatype: "TEXT",
            //contentType: "application/json" ,
            data: obj,
            beforeSend : function(){
                $("#spResultado").html("Processando...");
            },
            success : function(data){
                // console.log(data);
                if(data == 1){
                    $("#spResultado").css("color", "green");
                    $("#spResultado").html("Cadastrado...");

                }else{
                    $("#spResultado").css("color", "red");
                    $("#spResultado").html("Houve um erro ao cadastrar...");

                }
            },
            error : function(error){
                console.log(error);
            }
        });
    });

    $("#btnConsultar").click(function(){
        $.ajax({
            url: "UsuarioAction.php?req=2",
            type: "GET",
            datatype: "TEXT",
            data: {},
            success : function(data){
                // console.log(data);
                $("#bqResultado").html(data);
                var dt = data.split("|");

                // console.log(dt);
                $("#nome").val(dt[0].split(":")[1]);
                $("#sobrenome").val(dt[1].split(":")[1]);
    
            },
            error : function(error){
                console.log(error);
            }
        });
    });

    $("#txtCep").focusout(function(){
        if($("#txtCep").val().length >= 5 ){

            var cep = $("#txtCep").val().replace("-", "");
            var url = "http://cep.republicavirtual.com.br/web_cep.php?formato=javascript&cep=" + cep;
            $.ajax({
                url: url,
                type: "GET",
                datatype: "JSONP",
                data: {},
                success : function(data){
                    // console.log(data);
                    if(data != null){
                    $("#txtRua").val(data.logradouro);
                    $("#txtBairro").val(data.bairro);
                    $("#txtCidade").val(data.cidade);
                    }
        
                },
                error : function(error){
                    console.log(error);
                }
            });
        }
    });
});
