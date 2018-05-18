<?php
    /**
     * Shortcode Functionality for first pdf
     */
    function s3_shortcode_1( $atts ) {
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
                $iframe_style = '#iframe-style';
                $doc_style    = '#doc-style';
            } 
            else {
                $iframe_style = sprintf( 'style="width:%s; height:%s; border: none;' . $min_height . '"', esc_html(  $shortcode_atts['width'] ), esc_html(  $shortcode_atts['height'] ) );
                $doc_style    = 'style="position:relative;"';
            }
           
            $iframe = sprintf('<iframe src="%s" title="%s" %s></iframe>', 
                esc_attr( $iframe ), esc_html__( 'Embedded PDF', 'S3_Pdf'), 
                $iframe_style );

            $final_output  = '<div class="pdf-preview">
                              <div class="pdf-document" ' . $doc_style . '>' . $iframe .'</div>'.
                              '</div>'.'<center class="pdf-ad">' . get_option('newswire_header_ad_code') .'</center>';

            return $final_output;
    }

    /**
     * Shortcode Functionality for second pdf
     */
    function s3_shortcode_2( $atts ) {
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
            $iframe_style = '#iframe-style';
            $doc_style    = '#doc-style';
        } 
        else {
            $iframe_style = sprintf( 'style="width:%s; height:%s; border: none;' . $min_height . '"', esc_html(  $shortcode_atts['width'] ), esc_html(  $shortcode_atts['height'] ) );
            $doc_style    = 'style="position:relative;"';
        }
       
        $iframe = sprintf('<iframe src="%s" title="%s" %s></iframe>', 
            esc_attr( $iframe ), esc_html__( 'Embedded PDF', 'S3_Pdf'), 
            $iframe_style );

        $final_output  = '<div class="pdf-preview">
                          <div class="pdf-document" ' . $doc_style . '>' . $iframe .'</div>'.
                          '</div>'.'<center class="pdf-ad">' . get_option('newswire_header_ad_code') .'</center>';

        return $final_output;
    }

    /**
     * Shortcode Functionality for third pdf
     */
    function s3_shortcode_3( $atts ) {
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
                $iframe_style = '#iframe-style';
                $doc_style    = '#doc-style';
            } 
            else {
                $iframe_style = sprintf( 'style="width:%s; height:%s; border: none;' . $min_height . '"', esc_html(  $shortcode_atts['width'] ), esc_html(  $shortcode_atts['height'] ) );
                $doc_style    = 'style="position:relative;"';
            }
           
            $iframe = sprintf('<iframe src="%s" title="%s" %s></iframe>', 
                esc_attr( $iframe ), esc_html__( 'Embedded PDF', 'S3_Pdf'), 
                $iframe_style );

            $final_output  = '<div class="pdf-preview">
                              <div class="pdf-document" ' . $doc_style . '>' . $iframe .'</div>'.
                              '</div>'.'<center class="pdf-ad">' . get_option('newswire_header_ad_code') .'</center>';

        return $final_output;
    }

    /**
     * Shortcode Functionality for fourth pdf
     */
    function s3_shortcode_4( $atts ) {
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
            $iframe_style = '#iframe-style';
            $doc_style    = '#doc-style';
        } 
        else {
            $iframe_style = sprintf( 'style="width:%s; height:%s; border: none;' . $min_height . '"', esc_html(  $shortcode_atts['width'] ), esc_html(  $shortcode_atts['height'] ) );
            $doc_style    = 'style="position:relative;"';
        }
       
        $iframe = sprintf('<iframe src="%s" title="%s" %s></iframe>', 
            esc_attr( $iframe ), esc_html__( 'Embedded PDF', 'S3_Pdf'), 
            $iframe_style );

        $final_output  = '<div class="pdf-preview">
                          <div class="pdf-document" ' . $doc_style . '>' . $iframe .'</div>'.
                          '</div>'.'<center class="pdf-ad">' . get_option('newswire_header_ad_code') .'</center>';

        return $final_output;
    }

    /**
     * Shortcode Functionality for fifth pdf
     */
    function s3_shortcode_5( $atts ) {
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
                $iframe_style = '#iframe-style';
                $doc_style    = '#doc-style';
            } 
            else {
                $iframe_style = sprintf( 'style="width:%s; height:%s; border: none;' . $min_height . '"', esc_html(  $shortcode_atts['width'] ), esc_html(  $shortcode_atts['height'] ) );
                $doc_style    = 'style="position:relative;"';
            }
           
            $iframe = sprintf('<iframe src="%s" title="%s" %s></iframe>', 
                esc_attr( $iframe ), esc_html__( 'Embedded PDF', 'S3_Pdf'), 
                $iframe_style );

            $final_output  = '<div class="pdf-preview">
                              <div class="pdf-document" ' . $doc_style . '>' . $iframe .'</div>'.
                              '</div>'.'<center class="pdf-ad">' . get_option('newswire_header_ad_code') .'</center>';

        return $final_output;
    }

    // Register all shortcode
    add_shortcode( 'pdf1', 's3_shortcode_1' );
    add_shortcode( 'pdf2', 's3_shortcode_2' );
    add_shortcode( 'pdf3', 's3_shortcode_3' );
    add_shortcode( 'pdf4', 's3_shortcode_4' );
    add_shortcode( 'pdf5', 's3_shortcode_5' );
?>