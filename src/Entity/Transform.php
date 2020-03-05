<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\;

interface transform {
    public function transform(string $message);
}

/**
 * @ORM\Entity(repositoryClass="App\Repository\TransformRepository")
 */

//class Transform
//{
//    /**
//     * @ORM\Id()
//     * @ORM\GeneratedValue()
//     * @ORM\Column(type="integer")
//     */
//    private $id;
//
//    public function getId(): ?int
//    {
//        return $this->id;
//    }
//
//
//}


