<?php
namespace Sellastica\News\Entity;

use Sellastica\Entity\Configuration;
use Sellastica\Entity\Mapping\IRepository;

/**
 * @method News find(int $id)
 * @method News findOneBy(array $filterValues)
 * @method News findOnePublishableBy(array $filterValues, Configuration $configuration = null)
 * @method News[]|NewsCollection findAll(Configuration $configuration = null)
 * @method News[]|NewsCollection findBy(array $filterValues, Configuration $configuration = null)
 * @method News[]|NewsCollection findByIds(array $idsArray, Configuration $configuration = null)
 * @method News[]|NewsCollection findPublishable(int $id)
 * @method News[]|NewsCollection findAllPublishable(Configuration $configuration = null)
 * @method News[]|NewsCollection findPublishableBy(array $filterValues, Configuration $configuration = null)
 * @see News
 */
interface INewsRepository extends IRepository
{
}