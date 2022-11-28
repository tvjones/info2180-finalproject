DROP DATABASE IF EXISTS dolphin_crm;
CREATE DATABASE dolphin_crm;

CREATE TABLE Users(
	id INT NOT NULL AUTO_INCREMENT,
	firstname VARCHAR(256),
    lastname VARCHAR(256),
    passwd VARCHAR(256),
    email VARCHAR(256),
    user_role VARCHAR(256),
    created_at DATETIME,
    PRIMARY KEY(id)
);

CREATE TABLE Contacts(
	id INT NOT NULL AUTO_INCREMENT,
    title VARCHAR(256),
	firstname VARCHAR(256),
    lastname VARCHAR(256),
    email VARCHAR(256),
    telephone VARCHAR(256),
    company VARCHAR(256),
    user_type VARCHAR(256),
    assigned_to INTEGER,
    created_by INTEGER,
    created_at DATETIME,
    updated_at DATETIME,
    PRIMARY KEY(id)
);

CREATE TABLE Notes(
	id INT NOT NULL AUTO_INCREMENT,
    contact_id INTEGER,
    comments TEXT,
    created_by INTEGER,
    created_at DATETIME,
    PRIMARY KEY(id)
);

INSERT INTO Users (passwd, email, user_role) VALUES (PASSWORD("password123"),"admin@project2.com","ADMINISTRATOR")
