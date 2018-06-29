$(document).ready(function () {
    var flag = true;	
    var url = 'http://localhost/intranet/';
    $('#sidebarCollapse').on('click', function () {
	    $('#sidebar').toggleClass('active');
    });
    $('#logout').click(function(){
        alert('deslogado');
    });
    
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
               data:{nome: $('#ca_nome').val()}
            }).done(function(){
                
            }).fail(function(){
                
            });
        }
    });
});