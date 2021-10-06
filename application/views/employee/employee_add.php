<div class="row">
	<div class="col-md-12">
		<form id="form-add-data">
			<div class="card card-success card-outline">
				<div class="card-header">
					<h3 class="card-title">Form Add Data</h3>

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
					<div class="col-md-6">
						<div class="form-group">
							<label>First Name <sup>*</sup></label>
							<input type="text" name="first_name" class="form-control" style="text-transform: uppercase;"
								required>
						</div>

						<div class="form-group">
							<label>Last Name <sup>*</sup></label>
							<input type="text" name="last_name" class="form-control" style="text-transform: uppercase;"
								required>
						</div>
						<div class="form-group">
							<label>Address <sup>*</sup></label>
							<textarea name="address" class="form-control" rows="3" required></textarea>
						</div>
					</div>
					<div class="col-md-6">

						<div class="form-group">
							<label>Place Of Birth <sup>*</sup></label>
							<input type="text" name="place_of_birth" class="form-control"
								style="text-transform: uppercase;" required>
						</div>

						<div class="form-group">
							<label>Date Of Birth <sup>*</sup></label>
							<input type="text" name="date_of_birth" class="form-control datemask"
								data-inputmask-alias="datetime" data-inputmask-inputformat="dd-mm-yyyy" data-mask
								required>
						</div>

						<div class="form-group">
							<label>Start Join <sup>*</sup></label>
							<input type="text" name="start_join" class="form-control datemask"
								value="<?php echo date('d-m-Y') ?>" data-inputmask-alias="datetime"
								data-inputmask-inputformat="dd-mm-yyyy" data-mask required>
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