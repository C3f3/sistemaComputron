<?php
    function setActive($routeName){
        if(request()->routeIs($routeName)==true){
            return 'activado';
        }
        else{
            return "";
        }
        
    }

