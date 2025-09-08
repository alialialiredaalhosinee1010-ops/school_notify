CREATE TABLE students (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    class VARCHAR(50),
    section VARCHAR(50)
);

CREATE TABLE notifications (
    id INT AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(100),
    message TEXT,
    class VARCHAR(50),
    section VARCHAR(50),
    image VARCHAR(255) DEFAULT NULL
);
