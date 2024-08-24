<!-- Contact Start -->
<div class="container-fluid contact py-5">
    <div class="container py-5">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 900px;">
            <h4 class="text-primary mb-4">Contact Us</h4>
            <h1 class="display-5 mb-4">Get In Touch With Us</h1>
            <p class="mb-0">Dolor sit amet consectetur, adipisicing elit. Ipsam, beatae maxime. Vel animi eveniet
                doloremque reiciendis soluta iste provident non rerum illum perferendis earum est architecto dolores
                vitae quia vero quod incidunt culpa corporis, porro doloribus. Voluptates nemo doloremque cum.
            </p>
        </div>
        <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.1s">
                <h2 class="display-5 mb-2">Our Contact Form</h2>
                <p class="mb-4">The contact form is currently inactive. Get a functional and working contact form with
                    Ajax & PHP in a few minutes. Just copy and paste the files, add a little code and you're done. <a
                        class="text-primary fw-bold" href="https://htmlcodex.com/contact-form">Download Now</a>.</p>
                <form action="/contact/update/{{ $data_contact->id }}" method="post">
                    @csrf
                    <div class="row g-3">
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name"
                                    placeholder="name" value="{{ $data_contact->name }}">

                                <label for="subject">Your Name</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="email" name="email"
                                    placeholder="email" value="{{ $data_contact->email }}">
                                <label for="subject">Email</label>
                            </div>
                        </div>

                        <div class="col-12">
                            <div class="form-floating">
                                <input class="form-control" id="message" name="message"
                                    value="{{ $data_contact->message }}" style="height: 160px"></input>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-light d-flex align-items-center justify-content-center mb-3"
                        style="width: 90px; height: 90px; border-radius: 50px;"><i
                            class="fa fa-home fa-2x text-primary"></i></div>
                    <div class="ms-4">
                        <h4>Addresses</h4>
                        <p class="mb-0">123 ranking Street, New York, USA</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-light d-flex align-items-center justify-content-center mb-3"
                        style="width: 90px; height: 90px; border-radius: 50px;"><i
                            class="fa fa-map-marker-alt fa-2x text-primary"></i></div>
                    <div class="ms-4">
                        <h4>Addresses</h4>
                        <p class="mb-0">123 ranking Street, New York, USA</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-light d-flex align-items-center justify-content-center mb-3"
                        style="width: 90px; height: 90px; border-radius: 50px;"><i
                            class="fa fa-phone-alt fa-2x text-primary"></i></div>
                    <div class="ms-4">
                        <h4>Mobile</h4>
                        <p class="mb-0">+012 345 67890</p>
                        <p class="mb-0">+012 345 67890</p>
                    </div>
                </div>
                <div class="d-flex align-items-center mb-4">
                    <div class="bg-light d-flex align-items-center justify-content-center mb-3"
                        style="width: 90px; height: 90px; border-radius: 50px;"><i
                            class="fa fa-envelope-open fa-2x text-primary"></i></div>
                    <div class="ms-4">
                        <h4>Email</h4>
                        <p class="mb-0">info@example.com</p>
                        <p class="mb-0">info@example.com</p>
                    </div>
                </div>
                <div class="d-flex align-items-center">
                    <div class="me-4">
                        <div class="bg-light d-flex align-items-center justify-content-center"
                            style="width: 90px; height: 90px; border-radius: 50px;"><i
                                class="fas fa-share fa-2x text-primary"></i></div>
                    </div>
                    <div class="d-flex">
                        <a class="btn btn-lg-square btn-primary rounded-circle me-2" href=""><i
                                class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i
                                class="fab fa-twitter"></i></a>
                        <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i
                                class="fab fa-instagram"></i></a>
                        <a class="btn btn-lg-square btn-primary rounded-circle mx-2" href=""><i
                                class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Contact End -->
