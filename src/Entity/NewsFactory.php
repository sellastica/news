<?php
namespace Sellastica\News\Entity;

use Sellastica\Entity\Entity\EntityFactory;
use Sellastica\Entity\Entity\IEntity;
use Sellastica\Entity\IBuilder;

/**
 * @method News build(IBuilder $builder, bool $initialize = true, int $assignedId = null)
 * @see News
 */
class NewsFactory extends EntityFactory
{
	/**
	 * @param IEntity|News $entity
	 */
	public function doInitialize(IEntity $entity)
	{
	}

	/**
	 * @return string
	 */
	public function getEntityClass(): string
	{
		return News::class;
	}
}