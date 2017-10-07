<?php
/**
 * Newsletter plugin for Craft CMS 3.x
 *
 * Craft 3 plugin that provides an easy way to enable and manage a xml sitemap for search engines like Google
 *
 * @link      https://dolphiq.nl
 * @copyright Copyright (c) 2017 Dolphiq
 */

namespace dolphiq\newsletter\services;

use dolphiq\newsletter\Newsletter;

use Craft;
use craft\base\Component;

/**
 * NewsletterService Service
 *
 * All of your plugin’s business logic should go in services, including saving data,
 * retrieving data, etc. They provide APIs that your controllers, template variables,
 * and other plugins can interact with.
 *
 * https://craftcms.com/docs/plugins/services
 *
 * @author    Dolphiq
 * @package   Newsletter
 * @since     1.0.0
 */
class NewsletterService extends Component
{
    // Public Methods
    // =========================================================================

    /**
     * This function can literally be anything you want, and you can have as many service
     * functions as you want
     *
     * From any other plugin file, call it like this:
     *
     *     Newsletter::$plugin->newsletterService->exampleService()
     *
     * @return mixed
     */
    public function exampleService()
    {
        $result = 'something';
        // Check our Plugin's settings for `someAttribute`
        if (Newsletter::$plugin->getSettings()->someAttribute) {
        }

        return $result;
    }
}
