<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-3026">
    <div class="frame-layout">
        <div class="line">
            <div class="column-2">
                <img src="./3026-screenshot.png">
                <p>Repairplus brings 41 years of Digital Repairs experience right to your Device. Our Technicians are
                    equipped to help you that work best.</p>
                <p>Our commitment to bring professionalism, good service & trust to the Phone repair service &
                    maintenance business.</p>
                <button>PURCHASE THEME</button>
            </div>
            <div class="column-10">
                <div class="line">
                    <div class="column-4">
                        <h3>OUR SERVICES</h3>
                        <ul>
                            <li><i class="fas fa-chevron-right"></i> Smart Phone Repair</li>
                            <li><i class="fas fa-chevron-right"></i> Tablets & iPad Repair</li>
                            <li><i class="fas fa-chevron-right"></i> Desktop & Laptop</li>
                            <li><i class="fas fa-chevron-right"></i> Game System Repair</li>
                            <li><i class="fas fa-chevron-right"></i> LCD & LED TV Repair</li>
                            <li><i class="fas fa-chevron-right"></i> MP3 & MP4 Player</li>
                        </ul>
                    </div>
                    <div class="column-4">
                        <h3>SUBSCRIBE US</h3>
                        <p>Subscribe to our newsletter!</p>
                        <form class="subscribe">
                            <input placeholder="Enter Your Email..." type="email" />
                            <button><i class="fas fa-paper-plane"></i></button>
                        </form>
                        <p>We don’t do mail to spam and your mail id is confidential.</p>
                        <div class="social-icons">
                            <i class="fab fa-facebook-f"></i>
                            <i class="fab fa-twitter"></i>
                            <i class="fab fa-google-plus-g"></i>
                            <i class="fab fa-linkedin-in"></i>
                        </div>
                    </div>
                    <div class="column-4">
                        <h3>CONTACT INFO</h3>
                        <p><i class="fas fa-map-marker-alt"></i> 32, BREAKING STREET, 2nd cross, New York, USA 10002</p>
                        <p><i class="fas fa-phone"></i> +321 4567 89 012 & 79 023</p>
                        <p><i class="fas fa-envelope"></i> Support@Repairplus.com</p>
                        <p><i class="fas fa-clock"></i> Mon - Sat: 09.00am to 18.00pm</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="line">
            <div class="column-6">
                <p>Copyrights © 2022 All Rights Reserved by <a>ThemeKalia</a>.</p>
            </div>
            <div class="column-6">
                <div class="payment-icons">
                    <i class="fab fa-cc-visa"></i>
                    <i class="fab fa-cc-paypal"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-mastercard"></i>
                    <i class="fab fa-cc-mastercard"></i>
                </div>
            </div>
        </div>
    </div>