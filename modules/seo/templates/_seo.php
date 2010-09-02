<div class="sf_admin_form_row sf_admin_text sf_admin_form_field_title">
  <div>
    <?php echo $form['en']['title']->renderLabel('Title') ?>
    <div class="content">
      <?php echo $form['en']['title']->render(array('class' => 'large')) ?>
    </div>
    <?php echo $form['en']['title']->renderError() ?>
  </div>
</div>
<div class="sf_admin_form_row sf_admin_text sf_admin_form_field_keywords">
  <div>
    <?php echo $form['en']['keywords']->renderLabel('Keywords') ?>
    <div class="content">
      <?php echo $form['en']['keywords']->render(array('class' => 'large')) ?>
    </div>
    <?php echo $form['en']['keywords']->renderError() ?>
  </div>
</div>
<div class="sf_admin_form_row sf_admin_text sf_admin_form_field_description">
  <div>
    <?php echo $form['en']['description']->renderLabel('Description') ?>
    <div class="content">
      <?php echo $form['en']['description']->render(array('class' => 'large')) ?>
    </div>
    <?php echo $form['en']['description']->renderError() ?>
  </div>
</div>