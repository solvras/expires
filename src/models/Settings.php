<?php
/**
 * Expires plugin for Craft CMS 3.x
 *
 * Get notifications when entries expire, and see if it has any relations that will be affected
 *
 * @link      https://solvr.no
 * @copyright Copyright (c) 2020 Johannes Arnstad
 */

namespace solvr\expires\models;

use solvr\expires\Expires;

use Craft;
use craft\base\Model;

/**
 * @author    Johannes Arnstad
 * @package   Expires
 * @since     0.0.1
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $numberOfDaysBeforeExpireWarning = 7;
    public $showRelatedEntries = true;

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            ['numberOfDaysBeforeExpireWarning', 'integer'],
            ['showRelatedEntries', 'boolean'],
            ['showRelatedEntries', 'default', 'value' => true],
            [['numberOfDaysBeforeExpireWarning'], 'required'],
        ];
    }
}
