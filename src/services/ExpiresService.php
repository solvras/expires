<?php
/**
 * Expires plugin for Craft CMS 3.x
 *
 * Get notifications when entries expire, and see if it has any relations that will be affected
 *
 * @link      https://solvr.no
 * @copyright Copyright (c) 2020 Johannes Arnstad
 */

namespace solvr\expires\services;

use solvr\expires\Expires;

use Craft;
use craft\base\Component;

/**
 * @author    Johannes Arnstad
 * @package   Expires
 * @since     0.0.1
 */
class ExpiresService extends Component
{
    // Public Methods
    // =========================================================================

    /*
     * @return mixed
     */
    public function findEntriesToExpire()
    {
        $expiresInDays = Expires::$plugin->getSettings()->numberOfDaysBeforeExpireWarning;

        $expiryDate = (new \DateTime('NOW'))->modify('+ ' . $expiresInDays . ' days')->format(\DateTime::ATOM);

        $expiredEntriesQuery = \craft\elements\Entry::find()
            ->expiryDate("< {$expiryDate}");

        $result = $expiredEntriesQuery->all();

        if (Expires::$plugin->getSettings()->showRelatedEntries) {
            // @TODO do something to get related entries
        }

        return $result;
    }
}
