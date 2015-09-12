<?php

    //Active Link
    function NavIsActive($url) {
        if(URL::current() == URL::to($url)) {
            return 'active';
        }
    }

    //Relative Active Link
    function relativeActive($url) {
        if(strpos(URL::current(), $url) == true) {
            return 'active';
        }
    }