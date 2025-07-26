
CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255)
);

CREATE TABLE doctors (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100),
    specialization VARCHAR(100),
    experience INT,
    contact_number VARCHAR(15),
    email VARCHAR(100),
    city VARCHAR(50)
);

-- Insert doctor records
INSERT INTO doctors (name, specialization, experience, contact_number, email, city) VALUES
('Dr. Aditi Sharma', 'Dermatologist', 5, '9876543210', 'aditi@example.com', 'Pune'),
('Dr. Ramesh Verma', 'Cardiologist', 10, '9876501234', 'ramesh@example.com', 'Delhi'),
('Dr. Neha Jain', 'Pediatrician', 7, '9876523456', 'neha@example.com', 'Pune'),
('Dr. Anil Kapoor', 'Orthopedic', 12, '9876534567', 'anil@example.com', 'Mumbai'),
('Dr. Sunita Desai', 'Gynecologist', 9, '9876545678', 'sunita@example.com', 'Mumbai'),
('Dr. Karan Mehra', 'ENT Specialist', 6, '9876556789', 'karan@example.com', 'Delhi'),
('Dr. Reena Yadav', 'Psychiatrist', 8, '9876567890', 'reena@example.com', 'Lucknow'),
('Dr. Manoj Bhatia', 'Cardiologist', 15, '9876578901', 'manoj@example.com', 'Delhi'),
('Dr. Asha Singh', 'Dermatologist', 4, '9876589012', 'asha@example.com', 'Pune'),
('Dr. Vivek Rathi', 'Neurologist', 11, '9876590123', 'vivek@example.com', 'Chennai'),
('Dr. Priya Malhotra', 'Pediatrician', 6, '9876501235', 'priya@example.com', 'Jaipur'),
('Dr. Nitin Arora', 'Orthopedic', 13, '9876512345', 'nitin@example.com', 'Mumbai'),
('Dr. Shreya Sinha', 'Gynecologist', 9, '9876523456', 'shreya@example.com', 'Delhi'),
('Dr. Dev Joshi', 'ENT Specialist', 5, '9876534567', 'dev@example.com', 'Pune'),
('Dr. Komal Taneja', 'Psychiatrist', 10, '9876545678', 'komal@example.com', 'Delhi'),
('Dr. Aditya Roy', 'Cardiologist', 7, '9876556789', 'aditya@example.com', 'Delhi'),
('Dr. Sneha Khanna', 'Dermatologist', 3, '9876567890', 'sneha@example.com', 'Pune'),
('Dr. Harshita Rao', 'Gynecologist', 11, '9876578901', 'harshita@example.com', 'Mumbai'),
('Dr. Ishaan Singh', 'Neurologist', 8, '9876589012', 'ishaan@example.com', 'Mumbai'),
('Dr. Rajeev Menon', 'Orthopedic', 10, '9876590123', 'rajeev@example.com', 'Kolkata'),
('Dr. Nisha Agrawal', 'Pediatrician', 6, '9876501234', 'nisha@example.com', 'Chennai'),
('Dr. Vikram Sethi', 'ENT Specialist', 9, '9876512345', 'vikram@example.com', 'Pune'),
('Dr. Meera Joshi', 'Psychiatrist', 4, '9876523456', 'meera@example.com', 'Delhi'),
('Dr. Arjun Kapoor', 'Cardiologist', 12, '9876534567', 'arjun@example.com', 'Mumbai'),
('Dr. Tania Paul', 'Dermatologist', 5, '9876545678', 'tania@example.com', 'Kolkata'),
('Dr. Kabir Malhotra', 'Orthopedic', 14, '9876556789', 'kabir@example.com', 'Delhi'),
('Dr. Ritu Singh', 'Gynecologist', 8, '9876567890', 'ritu@example.com', 'Pune'),
('Dr. Dhruv Sharma', 'Neurologist', 9, '9876578901', 'dhruv@example.com', 'Jaipur'),
('Dr. Aanya Mehta', 'Pediatrician', 7, '9876589012', 'aanya@example.com', 'Delhi'),
('Dr. Aarav Verma', 'ENT Specialist', 6, '9876590123', 'aarav@example.com', 'Mumbai');

SELECT name, specialization FROM doctors
WHERE city = 'Bhopal'