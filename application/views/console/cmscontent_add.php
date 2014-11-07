<link rel="stylesheet" href="/js/summernote/summernote.css">
<script type="text/javascript" src="/js/summernote/summernote.js"></script>

<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">
            <div class="widget-box">
                <div class="widget-title">
								<span class="icon">
									<i class="icon-align-justify"></i>
								</span>
                    <h5>请填写页面内容信息</h5>

                </div>
                <div class="widget-content nopadding">
                    <form class="form-horizontal" target="_blank" method="post"  name="basic_validate" id="frmCmsSave"
                          novalidate="novalidate" enctype="multipart/form-data">
                        <div class="control-group ">
                            <label class="control-label">内容标题</label>

                            <div class="controls">
                                <input type="text" name="cmsTitle" id="cmsTitle"><span for="required" generated="true"
                                                                                       class="help-inline">内容标题必填</span>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">内容Key</label>

                            <div class="controls">
                                <input type="text" name="cmsKey" id="cmsKey"><span for="required" generated="true"
                                                                                       class="help-inline">内容Key必填</span>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">内容描述</label>

                            <div class="controls">
                                <input type="text" name="cmsDesc" id="cmsDesc"><span for="required" generated="true"
                                                                                               class="help-inline">内容描述必填</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">区块内容</label>

                            <div class="controls">
                                <textarea id="cmsContent" name="cmsContent">请输入区块内容</textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="button" id="CmsContentSave" value="保存Cms内容" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script language="javascript">
    $(function() {
        $('#cmsContent').summernote({
            height: 300
        });


        //点击保存
        $("#CmsContentSave").click(function (){

            var cmsTitle = $("#cmsTitle").val();
            if(cmsTitle == ""){
                alert("请输入内容标题。");
                return;
            }
            var cmsKey = $("#cmsKey").val();
            if(cmsKey == ""){
                alert("请输入内容Key。");
                return;
            }
            var cmsDesc = $("#cmsDesc").val();
            if(cmsDesc == ""){
                alert("请输入内容描述。");
                return;
            }

            var cmsC = $('.note-editable').code()
            $("#cmsContent").val(cmsC);

            var cmsContent = $("#cmsContent").val();
            if(cmsContent == ""){
                alert("请输入页面区块内容。");
                return;
            }

            var param = $("#frmCmsSave").serialize();
            $.ajax({
                type : 'post',
                url : '/console/cmscontent/save',
                data : param,
                dataType : 'json',
                contentType : "application/x-www-form-urlencoded;charset=UTF-8",
                success : function(data) {
                    if (data.code == 1001) {
                        alert("恭喜你，保存区块内容成功！");
                        location.href="/console/cmscontent";
                    } else {
                        alert(data.errorMsg);
                    }
                },
                error : function(XMLHttpRequest,textStatus, errorThrown) {
                    alert(textStatus);
                }
            });

        });
    });
</script>