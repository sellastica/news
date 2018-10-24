<?php
namespace Sellastica\News\Entity;

use Sellastica\Entity\IBuilder;
use Sellastica\Entity\TBuilder;

/**
 * @see News
 */
class NewsBuilder implements IBuilder
{
	use TBuilder;

	/** @var string */
	private $title;
	/** @var string|null */
	private $description;

	/**
	 * @param string $title
	 */
	public function __construct(string $title)
	{
		$this->title = $title;
	}

	/**
	 * @return string
	 */
	public function getTitle(): string
	{
		return $this->title;
	}

	/**
	 * @return string|null
	 */
	public function getDescription()
	{
		return $this->description;
	}

	/**
	 * @param string|null $description
	 * @return $this
	 */
	public function description(string $description = null)
	{
		$this->description = $description;
		return $this;
	}

	/**
	 * @return bool
	 */
	public function generateId(): bool
	{
		return !News::isIdGeneratedByStorage();
	}

	/**
	 * @return News
	 */
	public function build(): News
	{
		return new News($this);
	}

	/**
	 * @param string $title
	 * @return self
	 */
	public static function create(string $title): self
	{
		return new self($title);
	}
}