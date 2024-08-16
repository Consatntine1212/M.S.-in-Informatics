<?php

class Database
{

    private $conn;

    public function __construct()
    {

        $dbConfig = parse_ini_file('config.ini');

        $this->conn = new PDO("mysql:host=" . $dbConfig['host'] . ";dbname=" . $dbConfig['dbname'], $dbConfig['user'], $dbConfig['pass']);
    }

    public function query($query)
    {
        $result = $this->conn->query($query);
        return $result;
    }

    public function prepare($query)
    {
        $stmt = $this->conn->prepare($query);
        return $stmt;
    }

    public function createTable($tableName, $columns)
    {
        $query = "CREATE TABLE IF NOT EXISTS $tableName  ($columns)";
        $result = $this->conn->query($query);
        if ($result) {
            echo "Table $tableName created successfully";
        } else {
            echo "Error creating table: " . $this->conn->errorInfo();
        }
    }

    public function login($email, $password)
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $query = "SELECT * FROM users WHERE email = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $email);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            if (password_verify($password, $result['password'])) {
                $_SESSION['id'] = $result['id'];
                $_SESSION['email'] = $result['email'];
                $_SESSION['user_type'] = $result['type'];
                $_SESSION['pic'] = $result['pic'];
                $_SESSION['fullname'] = $result['fullname'];
                return $result = ['message' => 'Επιτυχής σύνδεση!', 'status' => 'success', 'code' => true];
            } else {
                return $result = ['message' => 'Λάθος κωδικός ή username!', 'status' => 'error', 'code' => false];
            }
        } else {
            return $result = ['message' => 'Λάθος κωδικός ή username!', 'status' => 'error', 'code' => false];
        }
    }

    public function logout()
    {
        session_destroy();
        unset($_SESSION['id']);
        unset($_SESSION['email']);
        unset($_SESSION['user_type']);
        header("Location: index.php");
        return true;
    }

    public function insertUser($username, $email, $password, $fullname, $phone, $pic, $country, $birth_date, $type)
    {
        $username = htmlspecialchars($username);
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);
        $fullname = htmlspecialchars($fullname);
        $phone = htmlspecialchars($phone);
        $country = htmlspecialchars($country);
        $birth_date = date('Y-m-d', strtotime($birth_date));
        $type = htmlspecialchars($type);


        $query = "SELECT * FROM users WHERE email = ? OR username = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $email);
        $stmt->bindParam(2, $username);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {

            return $result = ['message' => 'Το email ή το username υπάρχει ήδη!', 'status' => 'error', 'code' => false];
        } else {

            $password = password_hash($password, PASSWORD_BCRYPT);

            $query = "INSERT INTO users (username,email,fullname,password,phone,pic,country,birth_date,type) VALUES (?,?,?,?,?,?,?,?,?)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(1, $username);
            $stmt->bindParam(2, $email);
            $stmt->bindParam(3, $fullname);
            $stmt->bindParam(4, $password);
            $stmt->bindParam(5, $phone);
            $stmt->bindParam(6, $pic);
            $stmt->bindParam(7, $country);
            $stmt->bindParam(8, $birth_date);
            $stmt->bindParam(9, $type);
            $stmt->execute();
            if ($stmt->rowCount() > 0) {
                $this->conn = null;
                return $result = ['message' => 'Επιτυχής εγγραφή!', 'status' => 'success', 'code' => true];
            } else {
                $this->conn = null;
                return $result = ['message' => 'Πρόβλημα κατά την εγγραφή!', 'status' => 'error', 'code' => false];
            }
        }
    }

    public function updateUserInfo($id, $fullname, $phone, $country, $birth_date)
    {
        $query = "UPDATE users SET fullname = ?, phone = ?, country = ?, birth_date = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $fullname);
        $stmt->bindParam(2, $phone);
        $stmt->bindParam(3, $pic);
        $stmt->bindParam(4, $country);
        $stmt->bindParam(5, $birth_date);
        $stmt->bindParam(6, $id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
            $this->conn = null;
        } else {
            return false;
            $this->conn = null;
        }
    }

    public function updateUserPassword($id, $username, $email, $password)
    {

        $password = password_hash($password, PASSWORD_BCRYPT);

        $query = "UPDATE users SET password = ? WHERE id = ? OR username = ? OR email = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $password);
        $stmt->bindParam(2, $id);
        $stmt->bindParam(3, $username);
        $stmt->bindParam(4, $email);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
            $this->conn = null;
        } else {
            return false;
            $this->conn = null;
        }
    }

    public function updateUserPic($id, $pic)
    {
        $query = "UPDATE users SET pic = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $pic);
        $stmt->bindParam(2, $id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
            $this->conn = null;
        } else {
            return false;
            $this->conn = null;
        }
    }

    public function getUserData($id)
    {
        $query = "SELECT * FROM users WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getUserPic($id)
    {
        $query = "SELECT pic FROM users WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getClientData($id)
    {
        $query = "SELECT u.*, r.*, rev.*
                    FROM users u
                    LEFT JOIN rentals r ON u.id = r.client_id
                    LEFT JOIN reviews rev ON u.id = rev.to_id
                    WHERE u.id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getClientRentals($id)
    {
        $query = "SELECT * FROM rentals WHERE client_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getClientReviews($id)
    {
        $query = "SELECT * FROM reviews WHERE to_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getOwnerData($id)
    {
        $query = "SELECT u.*, r.*, rev.*, c.*
                    FROM users u
                    LEFT JOIN cars c ON u.id = c.owner_id
                    LEFT JOIN rentals r ON c.id = r.car_id
                    LEFT JOIN reviews rev ON u.id = rev.to
                    WHERE u.id = ?";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getOwnerCars($id)
    {
        $query = "SELECT * FROM cars WHERE owner_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getOwnerRentals($id)
    {
        $query = "SELECT * FROM rentals 
                    WHERE car_id IN (SELECT id FROM cars WHERE owner_id = ?)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getOwnerReviews($id)
    {
        $query = "SELECT * FROM reviews WHERE to = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function insertCar($owner_id, $brand, $model, $cubic_meter, $year, $price, $description, $pic, $availabilty, $availabilty_date)
    {
        $query = "INSERT INTO cars (owner_id, brand, model, cubic_meter, year, price, description, pic, availabilty, availabilty_date) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $owner_id);
        $stmt->bindParam(2, $brand);
        $stmt->bindParam(3, $model);
        $stmt->bindParam(4, $cubic_meter);
        $stmt->bindParam(5, $year);
        $stmt->bindParam(6, $price);
        $stmt->bindParam(7, $description);
        $stmt->bindParam(8, $pic);
        $stmt->bindParam(9, $availabilty);
        $stmt->bindParam(10, $availabilty_date);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
            $this->conn = null;
        } else {
            return false;
            $this->conn = null;
        }
    }

    public function updateCar($id, $brand, $model, $cubic_meter, $year, $price, $description, $pic, $availabilty, $availabilty_date)
    {
        $query = "UPDATE cars SET brand = ?, model = ?, cubic_meter = ?, year = ?, price = ?, description = ?, pic = ?, availabilty = ?, availabilty_date = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $brand);
        $stmt->bindParam(2, $model);
        $stmt->bindParam(3, $cubic_meter);
        $stmt->bindParam(4, $year);
        $stmt->bindParam(5, $price);
        $stmt->bindParam(6, $description);
        $stmt->bindParam(7, $pic);
        $stmt->bindParam(8, $availabilty);
        $stmt->bindParam(9, $availabilty_date);
        $stmt->bindParam(10, $id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
            $this->conn = null;
        } else {
            return false;
            $this->conn = null;
        }
    }

    public function deleteCar($id)
    {
        $query = "DELETE FROM cars WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
            $this->conn = null;
        } else {
            return false;
            $this->conn = null;
        }
    }

    public function getCarData($id)
    {
        $query = "SELECT * FROM cars WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getCarWithOwner($id)
    {
        $query = "SELECT c.*, u.* FROM cars c LEFT JOIN users u ON c.owner_id = u.id WHERE c.id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getCarOrderByPrice()
    {
        $query = "SELECT * FROM cars ORDER BY price";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getCarOrderByYear()
    {
        $query = "SELECT * FROM cars ORDER BY year";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getCarGroupByPlace()
    {
        $query = "SELECT * FROM cars WHERE availability=1 GROUP BY availabilty_place";
        $stmt = $this->conn->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getCarByPlace($place)
    {
        $query = "SELECT * FROM cars WHERE availability=1 AND availabilty_place = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $place);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function insertRental($car_id, $user_id, $start_date, $end_date, $total_price, $status, $description)
    {
        $query = "INSERT INTO rentals (car_id, client_id, start_date, end_date, total_price, status,$description) VALUES (?, ?, ?, ?, ?, ?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $car_id);
        $stmt->bindParam(2, $user_id);
        $stmt->bindParam(3, $start_date);
        $stmt->bindParam(4, $end_date);
        $stmt->bindParam(5, $total_price);
        $stmt->bindParam(6, $status);
        $stmt->bindParam(7, $description);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
            $this->conn = null;
        } else {
            return false;
            $this->conn = null;
        }
    }

    public function updateRental($id, $car_id, $user_id, $start_date, $end_date, $total_price, $status, $description)
    {
        $query = "UPDATE rentals SET car_id = ?, client_id = ?, start_date = ?, end_date = ?, total_price = ?, status = ?,description = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $car_id);
        $stmt->bindParam(2, $user_id);
        $stmt->bindParam(3, $start_date);
        $stmt->bindParam(4, $end_date);
        $stmt->bindParam(5, $total_price);
        $stmt->bindParam(6, $status);
        $stmt->bindParam(7, $description);
        $stmt->bindParam(8, $id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
            $this->conn = null;
        } else {
            return false;
            $this->conn = null;
        }
    }

    public function deleteRental($id)
    {
        $query = "DELETE FROM rentals WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
            $this->conn = null;
        } else {
            return false;
            $this->conn = null;
        }
    }

    public function getRentalData($id)
    {
        $query = "SELECT * FROM rentals WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getRentalWithCar($id)
    {
        $query = "SELECT r.*, c.* FROM rentals r LEFT JOIN cars c ON r.car_id = c.id WHERE r.id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function changeRentalStatus($id, $status)
    {
        $query = "UPDATE rentals SET status = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $status);
        $stmt->bindParam(2, $id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
            $this->conn = null;
        } else {
            return false;
            $this->conn = null;
        }
    }

    public function getRentalByUser($user_id)
    {
        $query = "SELECT * FROM rentals WHERE client_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $user_id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function insertDrivingLicense($user_id, $license_type, $license_date)
    {
        $query = "INSERT INTO driving_license (client_id, license_type, license_date) VALUES (?, ?, ?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $user_id);
        $stmt->bindParam(2, $license_type);
        $stmt->bindParam(3, $license_date);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
            $this->conn = null;
        } else {
            return false;
            $this->conn = null;
        }
    }

    public function updateDrivingLicense($id, $user_id, $license_type, $license_date)
    {
        $query = "UPDATE driving_license SET client_id = ?, license_type = ?, license_date = ? WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $user_id);
        $stmt->bindParam(2, $license_type);
        $stmt->bindParam(3, $license_date);
        $stmt->bindParam(4, $id);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
            $this->conn = null;
        } else {
            return false;
            $this->conn = null;
        }
    }

    public function insertReview($reviewer, $rental_id, $to, $rating, $review)
    {
        $query = "INSERT INTO reviews (reviewer,rental_id,to_id,rating,review) VALUES (?,?,?,?,?)";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $reviewer);
        $stmt->bindParam(2, $rental_id);
        $stmt->bindParam(3, $to);
        $stmt->bindParam(4, $rating);
        $stmt->bindParam(5, $review);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            return true;
            $this->conn = null;
        } else {
            return false;
            $this->conn = null;
        }
    }

    public function getReview($id)
    {
        $query = "SELECT * FROM reviews WHERE id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getReviewByRental($rental_id)
    {
        $query = "SELECT * FROM reviews WHERE rental_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $rental_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getReviewByUser($user_id)
    {
        $query = "SELECT * FROM reviews WHERE reviewer = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $user_id);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }

    public function getReviewByUserAndRental($user_id, $rental_id)
    {
        $query = "SELECT * FROM reviews WHERE reviewer = ? AND rental_id = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(1, $user_id);
        $stmt->bindParam(2, $rental_id);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        if ($stmt->rowCount() > 0) {
            return $result;
        } else {
            return false;
        }
    }
}