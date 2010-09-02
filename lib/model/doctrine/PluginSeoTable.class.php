<?php

/**
 * PluginSeoTable
 *
 * This class has been auto-generated by the Doctrine ORM Framework
 */
class PluginSeoTable extends Doctrine_Table
{
  /**
   * Returns an instance of this class.
   *
   * @return object PluginSeoTable
   */
  public static function getInstance()
  {
    return Doctrine_Core::getTable('PluginSeo');
  }
  
  public static function computeSeo(sfEvent $event)
  {
    if($event['method'] == 'seo')
    {
      $event->setProcessed(true);
      
      list($name, $args) = $event['arguments'];
      
      $response = sfContext::getInstance()->getResponse();
      
      $seo = SeoTable::getInstance()->findOneByName($name);
      
      if($seo == null)
      {
        $seo = new Seo();
        $seo->name = $name;
        $seo->parameters = implode(', ',array_keys($args));
        $seo->save();
      }
      else
      {
        
        if($seo->parameters != implode(', ',array_keys($args)))
        {
          $seo->parameters = implode(', ',array_keys($args));
          $seo->save();
        }
        
        foreach($args as $key => $value)
        {
          $args['%'.$key.'%'] =  $value;
          unset($args[$key]);
        }
        
        $title = str_replace(array_keys($args), $args, $seo->title);
        $description = str_replace(array_keys($args), $args, $seo->description);
        $keywords = str_replace(array_keys($args), $args, $seo->keywords);
        
        if($title != '')
        {
          $response->addMeta('title', $title);
        }
        
        if($description != '')
        {
          $response->addMeta('description', $description);
        }
        
        if($keywords != '')
        {
          $response->addMeta('keywords', $keywords);
        }
      }
    }
  }
}