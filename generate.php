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
                    echo '<span style="color:green;">SUCCESS</span> <br>' . $phpFile . ' ----> <a href="' . $htmlFile . '" target="_blank">' . $htmlFile . '</a><br><br>';
                }else{
                    echo '<span style="color:red;">ERROR</span> <br>' . $phpFile . ' ----> ' . $htmlFile . '<br><br>';
                }
            }
        }
    }
?>
