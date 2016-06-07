<?php

namespace AppBundle\Controller;
use APY\DataGridBundle\Grid\Source\Entity;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

/**
 * Class PageController
 *@Route("/gad")
 * @package AppBundle\Controller
 */
class PageController extends Controller
{
    
    public function myGridAction()
    {
        // Creates simple grid based on your entity (ORM)
        $source = new Entity('AppBundle:Post');

        // Get a grid instance
        $grid = $this->get('grid');

        // Attach the source to the grid
        $grid->setSource($source);

        // Configuration of the grid

        // Manage the grid redirection, exports and the response of the controller
        return $grid->getGridResponse('AppBundle::grid.html.twig');
    }
}
