<div class="row">
	<div class="col-md-12">
		<div class="card card-success card-outline">
			<div class="card-header">
				<h3 class="card-title">NIK : <?php echo $employee_leave['nik'] ?></h3>

				<div class="card-tools">
					<a href="<?php echo site_url('EmployeeLeave/') ?>" type="button" class="btn btn-tool">
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
							<td><?php echo $employee_leave['first_name'].' '.$employee_leave['last_name'] ?></td>
						</tr> 
                        <tr>
                            <th>Leave Date</th>
                            <td>&nbsp;&nbsp; : &nbsp;&nbsp;</td>
                            <td><?php echo date('d-m-Y', strtotime($employee_leave['leave_date'])) ?></td>
                        </tr>
                        <tr>
                            <th>Long Leave</th>
                            <td>&nbsp;&nbsp; : &nbsp;&nbsp;</td>
                            <td><?php echo($employee_leave['long_leave'] > 1 ? $employee_leave['long_leave'].' Days' : $employee_leave['long_leave'].' Day') ?></td>
                        </tr>
                        <tr>
                            <th>Notes</th>
                            <td>&nbsp;&nbsp; : &nbsp;&nbsp;</td>
                            <td><?php echo $employee_leave['notes'] ?></td>
                        </tr>
					</table>
				</div>
			</div>

		</div>
	</div>
</div>