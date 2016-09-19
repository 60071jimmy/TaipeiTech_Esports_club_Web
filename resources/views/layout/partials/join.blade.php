 <!-- Join Section -->
    <section id="join">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading">Join Us</h2>
            <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <form name="sentMessage" id="joinForm" novalidate>
                        <div class="row">
                            <form action="/join" method="POST" class="form-horizontal">
                                {{ csrf_field() }}

                                
                                <div class="form-group">
                                    <div class="col-md-6">
                                        <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                        <button type="submit" class="btn btn-xl">Send</button>
                                        
                                    </div>
                                </div>
                            </form>
                            <!--div class="col-md-6">
                                <div class="form-group">  

                                    <input type="text" class="form-control" placeholder="Your Name *" id="name" name="name" required data-validation-required-message="Please enter your name.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Your Email *" id="email" required data-validation-required-message="Please enter your email address.">
                                    <p class="help-block text-danger"></p>
                                </div>
                                <div class="form-group">
                                    <input type="tel" class="form-control" placeholder="Your Phone *" id="phone" required data-validation-required-message="Please enter your phone number.">
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <textarea class="form-control" placeholder="Your Message *" id="message" required data-validation-required-message="Please enter a message."></textarea>
                                    <p class="help-block text-danger"></p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                            <div class="col-lg-12 text-center">
                                <div id="success"></div>
                                <button type="submit" class="btn btn-xl">Send</button>
                            </div-->
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!--iframe id="mainframe" src="https://docs.google.com/forms/d/e/1FAIpQLSc0raYmnrQEJbph82lIzlVK66q9I9MrWCKQrlQab6LTFl_sNQ/viewform?embedded=true" width="100%" height="1850" frameborder="0" scrolling="No" scrolling="Yes" style="margin-top: -50px" >載入中…</iframe-->

    </section>
