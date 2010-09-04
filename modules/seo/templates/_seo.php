<div class="sf_admin_form_row">
  <?php foreach(sfConfig::get('app_seo_langs', array()) as $lang): ?>
    <div id="seo_languages_<?php echo $lang?>" class="seo_languages">
      <h2><?php echo format_language($lang) ?></h2>
      <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_title">
        <div>
          <?php echo $form[$lang]['title']->renderLabel('Title') ?>
          <div class="content">
            <?php echo $form[$lang]['title']->render(array('class' => 'large')) ?>
          </div>
          <?php echo $form[$lang]['title']->renderError() ?>
        </div>
      </div>
      <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_keywords">
        <div>
          <?php echo $form[$lang]['keywords']->renderLabel('Keywords') ?>
          <div class="content">
            <?php echo $form[$lang]['keywords']->render(array('class' => 'large')) ?>
          </div>
          <?php echo $form[$lang]['keywords']->renderError() ?>
        </div>
      </div>
      <div class="sf_admin_form_row sf_admin_text sf_admin_form_field_description">
        <div>
          <?php echo $form[$lang]['description']->renderLabel('Description') ?>
          <div class="content">
            <?php echo $form[$lang]['description']->render(array('class' => 'large')) ?>
          </div>
          <?php echo $form[$lang]['description']->renderError() ?>
        </div>
      </div>
    </div>
  <?php endforeach ?>
</div>