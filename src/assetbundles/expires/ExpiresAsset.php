<?php
/**
 * Expires plugin for Craft CMS 3.x
 *
 * Get notifications when entries expire, and see if it has any relations that will be affected
 *
 * @link      https://solvr.no
 * @copyright Copyright (c) 2020 Johannes Arnstad
 */

namespace solvr\expires\assetbundles\Expires;

use Craft;
use craft\web\AssetBundle;
use craft\web\assets\cp\CpAsset;

/**
 * @author    Johannes Arnstad
 * @package   Expires
 * @since     0.0.1
 */
class ExpiresAsset extends AssetBundle
{
    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function init()
    {
        $this->sourcePath = "@solvr/expires/assetbundles/expires/dist";

        $this->depends = [
            CpAsset::class,
        ];

        $this->js = [
            'js/Expires.js',
        ];

        $this->css = [
            'css/Expires.css',
        ];

        parent::init();
    }
}
