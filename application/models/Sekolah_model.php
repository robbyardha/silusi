<?php
class Sekolah_model extends CI_Model
{
    public function getSekolah()
    {
        return $this->db->get('sekolah')->result_array();
    }

    public function getSekolahById($id = null)
    {
        if ($id == null) {
            return $this->db->get('sekolah')->result_array();
        } else {
            return $this->db->get_where('sekolah', ['id' => $id])->row_array();
        }
    }

    public function tambah()
    {
        $upload_image = $_FILES['file_image']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size']  = 2048;
            $config['upload_path']  = './assets/images/sekolah';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_image')) {
                // $data = $this->upload->data();
                // $image = $data['file_name'];
                $newimage = $this->upload->data('file_name');
                $data = [
                    'nama_sekolah' => htmlspecialchars($this->input->post('nama_sekolah', true)),
                    'alamat_sekolah' => htmlspecialchars($this->input->post('alamat_sekolah', true)),
                    'notlp_sekolah' => htmlspecialchars($this->input->post('notlp_sekolah', true)),
                    'logo_sekolah' => $newimage,
                ];
                $this->db->insert('sekolah', $data);
            } else {
                echo $this->upload->display_errors();
            }
        }
    }

    public function ubah()
    {
        $id = htmlspecialchars($this->input->post('id', TRUE));
        $nama = htmlspecialchars($this->input->post('nama_sekolah', TRUE));
        $alamat = htmlspecialchars($this->input->post('alamat_sekolah', TRUE));
        $notlp = htmlspecialchars($this->input->post('notlp_sekolah', TRUE));

        $upload_image = $_FILES['file_image']['name'];
        if ($upload_image) {
            $config['allowed_types'] = 'jpeg|gif|jpg|png';
            $config['max_size']  = 2048;
            $config['upload_path']  = './assets/images/sekolah';

            $this->load->library('upload', $config);

            if ($this->upload->do_upload('file_image')) {
                // $data = $this->upload->data();
                // $image = $data['file_name'];
                $newimage = $this->upload->data('file_name');
                $this->db->set('logo_sekolah', $newimage);
            } else {
                echo $this->upload->display_errors();
            }
        }
        $this->db->set('nama_sekolah', $nama);
        $this->db->set('alamat_sekolah', $alamat);
        $this->db->set('notlp_sekolah', $notlp);
        $this->db->where('id', $id);
        $this->db->update('sekolah');
        $this->session->set_flashdata('sekolah', 'Diubah');
        redirect('admin/sekolah');
    }

    public function hapus()
    {
        $id = $this->input->post('id', TRUE);
        $this->db->where('id', $id);
        $this->db->delete('sekolah');
        // var_dump($this->db->last_query());
        // die;
    }
}
