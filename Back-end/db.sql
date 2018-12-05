CREATE TABLE NguoiDung (
	ID INT IDENTITY(1,1),
	Username NCHAR(15) NOT NULL,
	Password NCHAR(15) NOT NULL,
	SoDienThoai NCHAR(11),
	DiaChi NVARCHAR(51),
	Email nchar(20),
	HinhAnh nchar(20),
	Quyen int
	PRIMARY KEY(ID)
);

CREATE TABLE SanPham (
	ID INT IDENTITY(1,1) PRIMARY KEY,
	MaSP NCHAR(10),
	TenSP NVARCHAR(51),
	LoaiSP INT,
	NhaSanXuatID INT,
	XuatXu NVARCHAR(50),
	MoTa NVARCHAR(51),
	NgayTao DATETIME,
	SoLuong int,
	HinhAnh nchar(20),
	Gia DECIMAL,
	LuotXem int,
	TinhTrang binary
);

CREATE TABLE DanhMuc (
	ID INT IDENTITY(1,1) PRIMARY KEY,
	Ten NVARCHAR(51)
);

CREATE TABLE NhaSanXuat (
	ID INT IDENTITY(1,1) PRIMARY KEY,
	Ten NVARCHAR(51)
);

CREATE TABLE DiaChiNhanHang (
	ID INT IDENTITY(1,1) PRIMARY KEY,
	NguoiDungID INT,
	TenNguoiNhan nvarchar(51),
	SoDienThoai NCHAR(11),
	DiaChiGiaoHang NVARCHAR(51),
);

CREATE TABLE DatHang (
	ID INT IDENTITY(1,1) PRIMARY KEY,
	UserID INT,
	TongGia DECIMAL,
	LoaiGiaoHang INT,
	TinhTrang INT,
	NgayTao DATETIME,
	NgayDuKienGiaoHang DATETIME,
	DiaChiNhanHangID INT
);

CREATE TABLE ChiTietDatHang (
	ID INT IDENTITY(1,1) PRIMARY KEY,
	DatHangID INT,
	MaSP INT,
	SoLuong INT,
	Gia DECIMAL,
	TinhTrang INT,
	NgayDuKienGiaoHang DATETIME
);