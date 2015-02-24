function lookup(by,value,ai)
{
    if (value ==''){
        alert('不能为空！');
        $('#find').focus();
        return false;
    }
    window.location = '/monsterinfo/data/'+ by +'/' + value + '/ai/' + ai ;
    return true;
}
$(document).ready(function(e){
    $('#find').css('color','#CDCDCD');
});
$('#find').focus(function(){
    $(this).val('');
    $(this).css('color','black');
});
$('#find').blur(function(){
    if(!$(this).val()){
        $(this).val('请输入ID或名称');
        $(this).css('color','#CDCDCD');
        }
});
$('#search').click(function(){
    if($('#find').val()=='请输入ID或名称'){
        $('#find').val('');
        }
    lookup('auto', $('#find').val(), ($('#ai').prop('checked')?'1':'0') ); 
});
$('a.star').click(function(e){
    $(this)[0].href += '/ai/' + ($('#ai').prop('checked')?'1':'0');
    return true;
});