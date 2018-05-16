<?php
    /**
     * Shortcode Functionality
     */
    function s3_shortcode( $atts ) {
        // Shortcode attributes
        $shortcode_atts   = shortcode_atts( array(
                                                'url'      => '',
                                                'width'    => '100%',
                                                'height'   => '830px',
                                                'language' => 'en',
                                            ), $atts );


            $embedsrc = $shortcode_atts['url'];
            $iframe   = sprintf( $embedsrc, urlencode( $url ), esc_attr( $shortcode_atts['language'] ) );

            $min_height = '';
            if ( check_percentage(  $shortcode_atts['height'] ) ) {
                $min_height = 'min-height:500px;';
            }
            if ( check_responsive(  $shortcode_atts['height'] ) AND check_responsive(  $shortcode_atts['width'] ) ) {
                $iframe_style = 'style="width:100%; height:100%; border: none; position: absolute;left:0;top:0;"';
                $doc_style    = 'style="position:relative;padding-top:90%;"';
            } 
            else {
                $iframe_style = sprintf( 'style="width:%s; height:%s; border: none;' . $min_height . '"', esc_html(  $shortcode_atts['width'] ), esc_html(  $shortcode_atts['height'] ) );
                $doc_style    = 'style="position:relative;"';
            }
           
            $iframe = sprintf('<iframe src="%s" title="%s" %s></iframe>', 
                esc_attr( $iframe ), esc_html__( 'Embedded PDF', 'S3_Pdf'), 
                $iframe_style );

            $final_output  = '<div class="ead-preview"><div class="ead-document" ' . $doc_style . '>' . $iframe .'</div>'.'</div>'.'<div class="pdf-ad">' . get_option('newswire_header_ad_code') .'</div>';

        return $final_output;
    }

    add_shortcode( 's3', 's3_shortcode' );

?>