<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>


<?php 
if ( ! element('error_message', $view) && ! element('success_message', $view)) {
 ?>
<div class="wrap">
    <div class="main">
        <div class="members_join_form">
            <div class="newpw_title title02" style="margin-bottom: 24px;">
                <a href="<?php echo site_url() ?>"><img src="/assets/images/logo-horizontal.svg" alt="댕구루로고" class="img_logo" style="height: 36px; vertical-align: middle; margin: 0 4px 4px 0;"></a>
                비밀번호 재설정
            </div>
            <?php
			echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
			// echo show_alert_message(element('error_message', $view), '<div class="alert alert-dismissible alert-warning">', '</div>');
			// echo show_alert_message(element('success_message', $view), '<div class="alert alert-dismissible alert-info">', '</div>');
			
				echo show_alert_message(element('info', $view), '<div class="alert alert-info">', '</div>');
				$attributes = array('class' => 'form-horizontal', 'name' => 'fresetpw', 'id' => 'fresetpw');
				echo form_open(current_full_url(), $attributes);				
			?>			
            
                <div class="join_form_txt_container">
                    <div class="inp_box04">
                        <div class="inp_txt_box">
                            <label for="joinEmail" class="lab_txt">이메일</label>
                            <input type="email" class="inp_txt js-input" id="joinEmail" value="<?php echo element('mem_email', $view); ?>" label="이메일" readonly="">
                        </div>
                        <div class="txt_right inp_message"></div>
                    </div>
                    <div class="inp_box04">
                        <div class="inp_txt_box">
                            <label for="new_password" class="lab_txt">새 비밀번호</label>
                            <input type="password" class="inp_txt js-input" id="new_password" name="new_password" label="새 비밀번호">
                            <!-- <button type="button" class="btn_inp_txt btn_linkstyle js-btn-password-toggle"><img src="/assets/images/icon-eye.svg" alt="" class="icon"></button> -->
                        </div>                        
                        <div class="txt_right inp_message">
                            새 비밀번호를 입력해주세요
                        </div>
                    </div>
                    <div class="inp_box04">
                        <div class="inp_txt_box">
                            <label for="new_password_re" class="lab_txt">새 비밀번호 확인</label>
                            <input type="password" class="inp_txt js-input" id="new_password_re" name="new_password_re" label="새 비밀번호 확인" >
                            <!-- <button type="button" class="btn_inp_txt btn_linkstyle js-btn-password-toggle"><img src="/assets/images/icon-eye.svg" alt="" class="icon"></button> -->
                        </div>
                        <div class="txt_right inp_message">
                            새 비밀번호를 다시 입력해주세요
                        </div>
                    </div>
                    <div class="btn_box btn_join_success">
                        <button id="btnJoinSubmit" type="submit" class="btn btn_full btn_main" >수정완료</button>
                    </div>
                </div>
            <?php
				echo form_close();
			?>
        </div>
    </div>
</div>
<?php  } elseif (element('error_message', $view)) {?>
<div class="wrap">
    <header class="header06">
        <h1 class="h_logo_box"><img src="/assets/images/logo-horizontal.svg" alt="DENGURU 로고" class="h_logo"></h1>
    </header>
    <div class="main">
        <div class="mail_complete_container">
            <div>
                <div class="img_motion_box">
                    <img src="/assets/images/icon-warn.svg" alt="" class="img">
                </div>
                <div class="mail_complete_txt01">
                    <?php echo element('error_message', $view) ?>
                </div>
                <div class="mail_complete_txt02">
                	<?php echo element('error_message_detail', $view) ?>
                    
                </div>
                <div class="mail_complete_txt02">
                    문의사항 : <a href="mailto:support@denguru.kr" class="emph_color_primary">support@denguru.kr</a>
                </div>
               
            </div>
        </div>
    </div>
</div>

<?php  } elseif (element('success_message', $view)) {?>
<div class="wrap">
    <header class="header06">
        <h1 class="h_logo_box"><img src="/assets/images/logo-horizontal.svg" alt="DENGURU 로고" class="h_logo"></h1>
    </header>
    <div class="main">
        <div class="mail_complete_container">
            <div>
                <div class="img_motion_box">
                    <img src="/assets/images/icon-success.png" alt="" class="img">
                </div>
                <div class="mail_complete_txt01">
                	<?php echo element('success_message', $view) ?>				                    
                </div>
                <div class="btn_box">
                    <a href="#" class="btn btn_accent btn_mail_success">확 인</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>

<script type="text/javascript">
//<![CDATA[
$(function() {
	$('#fresetpw').validate({
		rules: {
			new_password : { required:true, minlength:<?php echo element('password_length', $view); ?> },
			new_password_re : { required:true, minlength:<?php echo element('password_length', $view); ?>, equalTo : '#new_password' },
		}
	});
});
//]]>
</script>
