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
    
     /**
     * @Route("/products/remove", name="products/remove")
     */
    public function removeAction(Request $request)
    {
        
       $productId = $request->get('id');
       $em = $this->getDoctrine()->getManager();
       $product = $em->getRepository(\AppBundle\Entity\Product::class)->find($productId);
       
       
       
       $em->remove($product);
       $em->flush();
        

        return $this->redirectToRoute('products');
    }
    
     /**
     * @Route("/products/update", name="products/update")
     */
    public function updateAction(Request $request)          
    {
        
        
       $productId = $request->get('id');
       $em = $this->getDoctrine()->getManager();
       $product = $em->getRepository(\AppBundle\Entity\Product::class)->find($productId);
       
       $newName = $request->get('name');
       $newPrice = $request->get('price');
       $newDesc = $request->get('description');
       
       if($newName !== '') { $product->setName($newName); }
       if($newPrice !== '') {$product->setPrice($newPrice);}
       if($newDesc !== '') {$product->setDescription($newDesc);}
       
       
       $em->flush();
        
        
        
        return $this->redirectToRoute('products');
    }
    
    
}
