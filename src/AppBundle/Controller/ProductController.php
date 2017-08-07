<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Product;

class ProductController extends Controller
{
    /**
     * @Route("/products", name="products")
     */
    public function overviewAction()
    {
        
        $products = $this->getDoctrine()->getEntityManager()->getRepository(\AppBundle\Entity\Product::class)->findAll();
      return $this->render('products/overview.html.twig',[
          'products' => $products
      ]);  
    }
    
    /**
     * @Route("/products/add", name="products/add")
     */
    public function addAction(Request $request)
    {
        $product = new Product(
                $request->get('name'),
                $request->get('price'),
                $request->get('description')
                );
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($product);
        $em->flush($product);
        
        return $this->redirectToRoute('products');
    }
}
