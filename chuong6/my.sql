-- Tạo cơ sở dữ liệu
CREATE DATABASE quanlybanhang;
USE quanlybanhang;

-- Bảng NHASANXUAT
CREATE TABLE NHASANXUAT (
    mansx VARCHAR(2) PRIMARY KEY,
    tennsx VARCHAR(40),
    quocgia VARCHAR(20)
);

-- Bảng HANGHOA
CREATE TABLE HANGHOA (
    mahang VARCHAR(4) PRIMARY KEY,
    tenhang VARCHAR(40),
    mansx VARCHAR(2),
    namsx INT,
    gia INT,
    FOREIGN KEY (mansx) REFERENCES NHASANXUAT(mansx)
);

-- Bảng KHACHHANG
CREATE TABLE KHACHHANG (
    makh VARCHAR(4) PRIMARY KEY,
    tenkh VARCHAR(30),
    namsinh INT,
    dienthoai VARCHAR(10),
    diachi VARCHAR(50)
);

-- Bảng HOADON
CREATE TABLE HOADON (
    mahd VARCHAR(3) PRIMARY KEY,
    makh VARCHAR(4),
    mahang VARCHAR(4),
    soluong INT,
    thanhtien INT,
    FOREIGN KEY (makh) REFERENCES KHACHHANG(makh),
    FOREIGN KEY (mahang) REFERENCES HANGHOA(mahang)
);

CREATE TABLE TONKHO (
    mahang VARCHAR(4) PRIMARY KEY,
    tenhang VARCHAR(40),
    mansx VARCHAR(2),
    namsx INT,
    gia INT,
    soluong INT
) ENGINE=InnoDB;

INSERT INTO TONKHO (mahang, tenhang, mansx, namsx, gia, soluong) VALUES 
('DE01', 'Dell Vostro', 'DE', 2015, 650, 20),
('DE02', 'Del Inspiron', 'DE', 2015, 550, 30);