$(document).ready(function () {
    var flag = true;	
    var url = 'http://localhost/BarbarProject/';
    /**
     *  HIDE 
     */ 
    $('#ca_error').hide();
    /**
     * Funções Click
     */
    $('#sidebarCollapse').on('click', function () {
	    $('#sidebar').toggleClass('active');
    });
    $('#logout').click(function(){
        alert('deslogado');
    });
    
    
    
    
    
 /************************* USUARIOIS ***********************************/   
  /**
   * LISTAR USUARIOS CADASTRADOS
   */ 
    $('#list-user').click(function(){                       
        $('#table-user').empty();
        $.ajax({
            method: 'POST',
            url: url+'Action/UsuarioAC.php', 
            data: {acao: 1}
        }).done(function(result){            
            $('#table tbody').html(result);
            alert('montar tabela');
            alert(result);
        }).fail(function(result){
          console.log(result);
          alert('erro ao dar select');
        });       
    });
    
    
    
 /***********   CABELELEIROS *******************************************/
    
    /*
     * Cadastro de Cabeleleiros
     */
    $('#inserir_ca').click(function(){
        if($("#ca_nome").val().length < 1){
            $("#ca_error").show("slide");
            $('#ca_nome').focus();
            flag = false;
            setTimeout(function(){
                $('#ca_error').hide("slide");
            },5000);
        }
        if(flag){
            $.ajax({
               method: "POST",
               url: url+"Action/CabeleleiroAC.php",
               data:{acao:0,nome: $('#ca_nome').val()}
            }).done(function(){
                $('#ca_nome').val('');
                alert('CADASTRO REALIZADO COM SUCESSO');
            }).fail(function(){
                alert('ERROR AO CADASTRAR CABELELEIRO');
            });
        }
    });
});