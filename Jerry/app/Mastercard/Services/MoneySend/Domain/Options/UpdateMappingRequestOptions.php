<?php
namespace Mastercard\Services\MoneySend\Domain\Options; 

class UpdateMappingRequestOptions {

    private $MappingId;

    public function setMappingId($MappingId)
    {
        $this->MappingId = $MappingId;
    }

    public function getMappingId()
    {
        return $this->MappingId;
    }
}