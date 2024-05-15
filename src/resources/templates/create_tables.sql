-- Create users table
CREATE TABLE IF NOT EXISTS users (
                                     id INT AUTO_INCREMENT PRIMARY KEY,
                                     email VARCHAR(255),
                                     phone VARCHAR(20),
                                     username VARCHAR(50),
                                     password VARCHAR(255),
                                     id_number VARCHAR(20),
                                     gender ENUM('Male', 'Female', 'Other'),
                                     dob DATE
);

-- Create verification_codes table
CREATE TABLE IF NOT EXISTS verification_codes (
                                                  id INT AUTO_INCREMENT PRIMARY KEY,
                                                  email VARCHAR(255),
                                                  phone VARCHAR(20),
                                                  code VARCHAR(4),
                                                  created_at DATETIME
);
