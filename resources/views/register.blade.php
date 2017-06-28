@extends('layout')

@section('content')
    <div class="content">

        <p>blalala</p>

        <form action="/register" method="post" id="add_user_form_pending">

            <h3>useradd</h3>
            <div class="alert" style="display:none;" id="message_reg"></div>


                <div class="form-group">
                    <label class="control-label" for="input05">帳號</label>
                    <div class="controls">
                        <input class="form-control" type="text" name="useradd" id="input05"/>
                        <span class="help-block">用來登入遊戲的帳號</span>
                    </div>
                </div>



                <div class="form-group">
                    <label class="control-label" for="input06">密碼</label>
                    <div class="controls">
                        <input class="form-control" type="password" name="passadd" id="input06"/>
                        <span class="help-block">用來登入遊戲的密碼，長度限制為 4~20</span>
                    </div>
                </div>



                <div class="form-group">
                    <label class="control-label" for="input11">E-mail</label>
                    <div class="controls">
                        <input class="form-control" type="text" name="email" id="input11"/>
                    </div>
                </div>



                <div class="form-group">
                    <label class="control-label" for="input07">暱稱</label>
                    <div class="controls">
                        <input class="form-control" type="text" name="nick" id="input07"/>
                    </div>
                </div>



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



                <div class="form-group">
                    <label class="control-label" for="input09">介紹人</label>
                    <div class="controls">
                        <input class="form-control" type="text" name="ref" id="input09"/>
                    </div>
                </div>



                <div class="form-group">
                    <label class="control-label" for="input10">自我介紹</label>
                    <div class="controls">
                        <textarea class="form-control" name="intro" id="intro" rows="4">
                        </textarea>
                    </div>
                </div>

                <div class="form-group">

                    <div class="form-action">
                        <button type="reset" class="btn btn-large">清除重填</button>
                        <button type="submit" class="btn btn-large btn-primary" id="submitAddUser">送出申請</button>
                    </div>
                </div>


        </form>


    </div>
@stop

@section('js')
    <script>
        $( function() {
            /* todo 接撈取玩家名稱的 api */
            var availableTags = [
                "馬克 (Mark)",
                "史地夫 (Steve)",
                "艾迪 (Eddie)",
                "強尼 (Johnny)",
                "凱 (Kay)",
                "測試",
                "test",
                "🙈",
                "🙈🙈",
                "🙈🙈🙈"
            ];
            $( "#input09" ).autocomplete({
                source: availableTags
            }).focus(function(){
                // The following works only once.
                // $(this).trigger('keydown.autocomplete');
                // As suggested by digitalPBK, works multiple times
                $(this).data("autocomplete").search($(this).val());
            });
        } );
    </script>
@stop