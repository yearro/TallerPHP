$(document).ready(function(){
	llenarTabla();
  $(document).on('click', 'a[class|="hiperef"]', function(){
      $.ajax({
        type:'delete',
        data: {id:$(this).attr("href")},
        url:'controlador.php',
        dataType: "json",
        success: function(data){
          if (data.suceso){
            alert("Producto eliminado");
            llenarTabla();
          }
          else{
            alert("Producto no eliminado");
          }
        }
      });
    return false;
  });

  $(document).on('click', 'a[class|="hiperefedita"]', function(){
    indice = $(this).attr("href");
    $.ajax({
      type:'get',
      url: "controlador.php",
      data: {devuelve:"producto",id:indice},
      async: false,
      cache: false,
      dataType: "json",
      success: function(data){
        try{
          $('#registro').attr("value",indice);
          $("#nombre").val(data.nombre);
          $("#proveedor").val(data.proveedor);
          $("#precio").val(data.precio);
          $("#stock").val(data.stock);
        }
        catch(errMsg){
          alert("Imposible recuperar información del producto");
        }
      }
    });
    return false;
  });

	$('#formProducto').submit(function(){
		tipo = ($("#registro").val() == 0)?'post':'put';
		$.ajax({
			type:tipo,
	        data: {id:$("#registro").val(),nombreProd:$("#nombre").val(),nombreProv:$("#proveedor").val(),precioPro:$("#precio").val(),stockPro:$("#stock").val()},
	        url:'controlador.php',
	        dataType: "json",
	        success: function(data){
	        	if (data.suceso){
	            	alert(data.mensaje);
	            	$("#formProducto")[0].reset();
	            	llenarTabla();
	            	$('#registro').attr("value",0);
	            }
	            else{
	            	alert(data.mensaje);
	            }
	        }
	    });
		return false;
	});
});

function llenarTabla(){
  $("#productos tbody").remove();
  $.ajax({
    type:'get',
    url: "controlador.php",
    data: {devuelve:"productos"},
    async: false,
    cache: false,
    success: function(data){
      try{
        $('#productos').append('<tbody></tbody>');
        $.each(data.productos, function(i,producto){
          var tblRow =
            "<tr>"
            +"<td>"+producto.id+"</td>"
            +"<td>"+producto.nombre+"</td>"
            +"<td>"+producto.proveedor+"</td>"
            +"<td>"+producto.precio+"</td>"
            +"<td>"+producto.stock+"</td>"
            +"<td><a href='"+producto.id+"' class='hiperef'>Eliminar</a>"
            +" <a href='"+producto.id+"' class='hiperefedita'>Editar</a></td>"
            +"</tr>";
          $("#productos tbody").append(tblRow);
        });
      }
      catch(errMsg){
        alert("No existen productos registrados");
      }
    }
  });
}