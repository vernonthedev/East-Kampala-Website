<?php
include'config.php';
?>
<!doctype html>
<html lang="en">
<head>
<title>EKC SDA Church | Contact Us</title>
<?php include'style.php'; ?>
<body>
<?php include'head.php'; ?>
<?php include'preloader.php'; ?>
    <div class="page-title-area" style="background: #0a53be;">
        <div class="d-table">
            <div class="d-table-cell">
                <div class="container">
                    <div class="page-title-content">
                        <h2>Contact</h2>
                        <ul>
                            <li><a href="./">Home</a></li>
                            <li>Contact</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="contact-section ptb-50">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="contact-info-address" style="border-radius: 10px;">
                        <h3>Quick Contact </h3>
                        <div class="info-contact"> <i class="flaticon-pin"></i>
                            <h3>Location</h3>
                            <span>Kimwanyi, Kira Bulindo</span>
                            <span>Kampala Uganda</span>
                        </div>
                        <div class="info-contact"> <i class="flaticon-testimonial"></i>
                            <h3>Service Timings</h3>
                            <span> <a href="#">Mid Week Prayer: Wednesday 7:30pm</a></span>
                            <span> <a href="#">Vespers: Friday 7:30pm</a></span>
                            <span> <a href="#">Sabbath School: Saturday 9:00am</a></span>
                        </div>
                        <div class="info-contact"> <i class="flaticon-call"></i>
                            <h3>Call Us</h3>
                            <span><a href="tel:99324 92888">+256 99324 92888</a></span>
                            <span><a href="tel:62940 69334">+256 62940 69334</a></span>
                            <span><a href="tel:89182 80265">+256 89182 80265</a></span>
                        </div>
                        <div class="info-contact"> <i class="flaticon-email"></i>
                            <h3>Email Us</h3>
                            <span> <a href="mailto:weforu24.7@gmail.com">eastkampalasda@gmail.com </a></span>
                            <span> <a href="mailto:info@weforyou.com">info@eastkampalasda.com </a></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-area">
                        <div class="contact-content">
                            <h3>Connect Card</h3>
                        </div>
                        <!-- <div class="contact-form"> -->
                            <form action="" method="POST">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-group input-group-outline my-3">
                                            <label class="form-label">Full Name</label>
                                            <input type="text" name="c_name" id="name" class="form-control is-valid" required data-error="Please Enter your Full Name" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Email</label>
                                            <input type="email" name="c_email" id="email" class="form-control is-valid" required data-error="Please Enter your email">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Phone Number</label>
                                            <input type="text" name="c_phone" maxlength="10" id="phone_number" required data-error="Please Enter your number" class="form-control is-valid" >
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="input-group input-group-outline my-3">
                                        <label class="form-label">Question, Prayer Request, Suggestions</label>
                                            <input type="text" name="c_subject" id="subjects" class="form-control is-valid" required data-error="Please Enter your Engagements" >
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12">
                                        <div class="input-group input-group-dynamic mb-4">
                                            <textarea name="c_msg" class="form-control is-valid" id="message" cols="30" rows="6" required data-error="Write your message" placeholder="Please Write Something"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="send-btn">
                                            <button type="submit" name="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Contact us <i class="flaticon-right"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="map-section">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3989.698171742032!2d32.635665874853665!3d0.44465329955100075!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x177db502e7023055%3A0xdf4e092e1234396c!2sSDA%20CHURCH%20EAST%20KAMPALA!5e0!3m2!1sen!2sug!4v1695277203494!5m2!1sen!2sug" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
<?php include'footer.php'; ?>
</body>
</html>

<?php
if (isset($_POST['submit'])) {

$c_name = $_POST['c_name'];
$c_email = $_POST['c_email'];
$c_phone = $_POST['c_phone'];
$c_subject = $_POST['c_subject'];
$c_msg = $_POST['c_msg'];

    $c_inquiry = "insert into contact_inquiry(c_id, c_name, c_email, c_phone, c_subject, c_massage) values('', '$c_name', '$c_email', '$c_phone', '$c_subject', '$c_msg')";
    $run_query = mysqli_query($conn, $c_inquiry);

    if ($run_query){
        echo '<script>alert("Inquiry Send to Admin.")</script>';
    }
    else{
        echo '<script>alert("Inquiry not Send to Admin.")</script>';
    }
}
?>
