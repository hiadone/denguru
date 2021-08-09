<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php $this->managelayout->add_css(element('view_skin_url', $layout) . '/css/style.css'); ?>



<?php $this->managelayout->add_css("/assets/css/common.css"); ?>

<?php echo element('headercontent', element('board', $view)); ?>

<div class="partners_write_container">	
	<h1 class="h_logo">
	    <a href="<?php echo site_url() ?>"><img src="/assets/images/logo-horizontal.svg" alt="댕구루 로고" class="logo"></a>
	</h1>
    <?php echo show_alert_message($this->session->flashdata('message'), '<div class="alert alert-auto-close alert-dismissible alert-info">', '</div>'); ?>
	<?php
	echo validation_errors('<div class="alert alert-warning" role="alert">', '</div>');
	echo show_alert_message(element('message', $view), '<div class="alert  alert-dismissible alert-info">', '</div>');
	$attributes = array('class' => 'form-horizontal', 'name' => 'fwrite', 'id' => 'fwrite', 'onsubmit' => 'return submitContents(this)');
	echo form_open_multipart(current_full_url(), $attributes);
	?>
		<input type="hidden" name="<?php echo element('primary_key', $view); ?>"	value="<?php echo element(element('primary_key', $view), element('post', $view)); ?>" />
		<div class="form-horizontal box-table">
			<?php if (element('is_post_name', element('post', $view)) && false) { ?>
				<div class="form-group">
					<label for="post_nickname" class="col-sm-2 control-label">이름</label>
					<div class="col-sm-10">
						<input type="text" class="form-control px150" name="post_nickname" id="post_nickname" value="<?php echo set_value('post_nickname', element('post_nickname', element('post', $view))); ?>" />
					</div>
				</div>
				<?php if ($this->member->is_member() === false) { ?>
					<div class="form-group">
						<label for="post_password" class="col-sm-2 control-label">비밀번호</label>
						<div class="col-sm-10">
							<input type="password" class="form-control px150" name="post_password" id="post_password" />
						</div>
					</div>
				<?php } ?>
				<div class="form-group">
					<label for="post_email" class="col-sm-2 control-label">이메일</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="post_email" id="post_email" value="<?php echo set_value('post_email', element('post_email', element('post', $view))); ?>" />
					</div>
				</div>
				<div class="form-group">
					<label for="post_homepage" class="col-sm-2 control-label">홈페이지</label>
					<div class="col-sm-10">
						<input type="text" class="form-control" name="post_homepage" id="post_homepage" value="<?php echo set_value('post_homepage', element('post_homepage', element('post', $view))); ?>" />
					</div>
				</div>
			<?php } ?>

			<div class="inp_box04">
                <div class="inp_txt_box">
                    <label for="post_title" class="lab_txt">회사명 <span class="emph_color_accent">*</span></label>
                    <input type="text" name="post_title" class="inp_txt js-input js-inp-required" name="post_title" id="post_title" label="회사명" value="<?php echo set_value('post_title', element('post_title', element('post', $view))); ?>">
                </div>
            </div>

			
			
			
			<?php
			if (element('extra_content', $view)) {
				foreach (element('extra_content', $view) as $key => $value) {
			?>
				<div class="inp_box04">
                	<div class="inp_txt_box">
						<label class="lab_txt" for="<?php echo element('field_name', $value); ?>"><?php echo element('display_name', $value); ?> <span class="emph_color_accent">*</span></label>
						<?php echo element('input', $value); ?>
					</div>
				</div>
			<?php
				}
			}
			?>

			<div class="inp_box02">
                <div class="lab_box">
                    <label for="post_content" class="lab">문의내용 <span class="emph_color_accent">*</span></label>
                </div>
                <div class="inp_box">
                    <textarea name="post_content" id="post_content" class="inp inp_textarea  js-inp-required" onkeydown="resizeTextarea(this)" onkeyup="resizeTextarea(this)" placeholder="문의내용을 상세히 적어주시면 더 정확한 응대가 가능합니다."><?php echo set_value('post_content', element('post_content', element('post', $view))); ?></textarea>
                </div>
            </div>

            <div class="inp_box04">
                <div class="inp_box02" style="margin-bottom: 8px;">
                    <div class="lab">
                        파일첨부 <span class="emph_color_accent">*</span>
                    </div>
                </div>
                <div class="inp_txt_box">
                    <div class="lab_txt">사업자등록증 첨부</div>
                    <div class="inp_txt js-filename"></div>
                    
                    <input type="file" name="post_file[0]" class="inp_txt js-input js-inp js-partners-file blind" id="post_file[0]">
                    <label for="post_file[0]" class="partners_btn btn_linkstyle btn_linkstyle_main btn_sm">
                        <!-- <img src="/assets/images/icon-file.svg" alt="파일첨부 버튼" class="icon"> -->
                        파일찾기
                    </label>
                </div>
                <!-- <div class="txt_right inp_message js-txt-limit">
                    최대용량 2MB 이내 파일만 등록하실 수 있습니다.
                </div> -->
            </div>
            <div class="inp_box04">
                <div class="inp_txt_box">
                    <div class="lab_txt">통신판매업증 첨부</div>
                    <div class="inp_txt js-filename"></div>
                    <!-- <input type="text" name="partnersFile" id="" class="inp_txt js-filename" readonly> -->
                    <input type="file" name="post_file[1]" class="inp_txt js-input js-inp js-partners-file blind" id="post_file[1]">
                    <label for="post_file[1]" class="partners_btn btn_linkstyle btn_linkstyle_main btn_sm">
                        <!-- <img src="/assets/images/icon-file.svg" alt="파일첨부 버튼" class="icon"> -->
                        파일찾기
                    </label>
                </div>
                <!-- <div class="txt_right inp_message js-txt-limit">
                    최대용량 2MB 이내 파일만 등록하실 수 있습니다.
                </div> -->
            </div>

			<div class="inp_box04" style="padding: 16px 0;">
                <input type="checkbox" name="agree" id="agree" hidden="" class="inp_check" checked="">
                <label for="agree" class="lab_checkbox01">개인정보 수집 및 이용 동의</label>
                <button class="partners_btn btn_sm btn_linkstyle btn_linkstyle_main" onclick="openPopup('popupAgree')">[내용보기]</button>
            </div>
			
			 <div class="btn_box">
                <button id="btnSubmit" type="submit" class="partners_btn btn_full btn_normal btn_disabled btn_right" >확인</button>
            </div>
			
		</div>
	<?php echo form_close(); ?>
</div>
<div class="popup_wrap" id="popupWrap" style="display: none;">
    <div class="popup_container_agree" id="popupAgree" style="display: none;">
        <div class="popup_content">
            <div class="popup_title01">
                광고제휴개인정보 처리방침
            </div>
            <div class="popup_title02">
                Ⅰ. 개인정보 처리방침 안내
            </div>
            <div class="popup_txt">
                <p>
                    개인정보 처리방침이란, 이용자의 소중한 개인정보를 보호함으로써 이용자가 안심하고 서비스를 이용할 수 있도록 댕구루(이하 ‘회사’)가 준수해야 할 지침을 의미합니다.
                </p>
                <p>
                    회사는 개인정보 처리방침의 작성, 게시, 이행과 관련하여, 정보통신서비스제공자가 준수하여야 하는 대한민국의 관계 법령 및 개인정보보호 규정, 가이드라인을 준수하고 있습니다.
                </p>
            </div>
            <div class="popup_title02">Ⅱ. 개인정보 처리방침 상세</div>
            <div class="popup_title03">1. 개인정보의 처리 목적</div>
            <div class="popup_txt">
                <p>
                    (필수정보) 광고 비즈니스 이행을 위한 안내 및 고객 관리 목적
                </p>
                <p>
                    회사는 광고 관련 정보전달을 위한 안내(광고 부킹 및 운영 관련 안내, 광고 상품 프로모션 안내, 고객 관리 등)를 위해 필요한 최소한의 개인정보를 수집하고 있습니다.
                </p>
            </div>
            <div class="popup_title03">
                2. 개인정보의 처리 및 보유 기간
            </div>
            <div class="popup_txt">
                <p>
                    이용자의 개인정보는 원칙적으로 개인정보의 수집 및 이용목적이 달성되면 지체 없이 파기합니다.
                </p>
                <p>
                    단, 다음의 정보에 대해서는 아래의 이유로 명시한 기간 동안 보존합니다.
                </p>
            </div>
            <div class="popup_txt">
                <p>
                    가. 회사 내부 방침에 의한 정보 보유 사유
                </p>
            </div>
            <div class="popup_table_container">
                <table class="popup_table">
                    <tbody>
                        <tr>
                            <th class="popup_th">보관 정보</th>
                            <th class="popup_th">보관 사유</th>
                            <th class="popup_th">보관 기간</th>
                        </tr>
                        <tr>
                            <td class="popup_td">
                                회사명, 사이트URL, 담당자이름, 연락처, 이메일, 사업자등록증, 통신판매업증, 고객센터번호 
                            </td>
                            <td class="popup_td">
                                스토어 사업자 식별, 서비스 이용계약의 체결, 사업자 자격유지,관리, 서비스부정이용 방지, 광고 부킹 및 운영 관련 안내,광고 상품 프로모션 안내, 이용고지 및 통지 연락 목적
                            </td>
                            <td class="popup_td">
                                이용계약 종료시까지. 단, 관계법령에 따라 또는 회사 정책에 따른 정보보유사유가 발생하여 보존할 필요가 있는 경우에는 필요한 기간동안 해당 판매자 정보를 보관합니다.
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="popup_title03">3. 정보주체의 권리, 의무 및 그 행사방법에 관한 사항</div>
            <div class="popup_txt">
                <p>
                    가. 이용자 및 법정대리인은 등록되어 있는 이용자 본인의 개인정보와 관련하여, 언제든지 개인정보 열람/정정·삭제/처리정지/동의 철회를 요청할 수 있습니다.
                </p>
                <p>
                    (요청: partner@denguru.kr)
                </p>
                <p>
                    나. 개인정보의 오류에 대한 정정을 요청하신 경우 정정을 완료하기 전까지 해당 개인정보를 이용하지 않습니다.
                </p>
                <p>
                    다. 회사는 다음에 해당하는 경우에는 개인정보의 전부 또는 일부에 대하여 열람/ 정정·삭제를 거절할 수 있습니다.
                </p>
                <p>
                    - 법률에 따라 열람이 금지되거나 제한되는 경우
                </p>
                <p>
                    - 다른 사람의 생명·신체를 해할 우려가 있거나 다른 사람의 재산과 그 밖의 이익을 부당하게 침해할 우려가 있는 경우
                </p>
                <p>
                    라. 이용자가 개인정보의 오류에 대한 정정을 요청하신 경우에는 정정을 완료하기 전까지 당해 개인정보를 이용 또는 제3자에게 제공하지 않습니다.
                </p>
                <p>
                    마. 또한 잘못된 개인정보를 제3자에게 이미 제공한 경우에는 정정 처리결과를 제3자에게 지체없이 통지하겠습니다.
                </p>
                <p>
                    바. 이용자의 개인정보를 최신의 상태로 정확하게 입력하여 주시기 바랍니다. 이용자가 입력한 부정확한 정보로 인해 발생하는 사고의 책임은 이용자 자신에게 있습니다.
                </p>
                <p>
                    사. 이용자는 개인정보를 보호 받을 권리와 함께 스스로를 보호하고 타인의 정보를 침해하지 않을 의무도 가지고 있습니다.
                </p>
                <p>
                    이용자의 개인정보가 유출되지 않도록 조심하시고 타인의 개인정보를 훼손하지 않도록 유의해 주십시오.
                </p>
                <p>
                    만약 이 같은 책임을 다하지 못하고 타인의 정보 및 존엄성을 훼손할 시에는 「정보통신망 이용촉진 및 정보보호 등에 관한 법률」 등에 의해 처벌 받을 수 있습니다.
                </p>
            </div>
        </div>
        <div class="popup_btn_box">
            <button type="button" class="btn_close btn_main" onclick="closePopup('popupAgree')">닫 기</button>
        </div>
    </div>
</div>
<?php echo element('footercontent', element('board', $view)); ?>

<script type="text/javascript">
//<![CDATA[
$(function() {
	$('#fwrite').validate({
		rules: {
			post_title: {required :true, minlength:2, maxlength:60},
			val_1: {required :true, minlength:2, maxlength:60},
			val_2: {required :true, minlength:2, maxlength:60},
			val_3: {required :true, minlength:2, maxlength:60},
			hompage: {required :true, minlength:2, maxlength:60},
			post_content : {<?php echo (element('use_dhtml', element('board', $view))) ? 'required_' . $this->cbconfig->item('post_editor_type') : 'required'; ?> : true }
		}
	});
});

<?php if (element('has_tempsave', $view)) { ?>get_tempsave(cb_board); <?php } ?>
<?php if ( ! element('post_id', element('post', $view))) { ?>window.onbeforeunload = function () { auto_tempsave(cb_board); } <?php } ?>
//]]>
</script>

<script>

	function submitContents(f) {
		
	}
        //textarea 사이즈 자동조절
        function resizeTextarea(obj) {
            obj.style.height = "1px";
            obj.style.height = (8+obj.scrollHeight)+"px";
        }
        
        $('.js-partners-file').each(function(){
            $(this).on('change',function(){
                var fileurl = $(this).val();
                var filename = fileurl.substring(fileurl.lastIndexOf('\\')+1, fileurl.length);
                var $boxFilename = $(this).prev('.js-filename');

                $boxFilename.text(filename);
            })
        });
        
        var $btnSubmit = $('#btnSubmit');

        var BTN_MAIN = 'btn_main';
        var BTN_DISABLED = 'btn_disabled';
        var BTN_NORMAL = 'btn_normal';

        function handleBtnActive(){
            $btnSubmit.removeClass(BTN_DISABLED);
            $btnSubmit.removeClass(BTN_NORMAL);
            $btnSubmit.addClass(BTN_MAIN);
            $btnSubmit.attr('disabled',false);
        }
        function handleBtnDisabled(){
            $btnSubmit.removeClass(BTN_MAIN);
            $btnSubmit.addClass(BTN_DISABLED);
            $btnSubmit.addClass(BTN_NORMAL);
            $btnSubmit.attr('disabled',true);
        }

        // 폼 입력시 버튼 활성화, 비활성화
        $('#fwrite').on('change', function(){
            var flag = false;

            $('.js-inp-required').each(function(){
                if(!jQuery.trim($(this).val())){
                    flag = false;
                    return false;
                } else {
                    flag = true;
                }

                if (!flag) return false;

                if($('#agree').is(":checked")) {
                    return flag;
                } else {
                    flag = false;
                    return flag;
                }

            });

            if(flag) {
                handleBtnActive();
            } else {
                handleBtnDisabled();
            }
        });

        // popup
        function openPopup(el){
            event.preventDefault();
            $('#popupWrap').show();
            $('#'+ el).show();
        }
        function closePopup(el){
            event.preventDefault();
            $('#popupWrap').hide();
            $('#'+ el).hide();
        }
    </script>
