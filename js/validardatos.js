function validarDatos(){

            if($("#serie").val() == ""){
                sweetAlert("Cuidado", "El campo del No serie esta vacio rellene por favor.", "error");
                $("#serie").focus();
                return false;
            }
            if($("#clave").val() == ""){
                sweetAlert("Cuidado", "El campo del Clave CT esta vacio rellene por favor.", "error");
                $("#clave").focus();
                return false;
            }
            if($("#escu").val() == ""){
                sweetAlert("Cuidado", "El campo del Escuela esta vacio rellene por favor.", "error");
                $("#escu").focus();
                return false;
            }
            if($("#loc").val() == ""){
                sweetAlert("Cuidado", "El campo del Localidad esta vacio rellene por favor.", "error");
                $("#loc").focus();
                return false;
            }
            if($("#mun").val() == ""){
                sweetAlert("Cuidado", "El campo del Municipio esta vacio rellene por favor.", "error");
                $("#mun").focus();
                return false;
            }
            if($("#nino").val() == ""){
                sweetAlert("Cuidado", "El campo del Nombre del Niñ@ esta vacio rellene por favor.", "error");
                $("#nino").focus();
                return false;
            }
            if($("#curp").val() == ""){
                sweetAlert("Cuidado", "El campo del CURP esta vacio rellene por favor.", "error");
                $("#curp").focus();
                return false;
            }
            if($("#boot").val() == ""){
                sweetAlert("Cuidado", "El campo del BOOT TIK esta vacio rellene por favor.", "error");
                $("#boot").focus();
                return false;
            }
            if($("#hard").val() == ""){
                sweetAlert("Cuidado", "El campo HARDWARE ID  esta vacio rellene por favor.", "error");
                $("#hard").focus();
                return false;
            }
            if($("#number").val() == ""){
                sweetAlert("Cuidado", "El campo PRIVISIONAL NUMBER esta vacio rellene por favor.", "error");
                $("#number").focus();
                return false;
            }
            if($("#nombre").val() == ""){
                sweetAlert("Cuidado", "El campo de Nombre completo del solicitante  esta vacio rellene por favor.", "error");
                $("#nombre").focus();
                return false;
            }
            

            if($("#cel").val() == ""){
                sweetAlert("Cuidado", "El campo Tel o Cel esta vacio por favor rellene por favor.", "error");
                $("#cel").focus();
                return false;
            }
            if($("#correo").val() == ""){
                sweetAlert("Cuidado", "El campo Correo Electronico esta vacio por favor rellene por favor.", "error");
                $("#correo").focus();
                return false;
            }

            return true;

           }