<div id="equip_add" class="modal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title"><?= __('Select account and roledata') ?></h4>
            </div>
            <form class="form-horizontal" role="form">
                <input type="hidden" name="serial" value="">
                <input type="hidden" name="typeID" value="">
                <input type="hidden" name="empty_option" value="<?= __('please_select') ?>">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="control-label col-sm-2"><?= __('Account') ?></label>
                        <div class="col-sm-10">
                            <select name="account" class="form-control">
                                <option value="0"><?= __('please_select') ?></option>
                                <?php foreach($accountCommonList as $accountCommon) { ?>
                                    <option value="<?= $accountCommon->AccountID ?>"><?= $accountCommon->AccountName ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"><?= __('Roledata') ?></label>
                        <div class="col-sm-10">
                            <select name="roledata" class="form-control">
                                <option value="0"><?= __('please_select') ?></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2"><?= __('Number') ?></label>
                        <div class="col-sm-10">
                            <input type="number" name="count" class="form-control" value="1">
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-success" data-dismiss="modal" onclick="addEquipment();"><?= __('Add') ?></button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><?= __('Cancel') ?></button>
                </div>
            </form>
        </div>
    </div>
</div>