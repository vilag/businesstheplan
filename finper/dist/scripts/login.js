function init()
{

   // alert("entra");
  //document.getElementById("form_iniciar").style.display = "block";
  //document.getElementById("form_registrar").style.display = "none";
  document.getElementById("form_verif").style.display = "none";

}


function login()
{
    //alert("entra");

    var logina = $("#logina").val();
    var clavea = $("#clavea").val();


         $.post("ajax/usuario.php?op=verificar",
            {"logina":logina,"clavea":clavea},
            function(data)
        {
            data = JSON.parse(data);

           //alert(data);

            if (data==null) {

                alert("Los datos ingresados no estan asociados a un usuario activo");

            }else{

               var idusuario = data.idusuario;
               var code_verif_valid = data.code_verif_valid;
               //alert(code_verif);

               if (code_verif_valid==0) {

                    document.getElementById("form_iniciar").style.display = "none";
                    document.getElementById("form_registrar").style.display = "none";
                    document.getElementById("form_verif").style.display = "block";

                    $("#idusuario_prereg").val(idusuario);
               }

               if (code_verif_valid>0) {

                    $(location).attr("href","index.php");

               }
            }

        });
}

function abrir_reg()
{
    document.getElementById("form_iniciar").style.display = "none";
    document.getElementById("form_registrar").style.display = "block";
    document.getElementById("form_verif").style.display = "none";
    document.getElementById("eti_pass").style.display = "none";
    document.getElementById("eti_obl").style.display = "none";
}

function abrir_ini()
{
    document.getElementById("form_iniciar").style.display = "block";
    document.getElementById("form_registrar").style.display = "none";
    document.getElementById("form_verif").style.display = "none";
}

function guardar_usuario()
{
    var nombre = $("#nombre_reg").val();
    var apellidop_reg = $("#apellidop_reg").val();
    var apellidom_reg = $("#apellidom_reg").val();
    var correo_reg = $("#correo_reg").val();
    var pass_reg = $("#pass_reg").val();
    var pass_reg2 = $("#pass_reg2").val();

    if (nombre!="") {
        $('#nombre_reg').removeClass("campo_obligatorio");
            
    }else{
        $('#nombre_reg').addClass("campo_obligatorio");
        
    }

    if (correo_reg!="") {
        $('#correo_reg').removeClass("campo_obligatorio");
            
    }else{
        $('#correo_reg').addClass("campo_obligatorio");
        
    }

    if (pass_reg!="") {
        $('#pass_reg').removeClass("campo_obligatorio");
             
    }else{
        $('#pass_reg').addClass("campo_obligatorio");
       
    }

    if (pass_reg2!="") {
        $('#pass_reg2').removeClass("campo_obligatorio");
            
    }else{
        $('#pass_reg2').addClass("campo_obligatorio");
        
    }


    if (nombre!="" && correo_reg!="" && pass_reg!="" && pass_reg2!="") {

        document.getElementById("eti_obl").style.display = "none"; 

        if (pass_reg==pass_reg2) {
            $('#pass_reg').removeClass("campo_obligatorio");
            $('#pass_reg2').removeClass("campo_obligatorio");
            document.getElementById("eti_pass").style.display = "none";

            var YEAR=moment().format('YYYY');
            var MONTH=moment().format('MM');
            var DAY=moment().format('DD');
            var HORA=moment().format('HH');
            var MIN=moment().format('mm');
            var SEG=moment().format('ss');

            var code_verif = HORA+MIN+SEG;

            $.post("ajax/index.php?op=guardar_usuario",{nombre:nombre,apellidop_reg:apellidop_reg,apellidom_reg:apellidom_reg,correo_reg:correo_reg,pass_reg:pass_reg,code_verif:code_verif},function(data, status)
            {
                data = JSON.parse(data);

                $(location).attr("href","confirm.php");
               // $(location).attr("href","PHPMailer/send.php");

                document.getElementById("form_iniciar").style.display = "none";
                document.getElementById("form_registrar").style.display = "none";
                document.getElementById("form_verif").style.display = "block";
            }); 


            
        }else{

            $('#pass_reg').addClass("campo_obligatorio");
            $('#pass_reg2').addClass("campo_obligatorio");
            document.getElementById("eti_pass").style.display = "block";
            
        }

    }else{
        document.getElementById("eti_obl").style.display = "block"; 
    }
   
}

function enviar_verif()
{
    var code_verif_input = $("#code_verif_input").val();
    var idusuario_prereg = $("#idusuario_prereg").val();

    $.post("ajax/index.php?op=enviar_verif",{idusuario_prereg:idusuario_prereg},function(data, status)
    {
        data = JSON.parse(data);

        var code_verif = data.code_verif;

        if (code_verif==code_verif_input) {

            $.post("ajax/index.php?op=update_valid",{idusuario_prereg:idusuario_prereg,code_verif_input:code_verif_input},function(data, status)
            {
            data = JSON.parse(data);

                //alert("codigo correcto");
                $(location).attr("href","index.php");

            });
          
        }else{
            alert("Codigo incorrecto, verifique y vuelva a intentar");
        }

        

    });
}









init();
