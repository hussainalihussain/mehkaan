<?php

if(!function_exists('disableValidationInTesting')) {
    /**
     * Helper to put novalidate on a form when testing
     */
    function disableValidationInTesting() {
        if (env('DISABLE_REQUIRED', 0)) {
            echo 'novalidate';
        } else {
            return;
        }
    }
}
