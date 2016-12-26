<div class="container main no-top-padding" id="anchor--message">
	<div class="row center-md">
		<div class="col-md-4">
			<!-- <h2 class="subheader">Find us</h2> -->
			<div class="row contact-wrapper">
				<div class="col-sm-4 col-md-12">
					<div class="contact-unit">
						<div class="unit-left">
							<i class="flaticon flaticon-dialogue-phone"></i>
						</div>
						<div class="unit-body">
							<p class="text-dark">Call Us Today:</p>
							<a class="text-hover" href="tel:+230 465 9556">
								+230 465 9556
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-12">
					<div class="contact-unit">
						<div class="unit-left">
							<i class="flaticon flaticon-pin-placeholder"></i>
						</div>
						<div class="unit-body">
							<p class="text-dark">Address:</p>
							<a class="text-hover" href="https://www.google.com/maps/place/Design+Forum+Ltd/@-20.265755,57.4801254,17z/data=!4m5!3m4!1s0x217c5b41ab3c575f:0xa05c06f172fe9915!8m2!3d-20.2654531!4d57.4826628">
								6 Avenue des Capucines <br>
								Quatre Bornes, Mauritius
							</a>
						</div>
					</div>
				</div>
				<div class="col-sm-4 col-md-12">
					<div class="contact-unit">
						<div class="unit-left">
							<i class="flaticon flaticon-dialogue-envelope-8"></i>
						</div>
						<div class="unit-body">
							<p class="text-dark">Contact Email:</p>
							<a class="text-hover" href="mail:aarc@intnet.com">
								aarc@intnet.com
							</a>
						</div>
					</div>
				</div>
				<!-- <div class="col-sm-6 col-md-12">
					<div class="contact-unit">
						<div class="unit-left">
							<i class="flaticon flaticon-essential-time"></i>
						</div>
						<div class="unit-body">
							<p class="text-dark">Opening Hours:</p>
							<a class="text-hover" href="tel:+230 465 9556">
								Monday - Friday: 8am - 5pm<br>
								Saturday - Sunday: Closed<br>
								<p class="text-sm">*hours may be subject to change</p>
							</a>
						</div>
					</div>
				</div> -->
			</div>
				
		</div>
		<div class="col-md-8">
			<!-- <h2 class="subheader">Get in touch</h2> -->
			<form method="POST" action="/send-message" class="form" id="js-contact-form">
                {{ csrf_field() }}
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <!-- <label>First Name</label> -->
                            <input type="text" name="name_first" class="form-control" placeholder="First Name">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <!-- <label>Last Name</label> -->
                            <input type="text" name="name_last" class="form-control" placeholder="Last Name">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <!-- <label>Email</label> -->
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="form-group">
                            <!-- <label>Phone Number</label> -->
                            <input type="text" name="phone_number" class="form-control" placeholder="Phone Number">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12">
                        <div class="form-group">
                            <!-- <label>Message</label> -->
                            <textarea name="message" class="form-control" rows="5" placeholder="Message"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    	<button class="btn btn-color btn-clear" id="js-clear" style="margin-right: 10px; margin-top: 20px">Clear</button>
                    	<button type="submit" class="btn btn-color btn-submit" style="margin-right: 10px; margin-top: 20px">Send</button>
                    </div>
                </div>
            </form>
		</div>
	</div>
</div>