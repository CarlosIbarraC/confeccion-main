SELECT op_num,sam_op,referencia_op,estampado_op,asignacion,unidades_op,acumulado_op,rotas,SinConfeccion,segundas,noConforme
FROM registroop
INNER JOIN datosop
ON registroop.op_num=datosop.op_numero WHERE `date_op`= '2021-11-18'