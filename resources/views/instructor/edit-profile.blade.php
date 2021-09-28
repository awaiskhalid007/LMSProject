@extends('instructor.partials.layout')

@section('meta')

<title>Instructor Reviews | {{config('app.name')}}</title>

@endsection

@section('css')

@endsection

@section('main_content')
<div class="col-lg-9 col-md-8 col-12">
	<div class="card">
		<!-- Card header -->
		<div class="card-header">
			<h3 class="mb-0">Profile Details</h3>
			<p class="mb-0">
				You have full control to manage your own account setting.
			</p>
		</div>
		<!-- Card body -->
		<div class="card-body">
			<div class="d-lg-flex align-items-center justify-content-between">
				<div class="d-flex align-items-center mb-4 mb-lg-0">
					<img src="../assets/images/avatar/avatar-3.jpg" id="img-uploaded" class="avatar-xl rounded-circle" alt="" />
					<div class="ms-3">
						<h4 class="mb-0">Your avatar</h4>
						<p class="mb-0">
							PNG or JPG no bigger than 800px wide and tall.
						</p>
					</div>
				</div>
				<div>
					<a href="#" class="btn btn-outline-white btn-sm">Update</a>
					<a href="#" class="btn btn-outline-danger btn-sm">Delete</a>
				</div>
			</div>
			<hr class="my-5" />
			<div>
				@if(count($errors->all()) > 0)
					@if($errors->first() == 'success')
						<div class="alert alert-success mt-5 mb-3">
							Profile updated successfully.
						</div>
					@endif
				@endif
				<h4 class="mb-0">Personal Details</h4>
				<p class="mb-4">
					Edit your personal information and address.
				</p>
				<!-- Form -->
				<form class="row" action="{{route('instructor.updateProfile')}}" method="post">
					@csrf
					<div class="mb-3 col-12 col-md-6">
						<label class="form-label" for="name">Full Name</label>
						<input type="text" id="name" name="name" class="form-control" placeholder="Your name here.." value="{{$user->name}}" required />
					</div>
					<div class="mb-3 col-12 col-md-6">
						<label class="form-label" for="phone">Phone</label>
						<input type="text" id="phone" class="form-control" placeholder="Phone" name="phone" value="{{$user->phone}}" required />
					</div>
					<div class="mb-3 col-12 col-md-6">
						<label class="form-label" for="birth">Birthday</label>
						<input class="form-control flatpickr" type="text" placeholder="Birth of Date" id="birth"
							name="birthday" value="{{$user->birthday}}"/>
					</div>
					<div class="col-12">
						<button class="btn btn-primary" type="submit">
							Update Profile
						</button>
					</div>
				</form>
			</div>
			<hr class="my-5" />
			<div>
				@if(count($errors->all()) > 0)
					@if($errors->first() == 'addresssuccess')
						<div class="alert alert-success mt-5 mb-3">
							Address updated successfully.
						</div>
					@endif
				@endif
				<h4 class="mb-0">Personal Details</h4>
				<p class="mb-4">
					Edit your address information.
				</p>
				<!-- Form -->
				<form class="row" action="{{route('instructor.updateAddress')}}" method="post">
					@csrf
					<div class="mb-3 col-12 col-md-6">
						<label class="form-label" for="address">Street Address</label>
						<input type="text" id="address" class="form-control" placeholder="Address" value="{{$user->street_address}}" name="street_address" required />
					</div>
					<!-- Address -->
					<div class="mb-3 col-12 col-md-6">
						<label class="form-label" for="suburb">Suburb</label>
						<input type="text" id="suburb" class="form-control" placeholder="Address" value="{{$user->suburb}}" name="suburb" required />
					</div>
					<!-- City -->
					<div class="mb-3 col-12 col-md-6">
						<label class="form-label" for="postcode">Postcode</label>
						<input type="text" id="postcode" class="form-control" placeholder="Postcode" name="postcode" value="{{$user->postcode}}" />
					</div>
					<!-- State -->
					<div class="mb-3 col-12 col-md-6">
						<label class="form-label">State</label>
						<input type="text" id="state" class="form-control" placeholder="State" name="state" required value="{{$user->state}}"/>
					</div>
					<!-- Country -->
					<div class="mb-3 col-12 col-md-6">
						<label class="form-label">Country</label>
						<input type="text" id="country" class="form-control" placeholder="Country" name="country" required value="{{$user->country}}" />
					</div>
					<div class="col-12">
						<!-- Button -->
						<button class="btn btn-primary" type="submit">
							Update Profile
						</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>
	$("#sidenav ul li#profile").addClass("active");
</script>
@endsection