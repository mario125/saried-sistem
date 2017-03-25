<?php
class Acceso{



    public function Login()
    {
        try{


            if(!empty($_POST['user']) and !empty($_POST['pass'])){
                $db = new Conexion();
                $this->user =$db->real_escape_string($_POST['user']);
                $this->pass =$db->real_escape_string($_POST['pass']);

                $sql = $db->query("SELECT * FROM `usuario` WHERE nic_user='$this->user' and pas_user='$this->pass'and est_user='ACTIVO' ");
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
                    echo 1;
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

    function encriptar($cadena){
        $key='';  // Una clave de codificacion, debe usarse la misma para encriptar y desencriptar
        $encrypted = base64_encode(mcrypt_encrypt(MCRYPT_RIJNDAEL_256, md5($key), $cadena, MCRYPT_MODE_CBC, md5(md5($key))));
        return $encrypted; //Devuelve el string encriptado

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




            $sql  = $db->query("SELECT id_user, dni_user, nom_user, ape_user ,nic_user FROM usuario WHERE dni_user='$this->dni' OR nic_user='$this->nick' ");

              if($db->affected_rows==0){



              $sql2 = $db->query("INSERT INTO `usuario`( `dni_user`, `nom_user`, `ape_user`, `con_user`, `tel_user`, `dir_user`, `fot_user`, `nic_user`, `pas_user`, `est_user`)
                                          VALUES ('$this->dni','$this->nombres','$this->apellidos','$this->condicion','$this->telefono','$this->direccion','fotos/$this->foto','$this->nick','$this->pass','$this->estado')");




              echo 1;
              $db->liberar($sql2);


              }else{
                  $datos = $db->rrecorrer($sql);
                  if (strtolower($this->dni) == strtolower($datos['dni_user']) || strtolower($this->apellidos) == strtolower($datos['ape_user'])) {
                        echo  2;
                  }
                  if (strtolower($this->nick) == strtolower($datos['nic_user'])) {
                        echo 3;
                  }

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



          //  $sql  = $db->query("SELECT * FROM `bien` WHERE cod_bien='$this->codigo' AND est_cargo='ENTREGADO' ");

                        $sql = $db->query("INSERT INTO `bien`(
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

              if($sql==1){

              echo 1;


              }else{
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
    public function EdidBien()
    {
      try {
        if(!empty($_POST['id']) and
           !empty($_POST['codigo']) and
           !empty($_POST['tipo']) and
           !empty($_POST['detalle'])and
           !empty($_POST['fecha'])and
           !empty($_POST['cantidad'])and
           !empty($_POST['valor'])and
           !empty($_POST['estado'])and
           !empty($_POST['registrador'])

         ){
           $db = new Conexion();
         //   $fecha_actual = date('Y-m-d');
            $this->id =$db->real_escape_string($_POST['id']);
            $this->codigo =$db->real_escape_string($_POST['codigo']);
            $this->tipo =$db->real_escape_string($_POST['tipo']);
            $this->detalle =$db->real_escape_string($_POST['detalle']);
            $this->fecha =$db->real_escape_string($_POST['fecha']);
            $this->cantidad =$db->real_escape_string($_POST['cantidad']);
            $this->valor =$db->real_escape_string($_POST['valor']);
            $this->estado =$db->real_escape_string($_POST['estado']);
            $this->registrador =$db->real_escape_string($_POST['registrador']);



                        $sql  = $db->query("UPDATE bien SET
                          tip_bien='$this->tipo',
                          det_bien='$this->detalle',
                          val_bien=$this->valor,
                          est_bien='$this->estado'
                          WHERE id_bien=$this->id");


                                      if ($sql==1) {
                                        # code...
                                        echo 1;
                                      }else {
                                        # code...
                                        echo 2;
                                      }




         }else {
           throw new Exception('Error: Datos vacios..');
         }

      } catch (Exception $e) {
        echo $e->getMessage();

      }


    }

    public function prestarB()
    {
      try {
        if (!empty($_POST['oficina']) and
           !empty($_POST['entrego']) and
           !empty($_POST['cargo']) and
           !empty($_POST['fecha']) and
           !empty($_POST['id']) and
           !empty($_POST['codigo']) and
           !empty($_POST['estado'])
           ) {
             $db = new Conexion();
           //   $fecha_actual = date('Y-m-d');
              $this->oficina =$db->real_escape_string($_POST['oficina']);
              $this->entrego =$db->real_escape_string($_POST['entrego']);
              $this->cargo =$db->real_escape_string($_POST['cargo']);
              $this->fecha =$db->real_escape_string($_POST['fecha']);
              $this->id =$db->real_escape_string($_POST['id']);
              $this->codigo =$db->real_escape_string($_POST['codigo']);
              $this->estado =$db->real_escape_string($_POST['estado']);
              $this->prestador =$db->real_escape_string($_SESSION['id_user']);
              $sql  = $db->query("SELECT * FROM cargo WHERE cod_bien='$this->codigo'and est_cargo='ENTREGADO'");
              if ($db-> rows($sql)==0) {
                  $sql2 = $db->query("INSERT INTO `cargo`( `pre_cargo`, `ofi_cargo`,
                                                           `pre_cargo_a`, `fun_p_cargo`,
                                                           `fec_p_cargo`, `resepciona_cargo`,
                                                           `dev_cargo`, `fun_d_cargo`,
                                                           `fec_d_cargo`, `id_bien`,
                                                            `cod_bien`, `est_cargo`) VALUES (
                                                            '$this->prestador','$this->oficina',
                                                            '$this->entrego','$this->cargo',
                                                            '$this->fecha','no devuelto',
                                                            'no devuelto','no devuelto',
                                                            'no devuelto','$this->id','$this->codigo','$this->estado')");
                # code...
                $db->liberar($sql,$sql2);
                $db->close();
                echo 1;

              } else {
                # code...
                $db->liberar($sql);
                $db->close();
                echo 2;
              }




          # code...
        } else {
          # code...
          echo 104;
        }


      } catch (Exception $e) {
          echo $e->getMessage();
      }

    }

    public function devolBien()
    {
      try {
        if(!empty($_POST['id']) and
           !empty($_POST['codigo']) and
           !empty($_POST['estado']) and
           !empty($_POST['resepciona'])and
           !empty($_POST['entregadopor'])and
           !empty($_POST['cargo'])and
           !empty($_POST['fecha'])

         ){
           $db = new Conexion();
         //   $fecha_actual = date('Y-m-d');
            $this->id =$db->real_escape_string($_POST['id']);
            $this->codigo =$db->real_escape_string($_POST['codigo']);
            $this->estado =$db->real_escape_string($_POST['estado']);
            $this->resepciona =$db->real_escape_string($_SESSION['id_user']);
            $this->entregadopor =$db->real_escape_string($_POST['entregadopor']);
            $this->cargo =$db->real_escape_string($_POST['cargo']);
            $this->fecha =$db->real_escape_string($_POST['fecha']);



            $sql2  = $db->query("UPDATE bien SET
              est_bien='$this->estado'
              WHERE cod_bien='$this->codigo'");

                        $sql  = $db->query("UPDATE cargo SET
                          resepciona_cargo='$this->resepciona',
                          dev_cargo='$this->entregadopor',
                          fun_d_cargo='$this->cargo',
                          fec_d_cargo='$this->fecha',
                          est_cargo='DEVUELTO'
                          WHERE est_cargo='ENTREGADO' and id_cargo=$this->id AND cod_bien='$this->codigo' ");




                         if ($db->affected_rows==1) {
                           # code...
                           echo 1;
                         }
                         else if ($db->affected_rows==0) {
                           # code...
                           echo 2;
                         }





         }else {
           throw new Exception('Error: Datos vacios..');
         }

      } catch (Exception $e) {
        echo $e->getMessage();

      }


    }



}
?>
