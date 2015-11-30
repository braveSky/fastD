<?php
/**
 * Created by PhpStorm.
 * User: janhuang
 * Date: 15/3/14
 * Time: 下午3:23
 * Github: https://www.github.com/janhuang 
 * Coding: https://www.coding.net/janhuang
 * SegmentFault: http://segmentfault.com/u/janhuang
 * Blog: http://segmentfault.com/blog/janhuang
 * Gmail: bboyjanhuang@gmail.com
 */

namespace Welcome\Events\Http;

use FastD\Framework\Bundle\Events\Http\Event;
use FastD\Http\Response;

/**
 * Class Index
 *
 * @package Welcome\Events\Http
 */
class Index extends Event
{
    public function welcomeAction()
    {
        return $this->render('Welcome/Resources/views/welcome.twig');
    }
}