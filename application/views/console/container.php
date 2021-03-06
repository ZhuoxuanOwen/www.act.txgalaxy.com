
<div id="header">
    <h1><a href="./dashboard.html">网站后台管理</a></h1>
</div>

<div id="search">
    <input type="text" placeholder="Search here..." /><button type="submit" class="tip-right" title="Search"><i class="icon-search icon-white"></i></button>
</div>
<div id="user-nav" class="navbar navbar-inverse">
    <ul class="nav btn-group">
        <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-user"></i> <span class="text">Profile</span></a></li>
        <li class="btn btn-inverse dropdown" id="menu-messages"><a href="#" data-toggle="dropdown" data-target="#menu-messages" class="dropdown-toggle"><i class="icon icon-envelope"></i> <span class="text">Messages</span> <span class="label label-important">5</span> <b class="caret"></b></a>
            <ul class="dropdown-menu">
                <li><a class="sAdd" title="" href="#">new message</a></li>
                <li><a class="sInbox" title="" href="#">inbox</a></li>
                <li><a class="sOutbox" title="" href="#">outbox</a></li>
                <li><a class="sTrash" title="" href="#">trash</a></li>
            </ul>
        </li>
        <li class="btn btn-inverse"><a title="" href="#"><i class="icon icon-cog"></i> <span class="text">Settings</span></a></li>
        <li class="btn btn-inverse"><a title="" href="login.html"><i class="icon icon-share-alt"></i> <span class="text">Logout</span></a></li>
    </ul>
</div>

<div id="sidebar">
    <a href="#" class="visible-phone"><i class="icon icon-home"></i>  Dashboard</a>
    <ul>
        <li class="active"><a href="index.html"><i class="icon icon-home"></i> <span>Dashboard</span></a></li>
        <li class="submenu">
            <a href="#"><i class="icon icon-th-list"></i> <span>产品管理</span> <span class="label">3</span></a>
            <ul>
                <li><a href="/console/product">产品列表</a></li>
                <li><a href="/console/product/add">添加产品</a></li>
                <li><a href="form-wizard.html">Wizard</a></li>
            </ul>
        </li>
        <li class="submenu">
            <a href="#"><i class="icon icon-file"></i> <span>页面内容管理</span> <span class="label">3</span></a>
            <ul>
                <li><a href="/console/cmscontent">内容列表</a></li>
                <li><a href="/console/cmscontent/add">添加内容块</a></li>
            </ul>
        </li>
        <li><a href="buttons.html"><i class="icon icon-tint"></i> <span>Buttons &amp; icons</span></a></li>
        <li><a href="interface.html"><i class="icon icon-pencil"></i> <span>Interface elements</span></a></li>
        <li><a href="tables.html"><i class="icon icon-th"></i> <span>Tables</span></a></li>
        <li><a href="grid.html"><i class="icon icon-th-list"></i> <span>Grid Layout</span></a></li>
        <li class="submenu">
            <a href="#"><i class="icon icon-file"></i> <span>Sample pages</span> <span class="label">4</span></a>
            <ul>
                <li><a href="invoice.html">Invoice</a></li>
                <li><a href="chat.html">Support chat</a></li>
                <li><a href="calendar.html">Calendar</a></li>
                <li><a href="gallery.html">Gallery</a></li>
            </ul>
        </li>
        <li>
            <a href="charts.html"><i class="icon icon-signal"></i> <span>Charts &amp; graphs</span></a>
        </li>
        <li>
            <a href="widgets.html"><i class="icon icon-inbox"></i> <span>Widgets</span></a>
        </li>
    </ul>

</div>

<div id="style-switcher">
    <i class="icon-arrow-left icon-white"></i>
    <span>Style:</span>
    <a href="#grey" style="background-color: #555555;border-color: #aaaaaa;"></a>
    <a href="#blue" style="background-color: #2D2F57;"></a>
    <a href="#red" style="background-color: #673232;"></a>
</div>

<div id="content">

    <div id="breadcrumb">
        <a href="#" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a>
        <a href="#" class="current">Dashboard</a>
    </div>

    <?php Zwidget::zshow('page-container'); ?>

</div>
