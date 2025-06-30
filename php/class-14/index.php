<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets//css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Student Information</h2>
        </div>

        <?php

        $name = $email = $phone = $student_id = $group = $dob = $gender =  $address = $photo = '';

        $students = [];
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
            $photo = $_FILES['photo']['name'];
            $tmp_name = $_FILES['photo']['tmp_name'];

            if (!empty($photo)) {
                $upload_dir = 'uploads/';
                move_uploaded_file($tmp_name, $upload_dir . $photo);
            }

            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }

            if (!isset($_SESSION['students'])) {
                $_SESSION['students'] = [];
            }

            if (!empty($name) && !empty($email) && !empty($phone)) {
                $newStudent = [
                    'name' => $name,
                    'email' => $email,
                    'phone' => $phone,
                    'student_id' => $student_id,
                    'grouop' => $grouop,
                    'dob' => $dob,
                    'gender' => $gender,
                    'address' => $address,
                    'photo' => $photo
                ];

                array_push($_SESSION['students'], $newStudent);
            }
            if (isset($_SESSION['students'])) {
                $students = $_SESSION['students'];
            }

            if (empty($name)) $errors['name'] = "Name is required";


            if (empty($email)) $errors['email'] = "Email is required";
            elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "Invalid email format";


            if (empty($phone)) $errors['phone'] = "Phone number is required";


            if (empty($errors) && !empty($name) && !empty($email) && !empty($phone)) $success = "New Student added successfully";
        }




        ?>
        <div class="form-container">
            <?php if (isset($success)): ?>
                <p style="color:green"><?php echo $success ?></p>

            <?php endif; ?>
            <form method="POST" action="" enctype="multipart/form-data">

                <!-- Name -->
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($name); ?>" required>
                </div>

                <?php if (isset($errors['name'])): ?>
                    <p style="color:red"><?php echo $errors['name']; ?></p>
                <?php endif; ?>

                <!-- Email -->
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>" required>
                </div>
                <?php if (isset($errors['email'])): ?>
                    <p style="color:red"><?php echo $errors['email']; ?></p>
                <?php endif; ?>

                <!-- Phone -->
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone" id="phone" value="<?php echo htmlspecialchars($phone); ?>" required>
                </div>
                <?php if (isset($errors['phone'])): ?>
                    <p style="color:red"><?php echo $errors['phone']; ?></p>
                <?php endif; ?>

                <!-- Student id -->
                <div class="form-group">
                    <label for="student_id">Student Id</label>
                    <input type="text" id="student_id" name="student_id"
                        value="<?php echo htmlspecialchars($student_id); ?>">
                </div>

                <!-- Group -->
                <div class="form-group">
                    <label for="group">Group</label>
                    <select id="group" name="group">
                        <option value="Science">-- Select Group --</option>
                        <option value="Science" <?php if ($group == 'Science') echo 'selected'; ?>>Science</option>
                        <option value="Arts" <?php if ($group == 'Arts') echo 'selected'; ?>>Arts
                        </option>
                        <option value="Commerce <?php if ($group == 'Commerce') echo 'selected'; ?>">Commerce</option>
                    </select>
                </div>

                <!-- Date of birth -->
                <div class="form-group">
                    <label for="dob">Date of Birth</label>
                    <input type="date" id="dob" name="dob" value="<?php echo htmlspecialchars($dob); ?>">
                </div>

                <!-- Gender -->
                <div class="form-group">
                    <label for="group">Gender</label>
                    <div class="inline-group">
                        <div class="inline-option">
                            <input type="radio" id="male" name="gender" value="male" <?php if ($gender == 'male') echo 'checked'; ?>>
                            <label for="male">Male</label>
                        </div>

                        <div class="inline-option">
                            <input type="radio" id="female" name="gender" value="female" <?php if ($gender == 'female') echo 'checked'; ?>>
                            <label for="female">Female</label>
                        </div>
                    </div>
                </div>

                <!--Address -->
                <div class="form-group">
                    <label for="address">Address</label>
                    <input type="text" id="address" name="address" value="<?php echo htmlspecialchars($address); ?>">
                </div>

                <!-- Photo -->
                <div class="form-group">
                    <label for="photo">Photo Id</label>
                    <input type="file" id="photo" name="photo">
                </div>
                <button type=" submit" name="submit" class="submit-btn">
                    Submit
                </button>
            </form>
        </div>

        <div class="header">
            <h2>Submitted Data</h2>
        </div>
        <table class="data-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>Student ID</th>
                    <th>Group</th>
                    <th>DoB</th>
                    <th>Gender</th>
                    <th>Address</th>
                    <th>Photo</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($students)): ?>
                    <tr>
                        <td>Student Name 2</td>
                        <td>student2@gmail.com</td>
                        <td>234-567-8901</td>
                    </tr>
                    <tr>
                        <td>Student Name 3</td>
                        <td>student3@gmail.com</td>
                        <td>234-567-8901</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($students as $student): ?>
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
                                    <img src="uploads/<?php echo htmlspecialchars($student['photo']); ?>" alt="Student Photo" width="60">
                                <?php else: ?>
                                    N/A
                                <?php endif; ?>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</body>

</html>