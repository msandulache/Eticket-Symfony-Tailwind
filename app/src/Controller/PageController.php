<?php

namespace App\Controller;

use App\Repository\GenreRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PageController extends AbstractController {
    #[Route('/', name: 'index')]
    public function getIndex(): Response {

        return $this->render(
            'index.html.twig', []
        );
    }

    #[Route('/account', name: 'account')]
    public function getAccount(): Response {

        return $this->render(
            'account.html.twig', []
        );
    }

    #[Route('/checkout', name: 'checkout')]
    public function getCheckout(): Response {

        return $this->render(
            'checkout.html.twig', []
        );
    }

    #[Route('/login', name: 'login')]
    public function getLogin(): Response {

        return $this->render(
            'login.html.twig', []
        );
    }

    #[Route('/product', name: 'product')]
    public function getProduct(): Response {

        return $this->render(
            'product.html.twig', []
        );
    }

    #[Route('/profile', name: 'profile')]
    public function getProfile(): Response {

        return $this->render(
            'profile.html.twig', []
        );
    }

    #[Route('/register', name: 'register')]
    public function getRegister(): Response {

        return $this->render(
            'register.html.twig', []
        );
    }

    #[Route('/shop', name: 'shop')]
    public function getShop(): Response {

        return $this->render(
            'shop.html.twig', []
        );
    }

    #[Route('/wishlist', name: 'wishlist')]
    public function getWishlist(): Response {

        return $this->render(
            'wishlist.html.twig', []
        );
    }
}
