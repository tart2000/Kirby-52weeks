<?php $columns= 12/$col ?>
<div class="mdl-card mdl-cell mdl-cell--<?php echo $columns ?>-col mdl-shadow--2dp">
    <div class="mdl-card__media mdl-color-text--grey-50" style="background-image: url(<?php snippet('cover-image', array('post' =>$week)) ?>)">
      <h3><a href="<?php echo $week->url() ?>"><?php echo $week->title(); ?></a></h3>
    </div>
    <div class="mdl-card__supporting-text meta mdl-color-text--grey-600">
      	<div>
        	<strong><?php echo $week->parent()->title() ?> - Week <?php echo $week->num() ?></strong>
      	</div>
    </div>
</div>