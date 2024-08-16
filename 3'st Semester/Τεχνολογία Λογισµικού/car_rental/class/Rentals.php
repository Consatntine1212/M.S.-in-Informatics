<?php

class Rental
{

    public function __construct(
        public ?string $id,
        public string $car_id,
        public string $client_id,
        public string $owner_id,
        public string $start_date,
        public string $end_date,
        public string $total_price,
        public string $status,
        public string $description,
    ) {
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getCarId(): string
    {
        return $this->car_id;
    }

    public function setCarId(string $car_id): void
    {
        $this->car_id = $car_id;
    }

    public function getClientId(): string
    {
        return $this->client_id;
    }

    public function setClientId(string $client_id): void
    {
        $this->client_id = $client_id;
    }

    public function getOwnerId(): string
    {
        return $this->owner_id;
    }

    public function setOwnerId(string $owner_id): void
    {
        $this->owner_id = $owner_id;
    }

    public function getStartDate(): string
    {
        return $this->start_date;
    }

    public function setStartDate(string $start_date): void
    {
        $this->start_date = $start_date;
    }

    public function getEndDate(): string
    {
        return $this->end_date;
    }

    public function setEndDate(string $end_date): void
    {
        $this->end_date = $end_date;
    }

    public function getTotalPrice(): string
    {
        return $this->total_price;
    }

    public function setTotalPrice(string $total_price): void
    {
        $this->total_price = $total_price;
    }

    public function getStatus(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }
}