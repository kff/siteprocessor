<?php if($view_mode=='full'):?>
  <div id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>
    <div class="clearfix content"<?php print $content_attributes; ?>>
      <h1><?php print $title; ?>  </h1>
      <?php if($content['body']['#items'][0]['summary']): ?>
        <div class="summary"><?php print render($content['body']['#items'][0]['summary']); ?></div>
      <?php endif; ?>
      <?php if ($display_submitted): ?>
        <div class="submitted">
          <?php print $submitted; ?>
        </div>
      <?php endif; ?>
     <?php print render($content['field_image']);?>

      <div class="event-properties">
        <div class="event-property event-category">
          <?php print render($content['field_event_category']);?>
        </div>
        <div class="event-property event-target">
          <?php print render($content['field_event_target']);?>
        </div>        
        <div class="event-property event-location">
          <?php print render($content['field_location']);?>
        </div>
        <div class="event-property event-datetime">
          <?php print render($content['field_event_time']);?>
        </div>
        <?php if(isset($content['field_email'])||isset($content['field_links'])):?>
        <div class="event-property event-extras">
          <?php print render($content['field_email']);?>
          <?php print render($content['field_links']);?>
        </div>
        <?php endif;?>
      </div>
      <?php
        // We hide the comments and links now so that we can render them later.
        hide($content['comments']);
        hide($content['links']);
        print render($content);
      ?>
    </div>

    <?php /*FIXME move to module and print $comments*/if($node->comment==COMMENT_NODE_OPEN):?>
      <div class="comments-box">
        <h2><?php print t('Comments');?></h2>
        <div class="fb-comments" data-num-posts="3"></div>
      </div>    
    <?php endif;?>
  </div>



  
<?php elseif($view_mode=='large_item'):?>
  <div class="large-item-wrapper">
    <h4><?php print l($title,'node/'.$node->nid); ?></h4>
    
    <?php print render($content['field_image']);?>
    <div class="large-item-content <?php if(!isset($content['field_image'])) print "no-image";?>">
      <div class="property-bar">
        <?php print render($content['field_event_time']);?>
        <?php if(isset($node->field_location[$node->language][0]['name'])):?>
          <div class="event-location-name"><?php print $node->field_location[$node->language][0]['name']; ?></div> 
        <?php endif;?>
        <?php print render($content['field_event_category']);?>
      </div>        
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
    </div>
  </div>

  
<?php elseif($view_mode=='carousel_item'):?>
  <div class="carousel-item-wrapper">
    <?php print render($content['field_image']);?>
    <div class="carousel-item-content <?php if(!isset($content['field_image'])) print "no-image";?>">
      <h4><?php print l($title,'node/'.$node->nid); ?></h4>
      <div class="property-bar">
        <?php print render($content['field_event_time']);?>
        <?php if(isset($node->field_location[$node->language][0]['name'])):?>
          <div class="event-location-name"><?php print $node->field_location[$node->language][0]['name']; ?></div> 
        <?php endif;?>
        <?php print render($content['field_event_category']);?>
      </div>        
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
    </div>
  </div>


<?php elseif($view_mode=='imagetile_item'):?>
  <div class="imagetile-item-wrapper">
    <h4><?php print l($title,'node/'.$node->nid); ?></h4>
    
    <?php print render($content['field_image']);?>
    <div class="imagetile-item-content <?php if(!isset($content['field_image'])) print "no-image";?>">
      <div class="property-bar">
        <?php print render($content['field_event_time']);?>
        <?php if(isset($node->field_location[$node->language][0]['name'])):?>
          <div class="event-location-name"><?php print $node->field_location[$node->language][0]['name']; ?></div> 
        <?php endif;?>
        <?php print render($content['field_event_category']);?>          
      </div>        
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
    </div>
  </div>
    
    
    
<?php elseif($view_mode=='list_item'):?>
  <div class="list-item-wrapper">
    <div class="list-item-content">
      <div class="property-bar">
        <?php print render($content['field_event_time']);?>
      </div>
    </div>
    <h4><?php print l($title,'node/'.$node->nid); ?></h4>
  </div>
<?php endif; ?>