
<!-- ═══ FOOTER ═══ -->
<footer class="footer">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-4">
        <div class="foot-logo">Kharido<span>Policy</span></div>
        <p class="foot-desc">India's most trusted insurance comparison platform. Find, compare, and buy the right policy in minutes — backed by IRDAI regulations and serving over 1 million families.</p>
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
          <li><a href="<?php echo e(url('about-us')); ?>">About Us</a></li>
          <li><a href="<?php echo e(url('blogs')); ?>">Blogs</a></li>
          <li><a href="<?php echo e(url('become-a-posp')); ?>">Become A POSP</a></li>
          <li><a href="<?php echo e(url('contact-us')); ?>">Contact Us</a></li>
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
          <li><a href="<?php echo e(url('privacy-policy')); ?>">Privacy Policy</a></li>
          <li><a href="<?php echo e(url('terms-of-use')); ?>">Terms of Use</a></li>
          <li><a href="<?php echo e(url('disclosure')); ?>">Disclosure</a></li>
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
  window.addEventListener('scroll',()=>nav.classList.toggle('scrolled',scrollY>50),{passive:true});
  document.getElementById('mobToggle').addEventListener('click',()=>{
    const m=document.getElementById('mobileMenu');
    m.style.display=m.style.display==='block'?'none':'block';
  });
  const srEls=document.querySelectorAll('.sr');
  const io=new IntersectionObserver(entries=>entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target)}}),{threshold:.1});
  srEls.forEach(el=>io.observe(el));
</script>
<?php /**PATH D:\installed-softwares\xampp-8.2.12\htdocs\laravel-projects\kharido-policy\projects\resources\views/front/layouts/footer.blade.php ENDPATH**/ ?>