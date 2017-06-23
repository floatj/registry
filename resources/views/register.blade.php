@extends('layout')

@section('content')
    <div class="content">

        <h1>註冊帳號</h1>
        <p>請先於下方表單填寫申請表，OP 審核後會將結果寄送至您所填寫之信箱。<br/>
            遊戲帳號與網站帳號通用。</p>
        <p>請<span style="color:red">確保填寫了正確的信箱</span>，若過久都沒有收到回應，請檢查垃圾信件夾。<br/>
            也請認真填寫自我介紹，若 OP 認為過於簡略將會退回申請。</p>
        <p>雪服總司令部感謝您的配合，並祝您遊玩愉快！</p>

        <form class="form-horizontal" action="/register" method="post" id="add_user_form_pending">

            <h3>useradd</h3>
            <div class="alert" style="display:none;" id="message_reg"></div>

            <div class="row">
                <div class="form-group">
                    <label class="control-label" for="input05">帳號</label>
                    <div class="controls">
                        <input class="form-control" type="text" name="useradd" id="input05"/>
                        <span class="help-block">用來登入遊戲的帳號</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label class="control-label" for="input06">密碼</label>
                    <div class="controls">
                        <input class="form-control" type="password" name="passadd" id="input06"/>
                        <span class="help-block">用來登入遊戲的密碼，長度限制為 4~20</span>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label class="control-label" for="input11">E-mail</label>
                    <div class="controls">
                        <input class="form-control" type="text" name="email" id="input11"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label class="control-label" for="input07">暱稱</label>
                    <div class="controls">
                        <input class="form-control" type="text" name="nick" id="input07"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label class="control-label" for="input08">BBS ID</label>
                    <div class="controls">
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                我有 BBS ID：
                            </label>
                            <div class="controls">
                                <input class="form-control" type="text" name="bbs" id="input08"/>
                            </div>
                        </div>
                        <br/>
                        <div class="radio">
                            <label>
                                <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                                我沒有 BBS ID。
                            </label>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label class="control-label" for="input09">介紹人</label>
                    <div class="controls">
                        <input class="form-control" type="text" name="ref" id="input09"/>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">
                    <label class="control-label" for="input10">自我介紹</label>
                    <div class="controls">
                        <textarea class="form-control" name="intro" id="intro">
                        </textarea>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="form-group">

                    <div class="form-action">
                        <button type="reset" class="btn btn-large">清除重填</button>
                        <button type="submit" class="btn btn-large btn-primary" id="submitAddUser">送出申請</button>
                    </div>
                </div>

            </div>

        </form>


    </div>
@stop