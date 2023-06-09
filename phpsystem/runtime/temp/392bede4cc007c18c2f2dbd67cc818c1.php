<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:86:"C:\xampp\htdocs\phpsystem\public/../application/back\view\bookType\bookType_query.html";i:1538149544;}*/ ?>
<link rel="stylesheet" type="text/css" href="__PUBLIC__/backcss/bookType.css" />

<div id="bookType_manage"></div>
<div id="bookType_manage_tool" style="padding:5px;">
    <div style="margin-bottom:5px;">
        <a href="#" class="easyui-linkbutton" iconCls="icon-edit-new" plain="true" onclick="bookType_manage_tool.edit();">修改</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-delete-new" plain="true" onclick="bookType_manage_tool.remove();">删除</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-reload" plain="true"  onclick="bookType_manage_tool.reload();">刷新</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-redo" plain="true" onclick="bookType_manage_tool.redo();">取消选择</a>
        <a href="#" class="easyui-linkbutton" iconCls="icon-export" plain="true" onclick="bookType_manage_tool.exportExcel();">导出到excel</a>
    </div>
    <div style="padding:0 0 0 7px;color:#333;">
        <form id="bookTypeQueryForm" method="post">
        </form>
    </div>
</div>

<div id="bookTypeEditDiv">
    <form id="bookTypeEditForm" enctype="multipart/form-data"  method="post">
        <div>
            <span class="label">图书类别:</span>
            <span class="inputControl">
				<input class="textbox" type="text" id="bookType_bookTypeId_edit" name="bookType_bookTypeId" style="width:200px" />
			</span>
        </div>
        <div>
            <span class="label">类别名称:</span>
            <span class="inputControl">
				<input class="textbox" type="text" id="bookType_bookTypeName_edit" name="bookType_bookTypeName" style="width:200px" />

			</span>

        </div>
        <div>
            <span class="label">可借阅天数:</span>
            <span class="inputControl">
				<input class="textbox" type="text" id="bookType_days_edit" name="bookType_days" style="width:80px" />

			</span>

        </div>
    </form>
</div>
<script>var backURL = "__PUBLIC__/index.php/back/";</script>
<script type="text/javascript" src="__PUBLIC__/backjs/bookType/bookType_manage.js"></script>
