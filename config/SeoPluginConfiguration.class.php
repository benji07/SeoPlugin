<?php


class SeoPluginConfiguration extends sfPluginConfiguration
{
  
  public function initialize()
  {
    $this->dispatcher->connect('component.method_not_found', array('SeoTable', 'computeSeo'));
    
    if(in_array('seo', sfConfig::get('sf_enabled_modules', array())))
    {
      $this->dispatcher->connect('routing.load_configuration', array('SeoRouting', 'listenToRoutingLoadConfigurationEvent'));
    }
  }
}