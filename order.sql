CREATE TABLE orders (
  id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  fullname VARCHAR(100),
  street VARCHAR(255),
  city VARCHAR(100),
  pincode VARCHAR(10),
  current_location VARCHAR(255),
  payment_method VARCHAR(50),
  total_amount DECIMAL(10,2),
  status VARCHAR(50) DEFAULT 'Pending',
  created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
