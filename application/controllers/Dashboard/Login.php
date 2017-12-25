<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends MY_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	function __construct(){
        parent::__construct();
        $this->load->model('MUser');
    }

	public function index(){
		if ($this->is_login()){
			redirect(base_url('dashboard/home'));
		} else {
			$this->load->view('dashboard/login');
		}
	}

	public function doLogin(){
		if ($this->is_login()){
			redirect(base_url('dashboard/home'));
		}

		$error_found = false;
		if ($this->input->post()){
			$data = array();

			if ($this->input->post('username')){
				$data['username'] = $this->input->post('username');
			} else {
				$message = "Username should not be blank";
				$error_found = true;
			}

			if (!$error_found){
				if ($this->input->post('password')){
					$data['password'] = md5($this->input->post('password'));
				} else {
					$message = "Password should not be blank";
					$error_found = true;
				}
			}

			if (!$error_found){
				if ($this->isUserExist($data['username'])){
					if ($this->isUserDisabled($data['username'])){
						$message = "User disabled";
						$error_found = true;
					} else {
						if ($this->isPasswordCorrect($data)){
							$this->MUser->update_successful_login($data);
							$this->set_session_data($data['username']);
							redirect(base_url("dashboard/home"));
						} else {
							$this->handleFailedLogin(array('username' => $data['username'] ));
							$message = "Invalid password";
							$error_found = true;
						}
					}
				} else {
					$message = "User does not exist";
					$error_found = true;
				}
			}
		} else {
			redirect(base_url('dashboard/login'));
		}

		if ($error_found){
			$this->session->set_flashdata('message', $message);
			redirect(base_url('dashboard/login'));
		}
	}

	public function doLogout(){
		$this->session->unset_userdata('username');
		$this->session->unset_userdata('is_login');
		redirect(base_url('dashboard/login'));
	}

	public function change_password(){
		if ($this->is_login()){
			$this->load->view('dashboard/change_password');
		} else {
			redirect(base_url('dashboard/login'));
		}
	}

	public function doChangePassword(){
		if (!$this->is_login()){
			redirect(base_url('dashboard/login'));
		}
		$error_found = false;
		if ($this->input->post()){
			if (!$this->input->post('old_password')){
				$message = "Old password should not be blank";
				$error_found = true;
			}

			if (!$error_found && !$this->input->post('new_password')){
				$message = "New password should not be blank";
				$error_found = true;
			}

			if (!$error_found && !$this->input->post('new_password2')){
				$message = "New password should not be blank";
				$error_found = true;
			}

			if (!$error_found && $this->input->post('new_password')!=$this->input->post('new_password2')){
				$message = "New password is not same";
				$error_found = true;
			}

			if (!$error_found){
				$where = array(
					'username' => $this->session->userdata('username'), 
					'password' => md5($this->input->post('old_password'))
				);
				if ($this->isPasswordCorrect($where)){
					$data = array('password' => md5($this->input->post('new_password')));
					if (!$this->MUser->update_password($data)){
						$message = "Invalid Password";
						$error_found = true;
					} else {
						$this->session->set_flashdata('message', 'Password Updated');
						redirect(base_url('dashboard/login/change_password'));
					}
				} else {
					$message = "Invalid Password";
					$error_found = true;
				}
			}
		} else {
			redirect(base_url('dashboard/login/change_password'));
		}

		if ($error_found){
			$this->session->set_flashdata('message', $message);
			redirect(base_url('dashboard/login/change_password'));
		}
	}

	private function isUserExist($username){
		$where = array('username' => $username);
		if ($this->MUser->count_user($where)>0){
			return true;
		} else {
			return false;
		}
	}

	private function isUserDisabled($username){
		$where = array(
			'username' => $username,
			'is_disabled' => 'Y'
		);

		if ($this->MUser->count_user($where)>0){
			return true;
		} else {
			return false;
		}
	}

	private function isPasswordCorrect($where){
		$where['is_disabled'] = 'N';
			
		if ($this->MUser->count_user($where)>0){
			return true;
		} else {
			return false;
		}
	}

	private function handleFailedLogin($where){
		$where['is_disabled'] = 'N';
		$failed_attemps = $this->MUser->get_failed_attemps($where);
		$this->MUser->update_failed_login($where);
		if ($failed_attemps==4){
			$this->MUser->update_set_disable($where);
		}
	}
}
