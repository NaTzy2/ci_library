<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Books extends CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->model('Books_model', 'books');
        $this->load->library('form_validation');
    }

    public function index(){
        $data['book'] = $this->books->getAll();

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('book/index', $data);
        $this->load->view('template/footer');
    }

    public function create(){
        if($this->input->method() == 'post'){
            $this->form_validation->set_rules('isbn', 'Isbn', 'required');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('synopsis', 'Synopsis', 'required');
            $this->form_validation->set_rules('author', 'Author', 'required');
            $this->form_validation->set_rules('publisher', 'Publisher', 'required');
            $this->form_validation->set_rules('category', 'Category', 'required');
            $this->form_validation->set_rules('language', 'Language', 'required');
            
            
            if($this->form_validation->run()){
                $data = [
                    'isbn'=>$this->input->post('isbn'),
                    'title'=>$this->input->post('title'),
                    'synopsis'=>$this->input->post('synopsis'),
                    'author'=>$this->input->post('author'),
                    'publisher'=>$this->input->post('publisher'),
                    'category'=>$this->input->post('category'),
                    'language'=>$this->input->post('language'),
                    'created-at'=>date('Y-m-d H:i:s')
                ];
                $this->books->insert($data);
                
                return redirect('books');
            }
        }

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('book/create');
        $this->load->view('template/footer');
    }

    public function edit($id){
        if($this->input->method() == 'post'){
            $data = [];

            $this->form_validation->set_rules('isbn', 'Isbn', 'required');
            $this->form_validation->set_rules('title', 'Title', 'required');
            $this->form_validation->set_rules('synopsis', 'Synopsis', 'required');
            $this->form_validation->set_rules('author', 'Author', 'required');
            $this->form_validation->set_rules('publisher', 'Publisher', 'required');
            $this->form_validation->set_rules('category', 'Category', 'required');
            $this->form_validation->set_rules('language', 'Language', 'required');
            
            
            if($this->form_validation->run()){
                $data = [
                    'isbn'=>$this->input->post('isbn'),
                    'title'=>$this->input->post('title'),
                    'synopsis'=>$this->input->post('synopsis'),
                    'author'=>$this->input->post('author'),
                    'publisher'=>$this->input->post('publisher'),
                    'category'=>$this->input->post('category'),
                    'language'=>$this->input->post('language'),
                    'updated-at'=>date('Y-m-d H:i:s')
                ];
                $this->books->update($data, $id);
                
                return redirect('books');
            }
        }

        $data['book']= $this->books->getById($id);

        $this->load->view('template/header');
        $this->load->view('template/navbar');
        $this->load->view('book/edit',$data);
        $this->load->view('template/footer');
    }

    public function delete($id){
        $this->books->delete($id);
        redirect('books');
    }
}