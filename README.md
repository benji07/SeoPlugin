# SeoPlugin pour symfony 1.4

Pour un projet, j'ai dû trouver un moyen pour permettre au webmaster de modifié les metas de chacune de ces pages depuis son back-office.

Ce plugin est une version modifié et amélioré de ce que j'ai mis en place pour ce projet.


## Utilisation

Dans votre actions, il suffit d'appeler la méthode suivante: 

    [php]
    $this->seo($name, $params = array());

Les paramètres de cette méthode sont:

- Le nom de la page (vous mettez ce que vous voulez).
- Les paramètres à utiliser pour la construction des métas.
    
Par exemple pour mon blog il suffit d'ajouter dans mon action `blog/show` le code suivant:

    [php]
    $this->seo('Blog post show', array(
      'post' => $post->title, 
      'tags' => $post->getTagsSting(', ')
    ));
    
Pour charger la liste des pages dans la table SEO, il suffit de naviguer sur le site.
    
## Configuration

Vous devez d'abord définir la liste des langues qui sont disponible sur votre site dans le fichier `app.yml`

    [yml]
    all:
      seo:
        langs: [en, fr]
        
Ensuite, vous devez activer le module **seo**  dans votre application **backend** au niveau de votre fichier `settings.yml`

    [yml]
    all:
      .settings:
        enabled_modules:        [default, seo]

Vous pouvez enfin accédez à la page `/bo.php/seo` pour voir la liste des pages qui sont administrable. si vous cliquez sur modifier vous aurez accès à l'écran suivant:

![SEOPlugin](http://benjamin.leveque.me/medias/plugins/seo-plugin.png)

Dans cette page, vous pouvez voir une partie *parameters*, pour les utiliser il suffit par exemple d'écrire **%post%** pour utiliser le paramètre *post*.