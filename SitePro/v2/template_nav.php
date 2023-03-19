<h2>Sommaire</h2>
<?php
function renderMenuToHTML($currentPageId) {
        // un tableau qui d\'efinit la structure du site
    $mymenu = array(
        // idPage titre
        'index' => array( 'Accueil' ),
        'cv' => array( 'Cv' ),
        'hobbies' => array('Hobies'),
        'info-tech'=> array('Information Technique')
        'projets' =>=> array('Projets')
        );

        echo ("<nav class='menu'>");

    foreach($mymenu as $pageId => $pageParameters){

        if( $currentPageId == $pageId){
            echo"<a  class='selected' href='{$pageId}'>{$pageParameters[0]}</a>";
        }
        else{
            echo"<a  href='{$pageId}'>{$pageParameters[0]}</a>" ;
        }
    }
    echo ("</nav>") ;
}
?>
