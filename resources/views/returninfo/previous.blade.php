@extends('layouts.app')
@section('content')
<h1 class="h2">Return Form</h1>
<hr />
<!--for add product in invoice-->
<div class="card">
	<div class="card-header">
		Generate return form
	</div>
	<div class="card-body">
		<form id="invoiceId" >
			<div class="form-row">
				<div class="form-group col-md-3 col-lg-4">
					
						<input
						type="text"
						class="form-control"
						id="invoiceId"
						name = "invoiceId"
						placeholder="Invoice Id"
						value=""
						required
						/>
						<button type="submit" class="btn btn-primary" >Search</button>
					
				</div>
			</div>
		</form>
		<form onsubmit="event.preventDefault();onReturnFormSubmit();">
			<div class="form-row">
				<div class="form-group col-md-3 col-lg-4">
					<div class="input-group mb-3">
						<select
						class="custom-select"
						id="productName"
						required
						autofocus
						>
							<option selected value="">Choose Product...</option>
						</select>
					</div>
				</div>
				<div class="form-group col-md-1 col-lg-4">
				<span class="text-muted"
				>Buying Quantity&emsp;<span
				class="badge badge-danger badge-pill"
				id="buyingQuantity"
				name = "buyingQuantity"
				>-</span
				></span
				><!--Connected with DB-->
				</div>
				<div class="form-group col-md-2 col-lg-4">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">$PUP
							</span>
						</div>
						<input
						type="text"
						class="form-control"
						aria-label="Dollar amount (with dot and two decimal places)"
						required
						placeholder="0.00"
						name="price"
						id="price"
						readonly
						/><!--Connected with DB & will be always in readonly mode-->
					</div>
				</div>
				<div class="form-group col-md-1 col-lg-4">
					<span class="text-muted"
					>Total Price&emsp;<span
					class="badge badge-warning badge-pill"
					id="totalPrice"
					>_</span
					></span
					>
				</div>
				<div class="form-group col-md-2 col-lg-4">
					<div class="input-group">
						<div class="input-group-prepend">
							<span class="input-group-text">Discount %</span>
						</div>
						<input
						type="number"
						class="form-control"
						name="percentage"
						id="percentage"
						placeholder="In Percentage"
						required
						readonly
						/>
					</div>
				</div>


				<div class="form-group col-md-1 col-lg-4">
					<span class="text-muted"
					>Net Price&emsp;<span
					class="badge badge-success badge-pill"
					id="netPrice"
					>_</span
					></span
					>
				</div>

				<div class="form-group col-md-2 col-lg-4">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Return Quantity</span>
						</div>
						<input
						type="number"
						class="form-control"
						name="returnQuantity"
						id="returnQuantity"
						placeholder="Return Quantity"
						required
						/>
					</div>
				</div>
				<div class="form-group col-md-2 col-lg-4">
					<div class="input-group mb-3">
						<div class="input-group-prepend">
							<span class="input-group-text">Damage</span>
						</div>
						<input
						type="number"
						class="form-control"
						name="damage"
						id="damage"
						placeholder="Damage Quantity"
						required
						/>
					</div>
				</div>
			</div>
			
<!--
			<div class="row">
				<div class="col-md-6 mb-3">
					<label for="Name">Name (Individual/Organization)</label>
					<input
					type="text"
					class="form-control"
					id="name"
					placeholder="Name"
					required
					/>
				</div>
				<div class="col-md-6 mb-3">
					<label for="address">Address</label>
					<input
					type="text"
					class="form-control"
					id="address"
					placeholder="1234 Main St"
					required
					/>
				</div>
			</div>
-->
			<hr />
			<div class="form-group col-md-4">
				<button type="submit" class="btn btn-primary btn-md">
					Add product
				</button>
				<input type="reset" value="Reset" class="btn btn-info btn-md" />
			</div>
		</form>
	</div>
</div>
<br />
<!--invoice -->
<div class="card" id="invoice" style="display:none;">
	<div class="card-header">
		Invoice
	</div>
	<div class="card-body">

			<h2 align="center">
				X Warehouse
			</h2>
<form id="invoiceForm" name="invoiceForm">	
			<address align="center">
				<div class=" form-group row">
					<div class=" col-md-6 mb-3">
						<label for="phoneNumber">Phone Number</label>
						<input
						type="text"
						class="form-control"
						id="phoneNumber"
						placeholder="Phone Number"
						required
						/>
					</div>
		
				<div class="col-md-6 mb-3">
					<label for="name">Name (Individual/Organization)</label>
					<input
					type="text"
					class="form-control"
					id="name"
					placeholder="Name"
					required
					/>
				</div>
				<div class="col-md-6 mb-3">
					<label for="address">Address</label>
					<input
					type="text"
					class="form-control"
					id="address"
					placeholder="1234 Main St"
					required
					/>
				</div>
				</div>
	<!--
				<span class="text-muted">Customer Name:</span
					><span id="cus_name" name="customerName" style="border-bottom: 1px dashed black"></span
						><span>,</span> <span class="text-muted">Customer Address:</span
							><span id="cus_add" name="customerAddress" style="border-bottom: 1px dashed black"></span
								><span>;</span>
-->
			</address>
			<hr />
			<div>
				<table
				class="table table-bordered table-hover table-sm"
				id="invoiceList"
				>
					<thead>
						<tr>
							<th scope="col">#</th>
							<th scope="col">Product Name</th>
							<th scope="col">Quantity</th>
							<th scope="col">PUP in $</th>
							<th scope="col">Total Price</th>
							<th scope="col">Discount in %</th>
							<th scope="col">Net Price</th>
							<th scope="col">Action</th>
						</tr>
					</thead>
					<tbody id="here"></tbody>
				</table>
			</div>
<!-- invoice form
		<form method="POST" action="{{route('invoices.store')}}" accept-charset="UTF-8" enctype="multipart/form-data">
			@csrf -->
	<!--	<form id="invoiceForm" name="invoiceForm">	-->
			<div>
							<div class="form-group row">
								<label for="totalAmount" class="col-sm-2 col-form-label"
								>Total Amount:</label
								>
								<div class="col-sm-2">
									<input
									type="text"
									readonly
									class="form-control-plaintext"
									id="totalAmount"
									name="totalAmount"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label for="deliveryCharge" class="col-sm-2 col-form-label"
								>Delivery Charge:</label
								>
								<div class="col-sm-2">
									<input
									type="text"
									class="form-control"
									id="deliveryCharge"

									placeholder="0"
									onkeyup="calculation1()"
									
									/>
								</div>
							</div>
							<div class="form-group row">
								<label for="discount" class="col-sm-2 col-form-label"
								>Discount:</label
								>
								<div class="col-sm-2">
									<input
									type="text"
									class="form-control"
									id="discount"
									name="discount"
									placeholder="0.00"
									
									onkeyup="calculation2()"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label for="netAmount" class="col-sm-2 col-form-label"
								>Net Amount:</label
								>
								<div class="col-sm-2">
									<input
									type="text"
									readonly
									class="form-control-plaintext"
									id="netAmount"
									name="netAmount"
									value=""
									/>
								</div>
							</div>
							<div class="form-group row">
								<label for="payMethod" class="col-sm-2 col-form-label"
								>Pay Method:</label
								>
								<div class="form-group col-md-2">
									<div class="input-group mb-2">
										<select class="custom-select" id="payMethod" required>
											<option selected>Choose...</option>
											<option value="1">Paid</option>
											<option value="2">Partial</option>
											<option value="3">Unpaid</option>
										</select>
									</div>
								</div>
							</div>
							<div class="form-group row">
								<label for="paidAmount" class="col-sm-2 col-form-label"
								>Paid Amount:</label
								>
								<div class="col-sm-2">
									<input
									type="text"
									class="form-control"
									id="paidAmount"
									name="paidAmount"
									placeholder="0"
									required
									onkeyup="finalCalculation()"
									/>
								</div>
							</div>
							<div class="form-group row">
								<label for="amountDue" class="col-sm-2 col-form-label"
								>Amount Due:</label
								>
								<div class="col-sm-2">
									<input
									type="text"
									readonly
									class="form-control-plaintext"
									id="amountDue"
									name="amountDue"
									value=""
									/>
								</div>
							</div>
			</div>
			<hr />
			<button type="submit" id="invoiceSubmit" name="invoiceSubmit" class="btn btn-primary"> Checkout</button>
		</form>
	</div>
</div>
@endsection


