<?php


class Login extends CI_Model {
 public function Login1($rut,$clave)
{
  $this->db->where("rut",$rut);
  $this->db->where("clave",$clave);
  return $this->db->get("usuario")->result();
}

}
