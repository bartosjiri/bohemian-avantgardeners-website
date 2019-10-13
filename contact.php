<?php $page='contact'; include('header.php') ?>

<section class="section_contact-contact section-padding">
	<div class="wrapped grid_4">
		<h2 class="section-title grid_4-title text-dark">Contact</h2>
		<div class="grid_4-content">
			<h4 class="section-subtitle">We believe the precursor to a healthier and more sustainable future will be a cooperation and co-creation.</h4>
			<div class="section-text">
				<p>As a team we offer a comprehensive approach to urban agriculture project development. Our mission is to jumpstart your knowledge, help you navigate through barriers, make connections and minimalize risk. We will be happy to hear from you and respond to any questions you might have about the AvantGarden or your own projects.</p>
				<p>
					<script type="text/javascript" language="javascript">
						{ 
							coded = "uwk3hz:uZ@6wAhzD7kAk.8zu";
							key = "i0IlK4ycGpOQhwo2jvBDEbm5krq3f1e8xS9CVMzP7nRgH6uTYAtaNLZJXsUWdF";
							shift = coded.length;
							link = "";
							for (i=0; i<coded.length; i++) {
								if (key.indexOf(coded.charAt(i))==-1) {
									ltr = coded.charAt(i);
									link += (ltr);
								} else {     
									ltr = (key.indexOf(coded.charAt(i))-shift+key.length) % key.length;
									link += (key.charAt(ltr));
								}
							}
							document.write("<a href='" + link + "'>Send us an email <span class='text-red'>→</span></a>");
						}
					</script>
					<noscript><span class='text-red'>Sorry, you need to enable Javascript in order to email us (spam protection).</span></noscript>
				</p>
			</div>
		</div>
	</div>
</section>

<?php $page='contact'; include('footer.php') ?>