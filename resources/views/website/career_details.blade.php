@extends('website.layout.app')
@section('header')

@include('website.include.header')

@endsection
@section('content')
<!-- ==================================nav bar============================================= -->

<!-- ==================================breadcum section====================================== -->
<div class="container-fluid">
	<div class="row">
		<div class="col-lg-12 careerdtlsout_loutbackground">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 breadcumtext_outarea">
						<h1 class="connectus_outarea">
							Career
						</h1>
						<ul class="breadcum_linktextarea">
							<li><a href="{{route('index')}}">Home</a></li>
							<li>Define Your Career With Devant</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- ==================================breadcum section====================================== -->

<!-- ==================================career details area section=========================== -->
<section class="ocareer_dtlsoutarea">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 carerdetails_outsection">
				<div class="row">
					<div class="col-lg-6">
						<div class="leftcarerdtls_outsectionzx">
							<img src="{{asset('public/website')}}/assets/images/image-banner3.png" class="ijnimg_design">
						</div>
					</div>
					@if(Session::get('success'))
        	  		<script>
           		 		swal("Thank You for your application!", "{{Session::get('success')}}", "success");
        	   		</script>
    		  		@endif

					  @if($errors->has('message'))
					<script>
						swal("Please enter correct value!", "{{$errors->first('message')}}", "error");
					</script>
					@endif
					@if($errors->has('cv'))
					<script>
						swal("Please enter correct value!", "{{$errors->first('cv')}}", "error");
					</script>
					@endif
					@if($errors->has('address'))
					<script>
						swal("Please enter correct value!", "{{$errors->first('address')}}", "error");
					</script>
					@endif
					@if($errors->has('phone'))
					<script>
						swal("Please enter correct value!", "{{$errors->first('phone')}}", "error");
					</script>
					@endif
					@if($errors->has('email'))
					<script>
						swal("Please enter correct value!", "{{$errors->first('email')}}", "error");
					</script>
					@endif
					@if($errors->has('name'))
						<script>
						swal("Please enter correct value!", "{{$errors->first('name')}}", "error");
						</script>
					@endif
					@if($errors->has('captcha'))
					<script>
						swal("Please enter correct value!", "{{$errors->first('captcha')}}", "error");
					</script>
					@endif
					<div class="col-lg-6">
						<div class="rightcarerdtls_outsectionzx">
						<div class="row">
					     <h4 class="afce_textdesignz">Application for {{$career_details->title}}</h4>
				        </div>
						<form method='post' action="{{route('save_career_details')}}">
							@csrf
							<input type="hidden" name="country" value="{{$career_details->country}}" >
							<input type="hidden" name="application_name" value="{{$career_details->title}}" >
							<div class="row">
								<div class="col-lg-6">
									<div class="form-item">
										<input type="text" name="name" id="name" autocomplete="off" value="{{old('name')}}">
										<label for="name">YOUR NAME*</label>
										@if($errors->has('name'))
            						    <span class="text-danger">
                						<strong>{{$errors->first('name')}}</strong>
            							</span>
           								@endif
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-item">
										<input type="email" name="email" id="ycemail" autocomplete="off"  value="{{old('email')}}">
										<label for="ycemail">YOUR EMAIL*</label>
										@if($errors->has('email'))
            						    <span class="text-danger">
                						<strong>{{$errors->first('email')}}</strong>
            							</span>
           								@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<div class="form-item">
										<input type="text" name="phone"  id="cnumber" autocomplete="off" value="{{old('phone')}}">
										<label for="cnumber">YOUR PHONE NO*</label>
										@if($errors->has('phone'))
            						    <span class="text-danger">
                						<strong>{{$errors->first('phone')}}</strong>
            							</span>
           								@endif
									</div>
								</div>
								<div class="col-lg-6">
									<div class="form-item">
										<input type="text" name="address" id="adressy" autocomplete="off" value="{{old('address')}}">
										<label for="adressy">YOUR ADDRESS</label>
										@if($errors->has('address'))
            						    <span class="text-danger">
                						<strong>{{$errors->first('address')}}</strong>
            							</span>
           								@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-item">
										<input type="file" name="cv" id="cufile" autocomplete="off" class="kfldfrom_area" >
										@if($errors->has('cv'))
            						    <span class="text-danger">
                						<strong>{{$errors->first('cv')}}</strong>
            							</span>
           								@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-item">
										<input type="text" name="message" id="ymessage" autocomplete="off" class="ymsg_fldarea" value="{{old('message')}}">
										<label for="ymessage">YOUR MESSAGE</label>
										@if($errors->has('message'))
            						    <span class="text-danger">
                						<strong>{{$errors->first('message')}}</strong>
            							</span>
           								@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12">
									<div class="form-item">{!!captcha_img('math')!!} <input type="text" name="captcha" class="cattcha_dinputbox" required>
									@if($errors->has('captcha'))
            						<span class="text-danger">
                					<strong>{{$errors->first('captcha')}}</strong>
           							</span>
            						@endif
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-12 hsubmitbtn_outarea">
									<button class="blob-btn">
										APPLY NOW
										<span class="blob-btn__inner">
											<span class="blob-btn__blobs">
												<span class="blob-btn__blob"></span>
												<span class="blob-btn__blob"></span>
												<span class="blob-btn__blob"></span>
												<span class="blob-btn__blob"></span>
											</span>
										</span>
									</button>
									<br>
									<svg xmlns="http://www.w3.org/2000/svg" version="1.1" class="qgap_outarea">
										<defs>
											<filter id="goo">
												<feGaussianBlur in="SourceGraphic" result="blur" stdDeviation="10"></feGaussianBlur>
												<feColorMatrix in="blur" mode="matrix" values="1 0 0 0 0 0 1 0 0 0 0 0 1 0 0 0 0 0 21 -7" result="goo"></feColorMatrix>
												<feBlend in2="goo" in="SourceGraphic" result="mix"></feBlend>
											</filter>
										</defs>
									</svg>
								</div>
							</div>
                        </form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12 job_descriptionoutarea">
				<h1 class="wdgner_textdesign">{{$career_details->designation}}</h1>
				<p class="jobdsadrestext_design">
					{{$career_details->company_address}}
				</p>
				<h1 class="wdgner_textdesign ogap_jdescription">Key Skills :</h1>
				<p class="jobdsadrestext_design jexgap_areadesign">
				{{$career_details->skill}}
				</p>
				<h1 class="wdgner_textdesign ogap_jdescription">Job Description:</h1>
				<p class="jobdsadrestext_design jexgap_areadesign">
					{!!$career_details->details!!}
				</p>
			</div>
		</div>
	</div>
</section>
<!-- ==================================career details area section============================ -->

<!-- ==============================footer section========================================== -->
@endsection
@section('footer')

@include('website.include.footer')

@endsection