<?php
session_start();

$name = $email = $phone = $student_id = $group = $dob = $gender = $address = $photo = '';
$students = $_SESSION['students'] ?? [];
$errors = [];
$success = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $student_id = $_POST['student_id'];
    $group = $_POST['group'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'] ?? '';
    $address = $_POST['address'];
    $photo = $_FILES['photo']['name'] ?? '';
    $tmp_name = $_FILES['photo']['tmp_name'] ?? '';

    if (!empty($photo)) {
        $upload_dir = 'uploads/';
        move_uploaded_file($tmp_name, $upload_dir . $photo);
    }

    if (empty($name)) $errors['name'] = "Name is required";
    if (empty($email)) $errors['email'] = "Email is required";
    elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "Invalid email format";
    if (empty($phone)) $errors['phone'] = "Phone number is required";

    // Check for duplicate student ID
    foreach ($students as $s) {
        if ($s['student_id'] === $student_id) {
            $errors['duplicate'] = "Student with this ID already exists.";
            break;
        }
    }

    if (empty($errors)) {
        $newStudent = [
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

        $_SESSION['students'][] = $newStudent;
        $students = $_SESSION['students'];
        $success = "New student added successfully.";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Information</title>
    <link rel="stylesheet" href="./assets/css/style.css">
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Student Information</h2>
        </div>

        <div class="form-container">
            <?php if (!empty($success)): ?>
                <p style="color:green;"><?php echo $success; ?></p>
            <?php endif; ?>
            <?php if (isset($errors['duplicate'])): ?>
                <p style="color:red;"><?php echo $errors['duplicate']; ?></p>
            <?php endif; ?>

            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>">
                    <?php if (isset($errors['name'])): ?><p style="color:red"><?php echo $errors['name']; ?></p><?php endif; ?>
                </div>

                <div class="form-group">
                    <label>Email</label>
                    <input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>">
                    <?php if (isset($errors['email'])): ?><p style="color:red"><?php echo $errors['email']; ?></p><?php endif; ?>
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="text" name="phone" value="<?php echo htmlspecialchars($phone); ?>">
                    <?php if (isset($errors['phone'])): ?><p style="color:red"><?php echo $errors['phone']; ?></p><?php endif; ?>
                </div>

                <div class="form-group">
                    <label>Student ID</label>
                    <input type="text" name="student_id" value="<?php echo htmlspecialchars($student_id); ?>">
                </div>

                <div class="form-group">
                    <label>Group</label>
                    <select name="group">
                        <option value="">-- Select Group --</option>
                        <option value="Science" <?php if ($group == 'Science') echo 'selected'; ?>>Science</option>
                        <option value="Arts" <?php if ($group == 'Arts') echo 'selected'; ?>>Arts</option>
                        <option value="Commerce" <?php if ($group == 'Commerce') echo 'selected'; ?>>Commerce</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" value="<?php echo htmlspecialchars($dob); ?>">
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <div class="inline-group">
                        <label><input type="radio" name="gender" value="male" <?php if ($gender == 'male') echo 'checked'; ?>> Male</label>
                        <label><input type="radio" name="gender" value="female" <?php if ($gender == 'female') echo 'checked'; ?>> Female</label>
                    </div>
                </div>

                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" value="<?php echo htmlspecialchars($address); ?>">
                </div>

                <div class="form-group">
                    <label>Photo</label>
                    <input type="file" name="photo">
                </div>

                <button type="submit" name="submit" class="submit-btn">Submit</button>
            </form>
        </div>

        <div class="header">
            <h2 style="text-align:center">Submitted Data</h2>
        </div>
        <table class="data-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>ID</th>
                    <th>Group</th>
                    <th>DoB</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Photo</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($students)): ?>
                    <tr>
                        <td colspan="10">No students found.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($students as $index => $student): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($student['name']); ?></td>
                            <td><?php echo htmlspecialchars($student['email']); ?></td>
                            <td><?php echo htmlspecialchars($student['phone']); ?></td>
                            <td><?php echo htmlspecialchars($student['student_id']); ?></td>
                            <td><?php echo htmlspecialchars($student['group']); ?></td>
                            <td><?php echo htmlspecialchars($student['dob']); ?></td>
                            <td><?php echo htmlspecialchars($student['gender']); ?></td>
                            <td><?php echo htmlspecialchars($student['address']); ?></td>
                            <td>
                                <?php if (!empty($student['photo'])): ?>
                                    <img src="uploads/<?php echo htmlspecialchars($student['photo']); ?>" width="60" alt="Photo">
                                    <?php else: ?>N/A<?php endif; ?>
                            </td>
                            <td>
                                <div class="action-buttons">
                                    <a href="edit.php?index=<?php echo $index; ?>" class="btn-edit">Edit</a>
                                    <a href="delete.php?index=<?php echo $index; ?>" class="btn-delete" onclick="return confirm('Are you sure?')">Delete</a>
                                </div>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>