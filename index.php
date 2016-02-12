<?php
include_once '/Utils/globals.php';
include_once './__partials/paciente_controller.php';
include_once './__partials/requisicao_controller.php';
include_once './__partials/resultado_exame_controller.php';
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <title>Trabalho BDII</title>


    </head>
    <body>
<!--        <section role="pacientes">
            <form action="" method="POST"> 
                <input type="hidden" name="requestPaciente"/>
                <button type="submit"> PACIENTE </button>
            </form>
        </section>-->
        <section role="pacientes_buscar">
            <form action="" method="POST"> 
                <input type="hidden" name="buscar"/>
                ID:<input type="text" name="codPaciente"/>
                <button type="submit"> BUSCAR PACIENTE </button>
            </form>
        </section>

        <section role="pacientes_update">
            <form action="" method="POST"> 
                <input type="hidden" name="requestPacienteUpdate"/>
                CIDADE:<input type="text"  name="cidade2"/>
                <button type="submit"> MAKE UPDATE </button>
            </form>
        </section>

        <section role="pacientes_update">
            <form action="" method="POST"> 
                <input type="hidden" name="requestPacienteUpdatePartial"/>
               CIDADE:<input type="text" id="cidade" name="cidade"/>
                <button type="submit" > MAKE UPDATE PARTIAL </button>
            </form>
        </section>


        <section role="requisicoes">
            <form action="" method="POST"> 
                <input type="hidden" name="requestRequisicao"/>
                <button type="submit"> REQUISICAO </button>
            </form>
        </section>

        <section role="requisicoes">
            <form action="" method="POST"> 
                <input type="hidden" name="requestResultadoExame"/>
                <button type="submit"> RESULTADO_EXAME </button>
            </form>
        </section>


    </body>
    <footer>
        <script>
            var count = 50;
            function doStuffwTimeout() {
                count--;
                setTimeout(function () {
                    if(count === 0){
                        return;
                    }
                    var xhttp = new XMLHttpRequest();
                    xhttp.open("POST", "./__partials/paciente_controller.php", true);
                    xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                    var cidade = document.getElementById("cidade").value;
                    xhttp.send("cidade=" + cidade + "&requestPacienteUpdatePartial=true");
                    doStuffwTimeout();
                    
                },1);
            }

            function sendData() {
                doStuffwTimeout();
            }
        </script>
    </footer>
</html>