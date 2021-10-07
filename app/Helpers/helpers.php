<?php

if (! function_exists('seconds_to_hours')) {
    function second_to_hours(int $seconds): float{
        return number_format($seconds/3600,2);
    }
}
