-- Create table for Produse
CREATE TABLE Produse (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Tip VARCHAR(255),
    Nume VARCHAR(255),
    Descriere VARCHAR(255),
    Pret DECIMAL(10, 2),
    Cantitate_in_stoc INT
);

-- Create table for Clienti
CREATE TABLE Clienti (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    referer VARCHAR(255),
    cookie_id VARCHAR(20)
);

-- Create table for Comenzi
CREATE TABLE Comenzi (
    ID INT PRIMARY KEY AUTO_INCREMENT,
    Data DATE,
    Ora TIME,
    ID_Client INT,
    Valoarea_totala DECIMAL(10, 2),
    Status VARCHAR(255),
    FOREIGN KEY (ID_Client) REFERENCES Clienti(ID)
);

-- Create table for Comanda_produse
CREATE TABLE Comanda_produse (
    id_comanda INT,
    id_produs INT,
    FOREIGN KEY (id_comanda) REFERENCES Comenzi(ID),
    FOREIGN KEY (id_produs) REFERENCES Produse(ID)
);

-- Create table for Mese
CREATE TABLE Mese (
    id INT PRIMARY KEY AUTO_INCREMENT,
    numar_locuri INT,
    ocupate INT
);
