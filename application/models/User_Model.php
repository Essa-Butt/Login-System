<?php
/**
 * Created by PhpStorm.
 * User: Isma3
 * Date: 21/07/2017
 * Time: 3:35 AM
 */

class User_Model extends CI_Model {

    function __construct() {
        parent::__construct();
    }

        public function insert($data) {
            if ($this->db->insert("registrationform", $data)) {
                return true;
            }
        }

        public function get(){
             $result = $this->db->get("registrationform");
             return $result->result();
        }

        public function login($email, $paswrd)
        {
            $this -> db -> select('*');
            $this -> db -> from('registrationform');
            $this -> db -> where('email', $email);
            $this -> db -> where('password', $paswrd);

            $query = $this -> db -> get();

            if($query -> num_rows() == 1)
            {
                return $query->result();
            }
            else
            {
                return false;
            }
        }
   }
?>