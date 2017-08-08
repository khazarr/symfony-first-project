<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace AppBundle\Entity;
// src/AppBundle/Entity/BlogPost.php


use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="BlogPosts")
 */
class BlogPost
{
    /**
     * @ORM\Column(type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=4000)
     */
    private $body;
    
     /**
     * @ORM\Column(type="string", length=400)
     */
    private $img;
    

    public function __construct($title, $body, $img) {
        $this->title = $title;
        $this->body = $body;
        $this->img = $img;
    }

    
    public function getTitle() {
        return $this->title;
    }

    public function getBody() {
        return $this->body;
    }

    public function setTitle($title) {
        $this->title = $title;
    }

    public function setBody($body) {
        $this->body = $body;
    }

    public function getImg() {
        return $this->img;
    }

    public function setImg($img) {
        $this->img = $img;
    }



}