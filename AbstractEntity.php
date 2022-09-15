<?php

abstract class AbstractEntity {
    public $id;
    public function getId() {
        return $this->id;
    }
}