<?php
namespace Sellastica\News\Mapping;

use Sellastica\News\Entity\News;
use Sellastica\News\Entity\NewsBuilder;
use Sellastica\News\Entity\NewsCollection;
use Sellastica\Entity\Entity\EntityCollection;
use Sellastica\Entity\IBuilder;
use Sellastica\Entity\Mapping\Dao;

/**
 * @see News
 * @property NewsDibiMapper $mapper
 */
class NewsDao extends Dao
{
	/**
	 * @inheritDoc
	 */
	protected function getBuilder(
		$data,
		$first = null,
		$second = null
	): IBuilder
	{
		return NewsBuilder::create($data->title)
			->hydrate($data);
	}

	/**
	 * @return EntityCollection|NewsCollection
	 */
	public function getEmptyCollection(): EntityCollection
	{
		return new NewsCollection;
	}
}