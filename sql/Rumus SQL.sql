// Membuat table dengan AUTO_INCREMENT, PRIMARY KEY, dan FOREIGN KEY
create table transactions(
	Id int AUTO_INCREMENT,
    Id_Customer int,
    Id_Item int,
    Jumlah varchar(10),
    Total varchar(50),
    PRIMARY KEY(Id),
    FOREIGN KEY(Id_Customer) REFERENCES customers(Id),
    FOREIGN KEY(Id_Item) REFERENCES items(Id)
);

Table_A
ID Username
1 Rudy
2 Kevin
3 Anto
4 Toni
5 Richard

Table_B
ID Position
3 Bussiness Analyst
4 Programmer
5 Technical Support
6 Programmer
7 System Analyst

a. SELECT * FROM Table_A INNER JOIN Table_B ON Table_A.ID=Table_B.ID
ID Username Position
3 Anto Bussiness Analyst
4 Toni Programmer
5 Richard Technical Support


b. SELECT * FROM Table_A LEFT JOIN Table_B ON Table_A.ID=Table_B.ID
ID Username Position
1 Rudy
2 Kevin
3 Anto Bussiness Analyst
4 Toni Programmer
5 Richard Technical Support

C. SELECT * FROM Table_A RIGHT JOIN Table_B ON Table_A.ID=Table_B.ID
ID Username Position
3 Anto Bussiness Analyst
4 Toni Programmer
5 Richard Technical Support
6 Programmer
7 System Analyst