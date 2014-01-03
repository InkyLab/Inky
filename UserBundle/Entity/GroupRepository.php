<?php

namespace Inky\UserBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * GroupRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class GroupRepository extends EntityRepository
{
	public function userGroups($userId)
	{
		$query = $this	->createQueryBuilder('g')
						->leftJoin('g.course', 'c')
							->addSelect('c');
		$result = $query->where($query->expr()->eq('g.users', ':user'))
						->setParameter('user',$userId)
						->getQuery()
					->getResult();
		return $result;
	}
}
