<div class="form">
	<!-- Form itself -->
	<form name="sentMessage"
		id="contactForm"
		class="well"
		validate
		data-aos="fade-up"
		data-aos-easing="linear"
		data-aos-delay="200"
		action="{{ route('home') }}"
		method="post"> 
		<div class="control-group">
			<div class="form-group mb-4">
				<input
					type="text"
					class="form-control form-control-lg"
					placeholder="Full Name"
					id="name"
					required
					data-validation-required-message="Please enter your name"
					name="name" />
				<p class="help-block"></p>
			</div>
		</div> 	

		<div class="form-group mb-4">
			<div class="controls">
				<input
					type="email"
					class="form-control form-control-lg"
					placeholder="Email"
					id="email"
					required
					data-validation-required-message="Please enter your email"
					name="email" />
			</div>
		</div> 	

		<div class="form-group mb-4">
			<div class="controls">
				<textarea
					rows="10"
					cols="100"
					class="form-control form-control-lg"
					placeholder="Message"
					id="message"
					required
					data-validation-required-message="Please enter your message"
					minlength="5"
					data-validation-minlength-message="Min 5 characters"
					maxlength="999"
					style="resize:none"
					name="message"
				></textarea>
			</div>
		</div>

		{{csrf_field()}}

		<div id="success"> </div> <!-- For success/fail messages -->
		<div class="text-center">
			<button class="btn btn-lg btn-primary py-3 mt-3 px-4 btn-pill" type="submit">Send Your Message</button>
		</div>
	</form>
</div>
