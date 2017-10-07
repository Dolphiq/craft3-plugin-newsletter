<?php
/**
 * Newsletter plugin for Craft CMS 3.x
 *
 * Craft 3 plugin that provides an easy way to enable and manage a xml sitemap for search engines like Google
 *
 * @link      https://dolphiq.nl
 * @copyright Copyright (c) 2017 Dolphiq
 */

namespace dolphiq\newsletter\tasks;

use dolphiq\newsletter\Newsletter;

use Craft;
use craft\base\Task;

/**
 * NewsletterJob Task
 *
 * Tasks let you run background processing for things that take a long time,
 * dividing them up into steps.  For example, Asset Transforms are regenerated
 * using Tasks.
 *
 * Keep in mind that tasks only get timeslices to run when Craft is handling
 * requests on your website.  If you need a task to be run on a regular basis,
 * write a Controller that triggers it, and set up a cron job to
 * trigger the controller.
 *
 * The pattern used to queue up a task for running is:
 *
 * use dolphiq\newsletter\tasks\NewsletterJob as NewsletterJobTask;
 *
 * $tasks = Craft::$app->getTasks();
 * if (!$tasks->areTasksPending(NewsletterJobTask::class)) {
 *     $tasks->createTask(NewsletterJobTask::class);
 * }
 *
 * https://craftcms.com/classreference/services/TasksService
 *
 * @author    Dolphiq
 * @package   Newsletter
 * @since     1.0.0
 */
class NewsletterJob extends Task
{
    // Public Properties
    // =========================================================================

    /**
     * Some attribute
     *
     * @var string
     */
    public $someAttribute = 'Some Default';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['someAttribute', 'string'],
            ['someAttribute', 'default', 'value' => 'Some Default'],
        ];
    }

    /**
     * Returns the total number of steps for this task.
     *
     * @return int The total number of steps for this task
     */
    public function getTotalSteps(): int
    {
        return 1;
    }

    /**
     * Runs a task step.
     *
     * @param int $step The step to run
     *
     * @return bool|string True if the step was successful, false or an error message if not
     */
    public function runStep(int $step)
    {
        return true;
    }

    // Protected Methods
    // =========================================================================

    /**
     * Returns a default description for [[getDescription()]], if [[description]] isn’t set.
     *
     * @return string The default task description
     */
    protected function defaultDescription(): string
    {
        return Craft::t('newsletter', 'NewsletterJob');
    }
}
