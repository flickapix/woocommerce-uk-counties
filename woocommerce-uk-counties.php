<?php

/*
Plugin Name: WooCommerce UK Counties
Plugin URI: http://plugins.leewillis.co.uk/donate/
Description: A short plugin that adds UK postal counties to WooCommerce's list of states.
Version: 1.0
Author: Lee Willis
Author URI: http://plugins.leewillis.co.uk/
*/

/**
 * Copyright (c) 2012 Lee Willis. All rights reserved.
 *
 * Released under the GPL license
 * http://www.opensource.org/licenses/gpl-license.php
 *
 * This is an add-on for WordPress
 * http://wordpress.org/
 *
 * **********************************************************************
 * This program is free software; you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation; either version 2 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU General Public License for more details.
 * **********************************************************************
 */


function wc_uk_counties_add_counties ( $states ) {

    $states['GB'] = array (
                            'AV' => 'Avon',
                            'BE' => 'Bedfordshire',
                            'BK' => 'Berkshire',
                            'BU' => 'Buckinghamshire',
                            'CA' => 'Cambridgeshire',
                            'CH' => 'Cheshire',
                            'CL' => 'Cleveland',
                            'CO' => 'Cornwall',
                            'CD' => 'County Durham',
                            'CU' => 'Cumbria',
                            'DE' => 'Derbyshire',
                            'DV' => 'Devon',
                            'DO' => 'Dorset',
                            'ES' => 'East Sussex',
                            'EX' => 'Essex',
                            'GL' => 'Gloucestershire',
                            'HA' => 'Hampshire',
                            'HE' => 'Herefordshire',
                            'HT' => 'Hertfordshire',
                            'IW' => 'Isle of Wight',
                            'KE' => 'Kent',
                            'LA' => 'Lancashire',
                            'LE' => 'Leicestershire',
                            'LI' => 'Lincolnshire',
                            'LO' => 'London',
                            'ME' => 'Merseyside',
                            'MI' => 'Middlesex',
                            'NO' => 'Norfolk',
                            'NH' => 'North Humberside',
                            'NY' => 'North Yorkshire',
                            'NS' => 'Northamptonshire',
                            'NL' => 'Northumberland',
                            'NT' => 'Nottinghamshire',
                            'OX' => 'Oxfordshire',
                            'SH' => 'Shropshire',
                            'SO' => 'Somerset',
                            'SM' => 'South Humberside',
                            'SY' => 'South Yorkshire',
                            'SF' => 'Staffordshire',
                            'SU' => 'Suffolk',
                            'SR' => 'Surrey',
                            'TW' => 'Tyne and Wear',
                            'WA' => 'Warwickshire',
                            'WM' => 'West Midlands',
                            'WS' => 'West Sussex',
                            'WY' => 'West Yorkshire',
                            'WI' => 'Wiltshire',
                            'WO' => 'Worcestershire',
                           );

    return $states;

}

add_filter ( 'woocommerce_states', 'wc_uk_counties_add_counties' );