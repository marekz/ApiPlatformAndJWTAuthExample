<?php

declare(strict_types=1);

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * The most generic type of item.
 *
 * @see http://schema.org/Thing Documentation on Schema.org
 *
 * @ORM\Entity
 * @ApiResource(iri="http://schema.org/Thing")
 */
class Wehicle
{
    /**
     * @var int|null
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotNull
     */
    private $Producer;

    /**
     * @var \DateTimeInterface
     *
     * @ORM\Column(type="date")
     * @Assert\Date
     * @Assert\NotNull
     */
    private $DateProduction;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotNull
     */
    private $Type;

    /**
     * @var string
     *
     * @ORM\Column(type="text")
     * @Assert\NotNull
     */
    private $Model;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setProducer(string $Producer): void
    {
        $this->Producer = $Producer;
    }

    public function getProducer(): string
    {
        return $this->Producer;
    }

    public function setDateProduction(\DateTimeInterface $DateProduction): void
    {
        $this->DateProduction = $DateProduction;
    }

    public function getDateProduction(): \DateTimeInterface
    {
        return $this->DateProduction;
    }

    public function setType(string $Type): void
    {
        $this->Type = $Type;
    }

    public function getType(): string
    {
        return $this->Type;
    }

    public function setModel(string $Model): void
    {
        $this->Model = $Model;
    }

    public function getModel(): string
    {
        return $this->Model;
    }
}
