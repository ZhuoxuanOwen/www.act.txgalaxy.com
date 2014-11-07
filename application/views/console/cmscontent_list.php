<div class="container-fluid">
    <div class="row-fluid">
        <div class="span12">

            <button class="btn btn-primary" id="addCmsContent">添加内容</button>

        </div>

    </div>


    <div class="widget-box">
        <div class="widget-title">

            <h5>页面内容管理列表</h5>
        </div>
        <div class="widget-content nopadding">
            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper" role="grid">


                <table class="table table-bordered data-table dataTable" id="DataTables_Table_0">
                    <thead>
                    <tr role="row">
                        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-sort="ascending"
                            aria-label="Rendering engine: activate to sort column descending" style="width: 180px;">
                            <div class="DataTables_sort_wrapper">标题<span
                                    class="DataTables_sort_icon css_right ui-icon ui-icon-triangle-1-n"></span></div>
                        </th>
                        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                            style="width: 153px;">
                            <div class="DataTables_sort_wrapper">内容Key<span
                                    class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div>
                        </th>
                        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending"
                            style="width: 303px;">
                            <div class="DataTables_sort_wrapper">型号<span
                                    class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div>
                        </th>

                        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                            style="width: 153px;">
                            <div class="DataTables_sort_wrapper">描述<span
                                    class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div>
                        </th>
                        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending"
                            style="width: 283px;">
                            <div class="DataTables_sort_wrapper">更新时间<span
                                    class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div>
                        </th>

                        <th class="ui-state-default" role="columnheader" tabindex="0" aria-controls="DataTables_Table_0"
                            rowspan="1" colspan="1" aria-label="Engine version: activate to sort column ascending"
                            style="width: 153px;">
                            <div class="DataTables_sort_wrapper">操作<span
                                    class="DataTables_sort_icon css_right ui-icon ui-icon-carat-2-n-s"></span></div>
                        </th>
                    </tr>
                    </thead>

                    <tbody role="alert" aria-live="polite" aria-relevant="all">

                    <?php foreach($cmsList as $k => $cms) :?>
                        <tr class="gradeA odd">
                            <td class=" sorting_1"><?php echo $cms['title']?></td>
                            <td class="left ">
                                <?php echo $cms['cms_key']?>
                            </td>
                            <td class=" "><?php echo $cms['content']?></td>
                            <td class=" "><?php echo $cms['description']?></td>
                            <td class="center "><?php echo $cms['updated']?></td>
                            <td class="left">

                            </td>
                        </tr>
                    <?php endforeach?>
                    </tbody>
                </table>
                <div class="fg-toolbar ui-toolbar ui-widget-header ui-corner-bl ui-corner-br ui-helper-clearfix">
                    <div class="dataTables_filter" id="DataTables_Table_0_filter"><label>Search: <input type="text"
                                                                                                        aria-controls="DataTables_Table_0"></label>
                    </div>
                    <div
                        class="dataTables_paginate fg-buttonset ui-buttonset fg-buttonset-multi ui-buttonset-multi paging_full_numbers"
                        id="DataTables_Table_0_paginate"><a tabindex="0"
                                                            class="first ui-corner-tl ui-corner-bl fg-button ui-button ui-state-default ui-state-disabled"
                                                            id="DataTables_Table_0_first">First</a><a tabindex="0"
                                                                                                      class="previous fg-button ui-button ui-state-default ui-state-disabled"
                                                                                                      id="DataTables_Table_0_previous">Previous</a><span><a
                                tabindex="0" class="fg-button ui-button ui-state-default ui-state-disabled">1</a><a
                                tabindex="0" class="fg-button ui-button ui-state-default">2</a><a tabindex="0"
                                                                                                  class="fg-button ui-button ui-state-default">3</a><a
                                tabindex="0" class="fg-button ui-button ui-state-default">4</a><a tabindex="0"
                                                                                                  class="fg-button ui-button ui-state-default">5</a></span><a
                            tabindex="0" class="next fg-button ui-button ui-state-default"
                            id="DataTables_Table_0_next">Next</a><a tabindex="0"
                                                                    class="last ui-corner-tr ui-corner-br fg-button ui-button ui-state-default"
                                                                    id="DataTables_Table_0_last">Last</a></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script language="javascript">

    $(document).ready(function(){

        //添加产品
        $("#addCmsContent").click(function(){
            location.href="/console/cmscontent/add";
        });

    });


</script>