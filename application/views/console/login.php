<div id="logo">
    <img src="img/logo.png" alt=""/>
</div>
<div id="loginbox">
    <form id="loginform" class="form-vertical" action="/console/index"/>
    <p>请输入用户名密码登录系统.</p>

    <div class="control-group">
        <div class="controls">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-user"></i></span><input type="text" placeholder="用户名"/>
            </div>
        </div>
    </div>
    <div class="control-group">
        <div class="controls">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-lock"></i></span><input type="password" placeholder="密码"/>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <span class="pull-left"><a href="#" class="flip-link" id="to-recover">忘记密码?</a></span>
        <span class="pull-right"><input type="submit" class="btn btn-inverse" value="登录"/></span>
    </div>
    </form>
    <form id="recoverform" action="#" class="form-vertical"/>
    <p>Enter your e-mail address below and we will send you instructions how to recover a password.</p>

    <div class="control-group">
        <div class="controls">
            <div class="input-prepend">
                <span class="add-on"><i class="icon-envelope"></i></span><input type="text"
                                                                                placeholder="E-mail address"/>
            </div>
        </div>
    </div>
    <div class="form-actions">
        <span class="pull-left"><a href="#" class="flip-link" id="to-login">&lt; Back to login</a></span>
        <span class="pull-right"><input type="submit" class="btn btn-inverse" value="Recover"/></span>
    </div>
    </form>
</div>
<script src="/console/js/unicorn.login.js"></script>