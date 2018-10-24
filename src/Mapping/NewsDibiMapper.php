<?php
namespace Sellastica\News\Mapping;

use Sellastica\News\Entity\News;
use Sellastica\Entity\Mapping\DibiMapper;

/**
 * @see News
 */
class NewsDibiMapper extends DibiMapper
{
	use \Sellastica\DataGrid\Mapping\Dibi\TFilterRulesDibiMapper;
	
	/**
	 * @return bool
	 */
	protected function isInCrmDatabase(): bool
	{
		return true;
	}
}