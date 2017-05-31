<?php
/**
 * Local Configuration Override
 *
 * This configuration override file is for overriding environment-specific and
 * security-sensitive configuration information. Copy this file without the
 * .dist extension at the end and populate values as needed.
 *
 * @NOTE: This file is ignored from Git by default with the .gitignore included
 * in ZendSkeletonApplication. This is a good practice, as it prevents sensitive
 * credentials from accidentally being comitted into version control.
 */

return array(
   'phpSettings' => array('display_startup_errors'        => false,
						  'display_errors'                => false,
						  'max_execution_time'            => 600,
						  'date.timezone'                 => 'Asia/Jakarta',
						  'mbstring.internal_encoding'    => 'UTF-8', 
						  ),
);

