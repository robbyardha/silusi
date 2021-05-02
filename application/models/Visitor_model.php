<?php
class Visitor_model extends CI_Model
{
    public function add_visitor()
    {
        $_IP_SERVER = $_SERVER['SERVER_ADDR'];
        $_IP_ADDRESS = $_SERVER['REMOTE_ADDR'];
        if ($_IP_ADDRESS == $_IP_SERVER) {
            ob_start();
            system('ipconfig /all');
            $_PERINTAH  = ob_get_contents();
            ob_clean();
            $_PECAH = strpos($_PERINTAH, "Physical");
            $_HASIL = substr($_PERINTAH, ($_PECAH + 36), 17);
            // echo $_HASIL;
        } else {
            $_PERINTAH = "arp -a $_IP_ADDRESS";
            ob_start();
            system($_PERINTAH);
            $_HASIL = ob_get_contents();
            ob_clean();
            $_PECAH = strstr($_HASIL, $_IP_ADDRESS);
            $_PECAH_STRING = explode($_IP_ADDRESS, str_replace(" ", "", $_PECAH));
            $_HASIL = substr($_PECAH_STRING[1], 0, 17);
            // echo "IP Anda : " . $_IP_ADDRESS . "MAC ADDRESS Anda : " . $_HASIL;
            $data = [
                // 'ip_address' => $this->input->ip_address(),
                'ip_address' => $_IP_ADDRESS,
                'mac_address' => htmlspecialchars($_HASIL),
            ];
            $this->db->insert('visitor', $data);
        }
    }

    public function getVisitor($id = null)
    {
        if ($id == null) {
            return $this->db->get('visitor')->result_array();
        } else {
            return $this->db->get_where('visitor', ['id' => $id])->row_array();
        }
    }
}
