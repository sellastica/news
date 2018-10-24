<?php
namespace Sellastica\News\Mapping;

use Sellastica\News\Entity\INewsRepository;
use Sellastica\News\Entity\News;
use Sellastica\Entity\Mapping\Repository;

/**
 * @property NewsDao $dao
 * @see News
 */
class NewsRepository extends Repository implements INewsRepository
{
}