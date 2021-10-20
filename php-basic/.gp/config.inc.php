<?php
/**
 * A basic config to start with
 */

declare(strict_types=1);

/**
 * This is needed for cookie based authentication to encrypt password in
 * cookie. Needs to be 32 chars long.
 */
$cfg['blowfish_secret'] = '+---++---+CHANGE----ME+---++---+'; 

/**
 * Servers configuration
 */
$i = 0;

$cfg['AllowArbitraryServer'] = 1;
/**
 * First server
 */
$i++;
/* Authentication type */
$cfg['Servers'][$i]['auth_type'] = 'cookie';
/* Server parameters */
$cfg['Servers'][$i]['compress'] = true;
$cfg['Servers'][$i]['AllowNoPassword'] = true;
$cfg['Servers'][$i]['ssl'] = false;
$cfg['Servers'][$i]['ssl_ca'] = 'rds-combined-ca-bundle.pem';


/**
 * Directories for saving/loading files from server
 */
$cfg['UploadDir'] = '';
$cfg['SaveDir'] = '';