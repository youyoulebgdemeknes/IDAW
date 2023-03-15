<?php
require_once('template_header.php');
?>
<body>
    <h1>Information Technique</h1> 
    <h2>Sommaire</h2>
    <?php
    require_once('template_nav.php');
    ?>
    <h1>HTML - HyperText Markup Language</h1>
    <p>HTML est le langage standard utilisé pour créer des pages web. Il permet de structurer le contenu d'une page en utilisant des balises (ou tags) qui décrivent le type de contenu qu'elles contiennent.</p>
    <h2>Les éléments de base d'une page HTML</h2>
    <p>Voici quelques-uns des éléments de base que l'on trouve dans une page HTML :</p>
    <ul>
      <li><code>&lt;!DOCTYPE html&gt;</code> - Définit le type de document HTML</li>
      <li><code>&lt;html&gt;</code> - Définit le début d'un document HTML</li>
      <li><code>&lt;head&gt;</code> - Contient des informations sur le document, telles que le titre et les métadonnées</li>
      <li><code>&lt;title&gt;</code> - Définit le titre de la page, qui est affiché dans l'onglet du navigateur</li>
      <li><code>&lt;body&gt;</code> - Contient le contenu principal de la page</li>
      <li><code>&lt;h1&gt;</code> à <code>&lt;h6&gt;</code> - Définit les titres de la page en fonction de leur importance</li>
      <li><code>&lt;p&gt;</code> - Définit un paragraphe</li>
      <li><code>&lt;a&gt;</code> - Définit un lien hypertexte vers une autre page ou une autre ressource</li>
      <li><code>&lt;img&gt;</code> - Affiche une image sur la page</li>
      <li><code>&lt;ul&gt;</code> - Définit une liste à puces</li>
      <li><code>&lt;ol&gt;</code> - Définit une liste numérotée</li>
      <li><code>&lt;li&gt;</code> - Définit un élément de liste</li>
    </ul>
    <h2>Exemple de code HTML de base</h2>
    <p>Voici un exemple de code HTML de base qui affiche une page simple avec un titre et un paragraphe :</p>
    <pre>
      &lt;!DOCTYPE html&gt;
      &lt;html&gt;
        &lt;head&gt;
          &lt;title&gt;Ma première page HTML&lt;/title&gt;
        &lt;/head&gt;
        &lt;body&gt;
          &lt;h1&gt;Ma première page HTML&lt;/h1&gt;
          &lt;p&gt;Bienvenue sur ma première page HTML !&lt;/p&gt;
        &lt;/body&gt;
      &lt;/html&gt;
    </pre>
  </body>
</body>
<?php
require_once('template_footers.php');
?>
</html>