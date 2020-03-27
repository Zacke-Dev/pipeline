<div class="modal fade" id="update_modal<?php echo $fetch['pipeid'];?>" aria-hidden="true">

	<div class="modal-dialog">

		<div class="modal-content">

			<form method="POST" action="update_query.php">

				<div class="modal-header">

					<h3 class="modal-title">Update Loan Info</h3>

				</div>

				<div class="modal-body">

					<div class="col-md-2"></div>

					<div class="col-md-8">

						<div class="form-group">
							
							<div class="form-group1">

								<label >* Required Field</label>

							</div>

							<label>Loan Number</label>

							<input type="hidden" name="pipeid" value="<?php echo $fetch['pipeid'];?>"/>

							<input type="text" name="loannumber" value="<?php echo $fetch['loannumber'];?>" class="form-control"/>

						</div>
						
						<div class="form-group">

							<label>Processor</label>

							<input type="text" name="processor" value="<?php echo $fetch['processor'];?>" class="form-control"/>

						</div>

						<div class="form-group">

							<label>Lender *</label>

							<input type="text" name="lender" value="<?php echo $fetch['lender'];?>" class="form-control" required="required"/>

						</div>						

						<div class="form-group">

							<label>Customer Name *</label>

							<input type="text" name="customername" value="<?php echo $fetch['customername'];?>" class="form-control" required="required" />

						</div>

						<div class="form-group">

							<label>Address</label>

							<input type="text" name="address" value="<?php echo $fetch['address'];?>" class="form-control"/>

						</div>

						<div class="form-group">

							<label>Loan Amount</label>

							<input type="text" name="loanamount" value="<?php echo $fetch['loanamount'];?>" class="form-control"/>

						</div>
						
						<div class="form-group">

							<label>Contract Price</label>

							<input type="text" name="contractprice" value="<?php echo $fetch['contractprice'];?>" class="form-control"/>

						</div>
						
						<div class="form-group">

							<label>Title Company</label>

							<input type="text" name="titleco" value="<?php echo $fetch['titleco'];?>" class="form-control"/>

						</div>							
						
						<div class="form-group">

							<label>App Docs Signed?</label>

							<input type="text" name="appdocs" placeholder="Yes/No" value="<?php echo $fetch['appdocs'];?>" class="form-control"/>

						</div>	
						
						<div class="form-group">

							<label>Appraisal Ordered?</label>

							<input type="text" name="appraisal" placeholder="Yes/No" value="<?php echo $fetch['appraisal'];?>" class="form-control"/>

						</div>	
						
						<div class="form-group">

							<label>Approval Required?</label>

							<input type="text" name="approval" placeholder="Yes/No" value="<?php echo $fetch['approval'];?>" class="form-control"/>

						</div>
						
						<div class="form-group">

							<label>Closing Date *</label>

							<input type="date" name="closingdate" value="<?php echo $fetch['closingdate'];?>" class="form-control" required="required"/> <br>
							
							<input type="checkbox" name="clsdateconfirmed" value="<?php echo $fetch['confirmed'];?>" class="forme-control"/>
							
							<label>Closing Date Confirmed</label>							

						</div>

						<div class="form-group">

							<label>Closing Location</label>

							<input type="text" name="closingloc" value="<?php echo $fetch['closingloc'];?>" class="form-control"/>

						</div>
						
						<div class="form-group">

							<label>Closing Time</label>

							<input type="time" name="closingtime" value="<?php echo $fetch['closingtime'];?>" class="form-control"/>

						</div>
						
						<div class="form-group">

							<label>Product</label>

							<input type="text" name="product" value="<?php echo $fetch['product'];?>" class="form-control"/>

						</div>
						
						<div class="form-group">

							<label>Interest Rate</label>

							<input type="text" name="interestrate" value="<?php echo $fetch['notes'];?>" class="form-control"/>

						</div>						
						

					</div>

				</div>

				<div style="clear:both;"></div>

				<div class="modal-footer">

					<button name="update" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Update</button>

					<button class="btn btn-danger" type="button" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Close</button>

				</div>

				</div>

			</form>

		</div>

	</div>

</div>