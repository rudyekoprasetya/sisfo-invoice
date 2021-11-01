<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct() {
		parent::__construct();
		if(!$this->session->userdata('logged_in')) {redirect('login','refresh');}//user harus login
	}

	public function _crud_output($output = null) {
		$this->template->display('utama.php',$output);
	}

	public function encrypt_password_callback($post_array, $primary_key = null) {
		  $post_array['password'] = sha1($post_array['password']);
		  return $post_array;
	}

	public function user() {
		$crud=new grocery_CRUD();
		$crud->set_table('tb_user');
		$crud->set_subject('User');
		$crud->required_fields('username','password','nama','akses');
		//merubah input type password
		$crud->change_field_type('password', 'password');
		//enkripsi password
		$crud->callback_before_insert(array($this,'encrypt_password_callback'));
  		$crud->callback_before_update(array($this,'encrypt_password_callback'));
		$crud->columns('username','nama','gender','hp','akses');
		$data['judul']="Manajemen User";
		$data['output']=$crud->render();
		$this->_crud_output($data);
	}

	public function lembaga() {
		$crud= new grocery_CRUD();
		$crud->set_table('tb_lembaga');
		$crud->set_subject('Lembaga');
		$crud->set_field_upload('logo','assets/uploads/logo/');
		$crud->columns('lembaga','website','phone','logo','is_aktif');
		//disable tombol
		$crud->unset_add();
		$crud->unset_delete();
		$data['judul']="Manajemen Lembaga";
		$data['output']=$crud->render();
		$this->_crud_output($data);
	}

	public function divisi() {
		$crud= new grocery_CRUD();
		$crud->set_table('tb_divisi');
		$crud->set_subject('Divisi');
		$data['judul']="Manajemen Divisi";
		$data['output']=$crud->render();
		$this->_crud_output($data);
	}


}