<?php 
//Incluímos inicialmente la conexión a la base de datos
require "../config/Conexion.php";

Class Index
{
	//Implementamos nuestro constructor
	public function __construct()
	{

	}

	

	//Función para verificar el acceso al sistema
	public function listar_gastos_cat($idusuario,$idcategoria)
    {
    	$sql="SELECT

    	a.idgastos,
    	a.idcategoria,
    	a.concepto,
    	a.cantidad,
    	a.fecha_hora,
    	(SELECT nombre FROM a_tbl_categorias WHERE idcategoria=a.idcategoria) as nom_categoria

    	FROM a_tbl_gastos a WHERE a.idusuario='$idusuario' AND a.idcategoria='$idcategoria' ORDER BY a.fecha_hora DESC"; 
    	return ejecutarConsulta($sql);  
    }

    public function listar_gastos($idusuario)
    {
        $sql="SELECT

        a.idgastos,
        a.idcategoria,
        a.concepto,
        a.cantidad,
        a.fecha_hora,
        (SELECT nombre FROM a_tbl_categorias WHERE idcategoria=a.idcategoria) as nom_categoria

        FROM a_tbl_gastos a WHERE idusuario='$idusuario' ORDER BY fecha_hora DESC"; 
        return ejecutarConsulta($sql);  
    }

    public function listar_categorias($idusuario)
    {
    	$sql="SELECT

        a.idcategoria,
        a.nombre,
        a.idusuario,
        a.imagen,
        (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria) as sum_categoria

        FROM a_tbl_categorias a WHERE a.idusuario='$idusuario' ORDER BY (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria) DESC"; 
    	return ejecutarConsulta($sql);  
    }

    public function listar_categorias_next($idusuario,$fecha_hoy,$valor_tipo)
    {

        if ($valor_tipo==1) {

             $sql="SELECT

            a.idcategoria,
            a.nombre,
            a.idusuario,
            a.imagen,
            (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria AND DATE(fecha_hora)='$fecha_hoy') as sum_categoria

            FROM a_tbl_categorias a WHERE a.idusuario='$idusuario' ORDER BY (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria) DESC"; 
            return ejecutarConsulta($sql);

            // code...
        }elseif ($valor_tipo==2) {

            $sql="SELECT

            a.idcategoria,
            a.nombre,
            a.idusuario,
            a.imagen,
            (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria AND MONTH(fecha_hora)=MONTH('$fecha_hoy')) as sum_categoria

            FROM a_tbl_categorias a WHERE a.idusuario='$idusuario' ORDER BY (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria) DESC"; 
            return ejecutarConsulta($sql);
            // code...
        }elseif ($valor_tipo==3) {

            $sql="SELECT

            a.idcategoria,
            a.nombre,
            a.idusuario,
            a.imagen,
            (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria AND YEAR(fecha_hora)=YEAR('$fecha_hoy')) as sum_categoria

            FROM a_tbl_categorias a WHERE a.idusuario='$idusuario' ORDER BY (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria) DESC"; 
            return ejecutarConsulta($sql);
            // code...
        }

             
    }

    public function listar_categorias_next_semana($idusuario,$fecha_ini,$fecha_fin)
    {

       

             $sql="SELECT

            a.idcategoria,
            a.nombre,
            a.idusuario,
            (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria AND DATE(fecha_hora)>='$fecha_ini' AND DATE(fecha_hora)<='$fecha_fin') as sum_categoria

            FROM a_tbl_categorias a WHERE a.idusuario='$idusuario' ORDER BY (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria) DESC"; 
            return ejecutarConsulta($sql);

            // code...
        

             
    }

    public function guardar_gasto($idcategoria,$concepto,$cantidad,$fecha_hora,$idusuario)
    {
    	$sql="INSERT INTO a_tbl_gastos (idcategoria,concepto,cantidad,fecha_hora,idusuario) VALUES('$idcategoria','$concepto','$cantidad','$fecha_hora','$idusuario')"; 
    	return ejecutarConsulta($sql);  
    }

    public function listar_coin_concep($texto,$idusuario)
    {
    	$sql="SELECT DISTINCT concepto FROM a_tbl_gastos WHERE concepto LIKE '%".$texto."%'"; 
    	return ejecutarConsulta($sql);  
    }

    public function guardar_usuario($nombre,$apellidop_reg,$apellidom_reg,$correo_reg,$pass_reg,$code_verif)
    {
        $sql="INSERT INTO usuario (nombre,apellido_p,apellido_m,login,clave,code_verif) VALUES('$nombre','$apellidop_reg','$apellidom_reg','$correo_reg','$pass_reg','$code_verif')"; 
        $idingresonew=ejecutarConsulta_retornarID($sql);

        $sql2="INSERT INTO usuario_permiso (idusuario,idpermiso) VALUES('$idingresonew','1')";
        return ejecutarConsulta($sql2); 

         
    }

    public function enviar_verif($idusuario_prereg)
    {
        $sql="SELECT * FROM usuario WHERE idusuario='$idusuario_prereg'";
        return ejecutarConsultaSimpleFila($sql);
    }


    public function update_valid($idusuario_prereg,$code_verif_input)
    {
        $sql="UPDATE usuario SET code_verif_valid='$code_verif_input' WHERE idusuario='$idusuario_prereg'";
        return ejecutarConsulta($sql);
    }

    public function guardar_categoria($idusuario,$nom_categoria_new)
    {
        $sql="INSERT INTO a_tbl_categorias (nombre,idusuario) VALUES('$nom_categoria_new','$idusuario')";
        return ejecutarConsulta($sql);
    }

    public function guardar_sugerencia($idusuario,$sugerencia)
    {
        $sql="INSERT INTO a_tbl_sugerencia (idusuario,sugerencia) VALUES('$idusuario','$sugerencia')";
        return ejecutarConsulta($sql);
    }

    public function consul_montos($fecha_hoy,$valor_tipo,$idusuario)
    {
        if ($valor_tipo==1) {
            
            $sql="SELECT sum(cantidad) as monto FROM a_tbl_gastos WHERE DATE(fecha_hora) = DATE('$fecha_hoy') AND idusuario='$idusuario'";
            return ejecutarConsultaSimpleFila($sql);
            
        }elseif ($valor_tipo==2) {

            $sql="SELECT sum(cantidad) as monto FROM a_tbl_gastos WHERE MONTH(fecha_hora) = MONTH('$fecha_hoy') AND YEAR(fecha_hora)=YEAR('$fecha_hoy') AND idusuario='$idusuario'";
            return ejecutarConsultaSimpleFila($sql);
            // code...
        }elseif ($valor_tipo==3) {

            $sql="SELECT sum(cantidad) as monto FROM a_tbl_gastos WHERE YEAR(fecha_hora)=YEAR('$fecha_hoy') AND idusuario='$idusuario'";
            return ejecutarConsultaSimpleFila($sql);
            // code...
        }
            
    }

    public function consul_montos_semana($fecha_hoy,$fecha_ini,$fecha_fin,$idusuario)
    {

        $sql="SELECT sum(cantidad) as monto_semana FROM a_tbl_gastos WHERE DATE(fecha_hora)>='$fecha_ini' AND DATE(fecha_hora)<='$fecha_fin' AND idusuario='$idusuario'";
        return ejecutarConsultaSimpleFila($sql);
            
    }

    public function crear_grafica()
    {

        $sql="SELECT idcategoria FROM a_tbl_categorias LIMIT 1";
        return ejecutarConsulta($sql);
            
    }

    public function nom_categria_list($idusuario)
    {

        $sql="SELECT nombre, color FROM a_tbl_categorias WHERE idusuario='$idusuario'";
        return ejecutarConsulta($sql);
            
    }

    public function cant_categria_list($idusuario,$fecha_hoy,$valor_tipo)
    {

        if ($valor_tipo==1) {

             $sql="SELECT

            a.idcategoria,
            a.nombre,
            a.idusuario,
            a.imagen,
            (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria AND DATE(fecha_hora)='$fecha_hoy') as sum_categoria

            FROM a_tbl_categorias a WHERE a.idusuario='$idusuario' ORDER BY (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria) DESC"; 
            return ejecutarConsulta($sql);

            // code...
        }elseif ($valor_tipo==2) {

            $sql="SELECT

            a.idcategoria,
            a.nombre,
            a.idusuario,
            a.imagen,
            (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria AND MONTH(fecha_hora)=MONTH('$fecha_hoy')) as sum_categoria

            FROM a_tbl_categorias a WHERE a.idusuario='$idusuario' ORDER BY (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria) DESC"; 
            return ejecutarConsulta($sql);
            // code...
        }elseif ($valor_tipo==3) {

            $sql="SELECT

            a.idcategoria,
            a.nombre,
            a.idusuario,
            a.imagen,
            (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria AND YEAR(fecha_hora)=YEAR('$fecha_hoy')) as sum_categoria

            FROM a_tbl_categorias a WHERE a.idusuario='$idusuario' ORDER BY (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria) DESC"; 
            return ejecutarConsulta($sql);
            // code...
        }
            
    }

    public function cant_categria_list_semana($idusuario,$fecha_ini,$fecha_fin)
    {

       

             $sql="SELECT

            a.idcategoria,
            a.nombre,
            a.idusuario,
            (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria AND DATE(fecha_hora)>='$fecha_ini' AND DATE(fecha_hora)<='$fecha_fin') as sum_categoria

            FROM a_tbl_categorias a WHERE a.idusuario='$idusuario' ORDER BY (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria) DESC"; 
            return ejecutarConsulta($sql);

            // code...
        

             
    }

    public function crear_grafica_cat($idusuario)
    {
        $sql="SELECT

        a.idcategoria,
        a.nombre,
        a.idusuario,
        a.imagen,
        a.color,
        (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria) as sum_categoria,
        (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idusuario='$idusuario') as gasto_total

        FROM a_tbl_categorias a WHERE a.idusuario='$idusuario' ORDER BY (SELECT IFNULL(sum(cantidad),0) FROM a_tbl_gastos WHERE idcategoria=a.idcategoria) DESC"; 
        return ejecutarConsulta($sql);  
    }

}

?>