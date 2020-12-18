<div class="panel-heading">
	<h3 class="panel-title"><i class="fa fa-file"></i> <?php echo $judul; ?></h3>
</div>
<?php if($this->session->flashdata('alert')){ ?>
	<div class="alert alert-success alert-dismissable">
	  <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
	  <?= $this->session->flashdata('alert'); ?>
	</div>
<?php } ?>
<div class="panel-body">
	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#myModal"><i class="fa fa-plus"></i> Create</button>
  <div class="row">
	<div class="col-lg-12">
		<label></label>
		<div class="form-group input-group">
	        <input type="text" class="form-control" name="key" id="key">
	        <span class="input-group-btn">
	          <button class="btn btn-info" type="button"><i class="fa fa-search"></i></button>
	        </span>
	    </div>
	</div>
  </div>
  <div class="row">
  	<div class="col-lg-12">
  		<div class="table-responsive">
          <table class="table table-hover table-striped">
          	<thead>
          		<tr>
          			<th>No</th>
          			<th>Invoice</th>
          			<th>To</th>
          			<th>Date</th>
          			<th>Desc</th>
          			<th>Status</th>
          			<th>Act</th>	
          		</tr>
          	</thead>
          	<tbody>
<?php 
$no=0;
foreach ($invoice->result() as $row) {
$no++;
?>
          		<tr>
          			<td><?= $no; ?></td>
          			<td><?= $row->no_invoice;?></td>
          			<td><?= $row->kepada;?></td>
          			<td><?= $row->date;?></td>
          			<td><?= $row->payment_type;?></td>
          			<td><?php 
          			if($row->is_paid=='yes') {
          				echo "PAID";
          			} else {
          				echo "UNPAID";
          			}
          			?></td>
          			<td><a href="#" class="btn btn-info btn-small" data-toggle="modal" data-target="#myModalItem" onclick="Item('<?= $row->no_invoice; ?>')"><i class="fa fa-tags"></i></a> | <a href="#" class="btn btn-success btn-small"><i class="fa fa-print"></i></a> | <a href="#" class="btn btn-warning btn-small"><i class="fa fa-pencil"></i></a> | <a href="<?= site_url('invoice/delData/'.$row->no_urut); ?>" class="btn btn-danger btn-small" onclick="return confirm('Yakin Akan menghapus?')"><i class="fa fa-ban"></i></a></td>
          		</tr>
<?php } ?>
          	</tbody>
          </table>
        </div>
  	</div>
  </div>
</div>


<!-- Modal Edit data -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="width: 80%;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Create Invoice</h4>
      </div>
      <div class="modal-body">
    <form method="POST" action="<?php echo site_url('invoice/addData'); ?>"> 
        <label>No Invoice</label>
		<input type="text" class="form-control" id="no_invoice" name="no_invoice" value="<?= $no_invoice; ?>">		
		<input type="hidden" name="no_urut" value="<?= $no_urut; ?>">
		<label>To</label>
		<input type="text" name="kepada" class="form-control" id="kepada" onkeyup="ProjectID()" required>
		<input type="hidden" name="kode_project" id="kode_project">
		<label>Date</label>
		<input type="date" name="date" class="form-control" id="date" value="<?= date('Y-m-d'); ?>" required>
		<label>For Payment</label>
		<input type="text" name="payment_type" class="form-control" id="payment_type" required>
		<label>Payment Due Date</label>
		<input type="date" name="due_date" class="form-control" id="due_date" required>	
		<label>Payment Status</label>
		<select name="is_paid" class="form-control" id="is_paid">
			<option value="no">UNPAID</option>
			<option value="yes">PAID</option>
		</select>
      </div>
      <div class='modal-footer'>
        <button type='submit' class='btn btn-primary'>Save</button>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Tutup</button>
	  </div>
	</form>
    </div>
  </div>
</div>
<!--END Modal Edit data -->

<!-- modal item -->
<div class="modal fade" id="myModalItem" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document" style="width: 80%;">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Invoice</h4>
      </div>
      <div class="modal-body">
    <form method="POST" action="#">
    	<div class="table-responsive">
    		<table class="table table-hover">
    			<thead>
    				<tr>    					
	    				<th>#</th>
	    				<th>Item Desc</th>
	    				<th>Qty</th>
	    				<th>Price</th>
	    				<th>Total</th>
    				</tr>
    				<tr>
    					<td><button type="button" class="btn btn-primary btn-small" onclick="saveItem()"><i class="fa fa-save"></i></button></td>
    					<td>
	    						<input type="text" name="item" class="form-control" id="item">
	    						<input type="hidden" name="no_invoice" id="inv">
    					</td>
    					<td>
	    						<input type="number" name="qty" class="form-control" id="qty" value="0" onkeyup="Gettotal()">
    					</td>
    					<td>
	    						<input type="text" name="price" class="form-control" id="price" value="0" onkeyup="Gettotal()">
    					</td>
    					<td>
    						<input type="text" name="total" class="form-control" id="total" readonly="readonly">
    					</td>
    				</tr>

    			</thead>
    			<tbody id="tempat_item">  					
						<tr>    					
		    				<td>-</td>
		    				<td>-</td>
		    				<td>-</td>
		    				<td>-</td>
		    				<td>-</td>
						</tr>
    			</tbody>
    		</table>
    	</div>
        
      <div class='modal-footer'>
        <button type='button' class='btn btn-default' data-dismiss='modal'>Tutup</button>
	  </div>
	</form>
    </div>
  </div>
</div>
<!-- modal item -->

<script type="text/javascript">
	function ProjectID() {
		let kepada=$('#kepada').val();
		let num=Math.floor((Math.random() * 100) + 1);
		let kode_project=kepada.substring(0,5).trim().toUpperCase()+num.toString();
		// console.log(kode_project);
		$('#kode_project').val(kode_project);
	}

	function delItem(id) {
		let no_invoice=$('#inv').val();
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('invoice/del_item'); ?>",
			data: "id_item="+id,
			success: function (data) {
				// console.log(data);
				Item(no_invoice);
			}
		});
	}

	function Item(id) {
		// console.log(id);
		$('#no_inv').html(id);
		$('#inv').val(id);
		$.ajax({
			type: "POST",
			url: "<?php echo site_url('invoice/get_item'); ?>",
			data: "no_invoice="+id,
			success: function(data) {
				// console.log(data);
				$('#tempat_item').html(data);
				$('#qty').val(0);
				$('#price').val(0);
				$('#total').val(0);
			}
		});

	}


	function saveItem() {
		let no_invoice=$('#inv').val();
		let item=$('#item').val();
		let price=$('#price').val();
		let qty=$('#qty').val();

		$.ajax({
			type: "POST",
			url: "<?php echo site_url('invoice/save_item'); ?>",
			data: "no_invoice="+no_invoice+"&item="+item+"&price="+price+"&qty="+qty,
			success: function(data) {
				$('#qty').val(0);
				$('#price').val(0);
				$('#total').val(0);
				$('#item').val('');
				// console.log(data);
				Item(no_invoice);
			}
		});
	}

	function Gettotal() {
		let qty=$('#qty').val();
		let price=$('#price').val();
		// console.log(qty);
		$('#total').val(qty*price);
	}






</script>