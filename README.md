# SeoPlugin pour symfony 1.4

Pour un projet, j'ai dû trouver un moyen pour permettre au webmaster de modifié les metas de chacune de ces pages depuis son back-office.

Ce plugin est une version modifié de ce que j'ai mis en place pour ce projet, il est disponible sur [github](http://github.com/benji07/SeoPlugin).


## Utilisation

Dans votre actions, il suffit d'appeler la méthode: 

    [php]
    $this->seo($name, $params = array());
    
Par exemple dans pour mon blog il suffit d'ajouter dans mon action blog/show le code suivant:

    [php]
    $this->seo('Blog post show', array('post' => $post->title));
    
La table contenant les informations du SEO ce rempli automatiquement lorsque l'on navigue sur le site.
    
## Configuration

Dans votre back office, il faut activer le module seo dans votre fichier `settings.yml`, ensuite il suffit de modifier l'enregistrement *Blog post show*

![SEOPlugin](http://benjamin.leveque.me/medias/plugins/seo-plugin.png)

