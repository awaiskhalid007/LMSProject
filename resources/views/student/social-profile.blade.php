@extends('student.partials.layout')

@section('meta')

<title>Student Social Profiles | {{config('app.name')}}</title>

@endsection

@section('css')

@endsection

@section('main_content')
<div class="col-lg-9 col-md-8 col-12">
	<div class="card">
		<!-- Card header -->
		<div class="card-header">
			<h3 class="mb-0">Social Profiles</h3>
			<p class="mb-0">
				Add your social profile links in below social accounts.
			</p>
		</div>
		<!-- Card body -->
		<div style="padding-left: 20px; padding-right: 20px;">
		@if(count($errors) > 0)
			@if($errors->first() == 'success')
				<div class="alert alert-success">
					Social links updated successfully.
				</div>
			@endif
		@endif
		</div>
		<form action="{{route('update.StudentSocial')}}" method="POST">
		@csrf
		<div class="card-body">
			<div class="row mb-5">
					<!-- Twitter -->
				<div class="col-lg-3 col-md-4 col-12">
					<h5>Twitter</h5>
				</div>
				<div class="col-lg-9 col-md-8 col-12">
					<input type="text" class="form-control mb-1" placeholder="Twitter Profile Name" name="twitter_link" value="{{$user->twitter_link}}" />
					<small class="text-muted">Add your Twitter username (e.g. johnsmith).</small>
				</div>
			</div>
				<!-- Facebook -->
			<div class="row mb-5">
				<div class="col-lg-3 col-md-4 col-12">
					<h5>Facebook</h5>
				</div>
				<div class="col-lg-9 col-md-8 col-12">
					<input type="text" class="form-control mb-1" placeholder="Facebook Profile Name" name="fb_link" value="{{$user->fb_link}}"/>
					<small class="text-muted">Add your Facebook username (e.g. johnsmith).</small>
				</div>
			</div>
				<!-- Instagram -->
			<div class="row mb-5">
				<div class="col-lg-3 col-md-4 col-12">
					<h5>Instagram</h5>
				</div>
				<div class="col-lg-9 col-md-8 col-12">
					<input type="text" class="form-control mb-1" placeholder="Instagram Profile Name" name="instagram_link" value="{{$user->instagram_link}}"/>
					<small class="text-muted">Add your Instagram username (e.g. johnsmith).</small>
				</div>
			</div>
				<!-- Linked in -->
			<div class="row mb-5">
				<div class="col-lg-3 col-md-4 col-12">
					<h5>LinkedIn Profile URL</h5>
				</div>
				<div class="col-lg-9 col-md-8 col-12">
					<input type="text" class="form-control mb-1" placeholder="LinkedIn Profile URL "  name="linkedin_link" value="{{$user->linkedin_link}}" />
					<small class="text-muted">Add your linkedin profile URL. (
						https://www.linkedin.com/in/john-smith-ba004b78)</small>
				</div>
			</div>
				<!-- Github -->
			<div class="row mb-3">
				<div class="col-lg-3 col-md-4 col-12">
					<h5>Github</h5>
				</div>
				<div class="col-lg-9 col-md-8 col-12">
					<input type="text" class="form-control mb-1" placeholder="Github Username" name="github_link" value="github_link" />
					<small class="text-muted">Add your Github username. (<span>@</span>johnsmith)
					</small>
				</div>
			</div>
				<!-- Button -->
			<div class="row">
				<div class="offset-lg-3 col-lg-6 col-12">
					<button type="submit" class="btn btn-primary">Save Social Profile</button>
				</div>
			</div>
		</div>
		</form>
	</div>

</div>
@endsection