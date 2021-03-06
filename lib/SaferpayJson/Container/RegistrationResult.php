<?php declare(strict_types=1);

namespace Ticketpark\SaferpayJson\Container;

use JMS\Serializer\Annotation\SerializedName;
use JMS\Serializer\Annotation\Type;
use Ticketpark\SaferpayJson\Container\Alias;
use Ticketpark\SaferpayJson\Container\Error;

class RegistrationResult
{
    /**
     * @var bool
     * @SerializedName("Success")
     * @Type("boolean")
     */
    protected $success;

    /**
     * @var Alias
     * @SerializedName("Alias")
     * @Type("Ticketpark\SaferpayJson\Container\Alias")
     */
    protected $alias;

    /**
     * @var Error
     * @SerializedName("Error")
     * @Type("Ticketpark\SaferpayJson\Container\Error")
     */
    protected $error;

    public function isSuccess(): bool
    {
        return $this->success;
    }

    public function setSuccess(bool $success): self
    {
        $this->success = $success;
        return $this;
    }

    public function getAlias(): Alias
    {
        return $this->alias;
    }

    public function setAlias(Alias $alias): self
    {
        $this->alias = $alias;

        return $this;
    }

    public function getError(): Error
    {
        return $this->error;
    }

    public function setError(Error $error): self
    {
        $this->error = $error;

        return $this;
    }
}
