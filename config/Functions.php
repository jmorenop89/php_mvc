<?php
    namespace Config;
    
    function env($val){
        return $_ENV[$val];
    }