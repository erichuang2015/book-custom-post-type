<?php

    /* Function: bcpt_sort_books
     ** this function
     ** args: string 
     ** returns: string
     */
    function bcpt_sort_books( $a, $b ) {
        $title_a = mb_strtolower( preg_replace( '~\P{Xan}++~u', '', $a->post_title ) );
        $title_b = mb_strtolower( preg_replace( '~\P{Xan}++~u', '', $b->post_title ) );

        if( $title_a == $title_b ) {
            return 0 ;
        } 
        return ( $title_a < $title_b ) ? -1 : 1;
    }


    /* Function: bcpt_sort_artists
    ** this function
     ** args: string 
     ** returns: string
     */
    function bcpt_sort_artists( $a, $b ) {
        $aLast = end( explode( ' ', $a->name ) );
        $bLast = end( explode( ' ', $b->name ) );

        return strcasecmp( $aLast, $bLast );
    }

?>
