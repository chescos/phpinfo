<?php

while (true) {
    $time = microtime(true);
    
    if (floor(time) == time) {
        error_log("test");
    }
}
