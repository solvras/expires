<?php
/**
 * Expires plugin for Craft CMS 3.x
 *
 * Get notifications when entries expire, and see if it has any relations that will be affected
 *
 * @link      https://solvr.no
 * @copyright Copyright (c) 2020 Johannes Arnstad
 */

namespace solvr\expires\widgets;

use solvr\expires\Expires;
use solvr\expires\assetbundles\expireswidgetwidget\ExpiresWidgetWidgetAsset;

use Craft;
use craft\base\Widget;

/**
 * Expires Widget
 *
 * @author    Johannes Arnstad
 * @package   Expires
 * @since     0.0.1
 */
class ExpiresWidget extends Widget
{

    // Public Properties
    // =========================================================================

    /**
     * @var string
     */
    public $message = 'Hello, world.';

    // Static Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public static function displayName(): string
    {
        return Craft::t('expires', 'ExpiresWidget');
    }

    /**
     * @inheritdoc
     */
    public static function iconPath()
    {
        return Craft::getAlias("@solvr/expires/assetbundles/expireswidgetwidget/dist/img/ExpiresWidget-icon.svg");
    }

    /**
     * @inheritdoc
     */
    public static function maxColspan()
    {
        return null;
    }

    // Public Methods
    // =========================================================================

    /**
     * @inheritdoc
     */
    public function rules()
    {
        $rules = parent::rules();
        $rules = array_merge(
            $rules,
            [
                ['message', 'string'],
                ['message', 'default', 'value' => 'Hello, world.'],
            ]
        );
        return $rules;
    }

    /**
     * @inheritdoc
     */
    public function getSettingsHtml()
    {
        return Craft::$app->getView()->renderTemplate(
            'expires/_components/widgets/ExpiresWidget_settings',
            [
                'widget' => $this
            ]
        );
    }

    /**
     * @inheritdoc
     */
    public function getBodyHtml()
    {
        Craft::$app->getView()->registerAssetBundle(ExpiresWidgetWidgetAsset::class);

        return Craft::$app->getView()->renderTemplate(
            'expires/_components/widgets/ExpiresWidget_body',
            [
                'message' => $this->message
            ]
        );
    }
}
