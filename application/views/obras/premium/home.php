<?php function getValue ($i) {
	echo Array ('glyphicon glyphicon-piggy-bank',
				'glyphicon glyphicon-stats',
				'glyphicon glyphicon-phone-alt',
				'glyphicon glyphicon-flash',
				'glyphicon glyphicon-shopping-cart',
				'glyphicon glyphicon-fire',
				'glyphicon glyphicon-calendar',
				'glyphicon glyphicon-remove-circle',
				'glyphicon glyphicon-ok-circle',
				'glyphicon glyphicon-off',
				'glyphicon glyphicon-road',
				'glyphicon glyphicon-tree-conifer' ) [$i];
} ?>
<div class="topbar-image" <?php if (sizeof($extra_image) > 0) {
			echo "style='background-image: url(\"/uploads/".$extra_image [0]->path."\")'";
		} ?>
	>
	<div class="topbar col-md-offset-2 col-md-8" >
		<h1 class="title-header"><?=$data->title?></h1>
		<h3 class="subtitle-header">
		<?=$data->s_desc?>
		<h3>
	</div>
</div>
<nav class="navbar navbar-default bar-border-radius">
	<div class="container-fluid col-md-8 col-md-offset-2">
		<div class="navbar-header">
			<a class="navbar-brand" href="<?=base_url()?>obras/home">Argentina en obras</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
			<ul class="nav navbar-nav">
				<li><a href="#">Autoridades</a></li>
			</ul>
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Mi Cuenta<span class="caret"></span></a>
					<ul class="dropdown-menu">
						<li><a href="<?=base_url()?>user/update_form">Mis Datos</a></li>
						<li><a href="<?=base_url()?>obras/create_form">Cargar Obra</a></li>
						<li><a href="<?=base_url()?>obras/mylist">Mis Obras</a></li>
						<li role="separator" class="divider"></li>
						<li><a href="<?=base_url()?>user/logout">Salir</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="col-md-offset-2 col-md-8 page-body">
	<div class="content">
		<h1 class="detail-work-title">
		SOBRE LA OBRA
		</h1>
		<div class="row">
			<div class="col-md-offset-3 col-md-6 page-header"></div>
			<div class="col-md-offset-1 col-md-10 detail-work-long-a">
				<?=$data->l_desc_a?>
			</div>
			<div class="col-md-12 detail-more-info-container">
				<?php foreach ($extra_info as $key => $value) { ?>
				<div class="feature col-md-4">
					<div class="feature-icon">
						<i class="glyphicon <?=getValue($value->icon)?>"></i>
					</div>
					<div class="feature-content">
						<h1><?=$value->title?></h1>
						<p><?=$value->desc?></p>
					</div>
				</div>
				<?php } ?>
			</div>
		</div>
		<div class="progress detail-progress">
			<div class="progress-bar progress-bar-success progress-bar-striped" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
				<span class="sr-only"></span>
			</div>
		</div>
		<div class="row detail-more-content">
			<h1 class="detail-work-subtitle">
			DISEÑO DE LA OBRA
			</h1>
			<div class="col-md-offset-3 col-md-6 page-header"></div>
			<div class="col-md-offset-1 col-md-10 detail-work-long-a">
				<?=$data->l_desc_b?>
			</div>
		</div>
		<h1 class="detail-work-title">
		IMÁGENES DE LA OBRA
		</h1>
		<div class="row">
			<div class="col-md-offset-3 col-md-6 page-header"></div>
			<?php foreach ($extra_image as $key => $value) { ?>
				<div class="col-md-4">
					<img class="detail-image-preview" src="<?=base_url()."uploads/".$value->path ?>" />
				</div>
			<?php } ?>
			
		</div>