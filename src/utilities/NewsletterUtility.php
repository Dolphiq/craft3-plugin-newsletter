<?php
/**
 * Newsletter plugin for Craft CMS 3.x
 *
 * Craft 3 plugin that provides an easy way to enable and manage a xml sitemap for search engines like Google
 *
 * @link      https://dolphiq.nl
 * @copyright Copyright (c) 2017 Dolphiq
 */

namespace dolphiq\newsletter\utilities;

use dolphiq\newsletter\Newsletter;
use dolphiq\newsletter\assetbundles\newsletterutilityutility\NewsletterUtilityUtilityAsset;

use Craft;
use craft\base\Utility;

/**
 * Newsletter Utility
 *
 * Utility is the base class for classes representing Control Panel utilities.
 *
 * https://craftcms.com/docs/plugins/utilities
 *
 * @author    Dolphiq
 * @package   Newsletter
 * @since     1.0.0
 */
class NewsletterUtility extends Utility
{
    // Static
    // =========================================================================

    /**
     * Returns the display name of this utility.
     *
     * @return string The display name of this utility.
     */
    public static function displayName(): string
    {
        return Craft::t('newsletter', 'NewsletterUtility');
    }

    /**
     * Returns the utility’s unique identifier.
     *
     * The ID should be in `kebab-case`, as it will be visible in the URL (`admin/utilities/the-handle`).
     *
     * @return string
     */
    public static function id(): string
    {
        return 'newsletter-newsletter-utility';
    }

    /**
     * Returns the path to the utility's SVG icon.
     *
     * @return string|null The path to the utility SVG icon
     */
    public static function iconPath()
    {
        return Craft::getAlias("@dolphiq/newsletter/assetbundles/newsletterutilityutility/dist/img/NewsletterUtility-icon.svg");
    }

    /**
     * Returns the number that should be shown in the utility’s nav item badge.
     *
     * If `0` is returned, no badge will be shown
     *
     * @return int
     */
    public static function badgeCount(): int
    {
        return 0;
    }

    /**
     * Returns the utility's content HTML.
     *
     * @return string
     */
    public static function contentHtml(): string
    {
        Craft::$app->getView()->registerAssetBundle(NewsletterUtilityUtilityAsset::class);

        $someVar = 'Have a nice day!';
        return Craft::$app->getView()->renderTemplate(
            'newsletter/_components/utilities/NewsletterUtility_content',
            [
                'someVar' => $someVar
            ]
        );
    }
}
