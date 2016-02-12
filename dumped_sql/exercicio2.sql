/*para cada tipo de exame recupere o código do exame, o código da seguradora e o
total de um determinado tipo de exame realizado no mês, apenas exames
requisitados por pacientes do sexo masculino (código “1”)*/
/*código do exame --> resultado_exame 
codigo seguradora --> paciente
total do tipo de exame realizado no mes, 
pacientes masculinos sexo, código = 1 */


/*para cada paciente do sexo feminino (código “2”), residente em cidade diferente de
“Maringá”, recupere o código do paciente, o nome do paciente, a data de
nascimento, código da seguradora, código do grupo, cidade e quantidade de exames
realizados pelo paciente.*/ 
/*
cod_paciente, data_nascimento, cod_seguradora, cod_grupo, quantidade de exames do cliente cidade, paciente diferente de mgá
pacientes masculinos sexo, código = 1 */
SELECT paciente.num_paciente, paciente.nome_paciente,paciente.data_nascimento, paciente.cod_seguradora, paciente.cidade, count(requisicao.numero_paciente)
FROM paciente JOIN requisicao on paciente.num_paciente = requisicao.numero_paciente
WHERE (paciente.cidade <> 'Maringá') and (paciente.sexo = 2);
