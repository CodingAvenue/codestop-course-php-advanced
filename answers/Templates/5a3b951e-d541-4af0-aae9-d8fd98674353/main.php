<?php
function readTemplate($file, $array)
{
    if (file_exists($file)) {
        $output = file_get_contents($file);
        foreach ($array as $key => $val) {
            $replace = '{'.$key.'}';
            $output = str_replace($replace, $val, $output);
        }
        return $output;
    }
}

$templateFile = __DIR__. '/template.tpl';
$testTemplate = readTemplate($templateFile,
            array
            (
                'title' => "Favorites",
                'fruit' => "Apple",
                'color' => "Gray"
            ));
echo $testTemplate;
?>