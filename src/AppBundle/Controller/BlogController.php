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
        
        //dog img generator
        $response2 = json_decode(file_get_contents('https://dog.ceo/api/breeds/image/random'));
        $dogImg = $response2->message;
        
        
        //Post title generator
        $response = file_get_contents('http://skateipsum.com/get/1/0/text');
        $firstDot = stripos($response, '.');
        $postTitle = substr($response,3,$firstDot - 2);
        
        //Post body generator
        $postBody = file_get_contents('http://skateipsum.com/get/1/0/text');
        //get rid of <p> tags
        $postBody = substr($postBody, 3, strlen($postBody) - 7);
        
        
        // get last two segments of host name
//        preg_match('/[^.]+\.[^.]+$/', $host, $matches);
//        echo "domain name is: {$matches[0]}\n";
        
        //obtain dog name
        preg_match('/img\/.+\//', $dogImg, $match);
        $dogName = substr($match[0], 4);
        $dogName = substr($dogName,0,-1);
        $dogName = ucfirst(str_replace('-', '%20', $dogName));
        
        
        
        //api url
//        $url = "https://en.wikipedia.org/w/api.php?action=opensearch&limit=1&search="
//                . $dogName
//                . "&format=json";
//        
//        $url = 'https://en.wikipedia.org/w/api.php?format=xml&action=query&prop=extracts&titles='
//                . $dogName
//                .'&redirects=true';
//        $wikiResponse = file_get_contents($url);
//        
//        
//        
//        

//         
//         
//        $url = 'https://en.wikipedia.org/w/api.php?format=json&action=query&prop=extracts&explaintext=1&titles='.$dogName;
//        
//        $ch = curl_init();
//        curl_setopt($ch, CURLOPT_URL, $url);
//        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
//        curl_setopt($ch, CURLOPT_USERAGENT, 'dog bot/1.0 (http://localhost:8000/)');
//
//        $wiki = curl_exec($ch);
//
//        if (!$wiki) {
//          exit('cURL Error: '.curl_error($ch));
//        }
//
//        
//        die(var_dump($wiki));
        //
        
        //create new Blog Post object
        $blogPost = new BlogPost($dogName,$postBody,$dogImg);
        
        $em = $this->getDoctrine()->getEntityManager();
        $em->persist($blogPost);
        $em->flush($blogPost);
        
        
        return $this->redirectToRoute('blog');
    }
}
