<h1>Obras</h1>
<hr class="small">
<ul class="media-list">
	<?php foreach ($data as $w) { ?>
	<li id=#corner-ribbon class="media<?=$w->priority == 1 ? '-high premium-bg' : ''?>">
		<a href="#" >
			<div class="media-left premium-bg">
				<img class="media-object premium-bg" src="<?=base_url().'assets/img/thumbnail.png'?>">
			</div>
			<div class="media-body">
				<h4 class="media-heading">
					<?php if ($w->priority == 1) { ?>

						<span class="premium-member-star glyphicon glyphicon-star-empty pull-right premium-bg"></span>
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
<div class="col-lg-10 col-lg-offset-1">
                    <h2>Obras por categoría</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Transporte</strong>
                                </h4>
                                <p>Obras destinadas a mejorar la circulación de personas y de mercaderías que se mueven en medios de transporte masivo.</p>
                                <a href="#" class="btn btn-light">Vea mas</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Vial</strong>
                                </h4>
                                <p>Obras destinadas a mejorar la circulación de personas y de mercaderías en general. </p>
                                <a href="#" class="btn btn-light">Conozca mas</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Hídrica</strong>
                                </h4>
                                <p>Obras destinadas a la contención y/o escurrimiento del agua. Obras destinadas a riego.</p>
                                <a href="#" class="btn btn-light">Lea mas</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Energética</strong>
                                </h4>
                                <p>Obras destinadas a la generación y distribución de energía.</p>
                                <a href="#" class="btn btn-light">Sepa mas</a>
                            </div>
                        </div>
                        </div>
                        <div class="container">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Intervención urbana</strong>
                                </h4>
                                <p>Obras varias sobre el espacio urbano.</p>
                                <a href="#" class="btn btn-light">Sepa mas</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Tratamiento de residuos, cloacas</strong>
                                </h4>
                                <p>Obras varias sobre el espacio urbano.</p>
                                <a href="#" class="btn btn-light">Sepa mas</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x text-primary"></i>
                            </span>
                                <h4>
                                    <strong>Edificios públicos</strong>
                                </h4>
                                <p>Construcción, refacción o refuncionalización de edificios públicos.</p>
                                <a href="#" class="btn btn-light">Sepa mas</a>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>