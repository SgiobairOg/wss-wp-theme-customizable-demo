<?php

    if ( is_page( 'contact' ) ) {
        do_action( 'cws_contact_form' );
    } else {
        $forms = [
            'service' => 'Service Request',
            'parts' => 'Parts Request',
        ];
        foreach ($forms as $form => $title) {
            if ( is_page( $form ) ) {
                do_action( 'cws_display_form', $title );
            }
        }
    }
