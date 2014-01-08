<?php

namespace Inky\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * WishlistRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class WishlistRepository extends EntityRepository
{
	public function getCourses($userId)
	{
		// $user = $this->getUser();
		
		$query = $this->createQueryBuilder('w')
		->leftJoin('w.course', 'c')
			->addSelect('c')
		->leftJoin('c.tags', 'tags')
			->addSelect('tags')
		->where('w.user = '.$userId)
		->where('c.isPublic = 1')
		->orderBy('c.date', 'DESC')
		->getQuery()
		->getResult();
		
		return $query;
		
	}
}
