<?php
include 'connect.php';
session_start();

if (isset($_POST['signUp'])) {
    $username  = mysqli_real_escape_string($conn, trim($_POST['username']));
    $firstName = mysqli_real_escape_string($conn, trim($_POST['fName']));
    $lastName  = mysqli_real_escape_string($conn, trim($_POST['lName']));
    $email     = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password  = $_POST['password'];

    // Validazione username
    if (!preg_match('/^[a-z\d_]{3,20}$/i', $username)) {
        header('Content-Type: application/json');
        echo json_encode(['error' => "Username must be 3-20 characters long and contain only letters, numbers, and underscores."]);
        exit();
    }

    // Validazione nome e cognome
    if (!preg_match('/^[a-zA-Z]{2,30}$/', $firstName)) {
        header('Content-Type: application/json');
        echo json_encode(['error' => "First name must contain only letters and be 2-30 characters long."]);
        exit();
    }
    if (!preg_match('/^[a-zA-Z]{2,30}$/', $lastName)) {
        header('Content-Type: application/json');
        echo json_encode(['error' => "Last name must contain only letters and be 2-30 characters long."]);
        exit();
    }

    // Validazione email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Content-Type: application/json');
        echo json_encode(['error' => "Invalid email address."]);
        exit();
    }

    // Controllo esistenza email
    $checkEmail = "SELECT id FROM users WHERE email = '$email'";
    $result = $conn->query($checkEmail);
    if ($result && $result->num_rows > 0) {
        header('Content-Type: application/json');
        echo json_encode(['error' => "Email address already registered."]);
        exit();
    }

    // Validazione password
    $pwdLength = strlen($password);
    if ($pwdLength < 8 || $pwdLength > 20) {
        header('Content-Type: application/json');
        echo json_encode(['error' => "Password must be between 8 and 20 characters long."]);
        exit();
    }
    if (!preg_match('/^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[.+\-\[\]\*\~_#:?]).{8,20}$/', $password)) {
        header('Content-Type: application/json');
        echo json_encode(['error' => "Password must contain at least one uppercase letter, one lowercase letter, one number, and one special character (.+-[]*~_#:?)."]);
        exit();
    }


    $passwordHash = password_hash($password, PASSWORD_DEFAULT);
    $passwordHashEscaped = mysqli_real_escape_string($conn, $passwordHash);

    $query = "INSERT INTO users(username, password, name, surname, email)
              VALUES('$username', '$passwordHashEscaped', '$firstName', '$lastName', '$email')";
    if ($conn->query($query) === TRUE) {
        header('Content-Type: application/json');
        echo json_encode(['success' => true, 'message' => 'User registered successfully']);
        exit();
    } else {
        header('Content-Type: application/json');
        echo json_encode(['error' => "Database error: " . $conn->error]);
        exit();
    }
}

if (isset($_POST['signIn'])) {
    $email = mysqli_real_escape_string($conn, trim($_POST['email']));
    $password = $_POST['password'];

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header('Content-Type: application/json');
        echo json_encode(['error' => "Incorrect email or password."]);
        exit();
    }

    $query = "SELECT id, password FROM users WHERE email = '$email'";
    $result = $conn->query($query);

    if ($result && $result->num_rows === 1) {
        $row = $result->fetch_assoc();
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['id'];
            $_SESSION['email'] = $email;
            header('Content-Type: application/json');
            echo json_encode(['success' => true, 'message' => 'Login successful']);
            exit();
        } else {
            header('Content-Type: application/json');
            echo json_encode(['error' => "Incorrect email or password."]);
            exit();
        }
    } else {
        header('Content-Type: application/json');
        echo json_encode(['error' => "Incorrect email or password."]);
        exit();
    }
}
