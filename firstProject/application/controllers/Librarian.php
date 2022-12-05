<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Librarian extends CI_Controller{
    private const CONFIG_UPLOAD = [
        'upload_path'=>FCPATH.'/assets/img',
        'allowed_types'=>'gif|jpg|png|jpeg',
        'upload_max_filesize'=>'1M',
        'overwrite'=>true
    ];

    public function __construct(){
        parent::__construct();
        $this->load->model('Librarian_model', 'librarian');
        $this->load->library('form_validation');
    }
    
    public function index(){
        $data['librarians'] = $this->librarian->getAll();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('librarian/index', $data);
        $this->load->view('template/footer');
    }

    public function create(){
        if($this->input->method() == 'post'){
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            
            $this->load->library('upload', array_merge(self::CONFIG_UPLOAD, ['file_name'=>md5(time())]));

            if(isset($_FILES['avatar']) && !$this->upload->do_upload('avatar')){
                $data['avatar'] = $this->upload->display_errors();
            }else{
                $file_name = $this->upload->data();
            }
            
            if($this->form_validation->run()){
                $data = [
                    'username'=>$this->input->post('username'),
                    'name'=>$this->input->post('name'),
                    'email'=>$this->input->post('email'),
                    'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'avatar'=>$file_name['file_name'],
                    'created-at'=>date('Y-m-d H:i:s')
                ];
                $this->librarian->insert($data);
                
                return redirect('librarian');
            }
        }

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('librarian/create');
        $this->load->view('template/footer');
    }

    public function edit($id){
        if($this->input->method() == 'post'){
            $data = [];

            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('name', 'Name', 'required');
            $this->form_validation->set_rules('email', 'Email', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');
            
            $this->load->library('upload', array_merge(self::CONFIG_UPLOAD, ['file_name'=>md5(time())]));

            if(isset($_FILES['avatar']) && !$this->upload->do_upload('avatar')){
                $data['avatar'] = $this->upload->display_errors();
            }else{
                $data['avatar'] = $this->upload->data()['file_name'];
            }

            if($this->form_validation->run()){
                $data = [
                    'username'=>$this->input->post('username'),
                    'name'=>$this->input->post('name'),
                    'email'=>$this->input->post('email'),
                    'password'=>password_hash($this->input->post('password'), PASSWORD_DEFAULT),
                    'avatar'=>$data['avatar'],
                    'updated-at'=>date('Y-m-d H:i:s')
                ];
                $this->librarian->update($data, $id);
                
                return redirect('librarian');
            }
        }

        $data['librarian']= $this->librarian->getById($id);

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('librarian/edit',$data);
        $this->load->view('template/footer');
    }

    public function delete($id){
        $this->librarian->delete($id);
        redirect('librarian');
    }
}