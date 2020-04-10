<!-- Contact Section -->
<section class="page-section" id="contact">
    <div class="container">
        <!-- Contact Section Heading -->
        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Message Me</h2>

        <!-- Icon Divider -->
        <div class="divider-custom">
            <div class="divider-custom-line"></div>
    
            <div class="divider-custom-icon">
                 <i class="fas fa-paint-brush"></i>
            </div>

            <div class="divider-custom-line"></div>
        </div>

        <!-- Contact Section Form -->
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                <form id="contactForm" action="{{ route('web.messages.store') }}" method="POST">
                    @csrf

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Name</label>
                            <input class="form-control" id="name" type="text" name="name" placeholder="Name" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Email Address</label>
                            <input class="form-control" id="email" type="email" name="email" placeholder="Email Address" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Phone Number</label>
                            <input class="form-control" id="phone" type="tel" name="contact_number" placeholder="Phone Number" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Subject</label>
                            <input class="form-control" id="subject" type="text" name="subject" placeholder="Subject" required="required">
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>

                    <div class="control-group">
                        <div class="form-group floating-label-form-group controls mb-0 pb-2">
                            <label>Message</label>
                            <textarea class="form-control" id="message" rows="5" name="message" placeholder="Message" required="required"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                
                    <br>

                    <div id="success"></div>
                    
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>