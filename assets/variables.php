<?php
    $name = "Frappe Dev IT Solutions";
    $root = "";

    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS']==='on')
    {
        $root="https";
    }
    else
    {
        $root="http";
    }
    $root.="://".$_SERVER['HTTP_HOST']."/FrappeDevITSolutions/";
    $images = $root."images/";

?>