<div class="page-header page-header-custom" >
  <h1>Mis Obras</h1>
</div>
<?php if (sizeof($data) > 0) { ?>
<ul class="media-list">
	<?php foreach ($data as $w) { ?>
	<li class="media">
		<a href="<?=base_url ()?>obras/update_form/<?=$w->id?>" >
			<div class="media-left">
				<img class="media-object" src="<?=base_url().'assets/img/thumbnail.png'?>">
			</div>
			<div class="media-body">
				<h4 class="media-heading">
					<h2 class="media-title"><?=$w->title?></h2>
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
<?php } else { ?>
	<p>
		No se han cargado obras. 
		<a href="<?=base_url().'obras/create_form'?>">
			<span class="glyphicon glyphicon-new-window"></span>
		</a>
	</p>
<?php } ?>