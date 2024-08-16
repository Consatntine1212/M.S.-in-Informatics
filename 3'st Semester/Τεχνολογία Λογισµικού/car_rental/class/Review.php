<?php

class Review
{

    public function __construct(
        public ?int $id,
        public string $reviewer,
        public string $to,
        public Rental $rental,
        public string $date,
        public int $rating,
        public string $comment,
    ) {
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getReviewer(): string
    {
        return $this->reviewer;
    }

    public function setReviewer(string $reviewer): void
    {
        $this->reviewer = $reviewer;
    }

    public function getTo(): string
    {
        return $this->to;
    }

    public function setTo(string $to): void
    {
        $this->to = $to;
    }

    public function getRental(): Rental
    {
        return $this->rental;
    }

    public function setRentalId(Rental $rental): void
    {
        $this->$rental = $rental;
    }

    public function setDate(string $date): void
    {
        $this->date = $date;
    }

    public function getRating(): int
    {
        return $this->rating;
    }

    public function setRating(int $rating): void
    {
        $this->rating = $rating;
    }

    public function getComment(): string
    {
        return $this->comment;
    }

    public function setComment(string $comment): void
    {
        $this->comment = $comment;
    }
}