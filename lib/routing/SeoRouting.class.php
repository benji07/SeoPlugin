<?php


class SeoRouting{
  
  public static function listenToRoutingLoadConfigurationEvent(sfEvent $event)
  {
    $event->getSubject()->prependRoute('seo', new sfDoctrineRouteCollection(array(
      'name'                => 'seo',
      'model'               => 'Seo',
      'module'              => 'seo',
      'prefix_path'         => 'seo',
      'with_wildcard_routes' => true,
      'collection_actions'  => array(),
      'requirements'        => array(),
    )));
  }
}