<div class="row">
	<div class="col-md-12">
		<div class="card card-success card-outline">
			<div class="card-header">
				<h3 class="card-title">NIK : <?php echo $employee['nik'] ?></h3>

				<div class="card-tools">
					<a href="<?php echo site_url('Employee/') ?>" type="button" class="btn btn-tool">
						<i class="fas fa-arrow-left"></i> Back To List
					</a>
					<button type="button" class="btn btn-tool" data-card-widget="maximize">
						<i class="fas fa-expand"></i>
					</button>
				</div>
			</div>
			<!-- /.card-header -->
			<div class="card-body row">
				<div class="col-md-12">
					<table>
						<tr>
							<th>Name</th>
							<td>&nbsp;&nbsp; : &nbsp;&nbsp;</td>
							<td><?php echo $employee['first_name'].' '.$employee['last_name'] ?></td>
						</tr>
						<tr>
							<th>Address</th>
							<td>&nbsp;&nbsp; : &nbsp;&nbsp;</td>
							<td><?php echo $employee['address'] ?></td>
						</tr>
						<tr>
							<th>Place and Date of Birth</th>
							<td>&nbsp;&nbsp; : &nbsp;&nbsp;</td>
							<td><?php echo $employee['place_of_birth'].', '.date('d-m-Y', strtotime($employee['date_of_birth'])) ?>
							</td>
						</tr>
						<tr>
							<th>Start Join</th>
							<td>&nbsp;&nbsp; : &nbsp;&nbsp;</td>
							<td><?php echo date('d-m-Y', strtotime($employee['start_join'])) ?></td>
						</tr>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>