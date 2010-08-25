# SeoPlugin pour symfony 1.4

## Utilisation

Dans votre actions, il suffit d'appeler la méthode

    $this->setSeo($response, $params = array(), $name);
    
## Configuration

Dans le fichier `app.yml`

    [yml]
    all:
      Seo:
        prefix: ""
        suffix: ""
        
        
Exemple de titre:


%title% on my Blog

