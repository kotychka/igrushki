LOAD DATA INFILE "/vagrant/igrushki/1.csv"
INTO TABLE product
COLUMNS TERMINATED BY ','
OPTIONALLY ENCLOSED BY '"'
ESCAPED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 LINES;


SQLYog

����� �������� ������� � ���������, ������������� ��������� � utf8


Table->Import->Import SCV data using LOAD DATA....
COLUMNS TERMINATED BY ';'
OPTIONALLY ENCLOSED BY '"'
ESCAPED BY '"'
LINES TERMINATED BY '\n'
IGNORE 1 LINES;