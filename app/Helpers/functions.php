<?php

function stringToDate( string $dateString ){

    return \Carbon\Carbon::parse( $dateString );

}