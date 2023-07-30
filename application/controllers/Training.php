<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Training extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		notLogin();
		notAdmin();
		$this->load->model('training_m');
		$this->load->library('form_validation');
	}

	public function index()
	{

		$data['title'] = 'Training';
		$data['row'] = $this->training_m->get();

		$this->load->view('templates/header', $data);
		$this->load->view('templates/sidebar', $data);
		$this->load->view('training/training_data');
		$this->load->view('templates/footer');
	}

	public function add()
	{
		$data['title'] = 'Jurusan';

		$this->form_validation->set_rules('nisTraining', 'NIS', 'required|min_length[9]|is_unique[tbl_datatraining.nis_training]');
		$this->form_validation->set_rules('namaTraining', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('pai', 'Nilai PAI', 'required|numeric');
		$this->form_validation->set_rules('pkn', 'Nilai PKN', 'required|numeric');
		$this->form_validation->set_rules('bindo', 'Nilai B.INDO', 'required|numeric');
		$this->form_validation->set_rules('mtk', 'Nilai MTK', 'required|numeric');
		$this->form_validation->set_rules('sejarah', 'Nilai SEJARAH', 'required|numeric');
		$this->form_validation->set_rules('bing', 'Nilai B.INGGRIS', 'required|numeric');
		$this->form_validation->set_rules('sbk', 'Nilai SBK', 'required|numeric');
		$this->form_validation->set_rules('pjok', 'Nilai PJOK', 'required|numeric');
		$this->form_validation->set_rules('kwu', 'Nilai KWU', 'required|numeric');
		$this->form_validation->set_rules('bsun', 'Nilai B.SUNDA', 'required|numeric');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silakan isi.');
		$this->form_validation->set_message('min_length', '%s minimal 3 karakter.');
		$this->form_validation->set_message('is_unique', '%s ini sudah dipakai.');
		$this->form_validation->set_message('numeric', '%s harus diisi menggunakan angka.');

		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('templates/header', $data);
			$this->load->view('templates/sidebar', $data);
			$this->load->view('training/training_form_add');
			$this->load->view('templates/footer');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->training_m->add($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>alert('Data berhasil disimpan.');</script>";
			}
			echo "<script>window.location='" . site_url('training') . "';</script>";
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Jurusan';

		$this->form_validation->set_rules('nisTraining', 'NIS', 'required|min_length[9]|callback_nisTraining_check');
		$this->form_validation->set_rules('namaTraining', 'Nama Lengkap', 'required');
		$this->form_validation->set_rules('pai', 'Nilai PAI', 'required|numeric');
		$this->form_validation->set_rules('pkn', 'Nilai PKN', 'required|numeric');
		$this->form_validation->set_rules('bindo', 'Nilai B.INDO', 'required|numeric');
		$this->form_validation->set_rules('mtk', 'Nilai MTK', 'required|numeric');
		$this->form_validation->set_rules('sejarah', 'Nilai SEJARAH', 'required|numeric');
		$this->form_validation->set_rules('bing', 'Nilai B.INGGRIS', 'required|numeric');
		$this->form_validation->set_rules('sbk', 'Nilai SBK', 'required|numeric');
		$this->form_validation->set_rules('pjok', 'Nilai PJOK', 'required|numeric');
		$this->form_validation->set_rules('kwu', 'Nilai KWU', 'required|numeric');
		$this->form_validation->set_rules('bsun', 'Nilai B.SUNDA', 'required|numeric');
		$this->form_validation->set_rules('jurusan', 'Jurusan', 'required');

		$this->form_validation->set_message('required', '%s masih kosong, silakan isi.');
		$this->form_validation->set_message('min_length', '%s minimal 3 karakter.');
		$this->form_validation->set_message('is_unique', '%s ini sudah dipakai.');
		$this->form_validation->set_message('numeric', '%s harus diisi menggunakan angka.');

		$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$query = $this->training_m->get($id);
			if ($query->num_rows() > 0) {
				$data['row'] = $query->row();
				$this->load->view('templates/header', $data);
				$this->load->view('templates/sidebar', $data);
				$this->load->view('training/training_form_edit', $data);
				$this->load->view('templates/footer');
			} else {
				echo "<script>alert('Data tidak ditemukan.');";
				echo "window.location='" . site_url('training') . "';</script>";
			}
		} else {
			$post = $this->input->post(null, TRUE);
			$this->training_m->edit($post);
			if ($this->db->affected_rows() > 0) {
				echo "<script>alert('Data berhasil diubah.');</script>";
			}
			echo "<script>window.location='" . site_url('training') . "';</script>";
		}
	}


	public function delete()
	{
		$id = $this->input->post('nis_training');
		$this->training_m->delete($id);

		if ($this->db->affected_rows() > 0) {
			echo "<script>alert('Data berhasil dihapus.');</script>";
		}
		echo "<script>window.location='" . site_url('training') . "';</script>";
	}

	public function nisTraining_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM tbl_datatraining WHERE nis_training = '$post[nisTraining]' AND nis_training != '$post[nis]'");
		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('nisTraining_check', '%s ini sudah dipakai, silakan ganti.');
			return FALSE;
		} else {
			return TRUE;
		}
	}
}

/* End of file Training.php */
