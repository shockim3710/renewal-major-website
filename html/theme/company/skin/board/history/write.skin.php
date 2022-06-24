<?
if (!defined("_GNUBOARD_")) exit; // 개별 페이지 접근 불가
?>
<link rel="stylesheet" href="<?php echo $board_skin_url ?>/style.css">

<? include_once $board_skin_path."/board_head.skin.php"; ?>
<section id="bo_w" class="widthfix">

<!-- 게시물 작성/수정 시작 { -->
<form name="fwrite" id="fwrite" action="<?php echo $action_url ?>" onsubmit="return fwrite_submit(this);" method="post" enctype="multipart/form-data" autocomplete="off" style="width:<?php echo $width; ?>">
<input type="hidden" name="uid" value="<?php echo get_uniqid(); ?>">
<input type="hidden" name="w" value="<?php echo $w ?>">
<input type="hidden" name="bo_table" value="<?php echo $bo_table ?>">
<input type="hidden" name="wr_id" value="<?php echo $wr_id ?>">
<input type="hidden" name="sca" value="<?php echo $sca ?>">
<input type="hidden" name="sfl" value="<?php echo $sfl ?>">
<input type="hidden" name="stx" value="<?php echo $stx ?>">
<input type="hidden" name="spt" value="<?php echo $spt ?>">
<input type="hidden" name="sst" value="<?php echo $sst ?>">
<input type="hidden" name="sod" value="<?php echo $sod ?>">
<input type="hidden" name="page" value="<?php echo $page ?>">
<div class="tbl_frm01 tbl_wrap">
<table id="bo_w" class="frm_tbl">
<tbody>
<?php if ($is_name) { ?>
<tr>
    <th scope="row"><label for="wr_name">이름<strong class="sound_only">필수</strong></label></th>
    <td><input type="text" name="wr_name" value="<?php echo $name ?>" id="wr_name" required class="frm_input required" size="10" maxlength="20"></td>
</tr>
<?php } ?>

<?php if ($is_password) { ?>
<tr>
    <th scope="row"><label for="wr_password">패스워드<strong class="sound_only">필수</strong></label></th>
    <td><input type="password" name="wr_password" id="wr_password" <?php echo $password_required ?> class="frm_input <?php echo $password_required ?>" maxlength="20"></td>
</tr>
<?php } ?>

<?php if ($is_email) { ?>
<tr>
    <th scope="row"><label for="wr_email">이메일</label></th>
    <td><input type="text" name="wr_email" value="<?php echo $email ?>" id="wr_email" class="frm_input email" size="50" maxlength="100"></td>
</tr>
<?php } ?>

<?php if ($is_homepage) { ?>
<tr>
    <th scope="row"><label for="wr_homepage">홈페이지</label></th>
    <td><input type="text" name="wr_homepage" value="<?php echo $homepage ?>" id="wr_homepage" class="frm_input" size="50"></td>
</tr>
<?php } ?>

<?php
$option = '';
$option_hidden = '';
if ($is_notice || $is_html || $is_secret || $is_mail) {
    $option = '';
    if ($is_notice) {
        $option .= "\n".'<input type="checkbox" id="notice" name="notice" value="1" '.$notice_checked.'>'."\n".'<label for="notice">공지</label>';
    }

    if ($is_html) {
        if ($is_dhtml_editor) {
            $option_hidden .= '<input type="hidden" value="html1" name="html">';
        } else {
            $option .= "\n".'<input type="checkbox" id="html" name="html" onclick="html_auto_br(this);" value="'.$html_value.'" '.$html_checked.'>'."\n".'<label for="html">html</label>';
        }
    }

    if ($is_secret) {
        if ($is_admin || $is_secret==1) {
            $option .= "\n".'<input type="checkbox" id="secret" name="secret" value="secret" '.$secret_checked.'>'."\n".'<label for="secret">비밀글</label>';
        } else {
            $option_hidden .= '<input type="hidden" name="secret" value="secret">';
        }
    }

    if ($is_mail) {
        $option .= "\n".'<input type="checkbox" id="mail" name="mail" value="mail" '.$recv_email_checked.'>'."\n".'<label for="mail">답변메일받기</label>';
    }
}

echo $option_hidden;
?>
<?php if ($option) { ?>
<tr>
    <th scope="row">옵션</th>
    <td class="td_not_input"><?php echo $option ?></td>
</tr>
<?php } ?>

<?php if ($is_category) { ?>
<tr>
    <th scope="row"><label for="ca_name">분류<strong class="sound_only">필수</strong></label></th>
    <td>
        <select name="ca_name" id="ca_name" required class="required" >
            <option value="">선택하세요</option>
            <?php echo $category_option ?>
        </select>
    </td>
</tr>
<?php } ?>

<tr>
    <th scope="row">연 도</th>
    <td>
		<select name=wr_subject required itemname="연도" class="frm_input">
			<? for($years=$board[bo_1];$years<=$board[bo_2];$years++) { ?>
			<option value="<?=$years?>" <?=$subject==$years ? "selected" : "" ?> ><?=$years?></option>
			<? } ?>
		</select> 년
	</td>
</tr>

<tr>
    <th scope="row">월 일</th>
    <td>
		<select name=wr_1 required itemname="월" class="frm_input">
			<? for($mth=1;$mth<=12;$mth++) {
				$mth=sprintf("%02d",$mth);
			?>
			<option value="<?=$mth?>" <?=$write[wr_1]==$mth ? "selected" : "" ?> ><?=$mth?></option>
			<? } ?>
		</select> 월
		<select name=wr_2 required itemname="일" class="frm_input">
			<? for($dt=1;$dt<=31;$dt++) {
				$dt=sprintf("%02d",$dt);
			?>
			<option value="<?=$dt?>" <?=$write[wr_2]==$dt ? "selected" : "" ?>><?=$dt?></option>
			<? } ?>
		</select> 일
	</td>
</tr>


<tr>
    <th scope="row"><label for="wr_content">내용<strong class="sound_only">필수</strong></label></th>
    <td class="wr_content"><?php echo $editor_html; // 에디터 사용시는 에디터로, 아니면 textarea 로 노출  ?></td>
</tr>


<? if ($is_link) { ?>
<? for ($i=1; $i<=$g5[link_count]; $i++) { ?>
<tr style="display:none">
    <th scope="row">링크 #<?=$i?></td>
    <td><input type='text' class='ed' size=50 name='wr_link<?=$i?>' itemname='링크 #<?=$i?>' value='<?=$write["wr_link{$i}"]?>'></td>
</tr>
<? } ?>
<? } ?>

<?php for ($i=1; $is_link && $i<=G5_LINK_COUNT; $i++) { ?>
<tr>
    <th scope="row"><label for="wr_link<?php echo $i ?>">링크 #<?php echo $i ?></label></th>
    <td><input type="text" name="wr_link<?php echo $i ?>" value="<?php if($w=="u"){echo$write['wr_link'.$i];} ?>" id="wr_link<?php echo $i ?>" class="frm_input" size="50"></td>
</tr>
<?php } ?>

<?php for ($i=0; $is_file && $i<$file_count; $i++) { ?>
<tr>
    <th scope="row">파일 #<?php echo $i+1 ?></th>
    <td>
        <input type="file" name="bf_file[]" title="파일첨부 <?php echo $i+1 ?> :  용량 <?php echo $upload_max_filesize ?> 이하만 업로드 가능" class="frm_file">
        <?php if ($is_file_content) { ?>
        <input type="text" name="bf_content[]" value="<?php echo $file[$i]['bf_content'];  ?>" title="파일 설명을 입력해주세요." class="frm_input" size="50">
        <?php } ?>
        <?php if($w == 'u' && $file[$i]['file']) { ?>
        <input type="checkbox" id="bf_file_del<?php echo $i ?>" name="bf_file_del[<?php echo $i;  ?>]" value="1"> <label for="bf_file_del<?php echo $i ?>"><?php echo $file[$i]['source'].'('.$file[$i]['size'].')';  ?> 파일 삭제</label>
        <?php } ?>
    </td>
</tr>
<?php } ?>

<?php if ($is_guest) { //자동등록방지  ?>
<tr>
    <th scope="row">자동등록방지</th>
    <td>
        <?php echo $captcha_html ?>
    </td>
</tr>
<?php } ?>

</tbody>
</table>
</div>
<div class="btn_confirm">
    <input type="submit" value="글쓰기" id="btn_submit" accesskey="s" class="btn_submit">
    <a href="./board.php?bo_table=<?php echo $bo_table ?>" class="btn_cancel">취소</a>
</div>

</form>

<script>
function html_auto_br(obj)
{
    if (obj.checked) {
        result = confirm("자동 줄바꿈을 하시겠습니까?\n\n자동 줄바꿈은 게시물 내용중 줄바뀐 곳을<br>태그로 변환하는 기능입니다.");
        if (result)
            obj.value = "html2";
        else
            obj.value = "html1";
    }
    else
        obj.value = "";
}

function fwrite_submit(f)
{
    <?php echo $editor_js; // 에디터 사용시 자바스크립트에서 내용을 폼필드로 넣어주며 내용이 입력되었는지 검사함   ?>

    var subject = "";
    var content = "";
    $.ajax({
        url: G5_bbs_url+"/ajax.filter.php",
        type: "POST",
        data: {
            "subject": f.wr_subject.value,
            "content": f.wr_content.value
        },
        dataType: "json",
        async: false,
        cache: false,
        success: function(data, textStatus) {
            subject = data.subject;
            content = data.content;
        }
    });

    if (subject) {
        alert("제목에 금지단어('"+subject+"')가 포함되어있습니다");
        f.wr_subject.focus();
        return false;
    }

    if (content) {
        alert("내용에 금지단어('"+content+"')가 포함되어있습니다");
        if (typeof(ed_wr_content) != "undefined")
            ed_wr_content.returnFalse();
        else
            f.wr_content.focus();
        return false;
    }

    <?php echo $captcha_js; // 캡챠 사용시 자바스크립트에서 입력된 캡챠를 검사함  ?>

    document.getElementById("btn_submit").disabled = "disabled";

    return true;
}
</script>
<!-- } 게시물 작성/수정 끝 -->
