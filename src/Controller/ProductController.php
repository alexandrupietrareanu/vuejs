<?php

namespace App\Controller;


use ApiPlatform\Core\Api\IriConverterInterface;
use App\Entity\Category;
use App\Entity\Product;
use App\Repository\CategoryRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class ProductController extends AbstractController
{
    public function __construct(
        private readonly CategoryRepository $categoryRepository,
        private readonly IriConverterInterface $iriConverter,
    )
    {
    }

    /**
     * @Route("/", name="app_homepage")
     */
    public function index(): Response
    {
        return $this->render('product/index.html.twig', [
            'categories' => $this->categoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/category/{id}", name="app_category")
     */
    public function showCategory(Category $category): Response
    {
        return $this->render('product/index.html.twig', [
            'currentCategoryId' => $this->iriConverter->getIriFromItem($category),
            'categories' => $this->categoryRepository->findAll(),
        ]);
    }

    /**
     * @Route("/product/{id}", name="app_product")
     */
    public function showProduct(Product $product): Response
    {
        return $this->render('product/index.html.twig', [
            'currentCategoryId' => $this->iriConverter->getIriFromItem($product->getCategory()),
            'currentProductId' => $this->iriConverter->getIriFromItem($product),
            'categories' => $this->categoryRepository->findAll(),
        ]);
    }
}
