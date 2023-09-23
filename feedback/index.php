<?php include 'inc/header.php'; ?>

<?php
    $name = $email = $body = '';
    $nameErr = $emailErr = $bodyErr = '';

    // Form submit
    if (isset($_POST['submit'])) {
        if (empty($_POST['name'])) {
            $nameErr = 'Name is required';
        } else {
            $name = filter_input(INPUT_POST, 'name', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }
        if (empty($_POST['email'])) {
            $emailErr = 'Email is required';
        } else {
            $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
        }
        if (empty($_POST['body'])) {
            $bodyErr = 'Feeback is required';
        } else {
            $body = filter_input(INPUT_POST, 'body', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
        }

        if (empty($nameErr) && empty($emailErr) && empty($bodyErr)) {
            // Add to database
            $sql = "INSERT INTO feedback (name, email, body) VALUES ('$name', '$email', '$body')";
            if (mysqli_query($conn, $sql)) {
                // success
                header('Location: feedback.php');
            } else {
                // error
                echo 'Error: ' . mysqli_error($conn);
            }
        }
    }
?>

<!-- include/require -->
            <a class="navbar-brand" href="#">Traversy Media</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler=icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/feedback/index.php">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/feedback/feedback.php">Feedback</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/feedback/about.php">About</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <main>
        <div class="container d-flex flex-column align-items-center">
            <img src="/feedback/img/logo.png" alt="" class="w-25 mb-3">
            <h2>Feedback</h2>
            <p class="lead text-center">Leave feedback for Traversy Media</p>
            <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="mt-4 w-50">
                <div class="mb-3">
                    <label for="name" class="form-label">Name</label>
                    <input type="text" class="form-control <?php echo $nameErr ? 'is-invalid': '' ?>" id="name" name="name" placeholder="Enter your name">
                    <div class="invalid-feedback">
                        <?php echo $nameErr; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control <?php echo $emailErr ? 'is-invalid': '' ?>" id="email" name="email" placeholder="Enter your email">
                    <div class="invalid-feedback">
                        <?php echo $emailErr; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="body" class="form-label">Feedback</label>
                    <input type="text" class="form-control <?php echo $bodyErr ? 'is-invalid': '' ?>" id="body" name="body" placeholder="Enter your feedback">
                    <div class="invalid-feedback">
                        <?php echo $bodyErr; ?>
                    </div>
                </div>
                <div class="mb-3">
                    <input type="submit" name="submit" value="Submit" class="btn btn-dark w-100">
                </div>
            </form>
        </div>
<?php include 'inc/footer.php'; ?>