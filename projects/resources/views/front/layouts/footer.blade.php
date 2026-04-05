<!-- Modal -->
<div class="modal fade" id="getQuoteModel" tabindex="-1" aria-labelledby="getQuoteModelLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h2 class="section-h">Get in <em> Touch</em></h2>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>

            <form id="getInTauchFormId" action="" method="post">
            <div class="modal-body">
                <div class="quote-card-u sr">
                    <div class="p-2">
                        <!-- Select Policy -->
                        <div class="form-group">
                            <div class="form-label-pl">
                                <i class="fas fa-shield-halved"></i> Select Policy <em>*</em>
                            </div>
                            <select class="city-select" required>
                                <option value="">Select Policy</option>
                                <option>Life Insurance</option>
                                <option>Health Insurance</option>
                                <option>Motor Insurance</option>
                                <option>Term Insurance</option>
                            </select>
                        </div>

                        <!-- Name -->
                        <div class="form-group">
                            <div class="form-label-pl">
                                <i class="fas fa-user"></i> Full Name <em>*</em>
                            </div>
                            <div class="input-wrap">
                                <input class="form-input has-icon" type="text" placeholder="Rahul Sharma" required>
                                <i class="fas fa-user input-icon"></i>
                            </div>
                        </div>

                        <!-- MObile + Email -->
                        <div class="form-row-2">
                            <div class="form-group">
                                <div class="form-label-pl">
                                    <i class="fas fa-mobile-screen"></i> Mobile <em>*</em>
                                </div>
                                <div class="input-wrap">
                                    <input class="form-input has-icon" type="tel" placeholder="+91 98765 43210"
                                        required>
                                    <i class="fas fa-mobile-screen input-icon"></i>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="form-label-pl">
                                    <i class="fas fa-envelope"></i> Email Address (optional)
                                </div>
                                <div class="input-wrap">
                                    <input class="form-input has-icon" type="email" placeholder="rahul@email.com">
                                    <i class="fas fa-envelope input-icon"></i>
                                </div>
                            </div>
                        </div>

                        <!-- Message -->
                        <div class="form-group">
                            <div class="form-label-pl">
                                <i class="fa-regular fa-message"></i> Message
                            </div>
                            <div class="input-wrap">
                                <input class="form-input has-icon" type="text" placeholder="Hello..">
                                <i class="fa-regular fa-message input-icon"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="modal-footer justify-content-start">
                <!-- Submit -->
                <button class="btn-submit">
                    Submit
                    <i class="fas fa-arrow-right fa-sm"></i>
                </button>

                <div class="qc-footer text-center">
                    <i class="fas fa-lock"></i>
                    Your data is safe &amp; encrypted · No spam, ever
                </div>
            </div>

            </form>
        </div>
    </div>
</div>





<!-- ═══ FOOTER ═══ -->
<footer class="footer">
    <div class="container">
        <div class="row g-5">
            <div class="col-lg-4">
                <div class="foot-logo">Kharido<span>Policy</span></div>
                <p class="foot-desc">India's most trusted insurance comparison platform. Find, compare, and buy the
                    right
                    policy in minutes — backed by IRDAI regulations and serving over 1 million families.</p>
                <div class="foot-social">
                    <a href="#" class="fsoc"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="fsoc"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="fsoc"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="fsoc"><i class="fab fa-linkedin-in"></i></a>
                    <a href="#" class="fsoc"><i class="fab fa-youtube"></i></a>
                </div>
                <div class="foot-irdai">
                    <i class="fas fa-certificate fi-icon"></i>
                    <div>
                        <div class="fi-title">IRDAI Registered Broker</div>
                        <div class="fi-reg">Reg. No. PB567 · Direct Broker (Life &amp; General)</div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="foot-col-h">Company</div>
                <ul class="foot-links">
                    <li><a href="{{ url('about-us') }}">About Us</a></li>
                    <li><a href="{{ url('blogs') }}">Blogs</a></li>
                    <li><a href="{{ url('become-a-posp') }}">Become A POSP</a></li>
                    <li><a href="{{ url('contact-us') }}">Contact Us</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="foot-col-h">Insurance</div>
                <ul class="foot-links">
                    <li><a href="#">Life Insurance</a></li>
                    <li><a href="#">Health Insurance</a></li>
                    <li><a href="#">Motor Insurance</a></li>
                    <li><a href="#">Term Plans</a></li>
                    <li><a href="#">Investment Plans</a></li>
                    <li><a href="#">Group Insurance</a></li>
                </ul>
            </div>

            <div class="col-sm-6 col-lg-2">
                <div class="foot-col-h">Legal</div>
                <ul class="foot-links">
                    <li><a href="{{ url('privacy-policy') }}">Privacy Policy</a></li>
                    <li><a href="{{ url('terms-of-use') }}">Terms of Use</a></li>
                    <li><a href="{{ url('disclosure') }}">Disclosure</a></li>
                </ul>
            </div>
        </div>
        <div class="foot-bottom">
            <div class="foot-copy">© 2026 KharidoPolicy Insurance Brokers Private Limited. All rights reserved.</div>
        </div>
    </div>
</footer>
<script>
    const nav = document.getElementById('mainNav');
    window.addEventListener('scroll', () => nav.classList.toggle('scrolled', scrollY > 50), {
        passive: true
    });
    document.getElementById('mobToggle').addEventListener('click', () => {
        const m = document.getElementById('mobileMenu');
        m.style.display = m.style.display === 'block' ? 'none' : 'block';
    });
    const srEls = document.querySelectorAll('.sr');
    const io = new IntersectionObserver(entries => entries.forEach(e => {
        if (e.isIntersecting) {
            e.target.classList.add('in');
            io.unobserve(e.target)
        }
    }), {
        threshold: .1
    });
    srEls.forEach(el => io.observe(el));
</script>
