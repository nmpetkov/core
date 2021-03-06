<?php
/**
 * Routes.
 *
 * @copyright Zikula contributors (Zikula)
 * @license http://www.gnu.org/licenses/lgpl.html GNU Lesser General Public License
 * @author Zikula contributors <support@zikula.org>.
 * @link http://www.zikula.org
 * @link http://zikula.org
 * @version Generated by ModuleStudio 0.7.0 (http://modulestudio.de).
 */

namespace Zikula\RoutesModule\Listener\Base;

use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Zikula\Core\Event\GenericEvent;

/**
 * Event handler base class for theme-related events.
 */
class ThemeListener implements EventSubscriberInterface
{
    /**
     * Makes our handlers known to the event system.
     */
    public static function getSubscribedEvents()
    {
        return array(
            'theme.preinit'     => array('preInit', 5),
            'theme.init'        => array('init', 5),
            'theme.load_config' => array('loadConfig', 5),
            'theme.prefetch'    => array('preFetch', 5),
            'theme.postfetch'   => array('postFetch', 5)
        );
    }
    
    /**
     * Listener for the `theme.preinit` event.
     *
     * Occurs on the startup of the `Zikula_View_Theme#__construct()`.
     * The subject is the Zikula_View_Theme instance.
     * Is useful to setup a customized theme configuration or cache_id.
     *
     * @param GenericEvent $event The event instance.
     */
    public function preInit(GenericEvent $event)
    {
    }
    
    /**
     * Listener for the `theme.init` event.
     *
     * Occurs just before `Zikula_View_Theme#__construct()` finishes.
     * The subject is the Zikula_View_Theme instance.
     *
     * @param GenericEvent $event The event instance.
     */
    public function init(GenericEvent $event)
    {
    }
    
    /**
     * Listener for the `theme.load_config` event.
     *
     * Runs just before `Theme#load_config()` completed.
     * Subject is the Theme instance.
     *
     * @param GenericEvent $event The event instance.
     */
    public function loadConfig(GenericEvent $event)
    {
    }
    
    /**
     * Listener for the `theme.prefetch` event.
     *
     * Occurs in `Theme::themefooter()` just after getting the `$maincontent`.
     * The event subject is `$this` (Theme instance) and has $maincontent as the event data
     * which you can modify with `$event->setData()` in the event handler.
     *
     * @param GenericEvent $event The event instance.
     */
    public function preFetch(GenericEvent $event)
    {
    }
    
    /**
     * Listener for the `theme.postfetch` event.
     *
     * Occurs in `Theme::themefooter()` just after rendering the theme.
     * The event subject is `$this` (Theme instance) and the event data is the rendered
     * output which you can modify with `$event->setData()` in the event handler.
     *
     * @param GenericEvent $event The event instance.
     */
    public function postFetch(GenericEvent $event)
    {
    }
}
