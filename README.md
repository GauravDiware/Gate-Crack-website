# Gate-Crack-website
**GATE Crack** is a web platform for **GATE exam preparation**, offering **subject-wise quizzes**, **mock tests**, **timer-based practice**, and **performance analytics**. With a **user-friendly**, **responsive interface**, the platform helps students **track progress** and **improve efficiency** in a structured, engaging way.

## 🚀 Features

- 📚 Subject-wise practice quizzes
- 🧪 Full-length mock tests
- ⏱️ Timer-based question practice
- 📊 Performance tracking dashboard
- 🔐 Login/Signup system with form validation
- 📱 Mobile responsive design
- 🌈 Modern, gradient-based UI with animations

GATECrack/
│
├── db.php               # MySQL connection handler
├── index.php            # Landing page with login/signup forms
├── login.php            # Login authentication logic
├── signup.php           # User registration and validation
│
├── script.js            # JavaScript for UI transitions, interactivity
├── loginStyle.css       # Styles for login/signup interface
├── st.css               # Styles for signup layout
├── style.css            # General site-wide styles and responsiveness
│
└── images/              # (Required) background images and icons
```

</details>

---

## ⚙️ Setup Instructions

### Prerequisites

- PHP 7.x or higher
- MySQL server
- Web server (Apache, XAMPP, WAMP, etc.)
- Web browser

### Installation Steps

1. **Download or clone the repository** into your server root:
   ```
   htdocs/GATECrack/
   ```

2. **Create a MySQL database**, e.g., `gate_crack`.

3. **Create a `users` table** with this schema:
   ```sql
   CREATE TABLE users (
     id INT AUTO_INCREMENT PRIMARY KEY,
     username VARCHAR(255) NOT NULL,
     email VARCHAR(255) NOT NULL,
     password VARCHAR(255) NOT NULL
   );
   ```

4. **Update database credentials in `db.php`:**
   ```php
   $con = mysqli_connect("localhost", "root", "", "gate_crack");
   ```

5. **Start your web server** and visit:
   ```
   http://localhost/GATECrack/index.php
   ```

---

## 🖱️ How to Use

1. Open the homepage and choose **Login** or **Register**.
2. Enter your details and agree to the terms (checkbox).
3. Use the platform for GATE quizzes, mock exams, and analytics *(modules to be integrated)*.
4. View animated transitions and feedback in real time.

<details>
<summary>📸 UI Highlights</summary>

- Responsive flexbox layout
- Gradient buttons and hover effects
- Side image & text animations on scroll
- Mobile hamburger menu navigation
</details>

---

## 🧠 Core Functionalities

### 🧩 Backend (PHP)

- `login.php`: Validates user credentials using MySQL.
- `signup.php`: Registers new users securely.
- `db.php`: Central DB connection logic.

### 🎨 Frontend (CSS & JS)

- `loginStyle.css` / `st.css`: Login and form visuals
- `style.css`: Navigation, layout, sections
- `script.js`: Login/register toggle, form activation, side animations

---

## 📈 Upcoming Modules (Roadmap)

- ✅ Performance analytics dashboard
- ✅ Mock test scoring & feedback
- ⌛ Subject-wise quiz bank
- ⌛ Admin panel for question uploads
- 🔐 Email verification & password reset
- 🔄 AJAX for seamless form submissions

---

## 📌 Notes

- Ensure image paths like `images/extra/backwallpaper.jpg` exist for full visual experience.
- Consider using `password_hash()` and `password_verify()` for secure authentication.
- Validate and sanitize all form data to prevent SQL injection and XSS.
