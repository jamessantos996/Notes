<?php 
    if ( ! defined('BASEPATH')) exit('No direct script access allowed');

    class Notes extends CI_Controller{
        public function index(){
            $this->load->view('index');
        }

        public function index_html(){
            $this->load->model('Note');
            $result['notes'] = $this->Note->get_all_notes();
            $this->load->view('partials/notes', $result);
        }

        public function add(){
            $data = array(
                "title" => $this->input->post('title'),
                "description" => $this->input->post('description') 
            );
            $this->load->model('Note');
            $this->Note->add_note($data);

            $result['notes'] = $this->Note->get_all_notes();
            $this->load->view('partials/notes', $result);
        }

        public function edit(){
            $data = array(
                "id" => $this->input->post('id'),
                "description" => $this->input->post('description') 
            );
            $this->load->model('Note');
            $this->Note->update_note($data);

            $result['notes'] = $this->Note->get_all_notes();
            $this->load->view('partials/notes', $result);
            
        }

        public function delete(){
            $id = $this->input->post('id');
            $this->load->model('Note');
            $this->Note->delete_note($id);

            $result['notes'] = $this->Note->get_all_notes();
            $this->load->view('partials/notes', $result);
        }

    }

?>