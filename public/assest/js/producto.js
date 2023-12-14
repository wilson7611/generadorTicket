function MNuevoProducto(){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/producto/FNuevoProducto.php",
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

function RegProducto(){

  var formData= new FormData($("#FormRegProducto")[0])

  $.ajax({
    type:"POST",
    url:"controlador/productoControlador.php?ctrRegProducto",
    data:formData,
    cache:false,
    contentType:false,
    processData:false,
    success:function(data){

      if(data=="ok"){
        Swal.fire({
          icon: 'success',
          showConfirmButton: false,
          title: 'Producto registrado',
          timer: 1000
        })
        setTimeout(function(){
          location.reload()
        },1200)
      }else{
        Swal.fire({
          icon: 'error',
          showConfirmButton: false,
          title: 'Error de registro!!!',
          timer: 1500
        })
      }
    }
  })

}

function MVerProducto(id){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/producto/MVerProducto.php?id="+id,
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

function MEditproducto(id){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/producto/FEditproducto.php?id="+id,
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

function Editproducto(){
  let pass=document.getElementById("passproducto").value
  let pass2=document.getElementById("passproducto2").value

  if(pass==pass2){

    var formData= new FormData($("#FormEditproducto")[0])

    $.ajax({
      type:"POST",
      url:"controlador/productoControlador.php?ctrEditproducto",
      data:formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(data){

        if(data=="ok"){
          Swal.fire({
            icon: 'success',
            showConfirmButton: false,
            title: 'producto actualizado',
            timer: 1000
          })
          setTimeout(function(){
            location.reload()
          },1200)
        }else{
          Swal.fire({
            icon: 'error',
            showConfirmButton: false,
            title: 'Error!!!',
            timer: 1500
          })
        }
      }
    })
  }else{
    document.getElementById("error-pass").innerHTML="Los campos de contraseña no coinciden"
  }
}

function MVProductoTienda(id){
  $("#modal-xl").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/producto/VProductoTienda.php?id="+id,
    data:obj,
    success:function(data){
      $("#content-xl").html(data)
    }
  })
}

function previsualizar(){
  let imagen=document.getElementById("imgProducto").files[0]

  if(imagen["type"]!="image/jpeg" && imagen["type"]!="image/png"){
    $(".imgProducto").val("");
    Swal.fire({
      icon: 'error',
      showConfirmButton: true,
      title: 'La foto debe estar en formato PNG o JPG'
    })
  }else if(imagen["size"]>10000000){
    $(".imgProducto").val("");
    Swal.fire({
      icon: 'error',
      showConfirmButton: true,
      title: 'La imagen no debe ser superior a 10MB'
    })
  }else{
    let datosImagen=new FileReader;
    datosImagen.readAsDataURL(imagen)

    $(datosImagen).on("load", function(event){
      var rutaImagen=event.target.result
      $(".previsualizar").attr("src", rutaImagen)
    })
  }

}

function AgregarCarrito(id){
  let idUsuario=document.getElementById("idUsuario").value
  var obj={
    idUsuario:idUsuario,
    idProducto:id
  }
  $.ajax({
    type:"POST",
    url:"controlador/productoControlador.php?ctrRegCarrito",
    data:obj,
    dataType:"json",
    success:function(data){
      console.log(data)
    }
  })

}