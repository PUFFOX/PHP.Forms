<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
    <style>
        .error 
        {
            border: 1px solid red;
        }
        .error-message 
        {
            color: red;
            font-size: 14px;
        }
    </style>

    <script>
        // Функція для перевірки логіну
        function validateLogin() 
        {
            var loginField = document.getElementById("login");
            var loginValue = loginField.value.trim();

            if (loginValue === "") 
            {
                displayError(loginField, "This field is required.");
                return false;
            } 
            else 
            {
                clearError(loginField);
                return true;
            }
        }

        // Функція для перевірки паролю
        function validatePassword() 
        {
            var passwordField = document.getElementById("password");
            var passwordValue = passwordField.value;

            if (passwordValue === "") 
            {
                displayError(passwordField, "This field is required.");
                return false;
            } else 
            {
                clearError(passwordField);
                return true;
            }
        }

        // Функція для перевірки підтвердження паролю
        function validateConfirmPassword() 
        {
            var confirmPasswordField = document.getElementById("confirm_password");
            var confirmPasswordValue = confirmPasswordField.value;
            var passwordValue = document.getElementById("password").value;

            if (confirmPasswordValue === "") 
            {
                displayError(confirmPasswordField, "This field is required.");
                return false;
            } else if (confirmPasswordValue !== passwordValue) {
                displayError(confirmPasswordField, "Passwords do not match.");
                return false;
            } else
            {
                clearError(confirmPasswordField);
                return true;
            }
        }

        // Функція для перевірки email
        function validateEmail() 
        {
            var emailField = document.getElementById("email");
            var emailValue = emailField.value.trim();
            var emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;

            if (emailValue === "") 
            {
                displayError(emailField, "This field is required.");
                return false;
            } else if (!emailPattern.test(emailValue)) 
            {
                displayError(emailField, "Enter a valid email.");
                return false;
            } else 
            {
                clearError(emailField);
                return true;
            }
        }

        // Функція для перевірки телефону
        function validatePhone() 
        {
            var phoneField = document.getElementById("phone");
            var phoneValue = phoneField.value.trim();
            var phonePattern = /^\+?\d{8,}$/; // Мінімум 8 цифр

            if (phoneValue === "") 
            {
                displayError(phoneField, "This field is required");
                return false;
            } else if (!phonePattern.test(phoneValue)) 
            {
                displayError(phoneField, "Enter a valid phone number.");
                return false;
            } else {
                clearError(phoneField);
                return true;
            }
        }

        // Функція для відображення помилки
        function displayError(field, errorMessage) 
        {
            field.classList.add("error");
            
            var errorDiv = document.createElement("div");
            errorDiv.textContent = errorMessage;
            errorDiv.classList.add("error-message");

            var parentDiv = field.parentElement;
            parentDiv.appendChild(errorDiv);
        }

        // Функція для видалення помилки
        function clearError(field) 
        {
            field.classList.remove("error");
            
            var parentDiv = field.parentElement;
            var errorDiv = parentDiv.querySelector(".error-message");
            if (errorDiv) 
            {
                parentDiv.removeChild(errorDiv);
            }
        }

        // Перевірка всіх полів перед відправкою форми
        function validateForm() 
        {
            var isValid = true;
            isValid = validateLogin() && isValid;
            isValid = validatePassword() && isValid;
            isValid = validateConfirmPassword() && isValid;
            isValid = validateEmail() && isValid;
            isValid = validatePhone() && isValid;
            return isValid;
        }
    </script>
</head>
<body>
    <h2>REGISTER</h2>
    <form method="post" action="process_registration.php" onsubmit="return validateForm();">

        <input type="text" id="login" name="login" placeholder="Login" required><br><br>
        
        <input type="password" id="password" name="password" placeholder="Password" required><br><br>
        
        <input type="password" id="confirm_password" name="confirm_password" placeholder="Confirm Password" required><br><br>
        
        <input type="email" id="email" name="email" placeholder="Email" required><br><br>
        
        <input type="text" id="phone" name="phone" placeholder="Phone" required><br><br>
        
        <button type="submit" name="registerBtn">Register</button>
    </form>

    <br>
    <p>Already account? <a href="login.php">Log In</a></p>

</body>
</html>
