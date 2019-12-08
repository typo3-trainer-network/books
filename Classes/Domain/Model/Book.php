<?php

declare(strict_types=1);

namespace TTN\Books\Domain\Model;

use TYPO3\CMS\Extbase\DomainObject\AbstractEntity;

/**
 * Domain model for a book.
 */
final class Book extends AbstractEntity
{
    /** @var string */
    private $title = '';

    /** @var int */
    private $yearOfPublication = 0;

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    public function getYearOfPublication(): int
    {
        return $this->yearOfPublication;
    }

    public function setYearOfPublication(int $yearOfPublication)
    {
        $this->yearOfPublication = $yearOfPublication;
    }
}
