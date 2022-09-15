<?php
declare(strict_types=1); // Strict au niveau du type (sinon erreur)

class News extends AbstractEntity implements EntityInterface {
    use TimestampableTrait;

}