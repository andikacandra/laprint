<div class="row">
	<div class="col-md-12">
		<form id="form-add-data">
            <input type="hidden" name="id" value="<?php echo $employee_leave['id'] ?>">
			<div class="card card-success card-outline">
				<div class="card-header">
					<h3 class="card-title">Form Update Data (NIK : <?php echo $employee_leave['nik'] ?>)</h3>

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
					<div class="col-md-6">
						<div class="form-group">
							<label>Employee</label>
                            <input type="hidden" name="employee" value="<?php echo $employee_leave['employee'] ?>">
							<input type="text" class="form-control" value="<?php echo $employee_leave['first_name'].' '.$employee_leave['last_name'] ?>" readonly>
						</div>

                        <div class="form-group">
                            <label>Remaining Days Off</label>
                            <input type="number" name="remaining_days_off" class="form-control" value="0" readonly>
                        </div>

                        <div class="form-group">
							<label>Leave Date <sup>*</sup></label>
							<input type="text" name="leave_date" class="form-control datemask" value="<?php echo date('d-m-Y', strtotime($employee_leave['leave_date'])) ?>"
								data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask
								required>
						</div> 

                        <div class="form-group">
							<label>Long Leave <sup>*</sup></label>
							<input type="number" name="long_leave" class="form-control" value="<?php echo $employee_leave['long_leave'] ?>" min="1" max="12" required>
						</div>
					</div>
					<div class="col-md-6">  
						<div class="form-group">
							<label>Notes <sup>*</sup></label>
							<textarea name="notes" class="form-control" rows="12" required><?php echo $employee_leave['notes'] ?></textarea>
						</div>
					</div>
				</div>
				<!-- /.card-body -->
				<div class="card-footer text-right">
					<button type="reset" class="btn btn-outline-danger">Reset</button>
					<button type="submit" class="btn btn-primary">Submit</button>
				</div>
			</div>
		</form>
	</div>
</div>