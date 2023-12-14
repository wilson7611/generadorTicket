function MNuevoUsuario(){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/usuario/FNuevoUsuario.php",
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

function RegUsuario(){
  let pass=document.getElementById("passUsuario").value
  let pass2=document.getElementById("passUsuario2").value

  if(pass==pass2){

    var formData= new FormData($("#FormRegUsuario")[0])

    $.ajax({
      type:"POST",
      url:"controlador/usuarioControlador.php?ctrRegUsuario",
      data:formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(data){

        console.log(data)
        if(data=="ok"){
          Swal.fire({
            icon: 'success',
            showConfirmButton: false,
            title: 'Usuario registrado',
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
  }else{
    document.getElementById("error-pass").innerHTML="Los campos de contraseña no coinciden"
  }
}

function MVerUsuario(id){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/usuario/MVerUsuario.php?id="+id,
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

function MEditUsuario(id){
  $("#modal-lg").modal("show")

  var obj=""
  $.ajax({
    type:"POST",
    url:"vista/usuario/FEditUsuario.php?id="+id,
    data:obj,
    success:function(data){
      $("#content-lg").html(data)
    }
  })
}

function EditUsuario(){
  let pass=document.getElementById("passUsuario").value
  let pass2=document.getElementById("passUsuario2").value

  if(pass==pass2){

    var formData= new FormData($("#FormEditUsuario")[0])

    $.ajax({
      type:"POST",
      url:"controlador/usuarioControlador.php?ctrEditUsuario",
      data:formData,
      cache:false,
      contentType:false,
      processData:false,
      success:function(data){

        if(data=="ok"){
          Swal.fire({
            icon: 'success',
            showConfirmButton: false,
            title: 'Usuario actualizado',
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