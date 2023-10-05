<?php
/**
 * @author Anton Acc <me@anton-a.cc>
 */
declare(strict_types=1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity()]
class ModuleRoute
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private string $routeType;

    #[ORM\Column(length: 255)]
    private string $host;

    /**
     * @param string $routeType
     * @param string $host
     */
    public function __construct(string $routeType, string $host)
    {
        $this->routeType = $routeType;
        $this->host = $host;
    }

    public function getRouteType(): string
    {
        return $this->routeType;
    }

    public function getHost(): string
    {
        return $this->host;
    }
}
