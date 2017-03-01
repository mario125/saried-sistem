<?php
class Acceso{



    public function Login()
    {
        try{


            if(!empty($_POST['user']) and !empty($_POST['pass'])){
                $db = new Conexion();
                $this->user =$db->real_escape_string($_POST['user']);
                $this->pass =$db->real_escape_string($_POST['pass']);

                $sql = $db->query("SELECT * FROM `usuario` WHERE nic_user='$this->user' and pas_user='$this->pass' ");
                if($db-> rows($sql)>0){

                    $datos = $db->rrecorrer($sql);

                    $_SESSION['id_user'] = $datos['id_user'];
                    $_SESSION['dni_user'] = $datos['dni_user'];
                    $_SESSION['nom_user'] = $datos['nom_user'];
                    $_SESSION['ape_user'] = $datos['ape_user'];
                    $_SESSION['con_user'] = $datos['con_user'];
                    $_SESSION['tel_user'] = $datos['tel_user'];
                    $_SESSION['dir_user'] = $datos['dir_user'];
                    $_SESSION['fot_user'] = $datos['fot_user'];
                    $_SESSION['nic_user'] = $datos['nic_user'];
                    $_SESSION['pas_user'] = $datos['pas_user'];
                    $_SESSION['est_user'] = $datos['est_user'];
                    echo $_SESSION['est_user'];
                }else{
                    echo 4;
                     }

                $db->liberar($sql);
                $db->close();

            }else{
                throw new Exception('Error: Datos vacios..');

            }

        }catch(Exceptionm $login){
            echo $login->getMessage();

        }
    }



    public function U_juego()
    {
      try {
        if (!empty($_POST['jugador']) and !empty($_POST['nivel']) and !empty($_POST['sNivel'])) {

           $db = new Conexion();
           $fecha_actual = date('Y-m-d');
           $this->jugador =$db->real_escape_string($_POST['jugador']);
           $this->nivel =$db->real_escape_string($_POST['nivel']);
           $this->sNivel =$db->real_escape_string($_POST['sNivel']);
           $this->fecha =$db->real_escape_string($fecha_actual);



          $sql = $db->query("UPDATE game SET nivel=$this->nivel ,sNivel=$this->sNivel ,fin='$this->fecha' WHERE jugador=$this->jugador");
          echo 1;
        }
      } catch (Exception $e) {
          echo $e->getMessage();

      }


    }


    public function RegisUser()
    {

      try{
          //require('core/models/class.Conexion.php');

          if(!empty($_POST['dni']) and
             !empty($_POST['nombres']) and
             !empty($_POST['apellidos'])and
             !empty($_POST['telefono'])and
             !empty($_POST['direccion'])and
             !empty($_POST['condicion'])and
             !empty($_POST['estado'])and
             !empty($_POST['nick'])and
             !empty($_POST['foto'])and
             !empty($_POST['pass'])


             )
          {
              $db = new Conexion();
            //   $fecha_actual = date('Y-m-d');
               $this->dni =$db->real_escape_string($_POST['dni']);
               $this->nombres =$db->real_escape_string($_POST['nombres']);
               $this->apellidos =$db->real_escape_string($_POST['apellidos']);
               $this->telefono =$db->real_escape_string($_POST['telefono']);
               $this->direccion =$db->real_escape_string($_POST['direccion']);
               $this->nick =$db->real_escape_string($_POST['nick']);
               $this->pass =$db->real_escape_string($_POST['pass']);
               $this->condicion =$db->real_escape_string($_POST['condicion']);
               $this->estado =$db->real_escape_string($_POST['estado']);
               $this->foto =$db->real_escape_string($_POST['foto']);


            $sql  = $db->query("SELECT id_user, dni_user, nom_user, ape_user FROM usuario WHERE dni_user='$this->dni' OR nic_user='$this->nick' ");

              if($db-> rows($sql)==0){



              $sql2 = $db->query("INSERT INTO `usuario`( `dni_user`, `nom_user`, `ape_user`, `con_user`, `tel_user`, `dir_user`, `fot_user`, `nic_user`, `pas_user`, `est_user`)
                                          VALUES ('$this->dni','$this->nombres','$this->apellidos','$this->condicion','$this->telefono','$this->direccion','fotos/$this->foto','$this->nick','$this->pass','$this->estado')");




              echo 1;


              }else{
                  $datos = $db->rrecorrer($sql);
                  if (strtolower($this->dni) == strtolower($datos['dni_user']) || strtolower($this->apellidos) == strtolower($datos['ape_user'])) {
                        echo  2;
                  }
                  if (strtolower($this->nick) == strtolower($datos['nic_user'])) {
                        echo 3;
                  }

              }


              $db->liberar($sql,$sql2);
              $db->close();
          }else{
              throw new Exception('Error: Datos vacios..');

          }

      }catch(Exceptionm $login){
          echo $login->getMessage();

      }

    }

    public function Edid_user()
    {

      try{
          //require('core/models/class.Conexion.php');

          if(!empty($_POST['id']) and
             !empty($_POST['dni']) and
             !empty($_POST['nombres']) and
             !empty($_POST['apellidos'])and
             !empty($_POST['telefono'])and
             !empty($_POST['direccion'])and
             !empty($_POST['condicion'])and
             !empty($_POST['estado'])and
             !empty($_POST['nick'])and
             !empty($_POST['pass'])



             )
          {
              $db = new Conexion();
            //   $fecha_actual = date('Y-m-d');
               $this->id =$db->real_escape_string($_POST['id']);
               $this->dni =$db->real_escape_string($_POST['dni']);
               $this->nombres =$db->real_escape_string($_POST['nombres']);
               $this->apellidos =$db->real_escape_string($_POST['apellidos']);
               $this->telefono =$db->real_escape_string($_POST['telefono']);
               $this->direccion =$db->real_escape_string($_POST['direccion']);
               $this->nick =$db->real_escape_string($_POST['nick']);
               $this->pass =$db->real_escape_string($_POST['pass']);
               $this->condicion =$db->real_escape_string($_POST['condicion']);
               $this->estado =$db->real_escape_string($_POST['estado']);



            $sql  = $db->query("UPDATE `usuario` SET
`dni_user`='$this->dni',
`nom_user`='$this->nombres',
`ape_user`='$this->apellidos',
`tel_user`='$this->telefono',
`dir_user`='$this->direccion',
`nic_user`='$this->nick',
`pas_user`='$this->pass',
`con_user`='$this->condicion',
`est_user`='$this->estado'
   WHERE id_user=$this->id");


            if ($sql==1) {
              # code...
              echo 1;
            }else {
              # code...
              echo 2;
            }


              $db->liberar($sql);
              $db->close();
          }else{
              throw new Exception('Error: Datos vacios..');

          }

      }catch(Exceptionm $login){
          echo $login->getMessage();

      }

    }


    public function RegisBien()
    {

      try{
          //require('core/models/class.Conexion.php');

          if(!empty($_POST['codigo']) and
             !empty($_POST['tipo']) and
             !empty($_POST['detalle'])and
             !empty($_POST['fecha'])and
             !empty($_POST['cantidad'])and
             !empty($_POST['valor'])and
             !empty($_POST['estado'])and
             !empty($_POST['foto'])

             )
          {
              $db = new Conexion();
            //   $fecha_actual = date('Y-m-d');
               $this->codigo =$db->real_escape_string($_POST['codigo']);
               $this->tipo =$db->real_escape_string($_POST['tipo']);
               $this->detalle =$db->real_escape_string($_POST['detalle']);
               $this->fecha =$db->real_escape_string($_POST['fecha']);
               $this->cantidad =$db->real_escape_string($_POST['cantidad']);
               $this->valor =$db->real_escape_string($_POST['valor']);
               $this->estado =$db->real_escape_string($_POST['estado']);
               $this->foto =$db->real_escape_string($_POST['foto']);
               $this->admin =$db->real_escape_string($_SESSION['id_user']);



            $sql  = $db->query("SELECT * FROM `bien` WHERE cod_bien='$this->codigo'");

              if($db-> rows($sql)==0){



              $sql2 = $db->query("INSERT INTO `bien`(
                `cod_bien`,
                 `tip_bien`,
                 `det_bien`,
                 `fec_bien`,
                 `can_bien`,
                 `val_bien`,
                 `fot_bien`,
                 `reg_bien`,
                 `est_bien`) VALUES (
                   '$this->codigo',
                   '$this->tipo',
                   '$this->detalle',
                   '$this->fecha',
                    $this->cantidad,
                    $this->valor,
                   'bien/$this->foto',
                    $this->admin,
                   '$this->estado')");




              echo 1;


              }else{
                echo 2;

              }


              $db->liberar($sql,$sql2);
              $db->close();
          }else{
              throw new Exception('Error: Datos vacios..');

          }

      }catch(Exceptionm $login){
          echo $login->getMessage();

      }

    }

}
?>
