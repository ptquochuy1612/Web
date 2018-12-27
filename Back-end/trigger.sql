--Mã hóa password

-- IMPOSSIBLE

-- Mã sản phẩm tự tăng
GO

CREATE FUNCTION AUTO_IDSP()
RETURNS NCHAR(10)
AS BEGIN
	DECLARE @i INT
	SET @i = 1
	WHILE(EXISTS(SELECT * FROM SanPham WHERE ID = @i))
		SET @i = @i + 1
	DECLARE @str nchar(10)
	SET @str = 'SP' + REPLICATE('0',LEN(@i)) + CAST(@i AS CHAR(3))
	RETURN @str
END

ALTER TABLE SanPham
ADD CONSTRAINT IDSP
DEFAULT [dbo].[AUTO_IDSP]() FOR MaSP;

-- MAX NGÀY DỰ KIẾN ĐẶT HÀNG = NGÀY DỰ KIẾN ĐƠN HÀNG

CREATE TRIGGER DatHang_DuKien
ON DatHang
AFTER INSERT,UPDATE
AS BEGIN
	UPDATE DatHang
	SET NgayDuKienGiaoHang = ct.NgayDuKienGiaoHang
	FROM ChiTietDatHang ct, inserted i,DatHang d
	WHERE i.ID = d.ID and i.ID = ct.DatHangID and i.NgayDuKienGiaoHang > ct.NgayDuKienGiaoHang
END