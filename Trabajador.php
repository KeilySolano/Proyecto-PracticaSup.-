﻿<!DOCTYPE>
<html>
<head>
	<title>Agregar Usuario</title>
	
</head>
<body>
	<form action="formulario.php" method="POST">
		Nombre:<input type="text" name="txtNombre">;
		Apellido:<input type="text" name="txtApellido">;
		Usuario:<input type="text" name="txtUsuario">;
		Contraseña:<input type="text" name="txtPassword">;	
        
        <form method="post" action="index.html">
                    <div class="controls">                        
                        <button type="submit" class="btn btn-default btn-block btn-custom">Agregar</button>
                    </div>                  
        </form>            
     
	</form>
	<table align="center" border=1 bgcolor="#FFFFFF">
                    <tr>
                        <td bgcolor="#777777">
                            <p>Nombre del producto</p>
                        </td>
                        <td bgcolor="#777777">
                            <p>Cantidad</p>
                        </td>
                        <td bgcolor="#777777">
                            <p>Precio</p>
                        </td>
                        <td bgcolor="#777777">
                            <p>Codigo</p>
                        </td>
                    </tr>
                    <?php
                         include('Conexion.php');
                         $con = new Conexion();
                        $query="SELECT * FROM `usuario` WHERE 1;";
                        $pro=$con->query($query);
                        $con->close();
                        $total=0;
                        
                        while($row=mysqli_fetch_assoc($pro))
                        {
                            echo "
                                <tr>
                                    <td>
                                        <p>".$row['Nombre']."</p>
                                    </td>
                                    <td>
                                        <p>".$row['Apellido']."</p>
                                    </td>
                                    <td>
                                        <p>".$row['Usuario']."</p>
                                    </td>
                                    <td>
                                        <p>".$row['Password']."</p>
                                    </td>
                                </tr>
                            ";
                        }  
                      ?>
</body>
</html>