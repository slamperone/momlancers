<?php 
/*Custom Fields*/

/* Template Name: Page Contacto */
get_header(); ?>
<!-- /end header-->

		<!--===Index2 Page Title start===-->
<!--===Index2 Page Title start===-->
 
  <section class="strap strap-hero-interior hero-contacto"  >
       <div class="inner py-5 hero-bg">
            <div class="container-fluid max-width-fluid max-width">
            <div class="row py-5">
                <div class="col-lg-12 py-5">
                     <img src="<?=get_template_directory_uri() ; ?>/assets/images/contacto/hero-icon.png" alt="">
                      <h1 class="display-3">CONTACTO</h1>
                      <h2 class=" my-3 section-subtitle  text-white">En ACP Blindaje nos especializamos en brindar soluciones profesionales y prácticas.</h2>   
                </div>
            </div>
        </div>
       </div>
 </section>
 <div class="container mb-100">
        <div class="row text-center">
            <div class="col-12 col-md-12 mx-auto">
                <div class="slogan text-center">
                   <div class="text text-center">
                        <h2>SISTEMAS ADECUADOS PARA CADA NECESIDAD.</h2>
                   </div>
                </div>
            </div>
        </div>
    </div>



<section class="strap strap-form">
    <div class="inner py-5">
        <div class="container-fluid maxWidth">
           <div class="row my-3">
                <div class="col-12">
                    <div class="strap-title  ">
                        <h2 class="title text-color-2 h3">// ESTAMOS LISTOS PARA COTIZAR TU PROYECTO</h2>
                      
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12">
                    <p>Para mayor información mas detallada sobre cualquiera de nuestros vehiculos y/o servicios, ponte en contacto con nosotros .</p>
                      <?php print do_shortcode( '[contact-form-7 id="ca09aa4" title="Contacto"]'); ?>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="strap strap-block-text-image">
    <div class="inner py-5">
        <div class="container-fluid maxWidth">
           <div class="row my-3">
                <div class="col-12">
                    <div class="strap-title text-center  ">
                        <h2 class="title text-color-2 h3">// ENTREMOS EN CONTACTO</h2>
                      <h3 class="subtitle display-5">VISITE NUESTRO SHOWROOM.</h3>
                    </div>
                </div>
            </div>
            <div class="row my-3">
                <div class="col-12 col-md-4">
                    <div class="d-block block item my-3">
                        <figure class="item-image my-3">
                            <img src="<?=get_template_directory_uri() ; ?>/assets/images/contacto/email.jpg" alt="" class="img-fluid image-zoom" />
                        </figure>
                        <h3 class="">EMAIL</h3>
                            <p>servicio@acpblindaje.mx</p>
                            <p>ventas@acpblindaje.mx</p>
                    </div>
                </div>
                  <div class="col-12 col-md-4">
                    <div class="d-block block item my-3">
                        <figure class="item-image my-3">
                            <img src="<?=get_template_directory_uri() ; ?>/assets/images/contacto/showroom.jpg" alt="" class="img-fluid image-zoom" />
                        </figure>
                        <h3 class="">SHOW ROOM</h3>
                            <p>Avenida Adolfo López Mateos Sur 540, Jardines de Los Arcos, 44500 Guadalajara, Jal.</p>
                            <p><a href="tel:3336283680" class="text-link">Tel : 33 3628 3680</a></p>
                    </div>
                </div>
                  <div class="col-12 col-md-4">
                    <div class="d-block block item my-3">
                        <figure class="item-image my-3">
                            <img src="<?=get_template_directory_uri() ; ?>/assets/images/contacto/planta-produccion.jpg" alt="" class="img-fluid image-zoom" />
                        </figure>
                        <h3 class="">PLANTA PRODUCCIÓN</h3>
                            <p>Calle Sinaloa 1083 Col. El Mante, 45235 Zapopan, Jalisco, Mex.</p>
                            <p><a href="tel:3336283680" class="text-link">Tel : 33 3628 3680</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="strap strap-map">
    <div class="inner">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                     
       
        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14932.005004358485!2d-103.3909506!3d20.6695281!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae70dc929401%3A0x5bfd6fbba48f28e3!2sACP%20Blindaje!5e0!3m2!1ses-419!2smx!4v1683150555280!5m2!1ses-419!2smx" width="100%" height="100%" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>

 
                </div>
            </div>
        </div>
    </div>
</section>  


<!-- /footer-->
<?php  get_footer(); ?>
<!-- /end footer-->

  