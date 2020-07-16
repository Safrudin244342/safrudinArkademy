<?php
	defined('BASEPATH') OR exit('No direct script access allowed');

	class Product_model extends CI_Model{
		private $_table = "produk";

		// validation data
		public function rules(){
        	return [
            	['field' => 'nama',
            	'label' => 'Nama',
            	'rules' => 'required'],

            	['field' => 'keterangan',
            	'label' => 'Keterangan',
            	'rules' => 'required'],
            
            	['field' => 'jumlah',
            	'label' => 'Jumlah',
            	'rules' => 'numeric'],

            	['field' => 'harga',
            	'label' => 'Harga',
            	'rules' => 'numeric']
        	];
    	}

    	// get all data from database
		public function getAll(){
			return $this->db->get($this->_table)->result();
		}

		// get item by id
		public function getById($id){
        	return $this->db->get_where($this->_table, ["id" => $id])->row();
    	}

		// get data by id

		// function for add item to database
		public function add(){
			$post = $this->input->post();
			$this->id = uniqid();
			$this->nama_produk = $post["nama"];
			$this->keterangan = $post["keterangan"];
			$this->harga = $post["harga"];
			$this->jumlah = $post["jumlah"];
			return $this->db->insert($this->_table, $this);
		}

		// function for update item from database
		 public function update(){
        	$post = $this->input->post();
        	$this->nama_produk = $post["nama"];
			$this->keterangan = $post["keterangan"];
			$this->harga = $post["harga"];
			$this->jumlah = $post["jumlah"];
        	return $this->db->update($this->_table, $this, array('id' => $post['id']));
    	}

		// function for delete item from database
		public function delete($id){
        	return $this->db->delete($this->_table, array("id" => $id));
    	}
	}
?>