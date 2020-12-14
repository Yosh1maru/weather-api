<?php

namespace App\Domain\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Table(name="Faq")
 * @ORM\Entity()
 */
class City
{
    /**
     * @ORM\Id
     * @ORM\Column(type="string")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected string $id;

    /**
     * @var string
     *
     * @ORM\Column(name="name", nullable=false, type="text")
     */
    protected string $name;

    /**
     * @var string
     *
     * @ORM\Column(name="country", nullable=false, type="text")
     */
    protected string $country;

    /**
     * @var string
     *
     * @ORM\Column(name="created_at", nullable=false, type="text")
     */
    protected string $createdAt;

    /**
     * @var string
     *
     * @ORM\Column(name="updated_at", nullable=false, type="text")
     */
    protected string $updatedAt;
}