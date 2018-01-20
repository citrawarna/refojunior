			<div class="row">
				<?php foreach($artikel as $row) { ?>
				<div class="col-md-4 col-lg-4">
					<div class="blog">
						<h2><?= $row->judul ?></h2>
						<img src="<?= base_url('gudang/'.$row->cover) ?>" alt="">
						<p><?= strip_tags(substr($row->isi, 0, 150)); ?>...</p>
						&nbsp;&nbsp;
						<a href="<?= base_url('articles/read/'.$row->link) ?>" class="btn btn-primary">Read More</a>
					</div>
					<br>		
				</div>
				<?php } ?>

				
			</div>