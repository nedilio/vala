<section id="servicios" style="margin-top: 50px;">

    <div class="row">

        <div class="col">
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
        <?php $args = array( 'post_type' => 'servicio', 'posts_per_page' => -1, 'order'=>'ASC' );
        $active='';
        $counter=0;
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  $counter++;
  // echo $counter;
  if ($counter==1) {
      $active='active';
  }
  else {
    $active='';
  }
  if ($counter==1) {
    $slug='tasacion';
}
elseif ($counter==2) {
     $slug = 'consultoria';
 }
 elseif ($counter==3) {
     $slug = 'disenio';
 }
 elseif ($counter==4) {
     $slug = 'restauracion';
 } 
   echo '<li class="nav-item">';
   echo '<a class="nav-link '.$active.'" data-toggle="tab" href="#'.$slug.'" role="tab">'.get_the_title().'</a>';
   echo '</li>';
endwhile; ?>
</ul>

<!-- Tab panes -->
<div class="tab-content">
   <?php $args = array( 'post_type' => 'servicio', 'posts_per_page' => -1, 'order'=>'ASC' );
        $active='';
        $counter=0;
$loop = new WP_Query( $args );
while ( $loop->have_posts() ) : $loop->the_post();
  $counter++;
  // echo $counter;
  if ($counter==1) {
      $active='show active';
  }
  else {
    $active='';
  }
  if ($counter==1) {
    $slug='tasacion';
}
elseif ($counter==2) {
     $slug = 'consultoria';
 }
 elseif ($counter==3) {
     $slug = 'disenio';
 }
 elseif ($counter==4) {
     $slug = 'restauracion';
 } 
   echo '<div class="tab-pane fade '.$active.'" id="'.$slug.'" role="tabpanel" style="padding:100px;">'.get_the_content().'</div>';
endwhile; ?>
</div>
        </div>
    </div>
</section>


<?php 
 ?>