<div class="page-header page-header-custom" >
  <h1>Obras</h1>
</div>
<ul class="media-list">
	<?php foreach ($data as $w) { ?>
	<li class="media<?=$w->priority == 1 ? '-high' : ''?>">
		<a href="#" >
			<div class="media-left">
				<img class="media-object" src="<?=base_url().'assets/img/thumbnail.png'?>">
			</div>
			<div class="media-body">
				<h4 class="media-heading">
					<?php if ($w->priority == 1) { ?>
						<span class="premium-member-star glyphicon glyphicon-star-empty pull-right"></span>
					<?php } ?>
					<h2 class="media-title"><?=$w->title?><span class="small"> <?=$w->priority == 1 ? '- ' . $w->name.' '.$w->last_name :''?></span>
					</h2>
				</h4>
				<p class="p-media-body"><?=$w->s_desc?></p>
				
				<div class="progress list-progress">
					<div style="width:<?=$w->progress?>%"class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
						<span class="sr-only"></span>
					</div>
				</div>
			</div>
		</a>
	</li>
	<?php } ?>
</ul>