<div class="row">
	<div class="col-md-12">
		<form id="form-add-data">
			<div class="card card-success card-outline">
				<div class="card-header">
					<h3 class="card-title">Form Add Data</h3>

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
							<label>Employee <sup>*</sup></label>
							<select name="employee" class="form-control select2" required>
                                <option value="" selected disabled></option>
                                <?php foreach($employee->result_array() as $row){ ?>
                                    <option value="<?php echo $row['id'] ?>"><?php echo $row['nik'].' | '.$row['first_name'].' '.$row['last_name'] ?></option>
                                <?php } ?>
                            </select>
						</div>

                        <div class="form-group">
                            <label>Remaining Days Off</label>
                            <input type="number" name="remaining_days_off" class="form-control" value="0" readonly>
                        </div>

                        <div class="form-group">
							<label>Leave Date <sup>*</sup></label>
							<input type="text" name="leave_date" class="form-control datemask" value="<?php echo date('d-m-Y') ?>"
								data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask
								required>
						</div> 

                        <div class="form-group">
							<label>Long Leave <sup>*</sup></label>
							<input type="number" name="long_leave" class="form-control" value="1" min="1" max="12" required>
						</div>
					</div>
					<div class="col-md-6">  
						<div class="form-group">
							<label>Notes <sup>*</sup></label>
							<textarea name="notes" class="form-control" rows="12" required></textarea>
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