<?php

require_once 'User.php';
require_once 'Review.php';
require_once 'Rental.php';

class Owner
{

    public function __construct(
        public User $user,
        public array $cars = [],
        public array $reviews = [],
        public array $rentals = [],
    ) {
        if ($user->getType() !== 'owner') {
            throw new Exception('Cannot create Owner instance from non-owner User');
        }
    }

    public function getUser(): User
    {
        return $this->user;
    }

    public function setUser(User $user): void
    {
        $this->user = $user;
    }

    public function getCars(): array
    {
        return $this->cars;
    }

    public function setCars(array $cars): void
    {
        $this->cars = $cars;
    }

    public function addCar(Car $car): void
    {
        $this->cars[] = $car;
    }

    public function getReviews(): array
    {
        return $this->reviews;
    }

    public function setReviews(array $reviews): void
    {
        $this->reviews = $reviews;
    }

    public function addReview(Review $review): void
    {
        $this->reviews[] = $review;
    }

    public function getRentals(): array
    {
        return $this->rentals;
    }

    public function setRentals(array $rentals): void
    {
        $this->rentals = $rentals;
    }

    public function addRental(Rental $rental): void
    {
        $this->rentals[] = $rental;
    }
}