<?php
/**
 * Expires plugin for Craft CMS 3.x
 *
 * Get notifications when entries expire, and see if it has any relations that will be affected
 *
 * @link      https://solvr.no
 * @copyright Copyright (c) 2020 Johannes Arnstad
 */

/**
 * Expires config.php
 *
 * This file exists only as a template for the Expires settings.
 * It does nothing on its own.
 *
 * Don't edit this file, instead copy it to 'craft/config' as 'expires.php'
 * and make your changes there to override default settings.
 *
 * Once copied to 'craft/config', this file will be multi-environment aware as
 * well, so you can have different settings groups for each environment, just as
 * you do for 'general.php'
 */

return [

    // Sets the number of days before an entry expire you will receive a warning
    "numberOfDaysBeforeExpireWarning" => 7,
    // Show entries that is related to an entry about to expire
    "showRelatedEntries" => true
];
