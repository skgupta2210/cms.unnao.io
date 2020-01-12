<?php include 'header_login.php'; ?>

    <!-- inner banner -->
    <div class="inner-banner-w3ls py-5" id="home">
        <div class="container py-xl-5 py-lg-3">
            <!-- register  -->
            <div class="modal-body mt-md-2 mt-5">
                <h3 class="title-w3 mb-5 text-center text-wh font-weight-bold">Join us Now</h3>
                <form action="save_join_us.php" method="POST">
                    <div class="form-group">
                        <label class="col-form-label">Username</label>
                        <input type="text" class="form-control" placeholder="your name"autocomplete="off" name="name" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Email</label>
                        <input type="email" class="form-control" placeholder="Enter Your Email"autocomplete="off" name="email"
                            required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">Phone</label>
                        <input type="text" class="form-control" placeholder="Mobile no." name="phone"autocomplete="off" required="">
                    </div>
                    <div class="form-group">
                        <label class="col-form-label">State</label>
                        <input type="text" class="form-control" name="state" required="">
                    </div>
					<div class="form-group">
                        <label class="col-form-label">City</label>
                        <input type="text" class="form-control" name="city" required="">
                    </div>
					<div class="form-group">
                        <label class="col-form-label">Interested Course</label>
                        <input type="text" class="form-control" name="course" required="" placeholder="BCA / BBA">
                    </div>
                    <div class="sub-w3l my-3">
                        <div class="sub-w3layouts_hub">
                            <input type="checkbox" id="brand1" value="">
                            <label for="brand1" class="text-li text-style-w3ls">
                                <span></span>I Accept to the Terms & Conditions</label>
                        </div>
                    </div>
                    <button type="submit" class="btn button-style-w3" name="join">Register</button>
                </form>
            </div>
            <!-- //register -->
        </div>
    </div>
    <!-- //inner banner -->
<?php include 'footer.php'; ?>