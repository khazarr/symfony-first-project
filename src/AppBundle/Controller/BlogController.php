<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\BlogPost;

class BlogController extends Controller
{
    /**
     * @Route("/blog", name="blog")
     */
    public function viewAction(Request $request)
    {

        

        $blog = $this->getDoctrine()->getEntityManager()->getRepository(\AppBundle\Entity\BlogPost::class)->findAll();
        
        return $this->render('blog/blogview.html.twig',[
            'blog' => $blog
        ]);
    }
    
    
    /**
     * @Route("/blog/remove", name="blog/remove")
     */
    public function removeLastAction() {   
        
        
       $em = $this->getDoctrine()->getManager();
       $query = $em->createQuery(''
               . 'SELECT u FROM \AppBundle\Entity\BlogPost u '
               . 'ORDER BY u.id DESC');
       
       $posts = $query->getResult();
       //remove post with max id
       $em->remove($posts[0]);
       $em->flush();
        
       
       //die(var_dump($posts[0]));
       
        
       return $this->redirectToRoute('blog'); 
    }
    
    
    
    /**
     * @Route("/blog/addrandom", name="blog/addrandom")
     */
    public function addRandomAction()
    {
        
        //Post title generator
        $response = file_get_contents('http://skateipsum.com/get/1/0/text');
        $firstDot = stripos($response, '.');
        $postTitle = substr($response,3,$firstDot - 2);
        
        //Post body generator
        $postBody = file_get_contents('http://skateipsum.com/get/1/0/text');
        //get rid of <p> tags
        $postBody = substr($postBody, 3, strlen($postBody) - 7);
        
        
        
        //dog img generator
        $response2 = json_decode(file_get_contents('https://dog.ceo/api/breeds/image/random'));
        $dogImg = $response2->message;
        
        
        
        //create new Blog Post object
        $blogPost = new BlogPost($postTitle,$postBody,$dogImg);
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($blogPost);
        $em->flush($blogPost);
        
        
        return $this->redirectToRoute('blog');
    }
}
