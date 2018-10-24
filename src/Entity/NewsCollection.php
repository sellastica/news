<?php
namespace Sellastica\News\Entity;

use Sellastica\Entity\Entity\EntityCollection;

/**
 * @property News[] $items
 * @method NewsCollection add($entity)
 * @method NewsCollection remove($key)
 * @method News|mixed getEntity(int $entityId, $default = null)
 * @method News|mixed getBy(string $property, $value, $default = null)
 */
class NewsCollection extends EntityCollection
{
}