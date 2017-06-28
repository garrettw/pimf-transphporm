<?php
namespace Vanilla\Controller;

use Pimf\Controller\Base, Pimf\View\Transphporm as View;

class Hello extends Base
{
    /**
     * A index action - this is a framework restriction!
     */
    public function indexAction()
    {
        $firstname = $this->request->fromGet()->get('firstname', 'World');

        $view = new View(
            'hello.xml',
            [
                'tss' => 'hello.tss',
                // the 'data' param is optional; depends on whether your TSS file requires it
                'data' => [
                    'blog_title'   => 'Welcome to PIMF Transphporm bundle',
                    'blog_content' => 'Hello '.join(' ', (array)$firstname).'!!!',
                    'blog_footer'  => 'Please type in the URL "/hello/Barry" and see what happens!',
                ],
            ]
        );

        $this->response->asHTML()->send($view);
    }

    public function indexCliAction()
    {
        $this->indexAction();
    }
}
