<?php
namespace Sellastica\News\Mapping;

use Sellastica\Entity\Mapping\RepositoryProxy;
use Sellastica\News\Entity\INewsRepository;
use Sellastica\News\Entity\News;

/**
 * @method NewsRepository getRepository()
 * @see News
 */
class NewsRepositoryProxy extends RepositoryProxy implements INewsRepository
{
	use \Sellastica\DataGrid\Mapping\Dibi\TFilterRulesRepositoryProxy;
}