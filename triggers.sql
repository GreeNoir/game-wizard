CREATE TRIGGER `item`.`before_insert_item`
BEFORE INSERT ON `item`
FOR EACH ROW
BEGIN
  SELECT account_common.AccountID AS AccountID, account_common.BaiBaoYuanBao AS BaiBao INTO tblTmpAccountInfo FROM
      account_common INNER JOIN roledata ON account_common.AccountID = roledata.AccountID
      WHERE NEW.OwnerID = roledata.RoleID;
  IF tblTmpAccountInfo.BaiBao = 0 THEN
      RAISEERROR('Error message');
  END IF;
END;