<?php

namespace ContainerADDHJxY;

use Symfony\Component\DependencyInjection\Argument\RewindableGenerator;
use Symfony\Component\DependencyInjection\ContainerInterface;
use Symfony\Component\DependencyInjection\Exception\RuntimeException;

/**
 * @internal This class has been auto-generated by the Symfony Dependency Injection Component.
 */
class getGregwarCaptcha_ControllerService extends App_KernelDevDebugContainer
{
    /**
     * Gets the public 'gregwar_captcha.controller' shared autowired service.
     *
     * @return \Gregwar\CaptchaBundle\Controller\CaptchaController
     */
    public static function do($container, $lazyLoad = true)
    {
        include_once \dirname(__DIR__, 4).'/vendor/gregwar/captcha-bundle/Controller/CaptchaController.php';

        return $container->services['gregwar_captcha.controller'] = new \Gregwar\CaptchaBundle\Controller\CaptchaController(($container->services['gregwar_captcha.generator'] ?? $container->load('getGregwarCaptcha_GeneratorService')), $container->parameters['gregwar_captcha.config']);
    }
}
