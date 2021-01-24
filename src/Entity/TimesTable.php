<?php
declare(strict_types=1);

namespace App\Entity;


use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;

trait TimesTable
{
    /**
     * @var DateTimeInterface
     * @ORM\Column(type="datetime")
     */
  private DateTimeInterface $createdAt;
    /**
     * @var DateTimeInterface|null
     * @ORM\Column(type="datetime", nullable=true)
     */
  private ?DateTimeInterface $updatedAt;

    public function getCreatedAt(): DateTimeInterface
    {
        return $this->createdAt;
    }
    public function getUpdatedAt(): ?DateTimeInterface
    {
        return $this->updatedAt;
    }
    public function setUpdatedAt(?DateTimeInterface $updatedAt): TimesTable
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }

}