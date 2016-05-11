<?php
    $path = 'http://localhost/';
    $filesToIgnore = ['styles.php', 'generate.php'];

    $files = glob(dirname(__FILE__) . '/*.php');
    foreach($files as $file){
        $fileName = basename($file);
        if(strpos($fileName, '_') !== 0){
            if(!in_array($fileName, $filesToIgnore)){
                $phpFile = $path . $fileName;
                $htmlFile = pathinfo($fileName, PATHINFO_FILENAME) . '.html';

                if(copy($phpFile, $htmlFile)){
                    echo 'SUCCESS <br>' . $phpFile . ' ----> ' . $htmlFile . '<br><br>';
                }else{
                    echo 'ERROR <br>' . $phpFile . ' ----> ' . $htmlFile . '<br><br>';
                }
            }
        }
    }
?>
