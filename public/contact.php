<?php $page='contact';?>
<?php include 'includes/home/header.php'; ?>
<div class="page page-contact">
    <div class="breadcrumb-block">
        <div class="container">
            <div class="page-title">
                <h1>Contact Us</h1>
            </div>
            <ul class="breadcrumb">
                <li class="nav-link active">
                    <a href="./" class="link">
                        <i class="fa fa-home"></i>
                    </a>
                </li>
                <li>
                    <div class="link">Contact Us</div>
                </li>
            </ul>
        </div>
    </div>
    <div class="inner-page">
        <div class="contact-wrap">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-4">
                        <div class="address-info-wrap">
                            <h3 class="contact-head">Address Info</h3>
                            <div class="address-detail">
                                <ul>
                                    <li>
                                        <i class="fa fa-map-marker"><span>Address</span></i>
                                        <?= $address; ?>
                                    </li>
                                    <li>
                                        <i class="fa fa-phone"><span>Phone</span></i>
                                        <a href="tel:<?= $number; ?>"><?= $number; ?></a>
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"><span>Email</span> </i>
                                        <a href="mailto:<?= $email; ?>"><?= $email; ?></a>
                                    </li>
                                    <li>
                                        <i class="fas fa-file-upload"><span>ABN</span></i>
                                        <a href="" target="_blank"><?= $abn; ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-8">
                        <div class="form-wrapper">
                            <h3 class="contact-head">Contact Info</h3>
                            <form class="form" action="https://formsubmit.co/<?php echo $email;?>" method="POST" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" name="first_name" type="text"
                                                placeholder="First Name *" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" name="last_name" type="text"
                                                placeholder="Last Name *" required />
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Email Address"
                                                name="email" required
                                                pattern="^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input class="form-control" name="subject" type="text"
                                                placeholder="Subject *" required />
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" name="message" placeholder="Message *"
                                                required></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="button">
                                    <div class="">
                                        <input class="btn btn-custom-large btn-primary" type="submit" id="btn-sub"
                                          value="Send Message">
                                    </div>
                                </div>
                                <input type="hidden" name="_template" value="table">
                                <input type="text" name="_honey" style="display:none">
                                <input type="hidden" name="_subject" value="New Contact Info!">
                                <input type="hidden" name="_next" value="https://4eceramics.com.au/thanks">
                            </form>



                            



                        </div>
                    </div>
                </div>
            </div>
            <div class="google-map">

                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d26493.055699321212!2d151.03972662602203!3d-33.89913124048404!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6b12bb7e59cacb31%3A0x5017d681632b8e0!2sGreenacre%20NSW%202190%2C%20Australia!5e0!3m2!1sen!2snp!4v1641456221896!5m2!1sen!2snp"
                    style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
</div>
<?php include 'includes/home/footer.php'; ?>