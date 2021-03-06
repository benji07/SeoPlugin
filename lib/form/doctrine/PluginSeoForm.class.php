<?php

/**
 * PluginSeo form.
 *
 * @package    ##PROJECT_NAME##
 * @subpackage form
 * @author     ##AUTHOR_NAME##
 * @version    SVN: $Id: sfDoctrineFormPluginTemplate.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
abstract class PluginSeoForm extends BaseSeoForm
{
  
  public function setup()
  {
    parent::setup();
    
    $this->useFields(array());
    
    $langs = sfConfig::get('app_seo_langs', array());
    
    if(count($langs))
    {
      $this->embedI18n($langs);
    }
  }
}
