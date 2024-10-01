<?php
session_start();
require_once 'models/UserModel.php';
$userModel = new UserModel();

$user = NULL; //Add new user
$id = NULL; // Change $_id to $id for consistency

// Check if 'id' is provided in the query parameters
if (isset($_GET['id']) && !empty($_GET['id'])) {
    // Decode the Base64-encoded ID
    $id = base64_decode($_GET['id']);

    // Retrieve user information based on the decoded ID
    $user = $userModel->findUserById($id);
}

if (!empty($_POST['submit'])) {
    if (!empty($id)) {
        $userModel->updateUser($_POST);
    } else {
        $userModel->insertUser($_POST);
    }
    header('location: list_users.php');
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>User form</title>
    <?php include 'views/meta.php' ?>
</head>
<body>
    <?php include 'views/header.php' ?>
    <div class="container">

    <?php if ($user || !isset($id)) { ?>
        <div class="alert alert-warning" role="alert">
            User form
        </div>
        <form method="POST" novalidate onsubmit="return validateForm()">
            <input type="hidden" name="id" value="<?php echo $id ?>">
            <div class="form-group">
                <label for="name">Tên</label>
                <input class="form-control" id="name" name="name" placeholder="Tên" 
                       value='<?php if (!empty($user[0]['name'])) echo $user[0]['name'] ?>' 
                       required pattern="^[A-Za-z0-9]{5,15}$">
                <div class="invalid-feedback" id="nameError"></div>
            </div>
            <div class="form-group">
                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" class="form-control" 
                       placeholder="Mật khẩu" required>
                <div class="invalid-feedback" id="passwordError"></div>
            </div>

            <button type="submit" name="submit" value="submit" class="btn btn-primary">Gửi</button>
        </form>
    <?php } else { ?>
        <div class="alert alert-success" role="alert">
            Không tìm thấy người dùng!
        </div>
    <?php } ?>

    <script>
    function validateForm() {
        var isValid = true;
        var name = document.getElementById('name');
        var password = document.getElementById('password');
        var nameError = document.getElementById('nameError');
        var passwordError = document.getElementById('passwordError');

        // Reset error messages
        nameError.textContent = '';
        passwordError.textContent = '';

        // Validate name
        if (!name.checkValidity()) {
            if (name.validity.valueMissing) {
                nameError.textContent = 'Tên là bắt buộc.';
            } else if (name.validity.patternMismatch) {
                nameError.textContent = 'Tên phải dài từ 5-15 ký tự và chỉ chứa chữ cái và số.';
            }
            name.classList.add('is-invalid');
            isValid = false;
        } else {
            name.classList.remove('is-invalid');
        }

        // Validate password
        var passwordValue = password.value;
        var passwordPattern = /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[~!@#$%^&*()]).{5,10}$/;

        if (!passwordValue) {
            passwordError.textContent = 'Mật khẩu là bắt buộc.';
            password.classList.add('is-invalid');
            isValid = false;
        } else if (!passwordPattern.test(passwordValue)) {
            passwordError.textContent = 'Mật khẩu phải dài từ 5-10 ký tự, chứa ít nhất một chữ thường, một chữ HOA, một số, và một ký tự đặc biệt (~!@#$%^&*()).';
            password.classList.add('is-invalid');
            isValid = false;
        } else {
            password.classList.remove('is-invalid');
        }

        return isValid; // Điều này sẽ ngăn form được gửi nếu có lỗi xác thực
    }
    </script>

    </div>
</body>
</html>
