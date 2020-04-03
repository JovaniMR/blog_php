<?php

function consultarCategorias ($conexion){

    $sql = "SELECT * FROM categorias ORDER BY id ASC";

    $consulta = mysqli_query($conexion,$sql); 
    $result = array();


    if (mysqli_num_rows($consulta) >=1 ) {
        $result = $consulta;
    }

    return $result;
}


function consultarEntradas($conexion){

    $sql = "SELECT u.nombre, c.nombre AS 'categoria', e.* FROM entradas e 
            INNER JOIN usuarios u ON u.id = e.usuario_id
            INNER JOIN categorias c ON c.id = e.categoria_id LIMIT 9";

    $consulta = mysqli_query($conexion,$sql);

    $result = array();
    if (mysqli_num_rows($consulta)>=1) {
        $result = $consulta;
    }

    return $result;
}

?>