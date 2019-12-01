<?php

namespace app\stack;

class Prob
{
    public function work($path)
    {
        $directory=new \DirectoryIterator($path);
        while ($directory->valid()){
            $path=$directory->getFilename();
            var_dump($path);
            echo "<a href='?dir=/$path/'>$directory</a>".'<br>';
            $directory->next();
        }
    }

}