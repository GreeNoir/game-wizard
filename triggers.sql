/* insert imitation */
create table tmpItem1 select * from item where TypeID=8039011 and OwnerID=2
UPDATE tmpItem1 SET OwnerID=300, SerialNum=500089810450

DELIMITER $$

CREATE
/*[DEFINER = { user | CURRENT_USER }]*/
TRIGGER `sm_db`.`item_insert` BEFORE INSERT
ON `sm_db`.`item` FOR EACH ROW
BEGIN

DROP TABLE tblTmpAccountInfo IF EXISTS $$
CREATE TABLE tblTmpAccountInfo
SELECT account_common.AccountID AS AccountID,
    account_common.BaiBaoYuanBao AS BaiBao
    FROM account_common
    INNER JOIN roledata
      ON account_common.AccountID = roledata.AccountID
  WHERE NEW.OwnerID = roledata.RoleID $$


IF tblTmpAccountInfo.BaiBao = 0
THEN CALL `'Cannot add row'`  $$

  END IF $$
END $$

DELIMITER ;