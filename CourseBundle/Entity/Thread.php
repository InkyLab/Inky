<?php
// src/Inky/CourseBundle/Entity/Thread.php

namespace Inky\CourseBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\CommentBundle\Entity\Thread as BaseThread;

/**
 * @ORM\Entity
 * @ORM\ChangeTrackingPolicy("DEFERRED_EXPLICIT")
 */
class Thread extends BaseThread
{
    /**
     * @var string $id
     *
     * @ORM\Id
     * @ORM\Column(type="integer")
	 * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
}