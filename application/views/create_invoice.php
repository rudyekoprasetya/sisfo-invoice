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
          			<th>To</th>
          			<th>Date</th>
          			<th>Desc</th>
          			<th>Payment Due Date</th>
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
          			<td><?= $row->kepada;?></td>
          			<td><?= $row->date;?></td>
          			<td><?= $row->payment_type;?></td>
          			<td><?= $row->due_date;?></td>
          			<td><?php 
          			if($row->is_paid=='yes') {
          				echo "PAID";
          			} else {
          				echo "UNPAID";
          			}
          			?></td>
          			<td><a href="#" class="btn btn-info btn-small"><i class="fa fa-tags"></i></a> | <a href="#" class="btn btn-success btn-small"><i class="fa fa-print"></i></a> | <a href="#" class="btn btn-warning btn-small"><i class="fa fa-pencil"></i></a> | <a href="#" class="btn btn-danger btn-small"><i class="fa fa-ban"></i></a></td>
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

<script type="text/javascript">
	function ProjectID() {
		let kepada=$('#kepada').val();
		let num=Math.floor((Math.random() * 100) + 1);
		let kode_project=kepada.substring(0,4).trim().toUpperCase()+num.toString();
		// console.log(kode_project);
		$('#kode_project').val(kode_project);
	}
</script>