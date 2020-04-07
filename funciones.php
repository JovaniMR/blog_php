<?php

// Consulta todas las categorias
function consultarCategorias ($conexion){

    $sql = "SELECT * FROM categorias ORDER BY id ASC LIMIT 7";

    $consulta = mysqli_query($conexion,$sql); 
    $result = array();


    if (mysqli_num_rows($consulta) >=1 ) {
        $result = $consulta;
    }

    return $result;
}

// Consulta  las entradas principales con limite de 6
function consultarEntradas($conexion){

    $sql = "SELECT u.nombre, c.nombre AS 'categoria', e.* FROM entradas e 
            INNER JOIN usuarios u ON u.id = e.usuario_id
            INNER JOIN categorias c ON c.id = e.categoria_id LIMIT 6";

    $consulta = mysqli_query($conexion,$sql);

    $result = array();
    if (mysqli_num_rows($consulta)>=1) {
        $result = $consulta;
    }

    return $result;
}

// Consulta todas las entradas
function consultarEntradasTotales($conexion){

    $sql = "SELECT u.nombre, c.nombre AS 'categoria', e.* FROM entradas e 
            INNER JOIN usuarios u ON u.id = e.usuario_id
            INNER JOIN categorias c ON c.id = e.categoria_id ";

    $consulta = mysqli_query($conexion,$sql);

    $result = array();
    if (mysqli_num_rows($consulta)>=1) {
        $result = $consulta;
    }

    return $result;
}

// Consulta las entradas por categoria
function consultarEntradasCategoria($conexion,$id){

    $sql = "SELECT u.nombre, c.nombre AS 'categoria', e.* FROM entradas e 
            INNER JOIN usuarios u ON u.id = e.usuario_id
            INNER JOIN categorias c ON c.id = e.categoria_id 
            WHERE c.id=$id";

    $consulta = mysqli_query($conexion,$sql);

    $result = array();
    if (mysqli_num_rows($consulta)!=0) {
        $result = $consulta;
    }

    return $result;
}

// Consulta los usuarios
function consultarUsuario($conexion,$id){
    
    $sql = "SELECT nombre, apellidos, email FROM usuarios WHERE id=$id";    
    $consulta= mysqli_query($conexion,$sql);

    $usuario=array();

    if (mysqli_num_rows($consulta)==1) {
        $usuario = $consulta;
    }

    return $usuario;
}

// Consulta usuarios para comparar el email en el login 
function consultarUsuarios($conexion,$email,$id){
    
    $sql = "SELECT email FROM usuarios WHERE email='$email' AND id != $id ";    
    $consulta= mysqli_query($conexion,$sql);

    $flag=true;

    if (mysqli_num_rows($consulta)!=0) {
        $flag=false;
    }

    return $flag;
}

// Consulta coincidencias de busqueda
function consultarBusqueda($conexion,$buscar){

    $sql = "SELECT u.nombre, c.nombre AS 'categoria', e.* FROM entradas e 
            INNER JOIN usuarios u ON u.id = e.usuario_id
            INNER JOIN categorias c ON c.id = e.categoria_id 
            WHERE e.titulo LIKE '%$buscar%' or e.descripcion LIKE '%$buscar%' ";

    $consulta = mysqli_query($conexion,$sql);

    $result = array();
    if (mysqli_num_rows($consulta)!=0) {
        $result = $consulta;
    }

    return $result;
}
?>