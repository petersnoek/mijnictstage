<?php
    // load the template power engine
    require 'inc/class.TemplatePower.inc.php';


    //create a new TemplatePower object using a file
    $tpl = new TemplatePower( "tpl/template.tpl" );
    $tpl->prepare();

    $count = 0;

    while( $count < 10 )
    {
        $tpl->newBlock( "name_row" );
        $tpl->assign( "name", "Snek" . $count );

        $count++;
    }

    $tpl->gotoBlock( "_ROOT" );
    $tpl->assign( "total_names", $count );

    $tpl->printToScreen();

?>