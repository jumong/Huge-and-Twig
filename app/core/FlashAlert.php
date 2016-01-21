<?php


class FlashAlert {

    /**
     * @return null
     *
     * Create a Error Message to pass to the view
     *
     */

    public static function renderFeedbackMessages() {

        $feedback = null;

        if ( !empty(Session::get( 'feedback_positive') ) ) {
            $feedback[ 'positive' ] = Session::get( 'feedback_positive' );
            Session::set( 'feedback_positive' , null );
        }

        if ( !empty(Session::get( 'feedback_negative') ) ) {
            $feedback[ 'negative' ] = Session::get( 'feedback_negative' );
            Session::set( 'feedback_negative' , null );
        }

        if ( !empty(Session::get( 'feedback_danger') ) ) {
            $feedback[ 'danger' ] = Session::get( 'feedback_danger' );
            Session::set( 'feedback_danger' , null );
        }

        return $feedback;

    }



}
