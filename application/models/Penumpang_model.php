<?php

class Penumpang_model extends CI_model
{
    public function getAllPenumpang()
    {
        // $this->db->select("*");
        // $this->db->from('penumpang');
        // $this->db->where('nama', $this->session->userdata('email'));
        return $this->db->get('penumpang')->result_array();
    }

    public function tambahDataPenumpang()
    {
        $data = [
            "nama" => htmlspecialchars($this->input->post('nama', true)),
            "telepon" => htmlspecialchars($this->input->post('telepon', true)),
            "gender" => htmlspecialchars($this->input->post('gender', true)),
            "tanggal" => $this->input->post('tanggal', time()),
            "jam" => $this->input->post('jam', time()),
            "jurusan" => htmlspecialchars($this->input->post('jurusan', true)),
            "harga" => htmlspecialchars($this->input->post('harga', true)),
            "kelas" => htmlspecialchars($this->input->post('kelas', true)),
            "date" => time(),
            "image" => 'profile1.png'
        ];

        $this->db->insert('penumpang', $data);
    }

    public function hapusDataPenumpang($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('penumpang');
    }

    public function getPenumpangById($id)
    {
        return $this->db->get_where('penumpang', ['id' => $id])->row_array();
    }

    public function ubahDataPenumpang()
    {
        $data = [
            "nama" => htmlspecialchars($this->input->post('nama', true)),
            "telepon" => htmlspecialchars($this->input->post('telepon', true)),
            "gender" => htmlspecialchars($this->input->post('gender', true)),
            "tanggal" => $this->input->post('tanggal', time()),
            "jam" => $this->input->post('jam', time()),
            "jurusan" => htmlspecialchars($this->input->post('jurusan', true)),
            "harga" => htmlspecialchars($this->input->post('harga', true)),
            "date" => time(),
            "image" => 'profile1.png'
        ];

        $this->db->where('id', $this->input->post('id'));
        $this->db->update('penumpang', $data);
    }

    public function cariDataPenumpang()
    {
        $keyword = $this->input->post('keyword', true);
        $this->db->like('nama', $keyword);
        $this->db->or_like('telepon', $keyword);
        $this->db->or_like('jurusan', $keyword);
        return $this->db->get('penumpang')->result_array();
    }
}
