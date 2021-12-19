var btn_cargar = document.getElementById('listar_op'),
error_box= document.getElementById('error_listar_op'),
tabla=document.getElementById('tabla_listar_op'),
loader= document.getElementById('loader');

var mumeroOp,
referencia,
estampado,
fecha,
Hri,
Hrf,
descanso,
sam,
operarios,
unidades,
asignacion;

function cargarOp() {
   tabla.innerHTML='<tr><th>Op-numero</th><th>Referencia</th><th>Estampado</th><th>Fecha</th><th>Hr:I</th><th>Hr:F</th><th>Descanso</th><th>S.A.M</th><th>Operarios</th><th>Unidades</th><th>Edicion</th><th>Asignacion</th></tr>';
   
   var peticion=XMLHttpRequest();
   peticion.open('GET','datosOp.php');
   loader.classList.add('active');
   
   peticion.onload=function () {
       var datos =JSON.parse(peticion.responseText);
      if(datos.error){
          error_box.classList.add('active');
      }else{
          for (let i = 0; i < datos.length; i++) {
              var elemento = document.createElement('tr');
              
              elemento.innerHTML += ("<td class='text-info'>" + datos[i].op_num + "</td>") ;
              elemento.innerHTML += ("<td class='text-success'>" + datos[i].referencia_op + "</td>") ;
              elemento.innerHTML += ("<td class='text-warning'>" + datos[i].estampado_op + "</td>") ;
              elemento.innerHTML += ("<td>" + datos[i].date_op + "</td>") ;
              elemento.innerHTML += ("<td>" + datos[i].horae_op + "</td>") ;
              elemento.innerHTML += ("<td>" + datos[i].horas_op + "</td>") ;
              elemento.innerHTML += ("<td>" + datos[i].descanso_op + "</td>") ;
              elemento.innerHTML += ("<td class='text-danger'>" + datos[i].sam_op + "</td>") ;
              elemento.innerHTML += ("<td>" + datos[i].operarios_op + "</td>") ;
              elemento.innerHTML += ("<td>" + datos[i].unidades_op + "</td>") ;
              elemento.innerHTML += ("<td> <button class='btn btn-sm btn-success'data-toggle='modal' data-target='#modalAsignacion' onclick='Activar("+ datos[i].op_num +")'>asignar</button> </td>") ;
              elemento.innerHTML += ("<td>" + datos[i].asignacion + "</td>") ;
              tabla_listar_op.appendChild(elemento);
             
          }
      }
   }

   peticion.onreadystatechange = function () {
       if(peticion.readyState == 4 && peticion.status == 200){
           loader.classList.remove('active');
       }
   }
peticion.send();

}

function agregarUsuario(e) {
    e.preventDefault();
    numeroOp = $('#opSelect').val();
    asignacion =$('#selectUsuario').val();
   // date_op=$('#opDate').val();
    $.ajax({
        method: "POST",
        url: "insertarAsignacion.php",
        data: { numeroOp: numeroOp, asignacion: asignacion}
      })
        .done(function( msg ) {
            alert(msg);
            cargarOp();
            $('#modalAsignacion').modal('toggle'); 
        });
   
     
}

btn_cargar.addEventListener('click',function () {
    cargarOp();
});

formulario.addEventListener('submit',function (e){
    agregarUsuario(e);

    /* console.log(Op_numero);
    console.log($('#selectUsuario').val()); */
});

