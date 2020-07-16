<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Products extends CI_Controller{
		public function __construct(){
        	parent::__construct();
        	$this->load->model("product_model");
        	$this->load->library('form_validation');
    	}

    	public function index(){
        	$data["products"] = $this->product_model->getAll();
    	}

        // function for delete item from database
    	public function delete($id=null){
    		if (!isset($id)) show_404();
        
    		if ($this->product_model->delete($id)) {
        		redirect(site_url(''));
    		}
		}

        // function for update item
        public function update(){
            $product = $this->product_model;
            $validation = $this->form_validation;
            $validation->set_rules($product->rules());

            if ($validation->run()) {
                $product->update();
                redirect(site_url(''));
            }else{
                echo "Tipe data salah";
            }
        }

        // function from add item
        public function add(){
            $product = $this->product_model;
            $validation = $this->form_validation;
            $validation->set_rules($product->rules());

            if ($validation->run()) {
                $product->add();
                redirect(site_url(''));
            }else{
                echo "Tipe data salah";
            }
        }
	}
?>