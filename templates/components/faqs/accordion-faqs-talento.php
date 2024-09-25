 <?php
   $faqs =  get_field('faq',271); 
?>
 <div class="accordion" id="accordionTalento">
 
 <?php
  if( get_field('faq', 271) ):
    $i=1;
    while( the_repeater_field('faq', 271) ):
      $faq_title = get_sub_field('faq_title');
      $faq_answer = get_sub_field('faq_answer');

       ?>
   
   <div class="accordion-item">
    <h2 class="accordion-header">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#emp<?=$i;?>" aria-expanded="false" aria-controls="emp<?=$i;?>">
        <strong><?=$faq_title; ?></strong>
      </button>
    </h2>
    <div id="emp<?=$i;?>" class="accordion-collapse collapse" data-bs-parent="#accordionTalento">
      <div class="accordion-body">
        <?=$faq_answer; ?>
      </div>
    </div>
  </div>
 <?php 
 $i++;
  endwhile;
 ?>
</div>
<?php 
  endif; 
?>
