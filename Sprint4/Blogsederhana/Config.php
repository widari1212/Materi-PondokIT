<?php

class Config
{
    public function connect()
    {
        $con = mysqli_connect('localhost', 'widari', '<thisismypass>', 'artikel'); 

        return $con;
    }
}
