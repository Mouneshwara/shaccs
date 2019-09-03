<?php /*Template Name:faq*/?>

<?php get_header(); ?>

<div class="container">
<div class="faq-sec">
 
<div class="panel-group" id="accordion">
 
  <div class="panel panel-default">
<?php 
  $i=0;
  while (have_rows('faq_reap')){
      the_row();
 
  ?>
    <div class="panel-heading">
      <h4 class="panel-title">
        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne<?php echo $i ?>" class="<?php if($i!='0') { echo "collapsed"; }?>">
         <?php echo get_sub_field('quation');?>
        </a>
      </h4>
    </div>
    <div id="collapseOne<?php echo $i ?>" class="panel-collapse collapse <?php if($i=='0') { echo "in"; }?> ">
      <div class="panel-body">
      <p>
      <?php echo get_sub_field('answer');?>
      </p>
      </div>
    </div>
  
 <?php $i++; } ?>
 
  </div>
  
 
</div>

</div>
</div>

<?php get_footer(); ?>

