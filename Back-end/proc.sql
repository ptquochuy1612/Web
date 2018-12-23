CREATE PROC usp_LOGIN @user nchar(15), @pass nchar(15)
AS BEGIN
	DECLARE @AD int
	SELECT @AD = Quyen FROM NguoiDung WHERE Username = @user and Password = @pass
	If(@AD is null)
		RETURN -1
	ELSE
		RETURN @AD
END

CREATE PROC usp_REG 
@user nchar(15), @pass nchar(15), @sdt nchar(11), @dc nvarchar(51), @email  nchar(20), @admin int
AS BEGIN
	IF (EXISTS(SELECT * FROM NguoiDung WHERE Username = @user))
		RETURN 0;
	INSERT INTO NguoiDung(@user, @pass, @sdt, @dc, @email,"", @admin)
	RETURN 1

END