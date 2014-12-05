<footer>
	<div class="container">
		<div class="follow">
			<div class="icon"><img src="/sites/all/themes/spirit/assets/images/follow-red.png" alt="Follow"></div>
			<h6>Follow Us</h6><hr class="tiny"/>
			<ul class="social">
				<li><a href="https://www.facebook.com/spirit.newspapers" target="_blank" alt="Facebook"><img src="/sites/all/themes/spirit/assets/images/icons/fb-icon-blk.png"/></a></li>
				<li><a href="https://twitter.com/SpiritFishtown" target="_blank" alt="Twitter"><img src="/sites/all/themes/spirit/assets/images/icons/twit-icon-blk.png"/></a></li>
				<li><a href="http://instagram.com/spiritnewspapers" target="_blank" alt="Instagram"><img src="/sites/all/themes/spirit/assets/images/icons/insta-icon-blk.png"/></a></li>
				<li><a href="http://vimeo.com/spiritnewspapers" target="_blank" alt="Vimeo"><img src="/sites/all/themes/spirit/assets/images/icons/vimeo-icon-blk.png"/></a></li>
				<li><a href="#" target="_blank" alt="E-Mail"><img src="/sites/all/themes/spirit/assets/images/icons/mail-icon-blk.png"/></a></li>
			</ul>
		</div>
		<div class="newsletter">
			<div class="icon"><img src="/sites/all/themes/spirit/assets/images/newsletter-red.png" alt="Newsletter"></div>
			<h6>Sign up for the Spirit Newsletter</h6><hr class="tiny"/>
			<form id="newsletter">
				<input type="email" placeholder="Enter Email" />
				<input type="submit" value="Sign Up" />
			</form>
		</div>
		<div class="contact">
			<div class="icon"><img src="/sites/all/themes/spirit/assets/images/contact-red.png" alt="Newsletter"></div>
			<h6>Contact Us</h6><hr class="tiny"/>
			<a href="mailto:info@thespiritphl.com">info@thespiritphl.com</a>
		</div>
	</div>
</footer>

<div class="admin">
  <?php if($is_admin): ?>
    <?php kpr(get_defined_vars()); ?>
    <?php print $messages ?>
  <?php endif ?>
