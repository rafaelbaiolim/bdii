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
        <section role="pacientes">
            <form action="" method="POST"> 
                <input type="hidden" name="requestPaciente"/>
                <button type="submit"> PACIENTE </button>
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
</html>