@extends('layouts.app')
@section('content')
<div class="container">
	<div id="header"></div>
	<h1 class="h2">Return Form</h1>
	<hr />
	<div class="container">
		<div>
			<h4 class="d-flex justify-content-between align-items-center mb-3">
				<span class="text-muted">Product Description</span>
			</h4>
			<form>
				<div class="form-row">
					<div class="form-group col-md-4">
						<input
						type="text"
						class="form-control"
						id="productId"
						name = "productId"
						placeholder="Product Id"
						required
						autofocus="autofocus"
						/>
					</div>
					<div class="form-group col-md-2">
						<input
						type="number"
						class="form-control"
						id="quantity"
						name=" quantity "
						placeholder="Quantity"
						required
						/>
					</div>
					<div class="form-group col-md-3">
						<div class="input-group mb-3">
							<div class="input-group-prepend">
								<span class="input-group-text">Damage</span>
							</div>
							<input
							type="number"
							id="damage"
							name = "damage"
							class="form-control"
							required
							/>
						</div>
					</div>
				</div>
				<hr />
				<h4 class="d-flex justify-content-between align-items-center mb-3">
					<span class="text-muted">Invoice Information</span>
				</h4>
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="invoiceId">Invoice Id </label>
						<input
						type="text"
						class="form-control"
						id="invoiceId"
						name = "invoiceId"
						placeholder="Invoice Id"
						value=""
						required
						/>
					</div>
					<div class="col-md-6 mb-3">
						<label for="phoneNumber">Phone Number</label>
						<input
						type="text"
						class="form-control"
						id="phoneNumber"
						placeholder="Phone Number"
						required
						/>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6 mb-3">
						<label for="Name">Name (Individual/Organization)</label>
						<input
						type="text"
						class="form-control"
						id="name"
						name="name"
						placeholder="Name"
						value=""
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
				<hr />
				<button
				class="btn btn-primary btn-lg"type="submit" disabled>Continue to return</button>
		</form>
	</div>
</div>
</div>
@endsection