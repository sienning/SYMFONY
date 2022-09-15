<?php
declare(strict_types=1); // Strict au niveau du type (sinon erreur)

trait TimestampableTrait {
    public $createdAt;
    public $updatedAt;

    /**
     * @return null
     */
    public function getCreatedAt()
    {
        return self::$createdAt;
    }

    /**
     * @param null $createdAt
     */
    public function setCreatedAt($createdAt): void
    {
        self::$createdAt = $createdAt;
    }

    /**
     * @return null
     */
    public function getUpdatedAt()
    {
        return self::$updatedAt;
    }

    /**
     * @param null $updatedAt
     */
    public function setUpdatedAt($updatedAt): void
    {
        self::$updatedAt = $updatedAt;
    }

}