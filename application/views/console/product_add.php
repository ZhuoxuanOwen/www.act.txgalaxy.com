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
                    <h5>请填写产品信息</h5>
                    <span class="label label-important">48 notices</span>
                </div>
                <div class="widget-content nopadding">
                    <form class="form-horizontal" target="_blank" method="post" action="/console/product/save" name="basic_validate" id="frmProductSave"
                          novalidate="novalidate" enctype="multipart/form-data">
                        <div class="control-group ">
                            <label class="control-label">产品标题</label>

                            <div class="controls">
                                <input type="text" name="productTitle" id="productTitle"><span for="required" generated="true"
                                                                                       class="help-inline">标题必填</span>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">产品型号</label>

                            <div class="controls">
                                <input type="text" name="productModel" id="productModel"><span for="required" generated="true"
                                                                                       class="help-inline">型号必填</span>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">产品类型</label>

                            <div class="controls">
                                <select name="productType" id="productType">
                                    <?php foreach ($ptypeList as $k => $v) :?>
                                    <option value="<?php echo $v['product_type_id']?>"><?php echo $v['type_name']?></option>
                                    <?php endforeach?>
                                </select>

                                <span for="email" generated="true"
                                                                                 class="help-inline">产品类型必须选择</span>
                            </div>
                        </div>
                        <div class="control-group ">
                            <label class="control-label">产品主图</label>

                            <div class="controls">
                                <input type="file" name="img" id="img"><span for="date" generated="true"
                                                                                   class="help-inline">选择主图文件</span>
                            </div>
                        </div>
                        <div class="control-group">
                            <label class="control-label">产品介绍</label>

                            <div class="controls">
                                <textarea id="description" name="description">请填写产品描述介绍，可以上传图片</textarea>
                            </div>
                        </div>
                        <div class="form-actions">
                            <input type="button" id="productSave" value="保存产品信息" class="btn btn-primary">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script language="javascript">
    $(function() {
        $('#description').summernote({
            height: 300
        });


        $('form').on('submit', function (e) {
            $('.note-editable').code()
        });


        //点击保存
        $("#productSave").click(function (){

            var productTitle = $("#productTitle").val();
            if(productTitle == ""){
                alert("请输入产品标题。");
                return;
            }
            var productModel = $("#productModel").val();
            if(productModel == ""){
                alert("请输入产品型号。");
                return;
            }
            //检测文件选择
            var productImg  = $("#img").val();
            if(productImg == ""){
                alert("请选择产品的主图文件。")
                return;
            }
            $("#frmProductSave").submit();

        });
    });
</script>