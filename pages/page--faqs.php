<?php 
/*Custom Fields*/

/* Template Name: Page Faqs */
get_header(); ?>
<!-- /end header-->

  
 <section class="strap strap-hero">
	<div class="inner pt-5">
		<div class="container-fluid">
		  <div class="row  align-items-center">
		  	<div class="col-12 col-md-10 mx-auto">
		  	   <div class="d-block p-3">
		  	   		<h1 class="fw-bolder"><strong>Preguntas frecuentes</strong></h1>
		  	   		 
		  	   </div>
		  	</div>
		  	 
		  </div>
		</div>
	</div>	
</section>

 
<section class="strap strap-faqs">
	<div class="inner pt-5">
		<div class="container-fluid">
		  <div class="row ">
		  	<div class="col-12 col-md-10 mx-auto">
				<!--tabs-->

				<ul class="nav nav-tabs" id="tabsFaqs" role="tablist">
				  <li class="nav-item" role="presentation">
				    <button class="nav-link active" id="empresas-tab" data-bs-toggle="tab" data-bs-target="#empresas-tab-pane" type="button" role="tab" aria-controls="empresas-tab-pane" aria-selected="true">Empresas</button>
				  </li>
				  <li class="nav-item" role="presentation">
				    <button class="nav-link" id="talento-tab" data-bs-toggle="tab" data-bs-target="#talento-tab-pane" type="button" role="tab" aria-controls="talento-tab-pane" aria-selected="false">Talento</button>
				  </li>
				  <li class="nav-item" role="presentation">
				    <button class="nav-link" id="agencias-tab" data-bs-toggle="tab" data-bs-target="#agencias-tab-pane" type="button" role="tab" aria-controls="agencias-tab-pane" aria-selected="false">Agencias</button>
				  </li>
				   
				</ul>
				<div class="tab-content" id="myTabContent">
				  <div class="tab-pane fade show active" id="empresas-tab-pane" role="tabpanel" aria-labelledby="empresas-tab" tabindex="0">
				  
				  	<div class="d-block py-5">
				  		<?php print get_template_part( 'templates/components/faqs/accordion-faqs-empresas'); ?>
				  		
				  	</div>	
				  

				  </div>
				  <div class="tab-pane fade" id="talento-tab-pane" role="tabpanel" aria-labelledby="talento-tab" tabindex="0">
					  	<div class="d-block py-5">
					  			<?php print get_template_part( 'templates/components/faqs/accordion-faqs-talento'); ?>
					  	</div>
				   </div>
				  <div class="tab-pane fade" id="agencias-tab-pane" role="tabpanel" aria-labelledby="agencias-tab" tabindex="0">
				  	<div class="d-block py-5">
				  		<?php print get_template_part( 'templates/components/faqs/accordion-faqs-agencias'); ?>
				  	</div>
				  </div>
				   
				</div>

				<!--/tabs-->
			</div>
		</div>
	</div>
</div>
</section>
 
<!-- /footer-->
<?php  get_footer(); ?>
<!-- /end footer-->

  