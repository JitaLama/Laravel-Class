@extends('site.template')
@section('meropage')

<div class="contactUs">
    <div class="title">
        <h2>Get in Touch</h2>
    </div>
    <div class="box">
        <div class="contact1 form">
            <h3>Send a Message</h3>
            <form>
                <div class="formBox">
                    <div class="row50">
                        <div class="inputBox">
                            <span>First Name</span>
                            <input type="text" placeholder="John">
                        </div>
                        <div class="inputBox">
                            <span>Last Name</span>
                            <input type="text" placeholder="Doe">
                        </div>
                    </div>
                    <div class="row50">
                        <div class="inputBox">
                            <span>Email</span>
                            <input type="text" placeholder="johndoe@gmail.com">
                        </div>
                        <div class="inputBox">
                            <span>Mobile</span>
                            <input type="text" placeholder="+91 987 654 3210">
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputBox">
                            <span>Message</span>
                            <textarea placeholder="Write your message here..."></textarea>
                        </div>
                    </div>
                    <div class="row100">
                        <div class="inputBox">
                            <input type="submit" value="Send">
                        </div>
                    </div>
                </div>
            </form>
        </div>

        <!-- info Box -->
        <div class="contact1 info">
            <h3>Contact Info</h3>
            <div class="infoBox">
                <div>
                    <span><i class="fa-solid fa-location-dot"></i></span>
                    <p>Pokhara, Kaski<br>NEPAL</p>
                </div>
            <div>
            <span><i class="fa-solid fa-envelope"></i></span>
            <a href="mailto:loremipsun@email.com">loremipsun@email.com</a>
            </div>
            <div>
            <span><i class="fa-solid fa-phone"></i></span>
            <a href="tel:+061 837408">+061 837408</a>
            </div>
        </div>
    </div>

        <!-- Map -->
        <div class="contact1 map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d224976.7764324147!2d83.95661830000003!3d28.22972240000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3995937bbf0376ff%3A0xf6cf823b25802164!2sPokhara!5e0!3m2!1sen!2snp!4v1658849013157!5m2!1sen!2snp" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>
@stop