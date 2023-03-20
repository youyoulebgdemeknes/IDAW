<?php
    $currentPageId = 'accueil';
    $currentLangId = 'fr';
    if(isset($_GET['lang'])){
        $currentLangId = $_GET['lang'];
    }
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
        }
    require_once("template_header.php");
    require_once("template_menu.php");

    renderMenuToHTML($currentPageId,$currentLangId);
?>
<body>
    <section class="corps">
<?php
    $pageToInclude = "$currentLangId/" . $currentPageId . ".php";
    print($pageToInclude);
    if(is_readable($pageToInclude))
        require_once($pageToInclude);
    else
        require_once("error.php");
?>
    </section>
</body>
<?php
require_once("template_footers.php");
?>