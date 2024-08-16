<?php

class Car
{


    public function __construct(
        public ?string $id,
        public string $owner_id,
        public string $brand,
        public string $model,
        public float $cubic_meter,
        public int $year,
        public string $price,
        public string $description,
        public string $pic,
        public bool $availability,
        public string $availability_date,
        public string $place
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

    public function getOwnerId(): string
    {
        return $this->owner_id;
    }

    public function setOwnerId(string $owner_id): void
    {
        $this->owner_id = $owner_id;
    }

    public function getBrand(): string
    {
        return $this->brand;
    }

    public function setBrand(string $brand): void
    {
        $this->brand = $brand;
    }

    public function getModel(): string
    {
        return $this->model;
    }

    public function setModel(string $model): void
    {
        $this->model = $model;
    }

    public function getCubicMeter(): float
    {
        return $this->cubic_meter;
    }

    public function setCubicMeter(float $cubic_meter): void
    {
        $this->cubic_meter = $cubic_meter;
    }

    public function getYear(): int
    {
        return $this->year;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }

    public function getPrice(): string
    {
        return $this->price;
    }

    public function setPrice(string $price): void
    {
        $this->price = $price;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    public function getPic(): string
    {
        return $this->pic;
    }

    public function setPic(string $pic): void
    {
        $this->pic = $pic;
    }

    public function getStatus(): bool
    {
        return $this->availability;
    }

    public function setStatus(bool $availability): void
    {
        $this->availability = $availability;
    }

    public function getAvailabilityDate(): string
    {
        return $this->availability_date;
    }

    public function setAvailabilityDate(string $availability_date): void
    {
        $this->availability_date = $availability_date;
    }

    public function getPlace(): string
    {
        return $this->place;
    }

    public function setPlace(string $place): void
    {
        $this->place = $place;
    }
}