<?php
include('conexion.php');


      $name = trim($_POST['name']);//trim remueve los espacios del principio y del final
      $email = trim($_POST['email']);
      $password = trim($_POST['password']);
      $fechareg = date("d/m/y");//Date automaticamente me toma la fecha actual y y la registra

      $consulta = "INSERT INTO datos(nombre, email, contraseña, fecha_reg) VALUES ('$name','$email', '$password', '$fechareg')";

      //Esto valida si el usuario es repetido antes de registrarlo
      $verificar_usuario = mysqli_query($con, "SELECT * FROM datos WHERE email = '$email'");
      if (mysqli_num_rows($verificar_usuario) > 0) {
        echo '<script>
              alert ("El usuario ya existe");
              window.history.go(-1);//Funcion para devolvernos a la pagina anterior
             </script>';
            
       exit;
      }

      $resultado = mysqli_query($con,$consulta);
      if($resultado) {
        echo 'Registrado';
    
      }else{
      echo 'No registrado';
      }

?>