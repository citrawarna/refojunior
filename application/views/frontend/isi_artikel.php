			<div class="container fit-blog">
				<br>
				<div class="row sub">
					<h1><?= $artikel->judul ?></h1>
				</div>
				<p class="sub"><?= $artikel->tanggal ?></p>
				<hr>
				<div class="row">
					<div class="col-md-8  col-lg-8">
						<img src="<?= base_url('gudang/'.$artikel->cover) ?>" class="img-fluid" alt="">
						<br><br>
						<!-- ISI ARTIKEL -->
						<?= $artikel->isi ?>

						<!-- KATEGORI ARTIKEL-->
						Artikel Kategori : 
						<p class="category"><a href="<?= $artikel->id_kategori ?>"><?= $artikel->nama_kategori ?></a></p>
						<div id="disqus_thread"></div>
							<script>

							/**
							*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
							*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
							/*
							var disqus_config = function () {
							this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
							this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
							};
							*/
							(function() { // DON'T EDIT BELOW THIS LINE
							var d = document, s = d.createElement('script');
							s.src = 'https://refojunior.disqus.com/embed.js';
							s.setAttribute('data-timestamp', +new Date());
							(d.head || d.body).appendChild(s);
							})();
							</script>
							<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
					</div>

					<div class="col-md-4 col-lg-4">
						<div class="list-group">
						  <br>
						  <p class="list-group-item list-group-item-action list-article" style="background:#0f005d; color:white">
						    Artikel Terbaru
						  </p>
						  <?php foreach($artikel_baru as $row) { ?>
						  	<a href="<?= base_url('articles/read/'.$row->link) ?>" class="list-group-item list-group-item-action list-article"><?= $row->judul  ?></a>
						  <?php } ?>
						  <br>
						</div>
						<div class="list-group">
						  <br>
						  <p class="list-group-item list-group-item-action list-article"  style="background:#0f005d; color:white">
						    Artikel Terpopuler
						  </p>
						  <?php foreach($artikel_populer as $row) { ?>
						  	<a href="<?= base_url('articles/read/'.$row->link) ?>" class="list-group-item list-group-item-action list-article"><?= $row->judul  ?></a>
						  <?php } ?>
						  <br>
						</div>
						
					</div>
				</div>
				
			</div>