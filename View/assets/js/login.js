$(document).ready(function(){
    var url = 'http://localhost/BarbarProject/';
    //var url = 'http://localhost/intranet/';
    var flag = true;	
    // HIDE
    $('#email_error1').hide();
    $('#email_error2').hide();
    $('#pass_error1').hide();
    // LOGIN
    function validateEmail($email){
            var emailFilter=/^.+@.+\..{2,}$/;
            var illegalChars= /[\(\)\<\>\,\;\:\\\/\"\[\]]/;
            // condição
            if(!(emailFilter.test($email))||$email.match(illegalChars)){			
                    $('#email_error2').show("slide");
                    $('#email')	.focus();
                    flag = false;
            setTimeout(function(){
                    $('#email_error2').hide("slide");	
            },5000);

            } 		
    }
 	
    $('#autenticar').click(function(){
            validateEmail($("#email").val());
            if($("#password").val().length < 1){
                    $("#pass_error1").show("slide");
                    $('#password').focus();
                    flag = false;
                    setTimeout(function(){
                            $('#pass_error1').hide("slide");
                    },5000);
            }
            if(flag){
                $.ajax({
                        method: "POST",
                        url: url+"Action/UsuarioAC.php",
                        data:{acao: 0,usuario:$("#email").val(), senha:$("#password").val()}
                }).done(function(){                        
                        location.href = url+"View/index.php";
                }).fail(function(){                
                });
        }

    });
    
    
    

});