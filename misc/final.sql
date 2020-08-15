CREATE TABLE position ( 
  `position_id` int primary key AUTO_INCREMENT not null, 
  `position` varchar(255) not null
);

CREATE TABLE `users` (
  `user_id` int primary key AUTO_INCREMENT not null,
  `position_id` int default 1 not null,
  `first_name` varchar(255) not null,
  `last_name` varchar(255) not null,
  `email` varchar(255) not null,
  `phone_number` varchar(20) not null,
  `password` varchar(255) not null,
  `profile_pic` varchar(255) null,
  `num_of_login` int default 0 not null,
  `verify_status` int default 0 not null,
  `verify_token` varchar(255) null,
  `verify_selector` varchar(255) null,
  `last_login` datetime null,
  `owned_by` int null,
  `created_at` datetime default current_timestamp
);

CREATE TABLE `business` (
  `business_id` int primary key AUTO_INCREMENT not null,
  `user_id` int not null,
  `business_name` varchar(255) null,
  `business_address` varchar(255) null,
  `business_phone` varchar(20) null,
  `business_email` varchar(255) null,
  `business_logo` varchar(255) null,
  `currency` varchar(20) null,
  FOREIGN KEY (user_id) REFERENCES users(user_id)
);

CREATE TABLE `product_categories` (
  `cat_id` int primary key AUTO_INCREMENT not null,
  `cat_name` varchar(255) null
);

CREATE TABLE `suppliers` (
  `supplier_id` int primary key AUTO_INCREMENT not null,
  `supplier_com_name` varchar(255) null,
  `supplier_com_phone` varchar(20) null,
  `supplier_major_item` varchar(255) null,
  `supplier_email` varchar(255) null
);

CREATE TABLE `product` (
  `product_id` int primary key AUTO_INCREMENT not null,
  `user_id` int not null,
  `cat_id` int not null,
  `supplier_id` int null,
  `product_name` varchar(255),
  `SKU` varchar(255),
  `stock_available` int,
  `stock_left` int,
  `unit_price` int,
  `total_price` int,
  `supply_status` varchar(255),
  `manufacturing_date` datetime,
  `expiry_date` datetime,
  `created_at` datetime default current_timestamp,
  FOREIGN KEY (user_id) REFERENCES users(user_id),
  FOREIGN KEY (cat_id) REFERENCES product_categories(cat_id),
  FOREIGN KEY (supplier_id) REFERENCES suppliers(supplier_id)
);

CREATE TABLE `outward_returns` (
  `inward_returns_id` int primary key AUTO_INCREMENT not null,
  `product_id` int not null,
  `supplier_id` int not null,
  `return_reason` varchar(255),
  FOREIGN KEY (product_id) REFERENCES product(product_id),
  FOREIGN KEY (supplier_id) REFERENCES suppliers(supplier_id)
);

CREATE TABLE `expired_products` (
  `expired_products_id` int primary key AUTO_INCREMENT not null,
  `product_id` int not null,
  FOREIGN KEY (product_id)  REFERENCES product(product_id)
);

CREATE TABLE `shipping_address` (
  `shipping_address_id` int primary key AUTO_INCREMENT not null,
  `shipping_address` varchar(255)
);

CREATE TABLE `customers` (
  `customer_id` int primary key AUTO_INCREMENT not null,
  `user_id` int not null,
  `customer_name` varchar(255),
  `customer_email` varchar(255),
  `customer_phone` varchar(20),
  `billing_address` varchar(255),
  `shipping_address_id` int,
  FOREIGN KEY (user_id) REFERENCES users(user_id),
  FOREIGN KEY (shipping_address_id) REFERENCES shipping_address(shipping_address_id)
);

CREATE TABLE `inward_returns` (
  `inward_returns_id` int primary key AUTO_INCREMENT not null,
  `product_id` int not null,
  `customer_id` int not null,
  `return_reason` varchar(255),
  FOREIGN KEY (product_id) REFERENCES product(product_id),
  FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
);

CREATE TABLE `invoice` (
  `invoice_id` int primary key AUTO_INCREMENT not null,
  `user_id` int not null,
  `customer_id` int not null,
  `invoice_number` varchar(255),
  `order_date` datetime,
  `due_date` datetime,
  `tax` int,
  `discount` int,
  `sub_total` int,
  `net_total` int,
  `payment_method` varchar(255),
  `amount_paid` int,
  `invoice_type` varchar(255),
  `invoice_status` varchar(255),
  `created_at` datetime default current_timestamp,
  `update` datetime,
  FOREIGN KEY (user_id) REFERENCES users(user_id),
  FOREIGN KEY (customer_id) REFERENCES customers(customer_id)
);

CREATE TABLE `invoice_details` (
  `invoice_details_id` int primary key AUTO_INCREMENT not null,
  `invoice_id` int not null,
  `product_id` int not null,
  `product_price` int,
  `quantity` int,
  FOREIGN KEY (invoice_id) REFERENCES invoice(invoice_id),
  FOREIGN KEY (product_id) REFERENCES product(product_id)
);

