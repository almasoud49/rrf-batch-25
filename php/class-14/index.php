<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="container">
        <div class="header">
            <h2>Student Information</h2>
        </div>
        <?php

        $name = $email = $phone = $student_id = $group = $dob= $gender= $address = $photo = '';
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
                    'group' => $group,
                    'dob' => $dob,
                    'gender' => $gender,
                    'address' => $address,
                    'photo' => $photo,
                ];

                array_push($_SESSION['students'], $newStudent);
            }

            if (isset($_SESSION['students'])) {
                $students = $_SESSION['students'];
            }

            if (empty($name)) $errors['name'] = "Name is requird";
            
            if (empty($email)) $errors['email'] = "Email is requird";
             elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) $errors['email'] = "Invalid email format";
            

            if (empty($phone)) $errors['phone'] = "Phone is requird";
            

            if (empty($errors) && !empty($name) && !empty($email) && !empty($phone)) $success = "New Student Added Successfully";
            
        }

        ?>

        <div class="form-container">

            <?php if(isset($success)): ?>
                <p style="color:green"><?php echo $success ?></p>
            <?php endif; ?>
            <form method="POST" action="" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" name="name" value="<?php echo htmlspecialchars($name)  ?>" id="name" required>
                </div>
                <?php if (isset($errors['name'])): ?>
                    <p style="color:red"><?php echo $errors['name']; ?></p>
                <?php endif; ?>


                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email"  value="<?php echo htmlspecialchars($email)  ?>" id="email" required>
                </div>
                <?php if (isset($errors['email'])): ?>
                    <p style="color:red"><?php echo $errors['email']; ?></p>
                <?php endif; ?>
                <div class="form-group">
                    <label for="phone">Phone</label>
                    <input type="text" name="phone"  value="<?php echo htmlspecialchars($phone)  ?>" id="phone" required>
                </div>
                <?php if (isset($errors['phone'])): ?>
                    <p style="color:red"><?php echo $errors['phone']; ?></p>
                <?php endif; ?>

                <!-- Student ID -->
                <div class="form-group">
                    <label>Student ID</label>
                    <input type="text" name="student_id" value="<?php echo htmlspecialchars($student_id); ?>">
                </div>

                <!-- Group -->
                <div class="form-group">
                    <label>Group</label>
                    <select name="group">
                        <option value="">-- Select Group --</option>
                        <option value="Science" <?php if ($group == 'Science') echo 'selected'; ?>>Science</option>                        
                        <option value="Commerce" <?php if ($group == 'Commerce') echo 'selected'; ?>>Commerce</option>
                        <option value="Arts" <?php if ($group == 'Arts') echo 'selected'; ?>>Arts</option>
                    </select>
                </div>

                <!-- Date of Birth -->
                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" value="<?php echo htmlspecialchars($dob); ?>">
                </div>

                    <!-- Gender -->
                <div class="form-group">
                    <label>Gender</label>
                    <div class="inline-group">
                        <label><input type="radio" name="gender" value="male" <?php if ($gender == 'male') echo 'checked'; ?>> Male</label>
                        <label><input type="radio" name="gender" value="female" <?php if ($gender == 'female') echo 'checked'; ?>> Female</label>
                    </div>
                </div>

                <!-- Address -->
                <div class="form-group">
                    <label>Address</label>
                    <input type="text" name="address" value="<?php echo htmlspecialchars($address); ?>">
                </div>

                <!-- Photo -->
                <div class="form-group">
                    <label>Photo</label>
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
                    <th>ID</th>
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
                        <td>238901</td>
                        <td>Arts</td>
                        <td>2004-12-10</td>
                        <td>Female</td>
                        <td>Dhaka</td>
                        <td>student.png</td>
                    </tr>
                    <tr>
                        <td>Student Name 3</td>
                        <td>student3@gmail.com</td>
                        <td>234-567-8901</td>
                        <td>238901</td>
                        <td>Arts</td>
                        <td>2004-12-10</td>
                        <td>Female</td>
                        <td>Dhaka</td>
                        <td>student.png</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($students as $student): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($student['name']) ?></td>
                            <td><?php echo htmlspecialchars($student['email']) ?></td>
                            <td><?php echo htmlspecialchars($student['phone']) ?></td>
                            <td><?php echo htmlspecialchars($student['student_id']) ?></td>
                            <td><?php echo htmlspecialchars($student['group']) ?></td>
                            <td><?php echo htmlspecialchars($student['dob']) ?></td>
                            <td><?php echo htmlspecialchars($student['gender']) ?></td>
                            <td><?php echo htmlspecialchars($student['address']) ?></td>
                            <td><?php echo htmlspecialchars($student['photo']) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>

            </tbody>
        </table>
    </div>
</body>

</html>