<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SetNumberRepository")
 */
class SetNumber
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $in0;

    /**
     * @ORM\Column(type="integer")
     */
    private $in1;

    /**
     * @ORM\Column(type="integer")
     */
    private $in2;

    /**
     * @ORM\Column(type="integer")
     */
    private $in3;

    /**
     * @ORM\Column(type="integer")
     */
    private $in4;

    /**
     * @ORM\Column(type="integer")
     */
    private $in5;

    /**
     * @ORM\Column(type="integer")
     */
    private $in6;

    /**
     * @ORM\Column(type="integer")
     */
    private $in7;

    /**
     * @ORM\Column(type="integer")
     */
    private $in8;

    /**
     * @ORM\Column(type="integer")
     */
    private $in9;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIn0(): ?int
    {
        return $this->in0;
    }

    public function setIn0(int $in0): self
    {
        $this->in0 = $in0;

        return $this;
    }

    public function getIn1(): ?int
    {
        return $this->in1;
    }

    public function setIn1(int $in1): self
    {
        $this->in1 = $in1;

        return $this;
    }

    public function getIn2(): ?int
    {
        return $this->in2;
    }

    public function setIn2(int $in2): self
    {
        $this->in2 = $in2;

        return $this;
    }

    public function getIn3(): ?int
    {
        return $this->in3;
    }

    public function setIn3(int $in3): self
    {
        $this->in3 = $in3;

        return $this;
    }

    public function getIn4(): ?int
    {
        return $this->in4;
    }

    public function setIn4(int $in4): self
    {
        $this->in4 = $in4;

        return $this;
    }

    public function getIn5(): ?int
    {
        return $this->in5;
    }

    public function setIn5(int $in5): self
    {
        $this->in5 = $in5;

        return $this;
    }

    public function getIn6(): ?int
    {
        return $this->in6;
    }

    public function setIn6(int $in6): self
    {
        $this->in6 = $in6;

        return $this;
    }

    public function getIn7(): ?int
    {
        return $this->in7;
    }

    public function setIn7(int $in7): self
    {
        $this->in7 = $in7;

        return $this;
    }

    public function getIn8(): ?int
    {
        return $this->in8;
    }

    public function setIn8(int $in8): self
    {
        $this->in8 = $in8;

        return $this;
    }

    public function getIn9(): ?int
    {
        return $this->in9;
    }

    public function setIn9(int $in9): self
    {
        $this->in9 = $in9;

        return $this;
    }
}
