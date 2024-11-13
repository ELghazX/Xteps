<?php
class User
{
    private $conn;
    private $table_name = "users";
    public $username;
    public $email;
    public $password;
    public $role;
    public $firstName;
    public $lastName;
    public $phoneNumber;
    public $address;
    public $photoProfile;

    public function __construct($db)
    {
        $this->conn = $db;
    }
    public function isEmailExists()
    {
        $query = "SELECT COUNT(*) FROM " . $this->table_name . " WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }

    public function isEmailExist()
    {
        $query = "SELECT COUNT(*) FROM " . $this->table_name . " WHERE email = :email";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":email", $this->email);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }
    public function isUsernameExists()
    {
        $query = "SELECT COUNT(*) FROM " . $this->table_name . " WHERE username = :username";
        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->execute();
        return $stmt->fetchColumn() > 0;
    }

    public function register()
    {


        if ($this->isUsernameExists() or $this->isEmailExists()) {
            return false;
        }
        $query = "INSERT INTO " . $this->table_name . " (username, email, password_hash, role) VALUES (:username, :email, :password, :role)";

        $stmt = $this->conn->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":email", $this->email);
        $stmt->bindParam(":password", $this->password);
        $stmt->bindParam(":role", $this->role);

        if ($stmt->execute()) {
            return true;
        }
        return false;
    }

    public function login()
    {
        if (isset($_POST['username']) && isset($_POST['password'])) {
            $input = $_POST['username'];
            $password = $_POST['password'];


            $query = "SELECT * FROM " . $this->table_name . " WHERE (username = :input OR email = :input)";
            $stmt = $this->conn->prepare($query);
            $stmt->bindParam(":input", $input);
            $stmt->execute();

            if ($stmt->rowCount() > 0) {
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                if (password_verify($password, $row['password_hash'])) {
                    $this->username = $row['username'];
                    $this->role = $row['role'];
                    $this->email = $row['email'];
                    return true;
                }
            }
        }
        return false;
    }
}


