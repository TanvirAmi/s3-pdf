<?php
    /**
     * Check value in percentage
     *
     * @since   0.1
     * @return  Int Dimenesion
     */
    function check_percentage( $x ) {

        if ( strstr( $x, '%' ) ) {
            return true;
        }

        return false;
    }


    /**
     * Enable Resposive
     *
     * @since   0.1
     * @return  Boolean
     */
    function check_responsive( $y ) {

        if ( strstr( $y, '%' ) ) {
            $y = preg_replace( "/[^0-9]*/", '', $y );
            if ( (int) $y == 100 ) {
                return true;
            }
        }

        return false;
    }


?>