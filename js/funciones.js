

function  fechaControl(){   
   const hoy = new Date();
   const fecha =  $('#fechaOp').val();
   var dia =  hoy.getDate();
   var mes = hoy.getMonth()+1;
   var n;
   var r;
   if (dia<10){
     n = "0"+dia.toString();
   }else{
      n=dia;
   }  
   if (mes<10){
    r = "0"+mes.toString();
  }else{
     r=mes;
  }  
   const hoyFormato=hoy.getFullYear()+"-"+(r)+"-"+n;
   console.log(fecha);
   console.log(hoyFormato);
    if(fecha!=""){
    if(fecha<hoyFormato){
        alert("Fuera de fecha");
        $('#fechaOp').val("");
    }else{
        console.log("fecha ok");
    }}
    
}


    function ultimaOp() {

        $.ajax(
            'traerultimaOp.php',
            {
                success: function(data) {
                  console.log(data);
                },
                error: function() {
                  alert('There was some error performing the AJAX call!');
                }
             }
          );

    }

    
    function agregarOP(supervisor) {      
     
    
      $.ajax({
          method: "POST",
          url: "insertarTablero.php",
          data: { supervisor: supervisor}
        })
          .done(function( msg ) {
             
              var tableroOP=msg['0'].op_num;             
              var referencia=msg['0'].referencia_op;
              var unidades=msg['0'].unidades_op;
              var estampado=msg['0'].estampado_op;
              var operarios=msg['0'].operarios_op;
              var asignacion=msg['0'].asignacion;
              var n=  asignacion.charAt(asignacion.length-1);
              var sam=msg['0'].sam_op;
              var horae=msg['0'].horae_op;
              horae=horae.slice(0,5);
              var horas=msg['0'].horas_op;
              horas=horas.slice(0,5);
              var horaE=msg['0'].horae_op;
              horaE='2021-10-16'+" "+horaE;              
              var horaS=msg['0'].horas_op;
              horaS='2021-10-16'+" "+horaS;
              var descanso=msg['0'].descanso_op;
              descanso=descanso.substr(-2);
              descanso=parseInt(descanso);
              const dateTimeE = new Date(horaE).getTime();
              const dateTimeS = new Date(horaS).getTime();
              const timestampE = Math.floor(dateTimeE / 1000);
              const timestampS = Math.floor(dateTimeS / 1000);
              var diferencia=timestampS-timestampE;             
              var minT=(diferencia/60-descanso);                
              var TxExp=minT;
              var uxHora=(unidades/minT*60).toFixed();
              var MxExp=Math.floor(minT/operarios);
              $('#tablero'+n+'-OP').text(tableroOP);             
              $('#Referencia'+n).text(referencia);
              $('#Estampado'+n).text(estampado);
              $('#Unidades'+n).text(unidades);
              $('#Sam'+n).text(sam);
              $('#TxExp'+n).text(TxExp);
              $('#UxHora'+n).text(uxHora);
              $('#MxExp'+n).text(MxExp);
              $('#horaI'+n).text(horae);
              $('#horaS'+n).text(horas);
              $('#descanso'+n).text(descanso+" min");
              $('#operarios'+n).text(operarios );
              $('#Usuario'+n).text(asignacion );         
             
             
          });    
       
  } 
var contar=[];
var largo=0;
 function llamarChat(parametro) {
     
  $.ajax({
    method: "POST",
    url: "llenarChat.php",
    data: {     
      parametro:parametro     
    }
  })
  .done(function (msg) {
    if(largo!=msg.length){

    for (var i = 0; i < msg.length; i++) {

      console.log(msg[i].numeroOpChat + ' ' + msg[i].mensajeChat);            
      contar.push([msg[i].horaChat +" -> "+msg[i].usuarioChat+" - "+ msg[i].mensajeChat]+"\n");            
       $('#chatTablero').html(contar);
       $('#chatTablero').css({"color":"#F999EC"});
       $("#chat").val(" "); 
       var altura = $("#chatTablero").prop("scrollHeight");
       $("#chatTablero").scrollTop(altura);
        }
      }
      largo=msg.length;
  });
 } 
 

 
  