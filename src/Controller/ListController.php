<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ListController extends AbstractController
{
    /**
     * @Route("/list", name="list")
     */
    public function index(): Response
    {
        return $this->render('list/index.html.twig', [
            'list' => 'List of All Products',
        ]);
    }

    /**
     * @Route("/", name="home")
     */
    public function home(): Response {
        return $this->render('list/home.html.twig', [
            'home' => 'Dashboard'
        ]);
    }

    /**
     * @Route("/single", name="list_show")
     */
    public function show(): Response {
        return $this->render('list/show.html.twig', [
            'show' => 'Show Single Product',
        ]);
    }

    /**
     * @Route("/new", name="create")
     */
    public function create(): Response {
        return $this->render('list/create.html.twig', [
            'create' => 'Create a new Product'
        ]);
    }

    /**
     * @Route("/signin", name="signin")
     */
    public function signin(): Response {
        return $this->render('list/signin.html.twig', [
            'signin' => 'signin'
        ]);
    }

    /**
     * @Route("/signup", name="signup")
     */
    public function signup(): Response {
        return $this->render('list/signup.html.twig', [
            'signup' => 'signup'
        ]);
    }
}
