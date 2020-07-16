<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Tugas 10 | safrudin244342@gmail.com</title>
	<link rel="stylesheet" href="<?php echo base_url('css/bootstrap.css');?>" type="text/css">
	<script type="text/javascript" src="<?php echo base_url('js/jquery.js');?>"></script>
	<script type="text/javascript" src="<?php echo base_url('js/bootstrap.js');?>"></script>	
</head>

<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
    	<a class="navbar-brand" href="#">Tugas 10 | Arkademy | safrudin2443420@gmail.com</a>
	</nav>
</header>

<script>

	function updateItem(id, nama, keterangan, jumlah, harga){
		let idModal = document.getElementById("idModal");
		let namaModal = document.getElementById("namaModal");
		let keteranganModal = document.getElementById("keteranganModal");
		let jumlahModal = document.getElementById("jumlahModal");
		let hargaModal = document.getElementById("hargaModal");
		
		idModal.value = id;
		namaModal.value = nama;
		keteranganModal.value = keterangan;
		jumlahModal.value = jumlah;
		hargaModal.value = harga;

		$('#updateModal').modal();
	}

	function deleteItem(url){
		$('#btn-delete').attr('href', url);
		$('#deleteModal').modal();
	}
</script>

<body>
	<div style="padding:20px;">
		<button type="button" class="btn btn-success" data-target="#addModel" data-toggle="modal">Add Item</button>
	</div>
	<div style="padding:20px;">
		<div class="table-responsive">
			<table class="table table-bordered table-striped table-hover">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama</th>
						<th>Keterangan</th>
						<th>jumlah</th>
						<th>harga</th>
						<th>Command</th>
					</tr>
				</thead>

				<tbody>
					<?php 
					foreach($products as $product):?>
						<tr>
							<td><?php echo $product->id ?></td>
							<td><?php echo $product->nama_produk ?></td>
							<td><?php echo $product->keterangan ?></td>
							<td><?php echo $product->jumlah ?></td>
							<td><?php echo $product->harga ?></td>
							<td>
								<button  data-toggle="modal" class="btn btn-success" onclick="updateItem('<?php echo $product->id; ?>','<?php echo $product->nama_produk; ?>','<?php echo $product->keterangan; ?>', '<?php echo $product->jumlah; ?>', '<?php echo $product->harga; ?>')" data-nama="azis">Update</button>
								<button type="button" class="btn btn-danger" onclick="deleteItem('<?php echo site_url('products/delete/'.$product->id) ?>')"><i class="fas fa-trash">Delete</button>
							</td>
						</tr>
					<?php endforeach; ?>
				</tbody>
			</table>
		</div>
	</div>

	<!-- load modal -->
	<?php $this->load->view("modal.php") ?>
</body>
</html>