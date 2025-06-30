<?php
session_start();

if (!isset($_SESSION['students'])) {
    $_SESSION['students'] = [];
}

$index = $_GET['index'] ?? null;
$student = $_SESSION['students'][$index] ?? null;

if ($student === null) {
    echo "Student not found.";
    exit();
}

$errors = [];
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $student_id = $_POST['student_id'];
    $group = $_POST['group'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'] ?? '';
    $address = $_POST['address'];

    // Keep old photo by default
    $photo = $student['photo'];

    if (!empty($_FILES['photo']['name'])) {
        $photo = $_FILES['photo']['name'];
        $tmp_name = $_FILES['photo']['tmp_name'];
        $upload_dir = 'uploads/';
        move_uploaded_file($tmp_name, $upload_dir . $photo);
    }

    if (empty($name)) $errors['name'] = "Name is required";
    if (empty($email)) $errors['email'] = "Email is required";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "Invalid email format";
    if (empty($phone)) $errors['phone'] = "Phone number is required";

    if (empty($errors)) {
    $_SESSION['students'][$index] = [
        'name' => $name,
        'email' => $email,
        'phone' => $phone,
        'student_id' => $student_id,
        'group' => $group,
        'dob' => $dob,
        'gender' => $gender,
        'address' => $address,
        'photo' => $photo
    ];

    // ✅ Redirect to index.php
    header("Location: index.php");
    exit();
}
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Student</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>
<body>
    <div class="container">
        <h2>Edit Student</h2>

        <?php if (!empty($success)): ?>
            <p style="color: green"><?php echo $success; ?></p>
        <?php endif; ?>

        <form method="POST" action="" enctype="multipart/form-data">
            <!-- Name -->
            <div class="form-group">
                <label>Name</label>
                <input type="text" name="name" value="<?php echo htmlspecialchars($student['name']); ?>" required>
                <?php if (isset($errors['name'])): ?><p style="color:red"><?php echo $errors['name']; ?></p><?php endif; ?>
            </div>

            <!-- Email -->
            <div class="form-group">
                <label>Email</label>
                <input type="email" name="email" value="<?php echo htmlspecialchars($student['email']); ?>" required>
                <?php if (isset($errors['email'])): ?><p style="color:red"><?php echo $errors['email']; ?></p><?php endif; ?>
            </div>

            <!-- Phone -->
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="phone" value="<?php echo htmlspecialchars($student['phone']); ?>" required>
                <?php if (isset($errors['phone'])): ?><p style="color:red"><?php echo $errors['phone']; ?></p><?php endif; ?>
            </div>

            <!-- Student ID -->
            <div class="form-group">
                <label>Student ID</label>
                <input type="text" name="student_id" value="<?php echo htmlspecialchars($student['student_id']); ?>">
            </div>

            <!-- Group -->
            <div class="form-group">
                <label>Group</label>
                <select name="group">
                    <option value="Science" <?php if ($student['group'] == 'Science') echo 'selected'; ?>>Science</option>
                    <option value="Arts" <?php if ($student['group'] == 'Arts') echo 'selected'; ?>>Arts</option>
                    <option value="Commerce" <?php if ($student['group'] == 'Commerce') echo 'selected'; ?>>Commerce</option>
                </select>
            </div>

            <!-- DOB -->
            <div class="form-group">
                <label>Date of Birth</label>
                <input type="date" name="dob" value="<?php echo htmlspecialchars($student['dob']); ?>">
            </div>

            <!-- Gender -->
            <div class="form-group">
                <label>Gender</label>
                <div>
                    <label><input type="radio" name="gender" value="male" <?php if ($student['gender'] == 'male') echo 'checked'; ?>> Male</label>
                    <label><input type="radio" name="gender" value="female" <?php if ($student['gender'] == 'female') echo 'checked'; ?>> Female</label>
                </div>
            </div>

            <!-- Address -->
            <div class="form-group">
                <label>Address</label>
                <input type="text" name="address" value="<?php echo htmlspecialchars($student['address']); ?>">
            </div>

            <!-- Photo -->
            <div class="form-group">
                <label>Photo</label>
                <input type="file" name="photo">
                <?php if (!empty($student['photo'])): ?>
                    <br><img src="uploads/<?php echo htmlspecialchars($student['photo']); ?>" width="100" alt="Student Photo">
                <?php endif; ?>
            </div>

            <button type="submit" name="update" class="btn-edit">Update</button>
            <a href="index.php" class="btn-delete">Cancel</a>
        </form>
    </div>
</body>
</html>
