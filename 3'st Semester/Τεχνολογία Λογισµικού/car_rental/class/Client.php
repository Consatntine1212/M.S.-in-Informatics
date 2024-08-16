<!-- client class that extend user -->
<?php

require_once 'User.php';
require_once 'Review.php';
require_once 'Rental.php';

class Client
{

    public function __construct(
        public User $user,
        public string $license_type,
        public string $license_issue_date,
        public array $reviews = [],
        public array $rentals = [],
    ) {
        if ($user->getType() !== 'client') {
            throw new Exception('Cannot create Client instance from non-client User');
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

    public function getLicenseType(): string
    {
        return $this->license_type;
    }

    public function setLicenseType(string $license_type): void
    {
        $this->license_type = $license_type;
    }

    public function getLicenseIssueDate(): string
    {
        return $this->license_issue_date;
    }

    public function setLicenseIssueDate(string $license_issue_date): void
    {
        $this->license_issue_date = $license_issue_date;
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