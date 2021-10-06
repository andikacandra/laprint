<div class="row">
	<div class="col-md-12">
		<div class="card card-success card-outline">
			<div class="card-header">
				<h3 class="card-title">Table Employee List</h3>

				<div class="card-tools">
					<a href="<?php echo site_url('Employee/add/') ?>" type="button" class="btn btn-tool">
						<i class="fas fa-plus"></i> Add Data
					</a>
					<button type="button" class="btn btn-tool" data-card-widget="maximize">
						<i class="fas fa-expand"></i>
					</button>
				</div>
				<!-- /.card-tools -->
			</div>
			<!-- /.card-header -->
			<div class="card-body">
				<div class="table-responsive">
					<table id="table-1" class="table table-bordered table-striped">
						<thead>
							<tr>
								<th>No.</th>
								<th>NIK</th>
								<th>Name</th>
								<th>Address</th>
								<th>Date Of Birth</th>
								<th>Start Join</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
							<?php $no = 1; foreach($employee->result_array() as $row ){ ?>
							<tr>
								<td><?php echo $no++; ?></td>
								<td><?php echo $row['nik']; ?></td>
								<td><?php echo $row['first_name'].' '.$row['last_name']; ?></td>
								<td><?php echo $row['address']; ?></td>
								<td><?php echo date('d-m-Y', strtotime($row['date_of_birth'])); ?></td>
								<td><?php echo date('d-m-Y', strtotime($row['start_join']   )); ?></td>
								<td>
									<div class="btn-group" role="group" aria-label="Basic example">
										<a href="<?php echo site_url('Employee/detail/'.$row['id']) ?>" class="btn btn-info btn-sm"><i class="fa fa-eye"></i> Detail</a>
										<a href="<?php echo site_url('Employee/edit/'.$row['id']) ?>" class="btn btn-warning btn-sm"><i class="fa fa-pencil-alt"></i> Update</a>
										<a href="<?php echo site_url('Employee/setDelete/'.$row['id']) ?>" class="btn btn-danger btn-sm" onclick="if(!confirm('Are you sure you want to delete this data?')){return false}"><i class="fa fa-trash"></i> Delete</a>
									</div>
								</td>
							</tr>
							<?php } ?>
						</tbody>
					</table>
				</div>
			</div>
			<!-- /.card-body -->
		</div>
	</div>
</div>