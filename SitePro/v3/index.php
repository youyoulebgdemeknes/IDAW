<?php
    require_once("template_header.php");
    require_once("template_menu.php");
    $currentPageId = 'accueil';
    $currentLangId = 'fr';
    if(isset($_GET['lang'])){
        $currentLangId = $_GET['lang'];
    }
    if(isset($_GET['page'])) {
        $currentPageId = $_GET['page'];
        }

    renderMenuToHTML($currentPageId,$currentLangId);
?>

    <section class="corps">
<?php
    $pageToInclude = "{$currentLangId}/" . $currentPageId . ".php";
    if(is_readable($pageToInclude))
        require_once($pageToInclude);
    else
        require_once("acceuil.php");
?>
    </section>
<?php
require_once("template_footers.php");
?>